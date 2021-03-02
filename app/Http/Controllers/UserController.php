<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Redirect;
use App\Models\Customer;
use App\Models\Payment_Detail;
use App\Models\GiftCode_Detail;

class UserController extends Controller
{
    public function signin(Request $request) {

        if($request->btnSignin) {

            $arr = [
                'email' => $request->email,
                'password' => $request->password,
            ];
            if ($request->remember == trans('remember.Remember Me')) {
                $remember = true;
            } else {
                $remember = false;
            }
            
            if (Auth::guard('customer')->attempt($arr)) {
    
                session()->put('member','Thành Viên');

                $member_info = Customer::select('id_customer','fullname','address','phone')->where('email',$request->email)->get();
                $id_customer = Customer::select('id_customer')->where('email',$request->email)->value('id_customer');
                session()->put('member_info',$member_info);

                $payment_methods = Payment_Detail::with('payment')->where('id_customer',$id_customer)->get();
                session()->put('payment_methods',$payment_methods);

                $giftcodes = GiftCode_Detail::with('giftcode')->where('id_customer',$id_customer)->get();
                session()->put('giftcodes',$giftcodes);

                foreach($giftcodes as $freeship) {
                    if($freeship->giftcode[0]->giftcode == "FREESHIP") {
                        $freeships = [
                            'giftcode' => $freeship->giftcode[0]->giftcode,
                            'discount' => $freeship->giftcode[0]->discount
                        ];

                        session()->put('freeships',$freeships);
                    }
                }

                return view('index');

            } else {

                return Redirect::back()->withErrors('Email or password is wrong!');
            }
            
        }
    }

    public function signup(Request $request) {

        if($request->btnSignup) {

            $arr = [
                'email' => $request->email,
                'password' => $request->password,
            ];
            if ($request->remember == trans('remember.Remember Me')) {
                $remember = true;
            } else {
                $remember = false;
            }
            
            if (Auth::guard('customer')->attempt($arr)) {
    
                session()->put('member','Thành Viên');

                return view('index');

            } else {

                return Redirect::back()->withErrors('Email or password is wrong!');
            }
            
        }
    }

    public function logout() {
        if(session()->has('member')) {
            session()->forget('member');

            return view('index');
        }
    }
}
