@extends('layouts.dashboard')

@section('content')

        <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <form action="{{url('/dashboard/customers/update')}}" method="post">
                            @csrf

                        <input type="hidden" name="id" value="{{$customer->id}}">

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Nom</label>
                            <div class="col-sm-10">
                                <input name="first_name" value="{{$customer->first_name}}" class="form-control" type="text">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Prénom</label>
                            <div class="col-sm-10">
                                <input name="last_name" value="{{$customer->last_name}}" class="form-control" type="text">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input name="email" value="{{$customer->email}}" class="form-control" type="text">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Nom d'utilisateur</label>
                            <div class="col-sm-10">
                                <input name="username" value="{{$customer->username}}" class="form-control" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-info btn-block btn-lg waves-effect waves-light" type="submit"> Enregistrer </button>
                        </div>

                        </form>
                        
                        
                        
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->    
        </div>

@endsection