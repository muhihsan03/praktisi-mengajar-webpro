@extends('layout')

@section('main')
    <!-- main -->
    <main class="container">
      <section class="single-blog-post">
        <h1>{{$post->title}}</h1>

        <p class="time-and-author">
          {{$post->created_at->diffForHumans()}}
          <span>Written By {{$post->user->name}}</span>
        </p>

        <div class="single-blog-post-ContentImage" data-aos="fade-left">
          <img src="{{ asset($post->imagePath) }}" alt="" />
        </div>

        <div class="about-text">
         {!!$post->body!!}
        </div>
      </section>
      <div class="comment-area mt-4">

        @if (session('message'))
            <h3 class="alert alert-warning mb-3">{{ session('message') }}</h3>
          
        @endif
        <br>
        <br>
          <div class="card card-body">
              <h1 class="card-title">Leave a Comments</h1>
              <form action="{{ url('comments') }}" method="POST">
                @csrf
                <input type="hidden" name="post_slug" value="{{$post->body}}">
                  <textarea name="comment_body" class="form-control" rows="10"></textarea>
                  <button type="submit" class="btn btn-primary mt-3">Submit</button>
              </form>
        </div>
        <br>
        <br>
        <div class="card card body shadow-sm mt-3">
          <div class="detail-area">
            <h3 class="user-name mb-1">
              User 1
              <small class="ms-3 text-primary">Commented on: 3-8-2022</small>
            </h3>
            <br>
            <br>
            
            <p class="user-comment mb-1">
              menurut saya artikel ini cukup berkaitan dengan permasalahan narkoba di indonesia
            </p>
          </div>
          <br>
          <br>
          <div>
            <a href="" class="btn btn-primary btn-sm me-2 ">Edit</a>
            
            <a href="" class="btn btn-danger btn-sm me-2">Delete</a>
          </div>
        </div>
      </div>
      
      <section class="recommended">
        <p>Related</p>
        <div class="recommended-cards">
        @foreach ($relatedPosts as $relatedPost )
        <a href="">
          <div class="recommended-card">
            <img src="{{asset($relatedPost->imagePath)}}" alt="" loading="lazy" />
            <h4>
              {{$relatedPost->title}}
            </h4>
          </div>
        </a>
        @endforeach
        </div>
      </section>
    </main>
@endsection