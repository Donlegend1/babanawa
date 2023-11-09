<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\YourModel; // Replace YourModel with your actual model

class VerifyPayment implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $reference;
    protected $formData;

    /**
     * Create a new job instance.
     *
     * @param string $reference
     * @param array $formData
     */
    public function __construct($reference, $formData)
    {
        $this->reference = $reference;
        $this->formData = $formData;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $response = $this->verifyPayment($this->reference);

        if ($response['success']) {
            // Payment verified, process the form data
           return true;
        } else {
            // Payment not verified, log the error and handle it accordingly
            Log::error('Payment verification failed: ' . $response['message']);
        }
    }

    /**
     * Verify the payment using Paystack API.
     *
     * @param string $reference
     * @return array
     */
    private function verifyPayment($reference)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer sk_test_d658bba3780a4fdfbbacce7201f1e063429f649f',
            'Accept' => 'application/json',
        ])->get("https://api.paystack.co/transaction/verify/" . rawurlencode($reference));

        $tranx = $response->json();

        if ($tranx['status'] == true) {
            return [
                'success' => true,
                'message' => 'Payment verified successfully',
            ];
        } else {
            return [
                'success' => false,
                'message' => 'Unverified Payment',
            ];
        }
    }

    /**
     * Process the form data and store it in the database.
     *
     * @return void
     */
   
}