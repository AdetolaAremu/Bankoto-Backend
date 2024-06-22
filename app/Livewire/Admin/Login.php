<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.admin.login');
    }

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];


    public function submitLogin()
    {
        $this->validate();

        $check = User::where('email', $this->email)->first();

        if($check){

            if (!Auth::attempt(array('email' => strtolower($this->email), 'password' => $this->password))){
                return $this->dispatch('notify', "Email or Password does not match", 'Error', 'error');
            }

            return redirect()->to('/admin/home');
        } else {
            return $this->dispatch('notify', "User not found or wrong passcode", 'Error', 'error');
        }
    }
}
