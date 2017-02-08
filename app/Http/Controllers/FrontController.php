<?php

namespace retica\Http\Controllers;

use Illuminate\Http\Request;

use app\Http\Middleware;

class FrontController extends Controller
{
    public function __construct()
    {
      
    }
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function noticias()
    {
      return view('noticias');
    }

    public function login()
    {
      return view('login');
    }

    public function admin()
    {
      return view('admin/index');
    }
    public function foro()
    {
      return view('foro');
    }
}
