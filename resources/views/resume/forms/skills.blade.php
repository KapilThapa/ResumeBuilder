@extends('resume.master')

@section('resume-form')
<form action="{{route('resume.set.skills')}}" method="post">
    @csrf
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="name">Skill title</label>
                <input type="text" class="form-control" name="name" id="name"
                    value="{{ isset($input['name']) ? $input['name'] : ''  }}" placeholder="Enter skill title">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="level">Level</label>
                <select class="form-control" name="level" id="level">
                    <option value="" disabled>Select skill level</option>
                    <option value="Beginner" selected>Beginner</option>
                    <option value="Intermediate">Intermediate</option>
                    <option value="Advance">Advance</option>
                </select>
            </div>
        </div>
    </div>
    <a href="{{route('resume.get.educations')}}" class="btn btn-primary">Back</a>
    <button type="submit" class="btn btn-primary">Next</button>
</form>
@endsection