@extends('layouts.master')

@section('title')
    Welcome!!
@endsection


@section('content')
    <div class="row">
        <div class="col-md-6">
            <h3>Sign In</h3>
            <form action="#" method="POST">
                <div class="form-group">
                    <label for="email">Your email:</label>
                    <input type="text" id="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Your password:</label>
                    <input type="password" id="password" name="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
          <div class="col-md-6">
            <h3>Sign Up</h3>
            <form action="#" method="POST">
                <div class="form-group">
                    <label for="email">Your email:</label>
                    <input type="text" id="email" name="email" class="form-control">
                </div>
                 <div class="form-group">
                    <label for="name">Your name:</label>
                    <input type="text" id="name" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Your password:</label>
                    <input type="password" id="password" name="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection