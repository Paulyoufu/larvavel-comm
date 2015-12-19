<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


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
    public function register()
    {
        return view('users.register');
    }

    public function getLogin() {
        $this->layout->content = View::make('users.login');
    }
    public function postSignin() {
        if (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')))) {
            return Redirect::to('users/dashboard')->with('message', '欢迎登录');
        } else {
            return Redirect::to('users/login')->with('message', '用户名或密码错误')->withInput();
        }
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
    public function store(Requests\UserRegisterRequest $request)
    {
        //dd($request->all());
        User::create(array_merge($request->all(),['avatar'=>'/image/df.png']));
        //send mail
        return redirect('/');
    }

    public function  login()
    {
        return view('users.login');
    }
    public function signin(Requests\UserLoginRequst $request)
    { //dd(\Auth::user());
        if(\Auth::attempt(['email'=>$request->get('email'),
            'password'=>$request->get('password')])){
         //   echo \Auth::check();
          //  echo \Auth::user()->name;
         return redirect('/');
       }
       \Session::flash('user_login_failed',"密码不正确邮箱没验证");
       return redirect('/users/login')->withInput();
    }

   // public function check()  {   return ! is_null($this->user());  }
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
    public function logout()
    {
        \Auth::logout();
        return redirect('/');
    }
}
