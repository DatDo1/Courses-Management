<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserFormRequest;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.login');
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
        $inputData = $request->all();
        $usersData = Account::all();
        $messageWPw = 'Email or passwords are incorrect';


        foreach($usersData as $user){
            if($user->email == $inputData['email']){
                if(Hash::check($inputData['password'], $user->password)){
                    if($user->role_id == 1) {
                        $request->session()->put('role_id', $user->role_id);
                        $request->session()->put('email', $user->email);
                        return redirect('/admin/list-account');
                    }
                }else {
                    Alert::error('Error', $messageWPw);
                    return redirect('/admin/login');
                }
            }else {
                Alert::error('Error', $messageWPw);
                return redirect('/admin/login');
            }
        }
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
    public function destroy(Request $request)
    {
        if (session()->has('email')) {
            session()->pull('email');
        }
        return redirect('admin/login');
    }


}
