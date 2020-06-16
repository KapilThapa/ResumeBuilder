@extends('layouts.app')
@push('style')
<style>
    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .content {
        text-align: center;
    }

    .m-b-md {
        margin-bottom: 30px;
    }

    .font-xl {
        font-size: 30px;
    }

    
</style>
@endpush
@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="m-b-md">
            <p class="text-white font-xl">Create your professional resume in notime.</p>
            <a href="{{route('get.template')}}" class="btn btn-lg btn-primary btn-hydrogen text-uppercase">Start Building Your Resume</a>
        </div>
    </div>
</div>
@endsection