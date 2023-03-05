<?php

namespace App\Http\Controllers\api;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserFormRequest;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Account::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $accountList = Account::all();
        $inputData = $request->all();

        $username = $inputData['username'];
        $email = $inputData['email'];
        $password = $inputData['password'];
        $roleID = $inputData['role_id'];

        foreach ($accountList as $account){
            if($account->email == $email){
                return response()->json([
                    'status' => false,
                    'message'=>"This email has existed!"
                ], 400);
            }
            if($account->username == $username){
                return response()->json([
                    'status' => false,
                    'message'=>"This username has existed!"
                ], 400);
            }
        }

        $users = Account::create([
            'username' => $username,
            'email' => $email,
            'password' => Hash::make($password),
            'role_id' => $roleID,
        ]); 

        return response()->json([
            'status' => true,   
            'message'=>"User successfully registered",
            'data' => $users
        ],201);
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
}
