@extends('layouts.app')

@section('content')
<div class="form-conatiner">
    @include('resume.tabs')
    @yield('resume-form')
</div>
@endsection