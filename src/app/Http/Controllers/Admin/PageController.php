<?php

namespace Untrefmedia\UMPages\App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Untrefmedia\UMAdmin\App\Http\Controllers\Controller;

class PageController extends Controller
{

    public function __construct()
    {



    }
    public function index(){
        dd('asdf');


        return view("umadmin::admin.dashboard");

    }





}
