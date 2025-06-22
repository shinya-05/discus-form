<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Noto+Sans+JP&display=swap" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>

<body>
  <!-- Navigation Bar -->
  <nav>
    <ul>
      <li><a href="#intro">Greenery</a></li>
      <li><a href="#rooms">Havest</a></li>
      <li><a href="#access">Garden Soil</a></li>
    </ul>
  </nav>

  <!-- Hero Section with Slider -->
  <header class="hero">
    <div class="slider">
      <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?auto=format&fit=crop&w=1600&q=80" alt="slide1">
      <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?auto=format&fit=crop&w=1600&q=80" alt="slide1">
      <img src="https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?auto=format&fit=crop&w=1600&q=80" alt="slide3">
      <img src="https://images.unsplash.com/photo-1560347876-aeef00ee58a1?auto=format&fit=crop&w=1600&q=80" alt="slide4">
      <img src="https://images.unsplash.com/photo-1535827841776-24afc1e255ac?auto=format&fit=crop&w=1600&q=80" alt="slide5">
    </div>
    <div class="overlay" data-aos="fade-up">
      <h1 class="hero-title">Green Roots Market</h1>
      <p class="hero-subtitle">心ほどける、観葉植物の世界</p>
    </div>
  </header>

  <!-- Hotel Introduction -->
  <section class="intro" id="intro" data-aos="fade-up">
    <div class="container">
      <h2>Green Roots Marketについて</h2>
      <p>Green Roots Marketは、千葉郊外の洗練された畑で採れた農作物と心を込めて１から育てた観葉植物を販売しています。観葉植物のプロが選んだ土壌も販売中。見るだけで癒される植物達、心ほどけるひとときをお過ごしください。</p>
    </div>
  </section>

  <!-- Room Introduction -->
  <section class="rooms" id="rooms" data-aos="fade-up">
    <div class="container">
      <h2>観葉植物のご案内</h2>
      <div class="room-list">
        <div class="room" data-aos="zoom-in">
          <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=800&q=80" alt="Deluxe Room">
          <h3>テトラ</h3>
          <p>広々とした空間で、くつろぎの時間を。</p>
        </div>
        <div class="room" data-aos="zoom-in">
          <img src="https://images.unsplash.com/photo-1551776235-dde6d4829809?auto=format&fit=crop&w=800&q=80" alt="Suite Room">
          <h3>20種類の紫陽花</h3>
          <p>贅沢な空間で特別なひとときを。</p>
        </div>
      </div>
    </div>
  </section>

  <!-- News Section -->
  <section class="news" id="news" data-aos="fade-up">
    <div class="container">
      <h2>最新ニュース</h2>
      <div class="news-list">
        <div class="news-item" data-aos="fade-right">
          <img src="https://images.unsplash.com/photo-1606312619344-abc2f4aa3eac?auto=format&fit=crop&w=800&q=80" alt="News 1">
          <div class="news-content">
            <h3>新しい商品がオープン</h3>
            <p>2025年5月より、新しく『農家が選ぶ、激選！された土』の販売が決定致しました。長期に渡り、試行錯誤を重ね、ついに販売できることになりました！自信ありです！！</p>
          </div>
        </div>
        <div class="news-item" data-aos="fade-left">
          <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?auto=format&fit=crop&w=800&q=80" alt="News 2">
          <div class="news-content">
            <h3>ラウンジリニューアル完了</h3>
            <p>畑の面積と農作物の種類が増えました。更に洗練された世界をお届けいたします。</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="blog" id="blog" data-aos="fade-up">
    <div class="container">
      <h2>ブログ</h2>
      @foreach($posts as $post)
        <div class="blog-item" data-aos="fade-up">
          <img src="{{ $post->image_path ? asset('storage/'.$post->image_path) : 'https://via.placeholder.com/300x200?text=No+Image' }}" alt="{{ $post->title }}">
          <div class="blog-content">
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->content }}</p>
            <p class="blog-date">投稿日：{{ $post->created_at->format('Y年m月d日') }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </section>

  <!-- Access Section -->
  <section class="access" id="access" data-aos="fade-up">
    <div class="container">
      <h2>アクセス</h2>
      <p>〒100-0005 東京都千代田区丸の内1-1-1<br>JR東京駅 徒歩5分</p>
      <img src="https://images.unsplash.com/photo-1587285843179-18426b4eaf83?auto=format&fit=crop&w=1200&q=80" alt="Map">
    </div>
  </section>

  <footer>
    <p>&copy; 2025 Green Roots Market</p>
  </footer>

  <div class="reserve-btn" data-aos="fade-up">今すぐ買う</div>

  <script>
    AOS.init({
      duration: 1000,
      once: true
    });
  </script>
</body>
</html>
