@extends('layouts.app_body')
@section('header')
@include('components.header_user')
<!-- end:header-top -->
@include('components.header_user_profile')
@endsection
@section('content')
<div class="profile-container-edit">
  <h1>Edit Profile</h1>
  <hr>
  <div class="row">
    <!-- left column -->
    <div class="col-md-3">
      <div class="text-center">
        <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
        <h6>Upload a different photo...</h6>
        <input type="file" name="avatar" class="form-control">
      </div>
    </div>

    <!-- edit form column -->
    <div class="col-md-9 personal-info">
      <h3>Personal info</h3>
      @if($user)
      <form class="form-horizontal" action="{{ route('users.update') }}" method="POST" role="form">
        {{ csrf_field() }}
        <div class="form-group">
          <label class="col-lg-3 control-label">Name:</label>
          <div class="col-lg-8">
            <input class="form-control" type="text" value="{{ $user->name }}" name="name">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Email:</label>
          <div class="col-lg-8">
            <input class="form-control" type="text" value="{{ $user->email }}" name="email">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Current password:</label>
          <div class="col-md-8">
            <input class="form-control" type="password" value="11111122333">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">New password:</label>
          <div class="col-md-8">
            <input class="form-control" type="password" value="11111122333">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Confirm password:</label>
          <div class="col-md-8">
            <input class="form-control" type="password" value="11111122333">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label"></label>
          <div class="col-md-8">
            <input type="button" class="btn btn-primary" value="Save Changes">
            <span></span>
            <input type="reset" class="btn btn-default" value="Cancel">
          </div>
        </div>
      </form>
      @endif
    </div>
  </div>
</div>
@endsection
