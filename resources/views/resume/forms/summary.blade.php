@extends('resume.master')

@section('resume-form')
<form action="{{route('resume.set.summary')}}" method="post">
  @csrf
  <div class="form-group">
    <label for="summary">Summary</label>
    <textarea class="form-control" name="summary" id="summary" rows="3">{{ isset($input['summary']) ? $input['summary'] : ''  }}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Finish</button>
</form>
@endsection