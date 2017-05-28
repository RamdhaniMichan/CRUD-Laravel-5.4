<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Project1Model;

class Project1Controller extends Controller
{
	public function index()
	{
		return view('Project1/index');
	}
	public function auth(Request $request)
	{
		$username = $request['username'];
		$password = $request['password'];
		$user = Project1Model::where('username_user',$username)->where('password_user',$password)->first();
		if($user)
		{
			return 
			$user->username_user."---".
			$user->password_user."---".
			$user->alamat_user."---".
			$user->foto_user;
		}
		else
		{
			return "data tidak ada";
		}
	}
}