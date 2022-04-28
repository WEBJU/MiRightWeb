<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Hash;
use Auth;
use Session;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data)
    {
        //
        return User::create([
          'name'=>$data['name'],
          'email'=>$data['email'],
          'username'=>$data['username'],
          'password'=>Hash::make($data['password'])
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
          'email'=>'unique:users|email',
          'password'=>'min:6',
        ]);

        $data=$request->all();
        $check=$this->create($data);

        if ($check) {
          return back()->with('success','Your account has been created Successfully');
        }

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        //
        $request->validate([
          'email'=>'required',
          'password'=>'required'
        ]);

        $credentials=$request->only('email','password');
        if (Auth::attempt($credentials)) {
          // code...
          return redirect('/')->with('success','You have Successfully loggedIn');
        }
        return redirect('/login')->with('error','Email or password incorrect');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    /**
     * destroys user session.
     *

     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        //
        Session::flush();
        Auth::logout();
        return redirect('/');
    }

}
