@extends('layouts.admin')
@section('title','Edit client')
@section('styles')
@endsection
@section('options')
@endsection
@section('preference')
@endsection
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
        Edit clients
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Administrator Panel</a></li>
                <li class="breadcrumb-item"><a href="{{route('clients.index')}}">Clients</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit clients</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Edit clients</h4>
                    </div>
                    {!! Form::model($client, ['route'=>['clients.update', $client], 'method'=>'PUT', 
                        'files'=>true]) !!}
                    
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" 
                            value="{{ $client->name }}" aria-describedby="helpId" required>
                        </div>

                        <div class="form-group">
                            <label for="dni">DNI</label>
                            <input type="number" class="form-control" name="dni" id="dni" 
                            value="{{ $client->dni }}" aria-describedby="helpId" required>
                        </div>

                        <div class="form-group">
                            <label for="ruc">RUC</label>
                            <input type="number" class="form-control" name="ruc" id="ruc" 
                            value="{{ $client->ruc }}" aria-describedby="helpId">
                            <small id="helpId" class="form-text text-muted">This is optional</small>
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" name="address" id="address" 
                            value="{{ $client->address }}" aria-describedby="helpId">
                            <small id="helpId" class="form-text text-muted">This is optional</small>
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="number" class="form-control" name="phone" id="phone" 
                            value="{{ $client->phone }}" aria-describedby="helpId">
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" 
                            value="{{ $client->email }}" aria-describedby="helpId">
                        </div>
                    
                     <button type="submit" class="btn btn-primary mr-2">Edit</button>
                     <a href="{{route('clients.index')}}" class="btn btn-light">
                        Cancel
                     </a>
                     {!! Form::close() !!}
                </div>
                {{--  <div class="card-footer text-muted">
                    {{$clients->render()}}
                </div>  --}}
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
{!! Html::script('melody/js/dropify.js') !!}
@endsection