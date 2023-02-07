<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class AuthorForgetForm extends Component
{
    
        public $email;

        public function ForgetHandler(){
            $this->validate([
                'email'=>'required|email|exists:users,email',

            ],[
                'email.require'=> 'The :attribute is required',
                'email.email'=> 'Invalid email address',
                'email.exists'=>'The :attribute is not registered'
            ]);

            $token = base64_encode(Str::random(64));
            DB::table('password_resets')-> insert([
                'email'=>$this->email,
                'token'=>$token,
                'created_at'=>Carbon::now(),
            ]);
            $user =User::where('email',$this->email)->first();
            $link = route('author.reset-form', ['token'=>$token, 'email'=>$this->email]);
            $body_message="we are received a request to reset the password for <b>Admin</b> account associted with".
            $this->email."<br> You can reset your password by clicking the button below.";
            $body_message.='<br>';
            $body_message.='<a href="'.$link.'"target="_black" style="color:#fff;border-color:#22bc66;border-style:solid;border-width:10px 180px; background-color:#22bc66;display:inline-block;text-decoration:none;border-radius:3px; box-shadow:0 2px 3px rgba(0,0,0,0.16);-webkit-text-size-adjust:none;box-size-adjust:none;box-sizing:border-box"> Reset Password </a>';

            $body_message.='<br>';
            $body_message.="If you did not request for a password reset, please ignore this email";

            $data = array(
                'name' =>$user->name,
                'body_message'=>$body_message,
            );
            Mail::send('forgot-email-template', $data, function($message) use($user){
                $message->from('noreply@example.com','Admin');
                $message->to($user->email, $user->name) ->subject('Reset Password');
            });

            $this->email =null;
            session()->flash('success', 'we have e-mail your password reset Link');
        }
 



    public function render()
    {
        return view('livewire.author-forget-form');
    }
}
