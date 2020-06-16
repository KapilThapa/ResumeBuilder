@extends('resume.master')

@section('resume-form')
<form action="{{route('resume.set.basics')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="name">Full Name</label>
        <input type="text" class="form-control" name="name" id="name" value="{{ isset($input['name']) ? $input['name'] : ''  }}" placeholder="Enter your first name">
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="phone">Phone no.</label>
                <input type="text" class="form-control" name="phone" id="phone" value="{{ isset($input['phone']) ? $input['phone'] : ''  }}" placeholder="e.g. 9125554321">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" id="email" value="{{ isset($input['email']) ? $input['email'] : ''  }}" placeholder="Enter your email address">
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" name="address" id="address" value="{{ isset($input['address']) ? $input['address'] : ''  }}" placeholder="Enter your address">
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" class="form-control" name="city" id="city" value="{{ isset($input['city']) ? $input['city'] : ''  }}" placeholder="e.g. New York">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="country">Country</label>
                <select class="form-control" name="country" id="country">
                    <option value="" disabled selected>Select your Country</option>
                    @include('resume.forms.country.options')
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="postalCode">Postal Code</label>
                <input type="text" class="form-control" name="postalCode" id="postalCode" value="{{ isset($input['postalCode']) ? $input['postalCode'] : ''  }}" placeholder="e.g. 94115">
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Next</button>
</form>
@endsection