<?php

namespace App\Http\Controllers;

use App\Mail\ForgetPasswordMail;
use App\Models\Customer;
use Illuminate\Http\Request;
use Session;
use App\Models\Order;
use Mail;

class CustomerDashboardController extends Controller
{
    private $orders;
    private $customer;
    private $code;
    private $data = [];

    public function index()
    {
        $this->orders = Order::where('customer_id', Session::get('customer_id'))->orderBy('id', 'desc')->take('5')->get();
        return view('customer.auth.dashboard', ['orders' => $this->orders ]);
    }

    public function changePassword()
    {
        return view('customer.auth.change-password');
    }

    public function updatePassword(Request $request)
    {
        $this->customer = Customer::find(Session::get('customer_id'));
        if(password_verify($request->prev_password, $this->customer->password))
        {
            if ($request->password == $request->confirm_password)
            {
                $this->customer->password = bcrypt($request->password);
                $this->customer->save();
                return redirect()->back()->with('message', 'Password Update Successfully.');
            }
            else
            {
                return redirect()->back()->with('message', 'Sorry..Your Password & Confirm Password are Not Same.');
            }
        }
        else
        {
            return redirect()->back()->with('message', 'Sorry..Your Previours Password is not Valid.');
        }
    }

    public function forgetPassword()
    {
        return view('customer.auth.forget-password');
    }

    public function forgetPasswordMailSend(Request $request)
    {
        $this->customer = Customer::where('email', $request->email)->first();
        if ($this->customer)
        {
            $this->code = rand(10000, 50000);
            Session::put('code', $this->code);
            Session::put('customer_id', $this->customer->id);
            $this->data = [
                'id' => $this->customer->id,
                'name' => $this->customer->name,
                'code' => $this->code,
                'link' => asset('/forget-password-verified-link'),
            ];

            Mail::to($request->email)->send(new ForgetPasswordMail($this->data));

            return  redirect('/forget-password-mail-send-view');

        }
        else
        {
            return redirect('/customer-forget-password')->with('message', 'Sorry....Your email address is not found.');
        }
    }

    public function forgetPasswordVerifiedView()
    {
        return 'Please check your mail.....';
    }

    public function forgetPasswordVerifiedLink()
    {
        return view('customer.auth.password-recovery-view');
    }

    public function forgetPasswordUpdate(Request $request)
    {
        $this->code = $request->code;

        if ($this->code == Session::get('code'))
        {
            $this->customer = Customer::find(Session::get('customer_id'));
            $this->customer->password = bcrypt($request->password);
            $this->customer->save();

            return redirect('/customer-login')->with('message', 'Your password change successfully. ');
        }
        else
        {
            return redirect()->back()->with('message', 'Your Code is not valid.Please use valid code.');
        }
    }


}
