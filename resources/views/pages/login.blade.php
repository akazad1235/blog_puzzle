@extends('components.app')
@section('content')
<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 mx-auto mt-5">
    <!-- Contact form -->
    <form name="sentMessage" action="{{url('api/user/login')}}" method="post" id="contactForm" style="margin-top:100px">
        <p class="mt-5 text-center">User Login</p>
      <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
          <input type="text" class="form-control" placeholder="Email Address" name="email" id="email"  data-validation-required-message="Please enter your email address.">
          <p class="help-block text-danger"></p>
        </div>
      </div>
      <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
          <input type="password" class="form-control" placeholder="Password" name="password" required data-validation-required-message="passowrd">
          <p class="help-block text-danger"></p>
        </div>
      </div>
      <br>
      <!-- Submit Status -->
      <div id="success"></div>
      <div class="row">
        <div class="form-group col-xs-12">
          <button type="submit" class="btn btn-default">Login</button>
        </div>
      </div>
    </form>
  </div>
@endsection
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    axios.get('api/user/register')
      .then(function (res) {
            console.log(res.data);
        })
        .catch(function (error) {
        console.log(error);
    });
</script>
