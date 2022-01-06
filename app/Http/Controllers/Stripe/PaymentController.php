<?php

namespace App\Http\Controllers\Stripe;

use App\Models\Plan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
    public function index()
    {
        return view('stripe.payments.index', [
            'intent' => auth()->user()->createSetupIntent()
        ]);
    }

    public function store(Request $request)
    {
        $user = $request->user();

        $paymentMethod = $request->input('payment-method');

        $user->update([
            'line1'         => $request->line1,
            'line2'         => $request->line2,
            'city'          => $request->city,
            'state'         => $request->state,
            'country'       => $request->country,
            'postal_code'   => $request->postal_code,
        ]);

        $plan = Plan::where('stripe_name', $request->plan)->first();

        $user->newSubscription($plan->stripe_name, $plan->stripe_price_id)
            ->create($paymentMethod);

        $user->update([
            'trial_ends_at' => NULL,
        ]);

        return redirect()->route('billing')->with('success', 'Thank you for subscribing!');
    }
}
