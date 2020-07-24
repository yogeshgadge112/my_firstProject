<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class login extends Controller
{
    public function userlogin(Request $req)
    { 
    	$post = $req->input();

    	//return $post['username'];
    	//$user = DB::select('select * from tbl_users');
    	$user = DB::table('tbl_users')
    			->where('email_id',$post['username'])
    			->where('pass', base64_encode($post['password']))
    			->get();

    	if(count($user)>0)
    		return 1;
    	else
    		return 0;

    }
}