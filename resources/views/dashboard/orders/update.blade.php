@extends('layouts.dashboard')

@section('content')

<div class="container">
<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">
                <form action="{{url('/dashboard/orders/update')}}" method="post">
                    @csrf

                <input type="hidden" name="id" value="{{$order->id}}">

                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Etat</label>
                    <div class="col-sm-10">
                        <select name="status"  class="form-control">
                            <option value="pending">En attente de paiement</option>
                            <option value="processing">En traitement</option>
                            <option value="on-hold">En attente</option>
                            <option value="completed">Terminé</option>
                            <option value="cancelled">Annulé</option>
                            <option value="refunded">Remboursé</option>
                            <option value="failed">Echoué</option>
                        </select>
                    </div>
                </div>

                <div>
                    <button class="btn btn-info btn-block btn-lg waves-effect waves-light" type="submit">Enregistrer</button>
                </div>

                </form>
                
                
                
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->    
</div>

@endsection