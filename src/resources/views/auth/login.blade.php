<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
</head>

<body>
    <div class="main-container">
        <h1 class="main-ttl">ログイン</h1>
        <form action="/login" method="post">
        @csrf
            <div class="input-container">
                <label class="input-container__label" for="email">メールアドレス</label>
                <input class="input-container__input" type="email" name="email" value="{{ old('email') }}">
                @error('email')
                <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="input-container">
                <label class="input-container__label" for="password">パスワード</label>
                <input class="input-container__input" type="password" name="password">
                @error('password')
                <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="btn-container">
                <input type="submit" value="ログインする">
            </div>
        </form>
    </div>
</body>

</html>
