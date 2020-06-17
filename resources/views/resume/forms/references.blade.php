@extends('resume.master')

@section('resume-form')
<form action="{{route('resume.set.references')}}" method="post">
  @csrf
  <div class="form-group">
    <label for="name">Referees' Name</label>
    <input type="text" class="form-control" name="name" id="name" value="{{ isset($input['name']) ? $input['name'] : ''  }}" placeholder="Enter referees' name">
  </div>
  <div class="form-group">
    <label for="reference">References</label>
    <textarea class="form-control" name="reference" id="reference" rows="3">{{ isset($input['reference']) ? $input['reference'] : ''  }}</textarea>
  </div>
  <a href="{{route('resume.get.skills')}}" class="btn btn-primary">Back</a>
  <button type="submit" class="btn btn-primary">Next</button>
</form>
@endsection