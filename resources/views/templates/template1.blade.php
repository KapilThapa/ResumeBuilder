@extends('layouts.app')

@push('style')
<link rel="stylesheet" href="{{asset('css/template1.css')}}">
<style>
    #cv {
        width: 90%;
        max-width: 800px;
        background: #f3f3f3;
        margin: 30px auto;
    }
</style>
@endpush

@section('content')
<div class="container">
    <div class="col-lg-10 mx-auto">
        <div class="form-conatiner">
            @include('templates.pdfbtn')
            @include('templates.html.t1')
        </div>
    </div>
</div>
@endsection