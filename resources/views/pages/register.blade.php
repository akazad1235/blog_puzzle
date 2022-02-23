@extends('components.app')
@section('content')
<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 mx-auto mt-5">

    <!-- Contact form -->
    <form name="sentMessage" id="contactForm" style="margin-top:100px">
        <p class="mt-5">User Registration form</p>
      <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
          <input type="text" class="form-control" placeholder="Name" id="name" name="name" required data-validation-required-message="Please enter your name.">
          <p class="help-block text-danger"></p>
        </div>
      </div>
      <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
          <input type="email" class="form-control" placeholder="Email Address" name="email" id="email" required data-validation-required-message="Please enter your email address.">
          <p class="help-block text-danger"></p>
        </div>
      </div>
      <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
          <input type="tel" class="form-control" placeholder="Phone Number" name="phone" id="phone" required data-validation-required-message="Please enter your phone number.">
          <p class="help-block text-danger"></p>
        </div>
      </div>
      <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
          <textarea rows="4" class="form-control" name="address" placeholder="Address" id="message" required data-validation-required-message="Please enter a message."></textarea>
          <p class="help-block text-danger"></p>
        </div>
      </div>
      <br>
      <!-- Submit Status -->
      <div id="success"></div>
      <div class="row">
        <div class="form-group col-xs-12">
          <button type="submit" class="btn btn-default">Submit</button>
        </div>
      </div>
    </form>
  </div>
@endsection
