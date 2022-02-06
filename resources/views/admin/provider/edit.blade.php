@extends('layouts.admin')
@section('title','Edit provider')
@section('styles')
<style type="text/css">
    .unstyled-button {
        border: none;
        padding: 0;
        background: none;
      }
</style>

@endsection
@section('options')
@endsection
@section('preference')
@endsection
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Edit providers
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Administrator panel</a></li>
                <li class="breadcrumb-item"><a href="{{ route('providers.index') }}">Providers</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit providers</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Edit providers</h4>
                    </div>
                    {!! Form::model($provider, ['route'=>['providers.update', $provider], 'method'=>'PUT']) !!}

                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" name="name" id="name" value="{{ $provider->name }}" class="form-control" required>
                    </div>

                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" name="email" id="email" value="{{$provider->email}}" placeholder="ejemplo@gmail.com" required>
                    </div>

                    <div class="form-group">
                        <label for="ruc_number">RUC Number</label>
                        <input type="number" class="form-control" name="ruc_number" id="ruc_number" value="{{$provider->ruc_number}}" required>
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address" id="address" value="{{$provider->address}}" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="number" class="form-control" name="phone" id="phone" value="{{$provider->phone}}" required>
                    </div>

                     <button type="submit" class="btn btn-primary mr-2">Update</button>
                     <a href="{{ route('providers.index') }}" class="btn btn-light">
                        Cancel
                     </a>
                     {!! Form::close() !!}
                </div>
                {{--  <div class="card-footer text-muted">
                    {{$providers->render()}}
                </div>  --}}
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
{!! Html::script('melody/js/data-table.js') !!}
@endsection