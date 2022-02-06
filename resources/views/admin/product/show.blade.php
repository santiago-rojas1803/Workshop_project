@extends('layouts.admin')
@section('title','Product Information')
@section('styles')

@endsection
@section('create')

@endsection
@section('options')

@endsection
@section('preference')

@endsection
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            {{$product->name}}
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Administrator Panel</a></li> 
                <li class="breadcrumb-item"><a href="#">Products</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$product->name}}</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="border-bottom text-center pb-4">
                                
                                <img src="{{ asset('image/' . $product->image) }}" 
                                alt="profile" class="img-lg rounded-circle mb-3">

                                <h3>{{$product->name}}</h3>
                                <div class="d-flex justify-content-between">
                                </div>
                            </div>
                            <!-- <div class="border-bottom py-4">
                                <div class="list-group">
                                    <button type="button" class="list-group-item list-group-item-action active">
                                        About Product
                                    </button>
                                    <button type="button"
                                        class="list-group-item list-group-item-action">Products</button>
                                    <button type="button" class="list-group-item list-group-item-action">
                                        Register product
                                    </button>
                                </div>
                            </div> -->
                        </div>

                        <div class="py-4">
                            <p class="clearfix">
                                <span class="float-left">
                                    Status
                                </span>
                                <span class="float-right text-muted">
                                    {{ $product->status }}
                                </span>
                            </p>
                            <p class="clearfix">
                                <span class="float-left">
                                    Provider
                                </span>
                                <span class="float-right text-muted">
                                    <a href="{{route('providers.show',$product->provider->id)}}">
                                        {{ $product->provider->name }}
                                    </a>
                                </span>
                            </p>
                            <p class="clearfix">
                                <span class="float-left">
                                    Category
                                </span>
                                <span class="float-right text-muted">
                                    <a href="">
                                        {{ $product->category->name }}
                                    </a>
                                </span>
                            </p>
                        </div>
                        
                        @if ($product->status == 'ACTIVE')
                            <button class="btn btn-success btn-block">{{ $product->status }}</button>
                        @else
                            <button class="btn btn-warning btn-block">{{ $product->status }}</button>
                        @endif
                        <div class="col-lg-8 pl-lg-5">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h4>Product Information</h4>
                                </div>
                            </div>
                            <div class="profile-feed">
                                <div class="d-flex align-items-start profile-feed-item">

                                   

                                    <div class="form-group col-md-6">
                                        <strong><i class="fab fa-product-hunt mr-1"></i>Code</strong>
                                        <p class="text-muted">
                                            {{$product->code}}
                                        </p>
                                        <hr>
                                        <strong><i class="fas fa-address-card mr-1"></i>Name</strong>
                                        <p class="text-muted">
                                            {{$product->name}}
                                        </p>
                                        <hr>
                                        <strong>
                                            <i class="fas fa-mobile mr-1"></i>
                                            Stock</strong>
                                        <p class="text-muted">
                                            {{$product->stock}}
                                        </p>
                                        <hr>
                                        <strong><i class="fas fa-envelope mr-1"></i>Image</strong>
                                        <p class="text-muted">
                                            {{$product->image}}
                                        </p>
                                        <hr>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <strong><i class="fas fa-map-marked-alt mr-1"></i>Sell Price</strong>
                                        <p class="text-muted">
                                            {{$product->sell_price}}
                                        </p>
                                        <hr>
                                        <strong><i class="fas fa-envelope mr-1"></i>Status</strong>
                                        <p class="text-muted">
                                            {{$product->status}}
                                        </p>
                                        <hr>
                                        <strong><i class="fas fa-map-marked-alt mr-1"></i>Category Id</strong>
                                        <p class="text-muted">
                                            {{$product->category->name}}
                                        </p>
                                        <hr>
                                        <strong><i class="fas fa-map-marked-alt mr-1"></i>Provider Id</strong>
                                        <p class="text-muted">
                                            {{$product->provider->name}}
                                        </p>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <a href="{{route('products.index')}}" class="btn btn-primary">Return</a>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
@section('scripts')
{!! Html::script('melody/js/profile-demo.js') !!}
{!! Html::script('melody/js/data-table.js') !!}
@endsection