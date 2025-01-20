<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Rules;
use Illuminate\Validation\Rule;

class UsersController extends Controller
{
    public function index()
    {
        return 'Hello from UserController';
    }

    public function show($id)
    {
        // $data = array(
        //     "id" => $id,
        //     "name" => "Venn Edward Nicolas",
        //     "age" => 23,
        //     "email" => "vdnicolas@uc-bcf.edu.ph",
        // );
        // return view('user', ['data' => $data]);
        // return view('user', $data);

        $data = ['data' => "data from database"];
        return view('user')
            ->with('id', $id)
            ->with('name', 'Venn Edward Nicolas')
            ->with('age', 23)
            ->with('email', 'vdnicolas@uc-bcf.edu.ph')
            ->with('data', $data);
    }


    public function home()
    {
        return view("home");
    }

    public function login()
    {
        return View::exists('user.login') ? view('user.login') : abort(404);
    }
    public function register()
    {
        return View::exists('user.register') ? view('user.register') : abort(404);
    }
    public function store(Request $request)
    {

        $validated = $request->validate([
            "name" => ['required', 'min:4'],
            "email" => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . Users::class],
            "password" => ['required', 'confirmed', Rules\Password::defaults()]
        ]);

        // $validated['password'] = Hash::make($validated['password']);
        $validated['password'] = bcrypt($validated['password']);

        $user = Users::create($validated);

        // you can place here your other code
        // you can do email verification here before login
        // return $user;

        auth()->login($user);
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'logout successful');
    }

    public function process(Request $request)
    {
        $validated = $request->validate([
            "email" => ['required', 'string', 'lowercase', 'email', 'max:255'],
            "password" => ['required']
        ]);

        if (auth()->attempt($validated)) {
            $request->session()->regenerate();

            return redirect('/students')->with('message', 'Welcome Back!');
        }
    }
}
