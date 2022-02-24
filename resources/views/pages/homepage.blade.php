@extends('components.app')

@section('banner')
<header class="intro-header" style="background-image: url('img/white-image.jpg')">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
          <div class="site-heading">
            <h1>Modern Blog</h1>
            <span class="subheading">e-pulse Blog Powered by KonnectCode</span> </div>
        </div>
      </div>
    </div>
</header>

@endsection
@section('content')
<div class="col-md-8 list-container">
    <!--Post -->
    <div class="post-preview"> <a href="single-post.html">
      <div class="list-thumb" style="background-image: url(img/news/one.jpg);">
        <div></div>
      </div>
      <h2 class="post-title"> In consequat lacus nec suscipit ullamcorper. Cras viverra rhoncus est molestie sollicitudin.</h2>
      </a>
      <p class="post-meta">Posted by <a href="javascript:void(0)">Author Name</a> on September 24, 2016</p>
    </div>
    <hr>
    <!--Post -->
    <div class="post-preview"> <a href="single-post.html">
      <div class="list-thumb" style="background-image: url(img/news/two.jpg);">
        <div></div>
      </div>
      <h2 class="post-title"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a ipsum in. </h2>
      </a>
      <p class="post-meta">Posted by <a href="javascript:void(0)">Author Name</a> on September 18, 2016</p>
    </div>
    <hr>
    <!--Post -->
    <div class="post-preview"> <a href="single-post.html">
      <div class="list-thumb" style="background-image: url(img/news/three.jpg);">
        <div></div>
      </div>
      <h2 class="post-title"> In consequat lacus nec suscipit ullamcorper. Cras viverra rhoncus est molestie sollicitudin. </h2>
      </a>
      <p class="post-meta">Posted by <a href="javascript:void(0)">Author Name</a> on August 24, 2016</p>
    </div>
    <hr>
    <!--Post -->
    <div class="post-preview"> <a href="single-post.html">
      <div class="list-thumb" style="background-image: url(img/news/four.jpg);">
        <div></div>
      </div>
      <h2 class="post-title"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a ipsum in. </h2>
      </a>
      <p class="post-meta">Posted by <a href="javascript:void(0)">Author Name</a> on July 8, 2016</p>
    </div>
    <hr>
    <!-- Pager -->
    <ul class="pager">
      <li class="prev"> <a href="javascript:void(0)">&larr; New Posts</a> </li>
      <li class="next"> <a href="javascript:void(0)">Older Posts &rarr;</a> </li>
    </ul>
  </div>
@endsection
@section('sidebar')
@include('components.sidebar')
@endsection
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
        axios.post('api/user/register', {
            firstName: 'Fred',
            lastName: 'Flintstone'
        })
      .then(function (res) {
            console.log(res.data);
        })
        .catch(function (error) {
        console.log(error);
    });
</script>

