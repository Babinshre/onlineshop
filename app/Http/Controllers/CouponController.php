<?php

namespace App\Http\Controllers;

use App\Models\coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coupons = coupon::all();
        return view('admin.coupon.coupon',compact('coupons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.coupon.addcoupon');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'value'=>'required|unique:coupons',
        ]);
        $coupon = new coupon();
        $coupon->title = $request->title;
        $coupon->code = $request->code;
        $coupon->value = $request->value;
        $coupon->status = $request->status;
        $coupon->save();
        $request->session()->flash('success', 'Coupon added successfully ');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function show(coupon $coupon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function edit(coupon $coupon)
    {
        return view('admin.coupon.editcoupon')->with('coupon',$coupon);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, coupon $coupon)
    {
        $coupon->title = $request->title;
        $coupon->code = $request->code;
        $coupon->value = $request->value;
        $coupon->status = $request->status;
        $coupon->save();
        $request->session()->flash('success', 'coupon updated successfully ');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,coupon $coupon)
    {
        $coupon->destroy($coupon->id);
        $request->session()->flash('fail', 'coupon deleted successfully ');
        return redirect()->back();
    }
    public function status(Request $request,$status,$id)
    {
        $coupon = coupon::find($id);
        $coupon->status = $status;
        $coupon->save();
        $request->session()->flash('success', 'coupon updated successfully ');
        return redirect()->back();
    }
}
