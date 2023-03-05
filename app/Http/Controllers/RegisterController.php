<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserFormRequest;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Foundation\Http\FormRequest;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.Register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserFormRequest $request)
    {
        $inputData = $request->all();
        $password = $inputData['password'];
        $cfPassword = $inputData['confirm-password'];
        $messageWPw = 'Email or passwords are incorrect';

        if($password == $cfPassword){
            $isSuccess = Account::create([
                'email' => $inputData['email'],
                'password' => Hash::make($password),
                'role_id' => 1,
            ]);
        }else {
            Alert::error('Error', $messageWPw);
            return redirect('admin/register');
        }

        if ($isSuccess){
            Alert::success('Success', 'Register Successfully');
            return redirect('admin/login');
        }
        return $this->back();
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
}