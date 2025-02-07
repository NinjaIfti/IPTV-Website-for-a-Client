<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Omnipay\Omnipay;

class PaymentController extends Controller
{
    private $gateway;

    public function __construct()
    {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->gateway->setTestMode(false); // Set to false for live transactions
    }

    public function pay(Request $request)
    {
        try {
            $response = $this->gateway->purchase([
                'amount' => number_format($request->amount, 2, '.', ''),
                'currency' => env('PAYPAL_CURRENCY', 'USD'),
                'returnUrl' => url('success'),
                'cancelUrl' => url('error')
            ])->send();

            if ($response->isRedirect()) {
                return redirect()->away($response->getRedirectUrl()); // Redirect to PayPal
            } else {
                return $response->getMessage();
            }
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function success(Request $request)
    {
        if ($request->input('paymentId') && $request->input('PayerID')) {
            $transaction = $this->gateway->completePurchase([
                'payer_id' => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId')
            ])->send();

            $response = $transaction->getData(); // Get full response data

            if ($response && isset($response['id'])) {
                $payment = new Payment();
                $payment->payment_id = $response['id'];
                $payment->payer_id = $response['payer']['payer_info']['payer_id'] ?? null;
                $payment->payer_email = $response['payer']['payer_info']['email'] ?? null;
                $payment->amount = $response['transactions'][0]['amount']['total'] ?? 0;
                $payment->currency = env('PAYPAL_CURRENCY', 'CAD');
                $payment->payment_status = $response['state'] ?? 'unknown';

                $payment->save();

                return "Payment Successful! Transaction ID: " . $response['id'];
            } else {
                return "Payment failed!";
            }
        }
        return 'Payment declined!';
    }

    public function error()
    {
        return 'User declined the payment!';
    }
}
