@extends('layouts.dashboard')

@section('content')

        <div class="container">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <!-- <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{url('/dashboard/customers')}}">customers</a></li>
                    </ol> -->
                </div>
            </div> <!-- end row -->
        </div>

<ul class="responsive-table">
    <li class="table-header">
    <div class="col">ID</div>
    <div class="col">{{$customer->id}}</div>
    </li>
    <li class="table-row">
    <div class="col">Nom</div>
    <div class="col">{{$customer->last_name}}</div>
    </li>
    <li class="table-row">
    <div class="col">Prénom</div>
    <div class="col">{{$customer->first_name}}</div>
    </li>
    <li class="table-row">
    <div class="col">Nom d'utilisateur</div>
    <div class="col">{{$customer->username}}</div>
    </li>
    <li class="table-row">
    <div class="col">Email</div>
    <div class="col">{{$customer->email}}</div>
    </li>
</ul>


        
        
        </div>
        </div>

@endsection