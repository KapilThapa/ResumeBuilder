@extends('resume.master')

@section('resume-form')
<form action="{{route('resume.set.educations')}}" method="post">
    @csrf
    <div class="row">
        <div class="col-7">
            <div class="form-group">
                <label for="institution">School Name</label>
                <input type="text" class="form-control" name="institution" id="institution"
                    value="{{ isset($input['institution']) ? $input['institution'] : ''  }}" placeholder="Enter your school name">
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="studyType">Degree</label>
        <select class="form-control" name="studyType" id="studyType">
            <option value="" selected disabled>Select a degree</option>
            <option value="High School Diploma">High School Diploma</option>
            <option value="GED">GED</option>
            <option value="Associate of Arts">Associate of Arts</option>
            <option value="Associate of Science">Associate of Science</option>
            <option value="Associate of Applied Science">Associate of Applied Science</option>
            <option value="Bachelor of Arts">Bachelor of Arts</option>
            <option value="Bachelor of Science">Bachelor of Science</option>
            <option value="BBA">BBA</option>
            <option value="Master of Arts">Master of Arts</option>
            <option value="Master of Science">Master of Science</option>
            <option value="MBA">MBA</option>
            <option value="J.D.">J.D.</option>
            <option value="M.D.">M.D.</option>
            <option value="Ph.D.">Ph.D.</option>
        </select>
    </div>
    <div class="form-group">
        <label for="area">Field of Study</label>
        <input type="text" class="form-control" name="area" id="area" value="{{ isset($input['area']) ? $input['area'] : ''  }}" placeholder="e.g. Engineering">
    </div>
    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" name="address" id="address" value="{{ isset($input['address']) ? $input['address'] : ''  }}" placeholder="Enter the companies address">
    </div>
    <div class="form-group">
        <label for="startDate">Started Date</label>
        <input type="text" class="form-control monthDate" name="startDate" value="{{ isset($input['startDate']) ? $input['startDate'] : ''  }}" placeholder="">
    </div>
    <div class="form-group">
        <label for="endDate">End Date</label>
        <input type="text" class="form-control monthDate" name="endDate" value="{{ isset($input['endDate']) ? $input['endDate'] : ''  }}" placeholder="">
    </div>
    <div class="form-group">
        <label for="gpa">GPA</label>
        <input type="text" class="form-control" name="gpa" id="gpa" value="{{ isset($input['gpa']) ? $input['gpa'] : ''  }}" placeholder="Enter the GPA earned">
    </div>
    <button type="submit" class="btn btn-primary">Next</button>
</form>
@endsection

@push('scripts')
<script>
    $(document).ready(function(){
        $('.monthDate').datepicker();
    });
</script>
@endpush