<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use Response;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function admin()
    {
        return view('admin.PageAdmin');
    }

    public function stagiaire()
    {
        return view('stagiaires.PageStagiaire');
    }

    public function pdf()
    {
        
         return Response::make(file_get_contents('images/CVOUADIIESSAFIStage.pdf'), 200, [
                        'content-type'=>'application/pdf',
                    ]);
    }
}
