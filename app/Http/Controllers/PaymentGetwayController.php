<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentGetwayController extends Controller
{
    public function checkout()
    {   
        // Enter Your Stripe Secret
        \Stripe\Stripe::setApiKey('sk_test_51KxyHYIEYo0gWEDaERO4zFkkgWyNl5cqAJDvjc5YBvZMDcZsf8Mm24RWJtUe4nI5ZFIsRGWuEnGtr1gM0xHopCy300Ge4zz7H0');

        		
		$amount = 100;
		$amount *= 100;
        $amount = (int) $amount;
        
        $payment_intent = \Stripe\PaymentIntent::create([
			'description' => 'Stripe Test Payment',
			'amount' => $amount,
			'currency' => 'USD',
			'description' => 'Payment From All About Laravel',
			'payment_method_types' => ['card'],
		]);
		$intent = $payment_intent->client_secret;

		return view('checkout.credit-card',compact('intent'));

    }

    public function afterPayment()
    {
        echo 'Payment Received, Thanks you for using our services.';
    }
}
