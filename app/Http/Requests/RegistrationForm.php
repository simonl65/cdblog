<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use App\User;
use App\Mail\WelcomeAgain;
use Mail;

class RegistrationForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Anyone should be able to make this request because it's a registration.
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'  => 'required|max:255',
            'email' => 'required|email|max:255',
            'password'  => 'required|confirmed|min:8|max:255'
        ];
    }

    /**
     * Save user details to database, log the user in, then email them:
     */
    public function persist()
    {
        // Save to database:
        $user = User::create([
            'name'  => $this->name,
            'email' => $this->email,
            'password'  => \Hash::make( $this->password )
        ]);
        // $user = User::create(
        //     $this->only(['name','email','password'])
        // );

        // Sign user in:
        // \Auth::login(); // A facade.
        auth()->login( $user );

        // Send welcome email:
        \Mail::to($user)->send(new WelcomeAgain($user));
    }
}
