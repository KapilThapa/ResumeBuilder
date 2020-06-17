@extends('layouts.app')

@push('style')
<link rel="stylesheet" href="{{asset('css/template2.css')}}">
<style>
    #inner {
        padding: 10px 80px;
        width: 90%;
        background: #f5f5f5;
        border: solid #666;
        border-width: 8px 0 2px 0;
    }
</style>
@endpush

@section('content')
<div class="container">
    <div class="col-lg-10 mx-auto">
        <div class="form-conatiner">
            @include('templates.pdfbtn')
            @include('templates.html.t2')
        </div>
    </div>
</div>
@endsection