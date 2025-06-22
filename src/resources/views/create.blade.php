<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ブログ投稿管理</title>
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>

<body>
  <div class="admin-container">
    <header class="admin-header">
      <h1>ブログ投稿管理</h1>
    </header>

    <section class="form-section">
      <h2>新規投稿</h2>
      <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>タイトル
          <input type="text" name="title" required>
        </label>
        <label>本文
          <textarea name="content" rows="6" required></textarea>
        </label>
        <label>画像
          <input type="file" name="image">
        </label>
        <button type="submit" class="submit-btn">投稿する</button>
      </form>
    </section>

    <section class="list-section">
      <h2>投稿一覧</h2>
      @foreach($posts as $post)
      <div class="post-card">
        <div class="post-thumb">
          <img src="{{ $post->image_path ? asset('storage/' . $post->image_path) : 'https://via.placeholder.com/150x100?text=No+Image' }}" alt="">
        </div>
        <div class="post-body">
          <h3>{{ $post->title }}</h3>
          <p>{{ Str::limit($post->content, 80) }}</p>
          <div class="post-actions">
            <a href="{{ route('admin.blog.edit', $post->id) }}" class="btn edit">修正</a>
            <form action="{{ route('admin.blog.destroy', $post->id) }}" method="POST" onsubmit="return confirm('削除しますか？')">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn delete">削除</button>
            </form>
          </div>
        </div>
      </div>
      @endforeach
    </section>
  </div>
</body>

</html>
