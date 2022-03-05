<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Str;
use App\Models\Articles;
use App\Models\Content;
use App\Models\Interpretation;
use App\Models\Media;
use App\Models\Message;
use App\Models\Provision;
use App\Models\Remedie;


class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $articles=Articles::all();
        // $interpretation=$articles->interpretations;
        return response()->json([
          'success'=>true,
          'data'=>[
            'articles'=>$articles
          ]
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $article=Articles::findOrFail($id);
        $provisions=$article->provisions;
        $interpretations=$article->interpretations;
        $remedies=$article->remedies;
        $scenarios=$article->scenarios;
        return response()->json([
          'success'=>true,
          'data'=>[
            'provisions'=>$provisions,
            'interpretations'=>$interpretations,
            'remedies'=>$remedies,
            'scenarios'=>$scenarios,
            'article'=>$article
          ]
        ]);
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
      *User registration
      *
      * @param \Illuminate\Http\Request $request
      * @return \Illuminate\Http\Response
    */
    public function register(Request $request){
      $validator=Validator::make($request->all(),
        'name'=>'required|string|max:255',
        'email'=>'required|email|max:255|unique:users',
        'username'=>'required|max:20',
        'password'=>'required|string|min:6',
      );
      if ($validator->fails()) {
        // code...
        return response(['errors'=>$validator->errors()->all()],422);

      }
      $request['password']=Hash::make($request['password']);
      $request['remember_token']=Str::random(10);
      $user=User::create($request->toArray());
      $token=$user->createToken('Laravel Password Grant Client')->accesToken;
      $response=['token'=>$token];
      return response($response,200);
    }

    /**
      * authenticates users
      * @param \Illuminate\Http\Request $request
      * @return \Illuminate\Http\Response
    */
    public function login(Request $request){
      $validator = Validator::make($request->all(), [
        'email' => 'required|string|email|max:255',
        'password' => 'required|string|min:6|confirmed',
      ]);
    if ($validator->fails())
    {
        return response(['errors'=>$validator->errors()->all()], 422);
    }
    $user = User::where('email', $request->email)->first();
    if ($user) {
        if (Hash::check($request->password, $user->password)) {
            $token = $user->createToken('Laravel Password Grant Client')->accessToken;
            $response = ['token' => $token];
            return response($response, 200);
        } else {
            $response = ["message" => "Password mismatch"];
            return response($response, 422);
        }
    } else {
        $response = ["message" =>'User does not exist'];
        return response($response, 422);
    }
    }
    /**
      * authenticates users
      * @param \Illuminate\Http\Request $request
      * @return \Illuminate\Http\Response
    */
    public function logout(Request $request){
      $token = $request->user()->token();
      $token->revoke();
      $response = ['message' => 'You have been successfully logged out!'];
      return response($response, 200);
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
}
