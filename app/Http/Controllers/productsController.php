<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ConnectionController;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;

class productsController extends Controller
{
    protected $woocommerce ; 

    public function __construct(){
        $Cnx = new ConnectionController();
        $this->woocommerce = $Cnx->woocommerce;
    }

    // Getting All products
    public function list(){
        //dd($this->woocommerce->get("products"));
        $data = [
            'list_products' => $this->woocommerce->get("products", array('per_page'=>100,'page'=>1)),
        ];
        return view('dashboard.products.list')->with($data);
    }

    // Getting one product
    public function show($id){
        $data = [
            'product' => $this->woocommerce->get("products/".$id),
        ];
        return view('dashboard.products.show')->with($data);
    }

    // Updating Product
    public function update($id){
        $data = [
            'product' => $this->woocommerce->get("products/".$id),
        ];
        return view('dashboard.products.update')->with($data);
    }

    // Modifying Product
    public function modify(Request $request){
        $this->woocommerce->put("products/".$request->id , $request->all());
        return redirect('/dashboard/products');
    }

    // Deleting Product
    public function delete(Request $request){
        $this->woocommerce->delete("products/".$request->id);
        return redirect()->back();
    }

    // Create Product
    public function create(){
        $data = [
            'list_categories' => $this->woocommerce->get("products/categories"),
        ];
        return view('dashboard.products.create')->with($data);
    }

    // Add Product
    public function add(Request $request){
       
        $this->woocommerce->post("products",$request->all());
        return redirect('/dashboard/products');
    }

    public  function  upload_products(Request  $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls,csv|max:8192',
        ]);

        $rows = Excel::toArray(new UsersImport,$request['file']);

        foreach ($rows as $row)
        {
            foreach ($row as $line) {
//dd(strval($line['regular_price']));
                $newProductData = array(


                    'name' => $line['name'],
                    'description' => $line['description'],
                    'short_description' => $line['short_description'],
                    'sale_price' => strval($line['regular_price']),
                    'regular_price' => strval($line['regular_price']),
                    //   'images' => [['src' => "http://localhost:8060/".$icon_path],]
                );
                $this->woocommerce->post("products", $newProductData);
            }  }


        return back();
    }


    public function excel(Request $request){

            $list_products = $this->woocommerce->get("products", array('per_page'=>100,'page'=>1));

        $file[]=array('id','product','price','regular price','on Sale');
        foreach ($list_products as $product)
        {
            $file[]=array(
                'id'=>$product->id,
                'product'=>$product->name,
                'price'=>$product->price,
                'regular price'=>$product->regular_price,
                'On Sale'=>$product->on_sale

            );
        }

        return Excel::download(new productInvoices($file),'product_data.xlsx');

    }
    private function IconUploadPost(string $product_id,Request $request)
    {

        $ext=$request->product_Icon->extension();
        $IconName = $product_id.'-'.time().'.'.$ext;
        $request['product_Icon']->move(public_path('productIcons'), $IconName);
        $iconpath='productIcons'."/".$IconName;



        return $iconpath;

    }
}
