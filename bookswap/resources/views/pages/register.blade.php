@extends('master')

@section('content')

<div class="container">
    <form class="form-horizontal" action="/action_page.php">
        <div class="form-group">
            <label class="control-label col-sm-4" for="email">Email:</label>
            <div class="col-sm-4">
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="pwd">Username:</label>
            <div class="col-sm-4">
                <input type="txt" class="form-control" id="user" placeholder="Enter Username" name="user">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="pwd">Password:</label>
            <div class="col-sm-4">
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="pwd">First Name:</label>
            <div class="col-sm-4">
                <input type="txt" class="form-control" id="f_n" placeholder="First Name" name="fname">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="pwd">Last Name:</label>
            <div class="col-sm-4">
                <input type="txt" class="form-control" id="lname" placeholder="Last Name" name="lname">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-10">
                <button type="submit" class="btn btn-default">Zarejestruj się</button>
            </div>
        </div>
    </form>
</div>

@stop
