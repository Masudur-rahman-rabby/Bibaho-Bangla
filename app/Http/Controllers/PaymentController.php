<?php

namespace App\Http\Controllers;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('payment');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
                        // Validate the form data
                        $validatedData = $request->validate([
                            'transaction_id' => 'required',
                            'customer_name' => 'required',
                            'mobile_number' => 'required',
                            'payment_option' => 'required',
                        ]);
                
                        // Get the authenticated user's ID
                        $userId = Auth::id();
                
                        // Create a new payment record

                        Auth::users()->payments()->create([
                            'transaction_id' => $request->input('transaction_id'),
                            'customer_name' => $request->input('customer_name'),
                            'mobile_number' => $request->input('mobile_number'),
                            'payment_option' => $request->input('payment_option'),
                        ]);
                        

                        
                
                        // Redirect to the payments index page or perform any additional logic as needed
                        return redirect()->route('package')->with('status', 'Payment successful');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
