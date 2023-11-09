<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\State;
use App\Models\Lga;
use App\Models\Prelims;
use App\Models\PrelimsResults;
use Yabacon\Paystack;
use Yabacon\Paystack\MetadataBuilder;
use App\Http\Livewire\Exception;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

use DB;
use App\Models\Payment;
use App\Jobs\VerifyPaymentJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;





class BasicInformations extends Component
{
    use WithFileUploads;
    public $currentStep = 1;
    public $img;

    public $resultType = 0;
    public $reference;
    public $preliamount;
    public $surname;
    public $firstname;
    public $othernames;
    public $dob;
    public $address;
    public $email;
    public $gender;
    public $state;
    public $lga;
    public $phone;
    public $maths="Mathematics";
    public $mathgrade;

    
    public $eng="English";
    public $enggrade;

    public $subject;
    public $grade;
    public $subject1;
    public $grade1;
    public $subject2;
    public $grade2;
    public $subject3;
    public $grade3;
    public $dis_state;
    public $dis_lga;
  
    public $genderOptions= ["Male", "Female"];
    public $stateOptions = [];
    public $lgaOptions = [];
 
  
     public $subjectOptions = ['Economics/Commerce', 'Accounting','Geography','History','Civic Eductation','Computer','Book Keeping','Office Practice','Type Writting/Shorthand','Salesmanship','Store Management','Enterpreneurship Education', 'Social Studies','Biology','Physics', 'Chemistry', 'Agric Science', 'Government',];
    
    
    public $gradeOptions = ['A1', 'B2', 'B3', 'C4', 'C5', 'C6', 'D7', 'E8', 'F9'];
    public $passport;
    public $jsceresult;
    public $subjects=[];
    public $selectedSubjects = [];
    public $selectedGrade = [];




    public function mount()
    {
        // Get all public properties of the component
        $properties = get_object_vars($this);


        // Store all properties in the session
        foreach ($properties as $property => $value) {
            // Exclude non-public properties and Livewire-specific properties
            // if (!Str::startsWith($property, '_') && $property !== 'errors' && $property !== 'redirectTo') {
                session([$property => $value]);
            // }
        }
        // // Retrieve values from session and set them to the Livewire properties.
        // $this->subject1 = session('subject1');
        // $this->subject2 = session('subject2');
        // $this->subject3 = session('subject3');
        // session([
        //     'enggrade' => $this->enggrade,
        //     'subject' => $this->subject,
        //     'grade' => $this->grade,
        //     // ... (store other properties in session)
        // ]);
        $this->preliamount =   DB::table("settings")->first()->PrelimFee;
       
    }

  public function __construct() {
        $this->stateOptions = State::all();
   
    }

   

   

    public function getLga()
    {
        
        $this->lgaOptions = Lga::where('state_id', $this->state)->pluck('name', 'id')->toArray();
    }
  

    public function render()
    {
        return view('livewire.basic-informations');
    }
    public function updatedSubject1($value)
    {
        $this->selectedSubjects[0] = $value;
        session(['subject1' => $value]); // Store the selected value in the session.
        $this->handleSubjectUpdate($value, 'subject1', 'grade1'); // Call the function to handle subject update.
        $this->subject1 = session('subject1');
    }
    public function updatedMathgrade()
    {
        session(['mathgrade' => $this->mathgrade]);
    }

    public function updatedSubject2($value)
    {
        $this->selectedSubjects[1] = $value;
        session(['subject2' => $value]); // Store the selected value in the session.
        $this->mount();
        $this->handleSubjectUpdate($value, 'subject2', 'grade2'); // Call the function to handle subject update.
        $this->subject2 = session('subject2');
    }

    public function updatedSubject3($value)
    {
        $this->selectedSubjects[2] = $value;
        session(['subject3' => $value]); // Store the selected value in the session.
        $this->mount();
        $this->handleSubjectUpdate($value, 'subject3', 'grade3'); // Call the function to handle subject update.
        $this->subject3 = session('subject3');
    }
  
  
    public function updatedGrade1()
    {
        session(['grade1' => $this->grade1]);
    }
    public function updatedGrade2()
    {
        session(['grade2' => $this->grade2]);
    }
    public function updatedGrade3()
    {
        session(['grade3' => $this->grade3]);
    }


    public function updatedJsceresult()
    {
        // Handle file upload and store data in session
        if ($this->jsceresult) {
            // Store file data in session as base64 encoded string
            session(['jsceresult' => base64_encode(file_get_contents($this->jsceresult->getRealPath()))]);
        }
    }
    public function updatedPassport()
    {
        // Handle file upload and store data in session
        if ($this->passport) {
            // Store file data in session as base64 encoded string
            session(['passport' => base64_encode(file_get_contents($this->passport->getRealPath()))]);
        }
    }

    public function updatedEnggrade()
    {
        session(['enggrade' => $this->enggrade]);
    }
    private function handleSubjectUpdate($selectedSubject, $subjectProperty, $gradeProperty)
    {
        // Find the previously selected subject and grade
        $previousSubject = $this->$subjectProperty;

        // Remove the previously selected subject from subjectOptions
        $this->subjectOptions = array_values(array_filter($this->subjectOptions, function ($subject) use ($previousSubject) {
            return $subject !== $previousSubject;
        }));

        // Reset the subject property if it's not in the updated options
        if (!in_array($previousSubject, $this->subjectOptions)) {
            $this->$subjectProperty = null;
        }

        // Reset the grade property if the selected subject changed
        if ($previousSubject != $selectedSubject) {
            $this->$gradeProperty = null;
        }
    }



    public function nextStep()
    {
        if ($this->currentStep < 3) {
            $this->validateCurrentStep();
            $this->currentStep++;
           
        }
       
        $this->dis_state= State::where('id', $this->state )->first();
        $this->dis_lga = Lga::where('id', $this->lga)->first();

    }

    public function previousStep()
    {
        if ($this->currentStep > 1) {
            $this->currentStep--;
            $this->resultType = 0;
        }
      
    }

    public function ssce()
    {
        $this->resultType = 1;

    }
    public function jsce()
    {
        $this->resultType = 2;
    }
    public function upload()
    {
        $this->img = !$this->img;
    }
    public function noresult()
    {
        $this->resultType = 3;
       $this->nextStep();
    }
    

    public function validateCurrentStep()
    {
        if ($this->currentStep === 1 ) {
            $this->validate([
                'surname' => 'required',
                'firstname' => 'required',
                'dob' => 'required',
                'phone' => 'required|unique:prelims|numeric',
                'email' => 'required|email|unique:prelims',
                'gender' => 'required',
                'state' => 'required',
                'lga' => 'required',
                'address' => '', 

            ]);
        }
        if ($this->currentStep === 2 && $this->resultType ===1) {
            $this->validate([
                'subject1' => 'required',
                'subject2' => 'required',
                'subject3' => 'required',
                'grade1' => 'required',
                'grade2' => 'required',
                'grade3' => 'required',
                'maths' => 'required',
                'mathgrade' => 'required',
                'eng' => 'required',
                'enggrade' => 'required', 


           
            ]);
        } 

   
    }


      /**

     * Write code on Method

     *

     * @return response()

     */






     public function handlePaymentCompleted($reference)
     {
        $sessionData = session()->all();
        // dd($sessionData);
                 $this->subjects = [
                     ['name' => $sessionData['maths'] ?? null, 'grade' => $sessionData['mathgrade'] ?? null],
                    ['name' => $sessionData['eng'] ?? null, 'grade' => $sessionData['enggrade'] ?? null],
                    ['name' => $sessionData['subject1'] ?? null, 'grade' => $sessionData['grade1'] ?? null],
                    ['name' => $sessionData['subject2'] ?? null, 'grade' => $sessionData['grade2'] ?? null],
                    ['name' => $sessionData['subject2'] ?? null, 'grade' => $sessionData['grade3'] ?? null],

                 ];
 
                 $prelim = new Prelims();
                 $passportPath = null;
                 $jsceresultPath = null;
                 $passport= $sessionData['passport'];
                  $jsceresult = $sessionData['jsceresult'];
                 
 
                 // Handle file uploads and resize images
                 if ($passport) {

            $passportData = base64_decode($passport);

            // Create a temporary file to store the decoded data
            $tempFilePath = tempnam(sys_get_temp_dir(), 'passport');
            file_put_contents($tempFilePath, $passportData);

            // Resize the image to 150x150
            $image = Image::make($tempFilePath)->fit(150, 150);

            // Generate a unique filename for the image
            $imgFileName = time() . '.' . pathinfo($tempFilePath, PATHINFO_EXTENSION);

            // Move the resized image to the desired storage path using the Storage facade
            Storage::disk('public')->put('prelims/' . $imgFileName, $image->stream());

            // Store $imgFileName in your database or use it as needed
            $passportPath = 'prelims/' . $imgFileName;

            // Cleanup: Delete the temporary file
            unlink($tempFilePath);
                 } 
 
                 
                 if ($jsceresult) {
                        // Decode the base64 encoded JSCE result data from the session
                        $jsceresultData = base64_decode($jsceresult);

                        // Create a temporary file to store the decoded data
                        $tempFilePath = tempnam(sys_get_temp_dir(), 'jsceresult');
                        file_put_contents($tempFilePath, $jsceresultData);

                        // Get the file extension
                        $extension = pathinfo($tempFilePath, PATHINFO_EXTENSION);

                        // Generate a unique filename for the image
                        $imgFileName = time() . '.' . $extension;

                        // Move the file to the public directory (or your desired storage path)
                        move_uploaded_file($tempFilePath, public_path('prelims/' . $imgFileName));

                        // Store $imgFileName in your database or use it as needed
                        $jsceresultPath = 'prelims/' . $imgFileName;
                        unlink($tempFilePath);
                 }
 
 
                 $prelim->passport_url = $passportPath;
                 $prelim->jsce_result_url = $jsceresultPath;
                 $prelim->surname = $sessionData['surname'];
                 $prelim->firstname = $sessionData['firstname'];
                 $prelim->othernames = $sessionData['othernames'];
                 $prelim->dob = $sessionData['dob'];
                 $prelim->address = $sessionData['address'];
                 $prelim->email = $sessionData['email'];
                 $prelim->gender = $sessionData['gender'];
                 $prelim->state_id = $sessionData['state'];
                 $prelim->lga_id = $sessionData['lga'];
                 $prelim->payment_status = 1;
                 $prelim->amount_paid = $sessionData['lga'];
 
                 $prelim->phone = $sessionData['phone'];
 
                //  if ($sessionData['resultType === 1']) {
                //      $prelim->resultType = "SSCE";
                //  }
                //  if ($sessionData['resultType === 2']) {
                //      $prelim->resultType = "JSCE";
                //  }
                //  if ($sessionData['resultType === 3']) {
                //      $prelim->resultType = "No Result";
                //  }
                 $prelim->save();
 
                 
                 $payment = new Payment();
                 $payment->AmountPaid = 3000;
                 $payment->reference = $reference;
                 $payment->user_id = $prelim->id;
                 $payment->firstName = $prelim->firstname;
                 $payment->lastName = $prelim->surname;
                 $payment->paid_for_id = 1;
                 $payment->payment_type_id = 1;
                $payment->school_id = 1;

                 $payment->date = now();
                 $payment->save();
 
 
                 foreach ($this->subjects as $subject) {
                     // Check if 'name' and 'grade' are not null before saving
                     if ($subject['name'] !== null && $subject['grade'] !== null) {
                         $prelimResult = new PrelimsResults();
                         $prelimResult->prelims_id = $prelim->id; // Assuming there is a foreign key relationship with prelims table
                         $prelimResult->subject = $subject['name'];
                         $prelimResult->grade = $subject['grade'];
                         $prelimResult->save();
                     }
                 }
 
                 session()->flush();
 
                 // Return a response with a JavaScript script to reload the page after 10 seconds
                 /* return redirect()->back()->with([
                     'message' => 'Payment and registration completed. You will be notified for further engagement.',
                     'reload' => true
                 ]); */


                 return redirect()->back()->with('msg', 'sucesss');
         }

  




    public function verifytranx(Request $request, $reference)
    {
        
      
       
        if (!$reference) {
            return response()->json(['success' => false, 'message' => 'No reference supplied']);
        }

        $response = Http::withHeaders([
            'accept' => 'application/json',
            'authorization' => 'Bearer sk_test_d658bba3780a4fdfbbacce7201f1e063429f649f',
            'cache-control' => 'no-cache'
        ])->get("https://api.paystack.co/transaction/verify/" . rawurlencode($reference));

        if ($response->successful()) {
            $tranx = $response->json();

            if ($tranx['status']) {
               $this->handlePaymentCompleted($reference);
                return redirect()->back()->with('message', 'Payment verified  and registration successfully');

                // return response()->json(['success' => true, 'data' => $tranx['data'], 'message' => 'Payment verified successfully']);
            } else {
                // Payment verification failed
                return response()->json(['success' => false, 'message' => 'Unverified Payment']);
            }
        } else {
            // Error in API request
            return response()->json(['success' => false, 'message' => 'Error verifying payment']);
        }
    }
    public function getEmailFromSession(Request $request)
    {
        $email = $request->session()->get('email'); // Get email from the session

        return response()->json(['email' => $email]);
    }
    
 
}