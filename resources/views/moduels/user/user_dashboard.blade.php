@extends('components.app')
@section('content')
<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 mx-auto mt-5">
    <h2 class="mt-5 text-center" style="margin:100px">User Dashbaord</h2>
    <!-- Contact form -->
    <form name="sentMessage" action="{{url('api/user/blog/post', 42)}}" method="post" id="contactForm" style="margin-top:30px" enctype="multipart/form-data">
        <p class="mt-5 text-center">Add Yur Blog Post</p>
      <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
          <input type="text" class="form-control" placeholder="Post Title" name="title" id="title"  data-validation-required-message="Please enter your email address.">
          <p class="help-block text-danger"></p>
        </div>
      </div>
      <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
          <input type="file" class="form-control" placeholder="" name="blog_image" id="img"  data-validation-required-message="Please enter your email address.">
          <p class="help-block text-danger"></p>
        </div>
      </div>
      <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
          <input type="file" class="form-control" name="miltiple__blog_image" id="img" multiple data-validation-required-message="Please enter your image.">
          <p class="help-block text-danger"></p>
        </div>
      </div>
      <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
         <textarea name="description" placeholder="Post Details"></textarea>
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
    <div class="blog-list">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
    </div>
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
