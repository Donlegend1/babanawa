<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Hash;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Mail;
use App\Models\File;
use Laravel\Sanctum\PersonalAccessToken;
use App\Models\Payments;
use Illuminate\Support\Str;
use Storage;



class RegisterController extends Controller
{
    //

    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }



    public function register(Request $request)
    {
        /* 
                $data = array('name'=>"Virat Gandhi");
                Mail::send(['text'=>'mail'], $data, function($message) {
                    $message->to('iyenemmanuel@gmail.com', 'Babanawa Polytechnic')->subject
                       ('Babanawa Polytechnic');
                    $message->from('info@babanawa.com','Babanawa');
                 });
         */

        //return $request->Mname;





        $rules = [
            'name' => 'required',
            'lname' => 'required',
            'email' => 'unique:users|required'
        ];

        $input = $request->only('name', 'lname', 'email');
        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'error' => $validator->messages()]);
        }


        $name = $request->name;
        $lname = $request->lname;
        $email = $request->email;
        $password = Str::random(5);
        $course = $request->course;
        $type = $request->type;
        $Mname = $request->Mname;
        $type = $request->type;
        $course = $request->course;

        //   return $password;

        $user = User::create(['name' => $name, 'Mname' => $Mname, 'lname' => $lname, 'email' => $email, 'viewPass' => $password, 'type' => $type, 'course' => $course, 'password' => Hash::make($password)]);
        $data = array('email' => $request->email, 'first_name' => 'Babanawa', 'from' => 'info@babanawa.com', 'from_name' => 'Babanawa Polytechnic');


        //SEND EMAIL

         //SEND EMAIL                     
         Mail::send('mail', [
            'password' => $password,
            'course' => $course,
            'type' => $type
          

        ], function($message) use ($data) {
            $message->to($data['email'])
            ->subject('Welcome to Babanawa Polytechnic');
            $message->from('info@babanawa.com', 'Babanawa Polytechnic');
        }); 










        return response()->json([
            'message' => 'User successfully registered',
            'user' => $lname
        ], 201);

    }



    public function getPayments()
    {
        $data = Payments::where('status', 1)->get();
        if ($data) {
            $response = [
                'data' => $data,
                'success' => true,
                'status' => 200,
            ];
            return response()->json($response, 200);
        }
        $response = [
            'success' => false,
            'message' => 'Data not found.',
            'status' => 404
        ];
        return response()->json($response, 404);
    }



    public function getPaystackKey()
    {
        $payCreds = DB::table('payments2')
            ->select('*')->where('id', 7)->first();
        if (is_null($payCreds) || is_null($payCreds->creds)) {
            $response = [
                'success' => false,
                'message' => 'Payment issue please contact administrator1',
                'status' => 404
            ];
            return response()->json($response, 404);
        }
        $credsData = $payCreds;
        if (is_null($credsData)) {
            $response = [
                'success' => false,
                'message' => $credsData,
                'status' => 404
            ];
            return response()->json($response, 404);
        }
        $pk = $credsData;
        //  $sk = $credsData->sk;
        $response = [
            'data' => $pk,
            'success' => true,
            'status' => 200,
        ];
        return response()->json($response, 200);
    }








    public function postadmission(Request $request)
    {


        //return $request->step1['id'];


      //  return 'qqq';




        //return $request->step1['id'];

        $image = $request->step1['photo'];


        if (preg_match('/base64/', $request->step1['photo'])) {

            $imageInfo = explode(";base64,", $image);
            $imgExt = str_replace('data:image/', '', $imageInfo[0]);

            $image = substr($image, strpos($image, ",") + 1);
            $name = Str::random(40) . '.' . $imgExt;
            $filePath = '/' . $name;
            Storage::put($filePath, base64_decode($image));

            //Storage::disk('public')->put('filename', base64_decode($image));




            // return $filePath;
        } else {
            $filePath = 'No photo';
        }






        //GET BASIC INFORMATION FROM EVERYONE ANYTHING
        $step1 = DB::table('AdmissionsStep1')->insertGetId(
            [
                'user_id' => $request->step1['id'],
                'reference' => $request->step1['ref'],
                'firstName' => $request->step1['firstName'],
                'lastName' => $request->step1['lastName'],
                'email' => $request->step1['email'],
                'phone' => $request->step1['phone'],
                'photo' => $filePath,
                'sex' => $request->step1['sex'],
                'state' => $request->step1['state'],
                'dob' => $request->step1['dob'],
                'date_created' => date('Y-m-d H:i:s')

                

            ]
        );





        if ($request->step1['type'] == 'cert') {

            DB::table('certificateentries')->insertGetId([
                'user_id' => $request->step1['id'],
                'firstname' => $request->step1['firstName'],
                'lastname' => $request->step1['lastName'],
                'email' => $request->step1['email'],
                'emailstatus' => 'notAdmitted',
                'amountPaid' => (float) $request->step1['amountpaid'],
                'percentage' => 30,
                'ref' => $request->step1['ref'],
                'type' => $request->step1['coursetype'],
                'school' => $request->step1['type'],
                'stream' => $request->step1['stream']

            ]);

        } else if ($request->step1['type'] == 'prelim') {
           // coursetype
            $dprelimid = DB::table('directprelim')->insertGetId([
                'user_id' => $request->step1['id'],
                'firstname' => $request->step1['firstName'],
                'lastname' => $request->step1['lastName'],
                'email' => $request->step1['email'],
                'emailstatus' => 'notAdmitted',
                'amountPaid' => (float) $request->step1['amountpaid'],
                'percentage' => 30,
                'ref' => $request->step1['ref'],
                'type' => $request->step1['coursetype'],
                'school' => $request->step1['type'],
                'stream' => $request->step1['stream']
            ]);







           


            DB::table('users')->where('id', $request->step1['id'])
            ->update([
                'adminstep1_id' => $step1,
                'remedial_id' => $dprelimid
            ]);








        } else {





            if ($request->step2['englishgrade'] == 'A' || $request->step2['englishgrade'] == 'B' || $request->step2['englishgrade'] == 'C' && $request->step2['mathsgrade'] == 'A' || $request->step2['mathsgrade'] == 'B' || $request->step2['mathsgrade'] == 'C') {

                if (
                    $request->step2['nonc1grade'] == 'C' || $request->step2['nonc2grade'] == 'C' || $request->step2['nonc3grade'] == 'C' || $request->step2['nonc4grade'] == 'C' || $request->step2['nonc5grade'] == 'C' || $request->step2['nonc6grade'] == 'C'
                    || $request->step2['nonc7grade'] == 'C' || $request->step2['nonc8grade'] == 'C' || $request->step2['nonc9grade'] == 'C' || $request->step2['nonc10grade'] == 'C' || $request->step2['nonc11grade'] == 'C' || $request->step2['nonc12grade'] == 'C' || $request->step2['nonc13grade'] == 'C' || $request->step2['nonc14grade'] == 'C' ||
                    $request->step2['nonc1grade'] == 'B' || $request->step2['nonc2grade'] == 'B' || $request->step2['nonc3grade'] == 'B' || $request->step2['nonc4grade'] == 'B' || $request->step2['nonc5grade'] == 'B' || $request->step2['nonc6grade'] == 'B'
                    || $request->step2['nonc7grade'] == 'B' || $request->step2['nonc8grade'] == 'B' || $request->step2['nonc9grade'] == 'B' || $request->step2['nonc10grade'] == 'B' || $request->step2['nonc11grade'] == 'B' || $request->step2['nonc12grade'] == 'B' || $request->step2['nonc13grade'] == 'B' || $request->step2['nonc14grade'] == 'B'
                    || $request->step2['nonc1grade'] == 'A' || $request->step2['nonc2grade'] == 'A' || $request->step2['nonc3grade'] == 'A' || $request->step2['nonc4grade'] == 'A' || $request->step2['nonc5grade'] == 'A' || $request->step2['nonc6grade'] == 'A'
                    || $request->step2['nonc7grade'] == 'A' || $request->step2['nonc8grade'] == 'A' || $request->step2['nonc9grade'] == 'A' || $request->step2['nonc10grade'] == 'A' || $request->step2['nonc11grade'] == 'A' || $request->step2['nonc12grade'] == 'A' || $request->step2['nonc13grade'] == 'A' || $request->step2['nonc14grade'] == 'A'
                ) {

                    DB::table('directentries')->insertGetId([
                        'user_id' => $request->step1['id'],
                        'firstname' => $request->step1['firstName'],
                        'lastname' => $request->step1['lastName'],
                        'email' => $request->step1['email'],
                        'emailstatus' => 'notAdmitted',
                        'amountPaid' => (float) $request->step1['amountpaid'],
                        'percentage' => 50,
                        'ref' => $request->step1['ref'],
                        'type' => $request->step1['coursetype']

                    ]);





                } else {


                    DB::table('prelimentries')->insertGetId([
                        'user_id' => $request->step1['id'],
                        'firstname' => $request->step1['firstName'],
                        'lastname' => $request->step1['lastName'],
                        'email' => $request->step1['email'],
                        'emailstatus' => 'notAdmitted',
                        'ref' => $request->step1['ref'],
                        'type' => $request->step1['coursetype']

                    ]);

                }

            }





            //PUSH FIRST RESULT STEP RESULT IF ANY
            $step2 = DB::table('AdmissionsStep2')->insertGetId(
                [
                    'user_id' => $request->step1['id'],
                    'reference' => $request->step2['ref'],
                    'examType' => $request->step2['examType'],
                    'english' => $request->step2['english'],
                    'englishgrade' => $request->step2['englishgrade'],
                    'maths' => $request->step2['maths'],
                    'mathsgrade' => $request->step2['mathsgrade'],
                    'nonc1' => $request->step2['nonc1']['name'],
                    'nonc1grade' => $request->step2['nonc1grade'],
                    'nonc2' => $request->step2['nonc2']['name'],
                    'nonc2grade' => $request->step2['nonc2grade'],
                    'nonc3' => $request->step2['nonc3']['name'],
                    'nonc3grade' => $request->step2['nonc3grade'],

                    'nonc4' => !empty($request->step2['nonc4']['name']) ? $request->step2['nonc4']['name'] : '',
                    'nonc4grade' => !empty($request->step2['nonc4grade']) ? $request->step2['nonc4grade'] : '',
                    'nonc5' => !empty($request->step2['nonc5']['name']) ? $request->step2['nonc5']['name'] : '',
                    'nonc5grade' => !empty($request->step2['nonc5grade']) ? $request->step2['nonc5grade'] : '',
                    'nonc6' => !empty($request->step2['nonc6']['name']) ? $request->step2['nonc6']['name'] : '',
                    'nonc6grade' => !empty($request->step2['nonc6grade']) ? $request->step2['nonc6grade'] : '',
                    'nonc7' => !empty($request->step2['nonc7']['name']) ? $request->step2['nonc7']['name'] : '',
                    'nonc7grade' => !empty($request->step2['nonc7grade']) ? $request->step2['nonc7grade'] : '',
                    'nonc8' => !empty($request->step2['nonc8']['name']) ? $request->step2['nonc8']['name'] : '',
                    'nonc8grade' => !empty($request->step2['nonc8grade']) ? $request->step2['nonc8grade'] : '',
                    'nonc9' => !empty($request->step2['nonc9']['name']) ? $request->step2['nonc9']['name'] : '',
                    'nonc9grade' => !empty($request->step2['nonc9grade']) ? $request->step2['nonc9grade'] : '',



                    'nonc10' => !empty($request->step2['nonc10']['name']) ? $request->step2['nonc10']['name'] : '',
                    'nonc10grade' => !empty($request->step2['nonc10grade']) ? $request->step2['nonc10grade'] : '',


                    'nonc11' => !empty($request->step2['nonc11']['name']) ? $request->step2['nonc11']['name'] : '',
                    'nonc11grade' => !empty($request->step2['nonc11grade']) ? $request->step2['nonc11grade'] : '',
                    'nonc12' => !empty($request->step2['nonc12']['name']) ? $request->step2['nonc12']['name'] : '',
                    'nonc12grade' => !empty($request->step2['nonc12grade']) ? $request->step2['nonc12grade'] : '',

                    'nonc13' => !empty($request->step2['nonc13']['name']) ? $request->step2['nonc13']['name'] : '',
                    'nonc13grade' => !empty($request->step2['nonc13grade']) ? $request->step2['nonc13grade'] : '',
                    'nonc14' => !empty($request->step2['nonc14']['name']) ? $request->step2['nonc14']['name'] : '',
                    'nonc14grade' => !empty($request->step2['nonc14grade']) ? $request->step2['nonc14grade'] : '',
                ]
            );


            //PUSH THIRD STEP RESULT IF ANY
            if ($request->step3['pushNotifications'] == 'everything') {


                $step3 = DB::table('AdmissionsStep3')->insertGetId(
                    [
                        'user_id' => $request->step1['id'],
                        'reference' => $request->step3['ref'],
                        'examType' => $request->step3['examType'],

                        'english' => !empty($request->step3['englishx']) ? $request->step3['englishx'] : '',
                        'englishgrade' => !empty($request->step3['englishgradex']) ? $request->step3['englishgradex'] : '',
                        'maths' => !empty($request->step3['mathsx']) ? $request->step3['mathsx'] : '',
                        'mathsgrade' => !empty($request->step3['mathsgradex']) ? $request->step3['mathsgradex'] : '',

                        'nonc1' => !empty($request->step3['nonc1x']['name']) ? $request->step3['nonc1x']['name'] : '',
                        'nonc1grade' => !empty($request->step3['nonc1gradex']) ? $request->step3['nonc1gradex'] : '',
                        'nonc2' => !empty($request->step3['nonc2x']['name']) ? $request->step3['nonc2x']['name'] : '',
                        'nonc2grade' => !empty($request->step3['nonc2gradex']) ? $request->step3['nonc2gradex'] : '',
                        'nonc3' => !empty($request->step3['nonc3x']['name']) ? $request->step3['nonc3x']['name'] : '',
                        'nonc3grade' => !empty($request->step3['nonc3gradex']) ? $request->step3['nonc3gradex'] : '',
                        'nonc4' => !empty($request->step3['nonc4x']['name']) ? $request->step3['nonc4x']['name'] : '',
                        'nonc4grade' => !empty($request->step3['nonc4gradex']) ? $request->step3['nonc4gradex'] : '',
                        'nonc5' => !empty($request->step3['nonc5x']['name']) ? $request->step3['nonc5x']['name'] : '',
                        'nonc5grade' => !empty($request->step3['nonc5gradex']) ? $request->step3['nonc5gradex'] : '',
                        'nonc6' => !empty($request->step3['nonc6x']['name']) ? $request->step3['nonc6x']['name'] : '',
                        'nonc6grade' => !empty($request->step3['nonc6gradex']) ? $request->step3['nonc6gradex'] : '',
                        'nonc7' => !empty($request->step3['nonc7x']['name']) ? $request->step3['nonc7x']['name'] : '',
                        'nonc7grade' => !empty($request->step3['nonc7gradex']) ? $request->step3['nonc7gradex'] : '',

                        'nonc8' => !empty($request->step3['nonc8x']['name']) ? $request->step3['nonc8x']['name'] : '',
                        'nonc8grade' => !empty($request->step3['nonc8gradex']) ? $request->step3['nonc8gradex'] : '',
                        'nonc9' => !empty($request->step3['nonc9x']['name']) ? $request->step3['nonc9x']['name'] : '',
                        'nonc9grade' => !empty($request->step3['nonc9gradex']) ? $request->step3['nonc9gradex'] : '',



                        'nonc10' => !empty($request->step3['nonc10x']['name']) ? $request->step3['nonc10x']['name'] : '',
                        'nonc10grade' => !empty($request->step3['nonc10gradex']) ? $request->step3['nonc10gradex'] : '',


                        'nonc11' => !empty($request->step3['nonc11x']['name']) ? $request->step3['nonc11x']['name'] : '',
                        'nonc11grade' => !empty($request->step3['nonc11gradex']) ? $request->step3['nonc11gradex'] : '',
                        'nonc12' => !empty($request->step3['nonc12x']['name']) ? $request->step3['nonc12x']['name'] : '',
                        'nonc12grade' => !empty($request->step3['nonc12gradex']) ? $request->step3['nonc12gradex'] : '',

                        'nonc13' => !empty($request->step3['nonc13x']['name']) ? $request->step3['nonc13x']['name'] : '',
                        'nonc13grade' => !empty($request->step3['nonc13gradex']) ? $request->step3['nonc13gradex'] : '',
                        'nonc14' => !empty($request->step3['nonc14x']['name']) ? $request->step3['nonc14x']['name'] : '',
                        'nonc14grade' => !empty($request->step3['nonc14gradex']) ? $request->step3['nonc14gradex'] : '',
                    ]
                );

            }


        }




        //PUSH PAYMENT INFORMATION
     







        $data = array('email' => $request->step1['email'], 'first_name' => 'Babanawa', 'from' => 'info@babanawa.com', 'from_name' => 'Babanawa Polytechnic');


         Mail::send('admit', $data, function ($message) use ($data) {
             $message->to($data['email'])->from($data['from'], $data['first_name'])->subject('Admission Status');
         });









        return response()->json([
            'message' => 'Admission posted successfully',
            'user' => $step1
        ], 201);

    }



    public function upload(Request $request)
    {

        //return 'ddd';

        $token = $request->bearerToken();

        Auth::guard('api')->user()->id;

        // $user = $token->tokenable;



        $validator = Validator::make($request->all(), [
            'file' => 'required',
            'userid' => 'required'
        ]);

        if ($validator->fails()) {

            return response()->json(['error' => $validator->errors()], 401);
        }


        if ($file = $request->file('file')) {
            $path = $file->store('public/files');
            $name = $file->getClientOriginalName();

            //store your file into directory and db
            $save = new File();
            $save->name = $name;
            $save->path = $path;
            $save->user_id = $request->userid;
            $save->ref = $request->ref;
            $save->save();



            if ($file2 = $request->file('file2')) {
                $path2 = $file2->store('public/files');
                $name2 = $file2->getClientOriginalName();

                //store your file into directory and db
                $save = new File();
                $save->name = $name2;
                $save->path = $path2;
                $save->user_id = $request->userid;
                $save->ref = $request->ref;
                $save->save();



            }

            return response()->json([
                "success" => true,
                "message" => "File successfully uploaded",
                "file" => $file
            ]);

        }




    }



    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);


        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        if (!$token = auth()->attempt($validator->validated())) {
            return response()->json(['error' => 'Unauthorized'], 422);
        }
        return $this->createNewToken($token);
    }



    public static function verifytranx(Request $request)
    {

        $reference = $request->ref;

        // return $reference;
        $curl = curl_init();
        if (!$reference) {

            // die('No reference supplied');
            return "qqq";
        }
        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($reference),
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_HTTPHEADER => [
                    "accept: application/json",
                    "authorization: Bearer sk_test_d658bba3780a4fdfbbacce7201f1e063429f649f",
                    "cache-control: no-cache"
                ],
            )
        );

        $response = curl_exec($curl);
        $err = curl_error($curl);

        $tranx = json_decode($response, true);



        if ($tranx['status'] == true) {



            $responseData = array('success' => '0', 'data' => $tranx['message'], 'message' => "Worked");



        } else {

            $data = array();
            $responseData = array('success' => '0', 'message' => "Unverified Payment");

        }



        $userResponse = json_encode($responseData);
        return $userResponse;

    }


    public function logout()
    {
        auth()->logout();
        return response()->json(['message' => 'User successfully signed out']);
    }



    public function getallstatus(Request $request)
    {
        // auth()->logout();

        $nd = DB::table('directentries')
            ->where('user_id', $request->id)->get();



        $prelim = DB::table('directprelim')
            ->where('user_id', $request->id)->get();




        $cert = DB::table('certificateentries')
            ->where('user_id', $request->id)->get();





        $data = array();
        $responseData = array('success' => '0', 'cert' => $cert, 'prel' => $prelim, 'nd' => $nd, 'message' => "Data returned");




        $userResponse = json_encode($responseData);
        return $userResponse;




        //  return response($data);
    }




    public function getallprelim(Request $request)
    {
        $data = DB::table('prelimentries')
            ->where('user_id', $request->id)->get();

        return response($data);
    }
    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->createNewToken(auth()->refresh());
    }


    public function userProfile()
    {
        return response()->json(auth()->user());
    }


    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function createNewToken($token)
    {
        $settings = DB::table('seters')->get()->all();
        return response()->json([
            'fees' => $settings[0]->directFee,
            'access_token' => $token,
            'token_type' => 'bearer',
            // 'expires_in' => auth()->factory()->getTTL() * 60,
            // 'expires_in' => auth('web')->factory()->getTTL() * 60,
            'expires_in' => auth('api')->factory()->getTTL() * 60,
            'user' => auth()->user()
        ]);
    }
}