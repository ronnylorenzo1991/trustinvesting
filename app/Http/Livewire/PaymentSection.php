<?php

namespace App\Http\Livewire;

use App\Models\Payment;
use Livewire\Component;

class PaymentSection extends Component
{
    public function render()
    {
        $payment = Payment::orderby('date', 'DESC')->first();
        return view('livewire.payment-section', compact('payment'));
    }
}
