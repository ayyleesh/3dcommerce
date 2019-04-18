@extends('layouts.app')
@include('partials.sidebar')

@section('title')
Manage Profile
@endsection

@section('content')
<div class="container h-75">
  <div class="row justify-content-center">
    <div class="col-md-8 offset-md-2">
      @if (session()->has('success_message'))
        <div class="alert alert-success">
          {{session()->get('success_message')}}
        </div>
      @endif
      <h3>Account Settings</h3>
      <form action="{{route('users.update')}}" method="POST">
        @method('patch')
        {{csrf_field()}}
        <div class="md-form form-group">
          <input type="text" class="form-control" id="name" name="name" value="{{old('name', $user->name)}}">
          <label for="name">New name</label>
        </div>
        <div class="md-form form-group">
          <input type="text" class="form-control" id="email" name="email" value="{{old('email', $user->email)}}">
          <label for="email">New Email Address</label>
        </div>
        <div class="md-form form-group">
          <input type="password" class="form-control" id="password" name="password" value="">
          <label for="password">New Password</label>
          <small>leave blank to keep old password</small>
        </div>
        <div class="md-form form-group">
          <input type="password" class="form-control" id="confirmpassword" name="password_confirmation" value="">
          <label for="confirmpassword">Confirm Password</label>
        </div>
        <div class="md-form form-group">
          <button type="submit" class="btn btn-primary btn-lg">Update Account Info</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
