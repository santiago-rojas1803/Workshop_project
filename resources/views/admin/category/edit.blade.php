@extends('layouts.admin')
@section('title','Edit categories')
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
            Edit categories
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Administrator panel</a></li>
                <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Categories</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit categories</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Edit categories</h4>
                    </div>
                    {!! Form::model($category, ['route'=>['categories.update', $category], 'method'=>'PUT']) !!}

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" value="{{ $category->name }}" 
                        class="form-control" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" id="description" 
                        rows="3">{{ $category->description }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Update</button>
                    <a href="{{ route('categories.index') }}" class="btn btn-ligth mr-2">Cancel</a>

                    {!! Form::close() !!}
                </div>
                {{--  <div class="card-footer text-muted">
                    {{$categories->render()}}
                </div>  --}}
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
{!! Html::script('melody/js/data-table.js') !!}
@endsection