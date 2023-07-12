<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
</head>

<body>
  <header>
    <a href="/">
      <div class="menu-button">
        <button id="btn_menu8" class="btn_menu" href="#"><span>MENU</span></button>
      </div>
    </a>
    <div class="rese">
      <a>RESE</a>
    </div>
  </header>

  <div class="login-form">
    <h2>Login</h2>

    <form action="{{ route('login') }}" method="POST">
      @csrf
      <div class="input-group">
        <i class="fa-solid fa-envelope"></i>
        <input type="text" name="email" placeholder="Email">
      </div>
      <div class="input-group">
        <i class="fa-solid fa-lock"></i>
        <input type="password" name="password" placeholder="Password">
      </div>
      @if($errors->has('login_error'))
      <div class="error-message">{{ $errors->first('login_error') }}</div>
      @endif

      <button type="submit" class="login-button">ログイン</button>
    </form>
  </div>
</body>

</html>