@extends('layouts.admin')
@section('title','Register product')
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
        Register products
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Administrator Panel</a></li>
                <li class="breadcrumb-item"><a href="{{route('products.index')}}">Products</a></li>
                <li class="breadcrumb-item active" aria-current="page">Register products</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Register products</h4>
                    </div>
                    {!! Form::open(['route'=>'products.store', 'method'=>'POST', 'files'=>true]) !!}
                    
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" required>
                    </div>

                    <div class="form-group">
                      <label for="sell_price">Sell Price</label>
                      <input type="number" class="form-control" name="sell_price" id="sell_price" aria-describedby="helpId" required>
                    </div>

                    <div class="form-group">
                        <label for="category_id">Category</label>
                        <select class="form-control" name="category_id" id="category_id">
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="provider_id">Provider</label>
                        <select class="form-control" name="provider_id" id="provider_id">
                            @foreach ($providers as $provider)
                            <option value="{{ $provider->id }}">{{ $provider->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- <div class="custom-file mb-4">
                        <input type="file" class="custom-file-input" name="picture" id="picture" lang="es">
                        <label class="custom-file-label" for="image">Upload File</label>
                    </div> -->

                    <div class="card-body">
                        <h4 class="card-title d-flex">Product Image
                            <small class="ml-auto align-self-end">
                                <a href="dropify.html" class="font-weight-light" 
                                target="_blank">Upload File</a>
                            </small>
                        </h4>
                        <input type="file" name="picture" id="picture" class="dropify" />
                    </div>

                     <button type="submit" class="btn btn-primary mr-2">Register</button>
                     <a href="{{route('products.index')}}" class="btn btn-light">
                        Cancel
                     </a>
                     {!! Form::close() !!}
                </div>
                {{--  <div class="card-footer text-muted">
                    {{$products->render()}}
                </div>  --}}
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
{!! Html::script('melody/js/data-table.js') !!}
{!! Html::script('melody/js/dropify.js') !!}
@endsection