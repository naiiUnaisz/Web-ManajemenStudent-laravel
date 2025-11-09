<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\View\View;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

class PaymentController extends Controller
{
    
    public function index(): View
    {
        $payments = Payment::all();
        return view ('payments.index')->with('payments', $payments);
    }


    public function create(): View
    {
        $enrollments = Enrollment::pluck('enroll_no', 'id');
        return view('payments.create', compact('enrollments'));
    }


    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'enrollment_id' => 'required|exists:enrollments,id',
            'paid_date' => 'required|date',
            'amount' => 'required|numeric',
        ]);
    
        Payment::create($data);
    
        return redirect()->route('payments.index')->with('flash_message','Payment added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $payments = Payment::find($id);
        return view('payments.show')->with('payments', $payments);
    }
   

    public function edit(string $id): View
    {
        $payments = Payment::find($id);
        return view('payments.edit')->with('payments', $payments);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $payments = Payment::find($id);
        $input = $request->all();
        $payments->update($input);
        return redirect('payments')->with('flash_message', 'payments Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        
       Payment::destroy($id);
        return redirect('payments')->with('flash_message', 'payment deleted!');
    }
}
