@extends('resume.master')

@section('resume-form')
<form action="{{route('resume.set.works')}}" method="post">
    @csrf
    <div class="row">
        <div class="col-7">
            <div class="form-group">
                <label for="position">Job Title</label>
                <input type="text" class="form-control" name="position" id="position"
                    value="{{ isset($input['position']) ? $input['position'] : ''  }}" placeholder="Enter your job title">
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="company">Employer</label>
        <input type="text" class="form-control" name="company" id="company" value="{{ isset($input['company']) ? $input['company'] : ''  }}" placeholder="Enter the companies name">
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
        <label for="summary">Job Description</label>
        <textarea class="form-control" name="summary" id="summary" rows="3">{{ isset($input['summary']) ? $input['summary'] : ''  }}</textarea>
    </div>
    <a href="{{route('resume.get.basics')}}" class="btn btn-primary">Back</a>
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