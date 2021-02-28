@extends('layouts.dashboard')

@section('content')

<div class="container">
<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">
                <form action="{{url('/dashboard/products/add')}}" method="post">
                    @csrf

                    <h4 class="mt-0 header-title">Details du produit</h4><br><br>
              

                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Nom du produit</label>
                    <div class="col-sm-10">
                        <input name="name" class="form-control" type="text">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <input name="description" class="form-control" type="text">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Prix de promotion</label>
                    <div class="col-sm-10">
                        <input name="sale_price" class="form-control" type="text">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Prix</label>
                    <div class="col-sm-10">
                        <input name="regular_price" class="form-control" type="text">
                    </div>
                </div>

        
                <br><br>
                <div class="form-group">
                    <button class="btn btn-info btn-block btn-lg waves-effect waves-light" type="submit"> Ajouter produit </button>
                </div>

                </form>
                
                
                
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->    
</div>

@endsection