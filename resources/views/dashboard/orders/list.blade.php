@extends('layouts.dashboard')

@section('content')

                            <div class="container-fluid">
                            <div class="page-title-box">
                                    <div class="row align-items-center">
                                        <div class="col-sm-6">
                                        </div>
                                        <div class="col-sm-6">
                                        
                                        </div>
                                    </div> 
                                </div>
        <div class="row">
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Liste des commandes</h4>
                                </p>
<ul class="responsive-table">
    <li class="table-header">
      <div class="col">ID commande</div>
      <div class="col">Numéro de commande</div>
      <div class="col">Etat</div>
      <div class="col">Total</div>
      <div class="col">-</div>
    </li>
    @foreach($list_orders as $order)
    <li class="table-row">
      <div class="col" >{{$order->id}}</div>
      <div class="col" >{{$order->number}}</div>
      <div class="col" >{{$order->status}}</div>
      <div class="col" >$ {{$order->total}}</div>
      <div clsdd="col" >
        <div class="row">
                <a class="btn btn-info offset-1" href="{{url('/dashboard/orders/update/'.$order->id.'')}}">Modifier</a>
                                                        
                <form class="offset-1" action="{{url('/dashboard/orders/delete')}}" method="post">
                @csrf
                {{method_field('DELETE')}}
                    <button class="btn btn-danger" type="submit" name="id" value="{{$order->id}}">Supprimer</button>
                </form>                                            
        </div>
      </div>
    </li>
    @endforeach
  </ul>
                                
                            </div>
                        </div>
                    </div> 
                </div>
        </div>

@endsection