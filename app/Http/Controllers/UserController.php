<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
    public function add()
    {
        $res = User::create([
            'name'=>'李使命',
            'password'=>md5('123456'),
            'email'=>'757038689@qq.com',
        ]);

        if ($res) {
            echo 'ok';
        }
    }

    public function find()
    {

        $res = User::find(['id'=>1]);
        echo '<pre>';
        print_r($res);
    }
}
