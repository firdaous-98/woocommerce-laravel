@extends('layouts.dashboard')

@section('content')

<div class="container">
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-sm-6">
            
        </div>
    </div> <!-- end row -->
</div>
        <div class="card" style="width: 30rem; float:right;">
        <div class="card-body">
            <figure align="center"><img src="{{$product->images[0]->src}}" style="height: 300px; width: 300px;"/></figure>
            <br><p align="center" class="card-text">
                {{$product->name}}
            </p>
        </div>
        </div>


        <div class="card" style="width: 30rem; display:inline-block;">
        <div class="card-body">
            <h5 class="card-title">ID</h5><p class="card-text">
                {{$product->id}}
            </p>
            
        </div>
        </div>
        <div class="card" style="width: 30rem; display:inline-block;">
        <div class="card-body">
            <h5 class="card-title">Prix</h5><p class="card-text">
              $  {{$product->regular_price}}
            </p>
        </div>
        </div>
        <div class="card" style="width: 30rem; display:inline-block;">
        <div class="card-body">
            <h5 class="card-title">Promotion</h5><p class="card-text">
                @if($product->on_sale) Oui @else Non @endif
            </p>
        </div>
        </div>
        <div class="card" style="width: 30rem; display:inline-block;">
        <div class="card-body">
            <h5 class="card-title">Catégories</h5><p class="card-text">
                @foreach($product->categories as $category)
                    <span> {{$category->name}}</span> |
                @endforeach
            </p>
        </div>
        </div>
        <div class="card" style="width: 30rem; display:inline-block;">
        <div class="card-body">
            <h5 class="card-title">Description du produit</h5><p class="card-text">
                {{$product->description}}
            </p>
        </div>
        </div>
        
        


@endsection