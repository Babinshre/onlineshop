@extends('layout.app')
@section('title')
    Edit category
@endsection
@section('content')
<div class="col-lg-10">
    <div class="card">
        <div class="card-header">
            <strong>Category Name : </strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('category.update',$category->slug) }}" method="post" enctype="" class="form-horizontal">
                @csrf
                @method('PUT')
                <div class="row form-group">
                    <div class="col-12 col-md-9 m-2">
                        <input type="text" id="title" name="title" placeholder="{{ $category->title }}" class="form-control">
                    </div>
                    <div class="col-12 col-md-9 m-2">
                        <input type="text" id="slug" name="slug" placeholder="{{ $category->slug }}" class="form-control">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-sm"> Add Category</button>
            </form>
        </div>
    </div>
</div>
@endsection