@extends('layout')

@section('main')
  
    <!-- main -->
    <main class="container">
      <section class="single-blog-post">
        <h1>About Me</h1>
        <div class="single-blog-post-ContentImage" data-aos="fade-left">
          <img src="{{asset('images/pic3.jpg')}}" alt="" />
        </div>

        <div>
          <p class="about-text">
            Selamat datang di blog pribadi kami! Kami adalah sekelompok individu yang berbagi hasrat dan semangat untuk berbagi pengetahuan, pengalaman, dan inspirasi melalui tulisan. Dalam artikel "Tentang Kami" ini, kami mengajak Anda untuk mengenal kami lebih dekat. Menjelajahi latar belakang, minat, dan tujuan kami dalam menulis blog ini. Kami percaya bahwa melalui cerita, informasi, dan pandangan kami, kita dapat saling memotivasi, belajar, dan tumbuh bersama. Temukan apa yang mendorong kami untuk menulis, nilai-nilai yang kami anut, serta bagaimana kami berharap dapat memberikan dampak positif pada komunitas online. Selamat bergabung dengan kami dalam perjalanan inspiratif ini!
          </p>
        </div>
      </section>
    </main>
@endsection