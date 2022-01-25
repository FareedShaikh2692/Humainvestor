<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
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
            'password' => 'required|alphaNum|min:8'
        ]);
        
        $user_data =array(
            'email'    => $request->get('email'),
            'password' =>$request->get('password')
        );
    
        if(Auth::Attempt($user_data)){
            return redirect()->to('/home');
        }else{
            return back()->with('error','Wrong Login Details');
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

        $user = new  User;
        $user->firstname = $request->	firstname;
        $user->	lastname = $request->	lastname;
        $user->email     = $request->	email;
        $user->phone     = $request->	phone;
        $user->password  = Hash::make($request->password);
        $user->save();
        auth()->login($user);
        return redirect()->to('/login');
    }

     /** return Dashboard view  */
     function dashboard(){
        return view('dashboard');
    }
}
