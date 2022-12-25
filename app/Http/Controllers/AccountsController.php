<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountsController extends Controller
{
    public function account()
    {
        return view('admin.pages.account');
    }
}
