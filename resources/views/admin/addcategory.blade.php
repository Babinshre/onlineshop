@extends('layout.app')
@section('title')
    Add category
@endsection
@section('content')
<div class="col-lg-10">
    <div class="card">
        <div class="card-header">
            <strong>Category Name : </strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('category.store') }}" method="post" enctype="" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col-12 col-md-9">
                        <input type="text" id="title" name="title" placeholder="enter category name.." class="form-control">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-sm"> Add </button>
            </form>
        </div>
    </div>
</div>
@endsection