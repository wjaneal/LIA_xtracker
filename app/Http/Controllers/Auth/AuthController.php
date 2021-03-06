<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Kris\LaravelFormBuilder\FormBuilder;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;


    protected $redirectTo = '/expenditures';
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    /**
    *
    *Edit user details
    *
    */
    public function edit($id, FormBuilder $formBuilder)
    {
	$model = \App\User::find($id);
        $userDetailsForm = $formBuilder->create('\App\Forms\UserDetailsForm', [
        'method'=>"PUT",
        'url'=>'users/'.$id,
        'model'=>$model
        ]);
        var_dump($budgetForm);
/*        return view('users/edit/'.$id, compact('userDetailsForm'));
*/
    }

    public function update($id, Requests\CreateUserUpdateRequest $request)
    {
	$user = \App\Auth\Auth::findOrFail($id);
	$user->update($request->all());
	return redirect('/');
    }
}
