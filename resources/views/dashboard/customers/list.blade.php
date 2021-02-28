@extends('layouts.dashboard')

@section('content')

        <div class="container-fluid">
        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-sm-6">
                                </div>
                                <!-- <div class="col-sm-6">
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="{{url('/dashboard/customers')}}">customers</a></li>
                                    </ol>
                                </div> -->
                            </div> <!-- end row -->
                        </div>
        <div class="row">
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Liste des clients</h4>
                                </p>
<ul class="responsive-table">
    <li class="table-header">
    <div class="col">ID</div>
      <div class="col">Email</div>
      <div class="col">Nom complet</div>
      <div class="col">Nom d'utilisateur</div>
      <div class="col"></div>
    </li>
    @foreach($list_customers as $customer)
    <li class="table-row">
      <div class="col" ><a href="{{url('/dashboard/customers/show/'.$customer->id.'')}}">{{$customer->id}}</a></div>
      <div class="col" >{{$customer->email}}</div>
      <div class="col" >{{$customer->first_name}} {{$customer->last_name}}</div>
      <div class="col" >{{$customer->username}}</div>
      <div clsdd="col" >
        <div class="row">
                <a class="btn btn-info offset-1" href="{{url('/dashboard/customers/update/'.$customer->id.'')}}">Modifier</a>
                                                        
                <form class="offset-1" action="{{url('/dashboard/customers/delete')}}" method="post">
                @csrf
                {{method_field('DELETE')}}
                    <button class="btn btn-danger" type="submit" name="id" value="{{$customer->id}}">Supprimer</button>
                </form>                                            
        </div>
      </div>
    </li>
    @endforeach
  </ul>
                                

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>
        </div>

@endsection