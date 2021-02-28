@extends('layouts.dashboard')

@section('content')

<div class="container-fluid">
<div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-sm-6">
                                </div>
                                <div class="col-sm-6">
                                    <!-- <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="{{url('/dashboard/products')}}">Products</a></li>
                                    </ol> -->
                                </div>
                            </div> <!-- end row -->
                        </div>
<div class="row">
            <div class="col-lg-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Liste des produits</h4>
                        </p>
<div class="clothes_main section ">
          <div class="container">
            <div class="row">
            @foreach($list_products as $product)
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                  <div class="sport_product">
                    <figure><img src="{{$product->images[0]->src}}"/></figure>
                    <h3> $<strong class="price_text">{{$product->price}}</strong></h3>
                    <h4><a href="{{url('/dashboard/products/show/'.$product->id.'')}}">{{$product->name}}</a> </h4><br>
                    <div clas="row">
                    <a class="btn btn-info offset-1" href="{{url('/dashboard/products/update/'.$product->id.'')}}">Modifier produit</a>
                    <form class="offset-1" action="{{url('/dashboard/products/delete')}}" method="post">
                                                @csrf
                                                {{method_field('DELETE')}}
                                                    <button class="btn btn-danger" type="submit" name="id" value="{{$product->id}}">Supprimer produit</button>
                                                </form>
</div>
</div>
</div>
@endforeach
</div>
</div>
</div><br>
<span class="clearfix  mt-3">
                            <a class="btn btn-info" href="{{url('/dashboard/products/excel')}}">Exporter la liste des fichiers</a>
                        </span>



            </div> <!-- end col -->
        </div>
</div>
@include('dashboard.products.upload')
@endsection