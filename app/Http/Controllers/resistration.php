<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class resistration extends Controller
{
    public function userResistration(Request $req)
    {
    	$post = $req->input();

    	$user = DB::table('tbl_users')
    			->insert(
    				[
    					'f_name'=>$post['f_name'],
    					'l_name'=>$post['l_name'],
    					'pass'=> base64_encode($post['password']),
    					'email_id'=>$post['email_id'],
    					'contact_no'=>$post['contact_no'],
    					'added_date'=>date("Y-m-d H:i:s"),
    				]	
    			);

    	if($user >0)
    		return $user;
    	else
    		return 0;
    }
}