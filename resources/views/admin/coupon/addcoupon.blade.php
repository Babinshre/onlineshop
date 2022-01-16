@extends('layout.app')
@section('title')
    Add coupon
@endsection
@section('content')
<div class="col-lg-10">
    <div class="card">
        <div class="card-header">
            <strong>coupon Name : </strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('coupon.store') }}" method="post" enctype="" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col-12 col-md-9 m-2">
                        <input type="text" id="title" name="title" placeholder="enter coupon name.." class="form-control" required>
                        @error('title')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="col-12 col-md-9 m-2">
                        <input type="text" id="code" name="code" placeholder="enter coupon code.." class="form-control" required>
                        @error('title')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="col-12 col-md-9 m-2">
                        <input type="text" id="value" name="value" placeholder="enter coupon value.." class="form-control" required>
                        @error('title')
                            {{ $message }}
                        @enderror
                    </div>
                        <div class="form-group col-12 col-md-9 m-2">
                          <label for="status">Status</label>
                          <select class="form-control" name="status" id="status">
                            <option value="1">Active</option>
                            <option value="0">Deactive</option>
                          </select>
                          @error('title')
                            {{ $message }}
                          @enderror
                        </div>
                </div>
                <button type="submit" class="btn btn-primary btn-sm"> Add Coupon</button>
            </form>
        </div>
    </div>
</div>
@endsection