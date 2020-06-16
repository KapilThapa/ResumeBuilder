@extends('layouts.app')

@section('content')
<div class="form-conatiner">
    <h2 class="text-center">Select your desired template</h2>
    <p class="text-center">
        Pick one of the theme that fits your personality. Get a professional resume that will lead the charge on your next job application. 
    </p>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <a href="{{route('set.template','1')}}">
                <div class="card position-relative {{ $template == "1" ? 'card-selected' : '' }}">
                    <img class="card-img-top" src="{{asset('image/template/template1.png')}}" alt="Card image cap">
                    <div class="template-cover">
                        <button class="btn btn-primary btn-hydrogen">Try this theme.</button>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6">
            <a href="{{route('set.template','2')}}">
                <div class="card position-relative {{ $template == "2" ? 'card-selected' : '' }}">
                    <img class="card-img-top" src="{{asset('image/template/template2.png')}}" alt="Card image cap">
                    <div class="template-cover">
                        <button class="btn btn-primary btn-hydrogen">Try this theme.</button>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection