<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>投稿編集</title>
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>

<body>
  <div class="admin-container">
    <header class="admin-header">
      <h1>投稿編集</h1>
    </header>

    <section class="form-section">
      <form action="{{ route('admin.blog.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>タイトル
          <input type="text" name="title" value="{{ old('title', $post->title) }}" required>
        </label>
        <label>本文
          <textarea name="content" rows="6" required>{{ old('content', $post->content) }}</textarea>
        </label>
        <label>現在の画像</label>
        <div>
          <img src="{{ $post->image_path ? asset('storage/' . $post->image_path) : 'https://via.placeholder.com/150x100?text=No+Image' }}" alt="" style="max-width: 200px;">
        </div>
        <label>新しい画像（任意）
          <input type="file" name="image">
        </label>
        <button type="submit" class="submit-btn">更新する</button>
      </form>
    </section>
  </div>
</body>

</html>
