@extends('layouts.app')
@section('title', 'Create Account- STUDBUD')
@section('content')
<div class="container">
    <div class="card">
    <div class="card-header">
        STUDBUD
    </div>
    <div class="card-body">
        <h5 class="card-title">Create Account</h5>
        <p>Please fill in details correctly</p>
        <p class="card-text">
            <div class="alert alert-warning" role="alert">
                A simple warning alert—check it out!
            </div>
        </p>
            <form>
        <div class="form-row">
            <div class="form-group col-md-4">
            <label for="inputEmail4">Surname</label>
            <input type="text" class="form-control" id="inputSurname" placeholder="Surname...">
            </div>
            <div class="form-group col-md-4">
            <label for="inputPassword4">First Name</label>
            <input type="text" class="form-control" id="inputMiddleName" placeholder="Middle Name...">
            </div>
            <div class="form-group col-md-4">
            <label for="inputPassword4">First Name</label>
            <input type="text" class="form-control" id="inputFirstName" placeholder="First Name...">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
            </div>
        </div>
        <div class="form-row">
            <label for="inputAddress2">Course of Study</label>
            <input type="text" class="form-control" id="courseStuudy" placeholder="Course of Study">
            <label for="inputAddress2" class="col-md-3">Address 2</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
            <label for="inputState">Gender</label>
            <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option>Male</option>
                <option>Female</option>
                <option>I'd rather not say</option>
            </select>
            </div>
            <div class="form-group col-md-3">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-4">
            <label for="inputState">State</label>
            <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option>...</option>
            </select>
            </div>
            <div class="form-group col-md-2">
            <label for="inputZip">Zip</label>
            <input type="text" class="form-control" id="inputZip">
            </div>
        </div>
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                Confirm Submission
            </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
    </div>
    </div>
</div>
@endsection