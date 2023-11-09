<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Mail;

class AdmitController extends Controller
{
    //


    public function autoadmit()
    {
        $fixed = '01';
        $userDetails = DB::table('directprelim')
            ->where('emailstatus', 'notAdmitted')
            ->get();
    
        $generatedNumbers = []; // Array to store generated numbers
    
        // Loop through each user who has not been admitted
        foreach ($userDetails as $user) {
            // Generate a random 10-digit number and ensure it is unique
            do {
                $number = $fixed . mt_rand(10000000, 99999999);
            } while (in_array($number, $generatedNumbers));
    
            // Add the generated number to the array to keep track of it
            $generatedNumbers[] = $number;
    
            // Update the user's record in the 'directprelim' table with the generated admission number
            DB::table('directprelim')
                ->where('id', $user->id)
                ->update([
                    'emailstatus' => 'Admitted',
                    'percentage' => 100,
                    'admissionNumber' => $number,
                ]);
    
            // Generate PDF
            $pdf = PDF::loadView('mails.admission', compact('user'));
    
            // Generate a unique filename for each PDF (for example, using the user's ID)
            $filename = 'admission_' . $user->id . '.pdf';
    
            // Specify the path where you want to save the PDF within the public folder
            $pdfPath = public_path('pdfs/' . $filename);
    
            // Save the PDF to the specified path
            $pdf->save($pdfPath);
    
            // Check if PDF was saved successfully
            if (file_exists($pdfPath)) {
                Mail::to($user->email)->send(new Admission($pdfPath, $user));
            } else {
             
            }
        }
    
        //return 'aaa';
        return redirect('/admindashboard')->with('message', 'Admissions successfully updated and emails sent.');
    }
}
