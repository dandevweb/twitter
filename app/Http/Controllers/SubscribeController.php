<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $user = auth()->user();

        // $user->createAsStripeCustomer();

        return $user
            ->newSubscription('default', 'price_1N1dS7Ht3tL6KYI4Fu4GI9OY')
            ->checkout()
            ->redirect();
    }
}
