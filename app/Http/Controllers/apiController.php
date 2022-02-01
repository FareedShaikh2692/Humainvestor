<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\ForgetPassword;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
class ApiController extends Controller
{
    /** return login view  */
    function login()
    {   
        return view('login');
    }

    /**  validate login details */
    function postLogin(Request $request){
       
        $this->validate($request,[
            'email'    => 'required|email',
            'password'  => 'required|min:3|max:20',
        ]);
        
        $user_data =array(
            'email'    => $request->get('email'),
            'password' =>$request->get('password')
        );
    
        if(Auth::Attempt($user_data)){
            return redirect()->to('/dashboard');
        }else{
            return back()->withInput()->withErrors([
                'approve' => 'Incorrect email or password.',
            ]);
        }
    }
    /** return signUp view  */
    function signUp(){
        return view('signUp');
    } 
    /** return signUp */
    function postsignUp(Request $request){
        $this->validate($request,[
            'firstname' => 'required|min:5|max:35',
            'lastname'  => 'required|min:5|max:35',
            'email'     => 'required|email|unique:users',
            'phone'     => 'required|numeric',
            'password'  => 'required|min:3|max:20',
        ],[
            'firstname.required' => ' The first name field is required.',
            'firstname.min' => ' The first name must be at least 5 characters.',
            'firstname.max' => ' The first name may not be greater than 35 characters.',
            'lastname.required' => ' The last name field is required.',
            'lastname.min' => ' The last name must be at least 5 characters.',
            'lastname.max' => ' The last name may not be greater than 35 characters.',
        ]);

        $data = array('email'=>$request->email,'name'=>'test', 'body' => ' test mail');
        $to_name = $request->name;
        $to_email = $request->email;
        Mail::send('emails.registerEmail', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
            ->subject('Welcome to Humainvestor');
            $message->from('fareedshaik2692@gmail.com','fareed');
        });
        $user = new  User;
        $user->firstname = $request->firstname;
        $user->	lastname = $request->lastname;
        $user->email     = $request->email;
        $user->phone     = $request->phone;
        $user->nickname  = isset($request->nickname)?$request->nickname:null;
        $user->dob       = isset($request->dob)?$request->dob:null;
        $user->password  = Hash::make($request->password);
        $user->save();
        auth()->login($user);
        return redirect()->to('/login');
    }

    function forgetPassword(){
        return view('forgetpassword');
    }

    function postforgetPassword(Request $request){       

        $user_data= User::where('email',$request->email)->first();

        if(! isset($user_data)){
            return back()->withInput()->withErrors([
                'approve' => 'This email does not exits.',
            ]);
        }else{
            $reset_token = Str::random(20);
       
            $user_data= User::where('email',$request->email)->first();
            $to_name=$user_data['firstname'];
            $to_email = $request->email;

            // $user_data->reset_token= $reset_token;
            // $user_data->save();
            $data       =   array(
                "message"    =>  'http://127.0.0.1:8000/reset_password/'.$reset_token
            );
           
            Mail::to($to_email)->send(new ForgetPassword($data));
            return back()->withInput()->withErrors([
                'approve' => 'Mail successfully sent please check your email!',
            ]);
            // Mail::send('emails.forgetpassword',$data, function($message) use ($to_name,$to_email) {
            //     $message->to($to_email,$to_name)
            //     ->subject('Forget password');
            //     $message->from('fareedshaik2692@gmail.com','fareed');
            // });
        
            // $email_data['message'] ='http://127.0.0.1:8000/reset_password/'.$reset_token;  
            // Mail::send([], [], function ($message) use ($to_email,$email_data) {
            //     $message->to( $to_email )
            //         ->from('fareedshaik2692@gmail.com','fareed')
            //         ->subject('Forget password')
            //         ->setBody($email_data['message'], 'text/html');
            //     });
                return back()->withInput()->withErrors([
                    'approve' => 'Mail successfully sent please check your email!',
                ]);
        
        }
    }

      /** return reset_password view  */
    function reset_password_view($token){
       return view('resetpassword',['token'=>$token]);
    }

    function reset_password(Request $request){
        $this->validate($request,[            
            'password'  => 'required|min:3|max:20',
            'conpassword'  => 'required|min:3|max:20',
        ]);
        $user_data= User::where('reset_token',$request->reset_token)->first();
        if(isset($user_data)){
            $user_data->password    = Hash::make($request->password);
            $user_data->reset_token = null;
            $user_data->save();
            return redirect()->to('/login');
        }else{
            return back()->withErrors([
                'error' => 'You could not update the password multiple time!',
            ]);
        }
    }

    

     /** return Dashboard view  */
     function dashboard(){
        return view('dashboard');
    }

    
     /** return Wallet view  */
     function wallet(){
        return view('wallet');
    }

     /** return Profile view  */
     function profile(){
        return view('profile');
    }

    /** return test view  */
    function test(){
        return view('emails.forgetpassword');
    }
}
