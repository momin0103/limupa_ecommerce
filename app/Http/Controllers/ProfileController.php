<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use function Symfony\Component\Console\Helper\removeDecoration;

class ProfileController extends Controller
{
    private $user;

    public function changePassword()
    {
        return view('admin.profile.change-password');
    }

    public function updatePassword(Request $request)
    {
        $this->user = User::find(Auth::user()->id);
        if(password_verify($request->prev_password, $this->user->password))
        {
            if ($request->password == $request->confirm_password)
            {
                $this->user->password = bcrypt($request->password);
                $this->user->save();
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
}
