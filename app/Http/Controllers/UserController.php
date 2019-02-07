<?php

namespace App\Http\Controllers;

use Auth;
use Validator;
use Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        return response()->json(User::with(['orders'])->get());
    }

    public function loginView(){
        return view('login.login');
    }

    public function registerView(){
        return view('login.register');
    }

    public function login(Request $request)
    {

        $data = User::where('email',$request->email)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($request->password,$data->password)){
                // Session::put('name',$data->name);
                // Session::put('email',$data->email);
                Session::put('login',TRUE);
                return redirect('/')->with('data',$data);
            }
            else{
                return redirect('/login')->with('alert','Wrong Email or Password');
            }
        }
        else{
            return redirect('/login')->with('alert','Email does not exist');
        }
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'c_password' => 'required|same:password',
        ]);

        if ($validator->fails())
        {
            // return response()->json(['error' => $validator->errors()], 401);
            return Redirect::action('UserController@registerView')->withErrors($validator)->withInput();
        }

        $data = $request->only(['name','email','password']);
        $data['password'] = bcrypt($data['password']);

        $user = User::create($data);
        $user->is_admin = 0;

        return redirect('login')->with('alert-success','Register Successful');
    }

    public function show(User $user)
    {
        return response()->json($user);
    }

    public function showOrders(User $user)
    {
        return response()->json($user->orders()->with(['product'])->get());
    }

    public function logout()
    {
        Session::flush();
        return redirect('login')->with('alert','You have been logout');
    }
}
