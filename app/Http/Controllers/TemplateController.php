<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PDF;

class TemplateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function getTemplate(){
        $template = 0;
        if(Session::has('template')){
            $template = Session::get('template');
        }
        return view('resume.template', compact('template'));
    }

    public function setTemplate($id){
        Session::put('template', $id);
        return redirect()->route('resume.get.basics');
    }

    public function show($template){
        Session::put('template',$template);
        $data = Session::all();
        return view("templates.template$template")->with('data', $data);
    }

    public function downloadPDF(){
        $template = Session::get('template');
        $data = Session::all();
        $pdf = PDF::loadView("templates.pdf.template$template", compact('data'));
        return $pdf->download('resume.pdf');
    }
}
