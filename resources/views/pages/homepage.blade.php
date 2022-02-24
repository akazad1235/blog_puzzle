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
    <div class="post-preview">
        <a href="single-post.html">
           <div class="list-thumb" style="background-image: url(img/news/one.jpg);">
             <div></div>
           </div>
           <h2 class="post-title"> In consequat lacus nec suscipit ullamcorper. Cras viverra rhoncus est molestie sollicitudin.</h2>
           </a>
           <p class="post-meta">Posted by <a href="javascript:void(0)">Author Name</a> on September 24, 2016</p>
   </div>
         <hr>
    <div id="post-list">



    </div>




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
    axios.get('http://127.0.0.1:8080/api/all/blog/post')
    .then(function (res) {
        console.log(res.data);
       let getData = res.data.data;
        for (let i = 0; i <getData.length; i++) {

            var list =  document.getElementById('post-list')
            var div = document.createElement('div');
            var div1 = document.createElement('div');
            var div2 = document.createElement('div');
            var h2 = document.createElement('h2');
            var p = document.createElement('p');
            div.setAttribute('class', 'post-preview');

            var a = document.createElement('a');
                a.setAttribute('href', 'http://www.azad.com');
                div1.setAttribute('class', 'list-thumb')
                div1.setAttribute('style', `background-image: url(https://d5nunyagcicgy.cloudfront.net/external_assets/hero_examples/hair_beach_v391182663/original.jpeg)`)
                h2.setAttribute('class', 'post-title')
                h2.innerHTML = 'dslkfjdlskfjldskajfldskfjl';
                p.setAttribute('class', 'post-meta')
                p.innerHTML = `Posted by ak azad on 3433`

            a.appendChild(div1)
            div1.appendChild(div2)
            a.appendChild(h2)

            div.appendChild(a)
            list.appendChild(div);
            div.appendChild(p)

        console.log(a);



        }
    })
    .catch(function (error) {
    console.log(error);
});
</script>

