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
<div class="form-conatiner template-conatiner">
    @include('templates.pdfbtn')
    @include('templates.html.t1')
</div>
@endsection