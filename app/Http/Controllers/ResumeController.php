<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Request;

class ResumeController extends Controller
{
    private $basic ='basic';
    private $work ='work';
    private $education ='education';
    private $skill ='skill';
    private $reference ='reference';
    private $summary ='summary';

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getBasics()
    {
        if (Session::has($this->basic)) {
            $data = Session::get($this->basic);
            return view('resume.forms.basic')->with('input', $data);
        }
        return view('resume.forms.basic');
    }

    public function setBasics(Request $request)
    {
        Session::put($this->basic, $request->all());
        return redirect()->route('resume.get.works');
    }
    
    public function getWorks()
    {
        if (Session::has($this->work)) {
            $data = Session::get($this->work);
            return view('resume.forms.works')->with('input', $data);
        }
        return view('resume.forms.works');
    }
    
    public function setWorks(Request $request)
    {
        Session::put($this->work, $request->all());
        return redirect()->route('resume.get.educations');
    }

    public function getEducations()
    {
        if (Session::has($this->education)) {
            $data = Session::get($this->education);
            return view('resume.forms.educations')->with('input', $data);
        }
        return view('resume.forms.educations');
    }

    public function setEducations(Request $request)
    {
        Session::put($this->education, $request->all());
        return redirect()->route('resume.get.skills');
    }

    public function getSkills()
    {
        if (Session::has($this->skill)) {
            $data = Session::get($this->skill);
            return view('resume.forms.skills')->with('input', $data);
        }
        return view('resume.forms.skills');
    }

    public function setSkills(Request $request)
    {
        Session::put($this->skill, $request->all());
        return redirect()->route('resume.get.references');
    }

    public function getReferences()
    {
        if (Session::has($this->reference)) {
            $data = Session::get($this->reference);
            return view('resume.forms.references')->with('input', $data);
        }
        return view('resume.forms.references');
    }

    public function setReferences(Request $request)
    {
        Session::put($this->reference, $request->all());
        return redirect()->route('resume.get.summary');
    }

    public function getSummary()
    {
        if (Session::has($this->summary)) {
            $data = Session::get($this->summary);
            return view('resume.forms.summary')->with('input', $data);
        }
        return view('resume.forms.summary');
    }

    public function setSummary(Request $request)
    {
        Session::put($this->summary, $request->all());
        $template = Session::get('template');
        return redirect()->route('resume.show',$template);
    }
}
