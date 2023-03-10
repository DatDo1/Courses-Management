<?php

namespace App\Http\Controllers\api;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
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
        $password = $inputData['password'];

        foreach ($accountList as $account) {
            if($username == $account['username']) {
                if(Hash::check($password, $account->password)) {
                    return response()->json([
                        'status' => 'true',
                        'message' => 'Login Successfully!!',
                        'userID' => $account['id']
                    ],200);
                }else {
                    return response()->json([
                        'status' => 'false',
                        'message' => 'Wrong Password!!'
                    ],400);
                }
            }   
        }
        return response()->json([
            'status' => 'false',
            'message' => 'Wrong Username!!'
        ],400);
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
