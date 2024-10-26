<?php

namespace App\Livewire;

use App\Models\Authentication;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Login extends Component
{
    public $id_number = "ID2945";
    public $password = "admin123";

    protected $rules = [
        'id_number' => 'required',
        'password' => 'required',
    ];

    public function login()
    {
        // Validate the input data
        $this->validate();

        // Attempt to find the user by ID number
        $user = Authentication::where('id_number', $this->id_number)->first();

        // Check if the user exists and the password matches
        if ($user && Hash::check($this->password, $user->password)) {
            Auth::login($user);
            $role = Auth::user()->role;
            redirect()->intended('/' . $role);

        }

        // If login fails, show an error message
        $this->addError('password', 'The provided credentials do not match our records.');
    }

    public function render()
    {
        return view('livewire.auth.login')
            ->layout('components.layouts.login');
    }
}
