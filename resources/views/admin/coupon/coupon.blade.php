@extends('layout.app')
@section('title')
    coupon
@endsection
@section('content')
    <h4>This is coupon page</h4>
    <a class="btn btn-sm btn-primary mt-3" href="{{ route('coupon.create') }}" >
        Add coupon
    </a>
    <div class="row m-t-30">
        <div class="col-md-12">
            <!-- DATA TABLE-->
            <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>title</th>
                            <th>value</th>
                            <th>status</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($coupons as $coupon)
                        <tr>
                            <td>{{ $coupon->id }}</td>
                            <td>{{ $coupon->title }}</td>
                            <td>{{ $coupon->value }}</td>
                            <td>
                                @if ($coupon->status==0)
                                    <a class="btn btn-sm btn-danger" href="{{ url('admin/coupon/status/1') }}/{{$coupon->id}}">
                                        Deactive
                                    </a>
                                @elseif($coupon->status==1)
                                    <a class="btn btn-sm btn-primary" href="{{url('admin/coupon/status/0') }}/{{$coupon->id}}">
                                        Active
                                    </a>
                                @endif
                            </td>
                            <td class="">
                                <a class="btn btn-sm btn-secondary" href="{{ route('coupon.edit',$coupon->id) }}">
                                    Edit
                                </a>
                                <a class="btn btn-sm btn-danger" href="{{ route('coupon.destroy',$coupon->id) }}">
                                    delete
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- END DATA TABLE-->
        </div>
    </div>
@endsection