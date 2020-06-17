@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-lg-10 mx-auto">
        <div class="form-conatiner">
            @include('resume.tabs')
            @yield('resume-form')
        </div>
    </div>
</div>
@endsection