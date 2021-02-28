<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ConnectionController;
use Illuminate\Http\Request;

class customersController extends Controller
{
    protected $woocommerce ; 

    public function __construct(){
        $Cnx = new ConnectionController();
        $this->woocommerce = $Cnx->woocommerce;
    }

    // Getting All customers
    public function list(){
        $data = [
            'list_customers' => $this->woocommerce->get("customers"),
        ];
        return view('dashboard.customers.list')->with($data);
    }

    // Getting one customer
    public function show($id){
        $data = [
            'customer' => $this->woocommerce->get("customers/".$id),
        ];
        return view('dashboard.customers.show')->with($data);
    }

    // Updating customer
    public function update($id){
        $data = [
            'customer' => $this->woocommerce->get("customers/".$id),
        ];
        return view('dashboard.customers.update')->with($data);
    }

    // Modifying customer
    public function modify(Request $request){
        $this->woocommerce->put("customers/".$request->id , $request->all());
        return redirect('/dashboard/customers');
    }

    // Deleting customer
    public function delete(Request $request){
        $this->woocommerce->delete("customers/".$request->id, ['force' => true]);
        return redirect()->back();
    }

    // Create customer
    public function create(){
        return view('dashboard.customers.create');
    }

    // Add customer
    public function add(Request $request){
       
        $this->woocommerce->post("customers",$request->all());
        return redirect('/dashboard/customers');
    }

    public function excel(Request $request){

        $list_customers = $this->woocommerce->get("customers", array('per_page'=>100,'page'=>1));

        $file[]=array('id','email','first_name','last_name','username');
        foreach ($list_customers as $customer)
        {
            $file[]=array(
                'id'=>$customer->id,
                'email'=>$customer->email,
                'first_name'=>$customer->first_name,
                'last_name price'=>$customer->last_name,
                'username'=>$customer->username

            );
        }

        return Excel::download(new CustomerInvoices($file),'customer_data.xlsx');

    }
}
