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
    <header class="header">
        <nav class="nav">
            <div class="logo">Logo</div>
            <div class="hamburger-menu">
                <button class="burger" data-state="closed">
                  <span></span>
                  <span></span>
                  <span></span>
                </button>
              </div>
            <ul class="nav--list" data-state="closed">
                <li class="nav--item"><a href="#" class="link">ボタニカル</a> </li>
                <li class="nav--item"><a href="#" class="link">ガーデン</a> </li>
                <li class="nav--item"><a href="#" class="link">ハーベスト</a> </li>
                <li class="nav--item"><a href="#" class="link">フルーツ</a> </li>
                <li class="nav--item"><a href="#" class="link">オーガニック</a> </li>
            </ul>
        </nav>
    </header>

    <div class="main">
        <section class="hero">
            <div class="container">
                <h1 class="title text-center">Green Roots Market</h1>
                <p class="title text-center">心ほどける、観葉植物の世界</p>
            </div>
        </section>

        <section class="about section container" id="about">
            <div class="about__container grid">
                <img src="storage/about.png" alt="" class="about__img">

                <div class="about__data">
                    <h2 class="section__title about__title">
                        Green Roots Marketについて
                    </h2>

                    <p class="about__description">
                        Green Roots Marketは、千葉郊外の洗練された畑で
                        採れた農作物と心を込めて１から育てた観葉植物を販売しています。観葉植物のプロが選んだ土壌も販売中。見るだけで癒される植物達、心ほどけるひとときをお過ごしください。
                    </p>
                </div>
            </div>
        </section>

        <section class="blog" id="blog" data-aos="fade-up">
          <h2 class="section-title">ブログ</h2>
          <div class="container">
            @foreach($posts as $post)
            <div class="blog-card" data-aos="fade-up">
              <img src="{{ $post->image_path ? asset('storage/'.$post->image_path) : 'https://via.placeholder.com/300x200?text=No+Image' }}" alt="{{ $post->title }}">
              <div class="blog-info">
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
          <div class="container access-wrapper">
            <h2 class="section-title">アクセス</h2>
            <div class="access-info">
              <p>〒100-0005 東京都千代田区丸の内1-1-1<br>JR東京駅 徒歩5分</p>
            </div>
          </div>
        </section>
      </div>

<script src="app.js"></script>
    <script>
    AOS.init({
      duration: 1000,
      once: true
    });
  </script>
  <script>
  // JavaScriptによるパララックス効果
  window.addEventListener('scroll', function () {
    const scrolled = window.pageYOffset;
    const hero = document.querySelector('section.hero');
    if (hero) {
      hero.style.backgroundPosition = 'center ' + (scrolled * 0.5) + 'px';
    }
  });
</script>
</body>
</html>