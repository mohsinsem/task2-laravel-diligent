<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/* 
use App\Http\Requests\Admin\ResetPasswordRequest;
use App\Http\Requests\Admin\ResetMailRequest;
*/
 
use App\Http\Requests\Client\LoginRequest;
use App\Models\{User};
use App\Models\Client\Customers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use App\Rules\ValidatePassword;
use Twilio\Rest\Pricing\V2\Voice\CountryList;
use Illuminate\Support\Facades\Hash;
use GuzzleHttp\Client;

use function PHPUnit\Framework\isNull;

class ClientController extends Controller
{

    /**
    * show login form
    *
    * @access public
    */
    public function login()
    {
        return view('auth.client.login');
    }

    /**
    * submit login form
    * @request $request
    * @access public
    */
    public function login_submit(LoginRequest $request)
    {

        //logout from client
        auth()->guard('client')->logout();
   
		$info=setting('info');
		$client=setting('client');
		
		
        //check if email exist
        $user=Customers::where('UserEmail',$request['email'])->orwhere('UserName',$request['email'])->first();
       
        //  && Hash::check($request['password'],$user['UserPassword'])
        if(isset($user)&&Hash::check($request['password'],$user['UserPassword']))
        {
           
            $remember=($request->has('remeber'))?true:false;

            Auth::guard('client')->login($user,$remember);

            Auth::shouldUse('client');
            //session()->flash('success',__('successfully login, Please Activate Google Authentication Security to secure your account'));

            //session()->flash('success',__('successfully login.'));
            return redirect('client/profile');
        }
        else{
            session()->flash('failed',__('Wrong email or password'));
            return redirect()->route('client.login');
        }
    }
    

    /**
    * logout admin
    * @request $request
    * @access public
    */
    public function logout(Request $request)
    {
        Auth::guard('client')->logout();
        session()->flash('success',__('You have successfully logged out!'));
        return redirect()->route('client.login');
    }



}
