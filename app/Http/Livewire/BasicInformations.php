<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\State;
use App\Models\Lga;
use App\Models\Prelims;
use App\Models\PrelimsResults;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Livewire\WithFileUploads;

class BasicInformations extends Component
{
    use WithFileUploads;
    public $currentStep = 1;
    public $img = false;

    public $resultType = 0;

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
    public $subject4;
    public $grade4;
    public $dis_state;
    public $dis_lga;
  
    public $genderOptions= ["male", "female"];
    public $stateOptions = [];
    public $lgaOptions = [];
 
  
     public $subjectOptions = ['Economics/Commerce', 'Accounting','Geography','History','Civic Eductation','Computer','Book Keeping','Office Practice','Type Writting/Shorthand','Salesmanship','Store Management','Enterpreneurship Education', 'Social Studies','Biology','Physics', 'Chemistry', 'Agric Science', 'Government',];
    
    
    public $gradeOptions = ['A1', 'B2', 'B3', 'C4', 'C5', 'C6', 'D7', 'E8', 'F9'];
    public $passport;
    public $jsceresult;
    public $subjects=[];
    public $selectedSubjects = [];



    public function mount()
    {
        // Retrieve values from session and set them to the Livewire properties.
        $this->subject1 = session('subject1');
        $this->subject2 = session('subject2');
        $this->subject3 = session('subject3');
       
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
                'address' => 'required', 

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
    public function submitForm()
    {
       
       
      
        $this->validate([
            'passport' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Example validation rules, adjust as needed
        ]);
        $this->subjects = [
            ['name' => $this->maths, 'grade' => $this->mathgrade],
            ['name' => $this->eng, 'grade' => $this->enggrade],
            ['name' => $this->subject1, 'grade' => $this->grade1],
            ['name' => $this->subject2, 'grade' => $this->grade2],
            ['name' => $this->subject3, 'grade' => $this->grade3],
            ['name' => $this->subject4, 'grade' => $this->grade4]
        ];
      
        $prelim = new Prelims();
        $passportPath = null;
        $jsceresultPath = null;

        // Handle file uploads and resize images
        if ($this->passport) {
            // Resize the image to 150x150
            $image = Image::make($this->passport)->fit(150, 150);

            // Get the file extension
            $extension = $this->passport->getClientOriginalExtension();

            // Generate a unique filename for the image
            $imgFileName = time() . '.' . $extension;

            // Move the resized image to the public directory
            $image->save(public_path('prelims/' . $imgFileName));
            $passportPath= 'prelims/' . $imgFileName;
            // ... rest of your form submission logic

            // Store $imgFileName in your database or use it as needed
        }

        if ($this->jsceresult) {
            $extension = $this->passport->getClientOriginalExtension();
            $imgFileName = time() . '.' . $extension;
            $image->save(public_path('prelims/' . $imgFileName));
            $jsceresultPath= 'prelims / ' . $imgFileName;
        }

        
        $prelim->passport_url = $passportPath;
        $prelim->jsce_result_url = $jsceresultPath;
        $prelim->surname = $this->surname;
        $prelim->firstname = $this->firstname;
        $prelim->othernames = $this->othernames;
        $prelim->dob = $this->dob;
        $prelim->address = $this->address;
        $prelim->email = $this->email;
        $prelim->gender = $this->gender;
        $prelim->state_id = $this->state;
        $prelim->lga_id = $this->lga;
        $prelim->phone = $this->phone;
        if ($this->resultType===1) {
            $prelim->resultType = "SSCE";
        }
        if ($this->resultType === 2) {
            $prelim->resultType = "JSCE";
        }
        if ($this->resultType === 3) {
            $prelim->resultType = "No Result";
        }
        

        $prelim->save();

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
        return redirect()->back()->with([
            'message' => 'Registration completed, you will be notified for further engagement',
            'reload' => true
        ]);


    }
   
}