@extends('layout.app')
@section('title')
    Edit coupon
@endsection
@section('content')
<div class="col-lg-10">
    <div class="card">
        <div class="card-header">
            <strong>coupon Name : </strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('coupon.update',$coupon->id) }}" method="post" enctype="" class="form-horizontal">
                @csrf
                @method('PUT')
                <div class="row form-group">
                    <div class="col-12 col-md-9 m-2">
                        <input type="text" id="title" name="title" placeholder="{{ $coupon->title }}" class="form-control">
                    </div>
                    <div class="col-12 col-md-9 m-2">
                        <input type="text" id="code" name="code" placeholder="{{ $coupon->code }}" class="form-control">
                    </div>
                    <div class="col-12 col-md-9 m-2">
                        <input type="text" id="value" name="value" placeholder="{{ $coupon->value }}" class="form-control">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-sm"> Add Coupon</button>
            </form>
        </div>
    </div>
</div>
@endsection