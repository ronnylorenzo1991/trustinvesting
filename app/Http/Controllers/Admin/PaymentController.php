<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments = Payment::latest('id')->paginate(10);

        return view('admin.payment.index', compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.payment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'qty'   => 'required',
            'date'  => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('images/payments', $imageName);
            $image = new Image;
            $image->url = 'storage/images/payments/' . $imageName;
        }

        $payment = Payment::create($request->all());
        $payment->image()->save($image ?: '');
        return redirect(route('admin.payment.index', $payment))->with('info', 'the payment was created');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Payment $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        return view('admin.payment.edit', compact('payment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Payment $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {

        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('images/payments', $imageName);
            $image = new Image;
            $image->url = 'storage/images/payments/' . $imageName;
            Storage::delete($payment->image->url);
            $payment->image->delete();
            $payment->image()->save($image ?: '');
        }

        $payment->update($request->all());

        return redirect(route('admin.payment.index'))->with('info', 'the payment was updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Payment $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        Storage::delete($payment->image->url);
        $payment->image->delete();
        $payment->delete();

        return redirect(route('admin.payment.index'))->with('info', 'the payment was deleted');
    }
}
