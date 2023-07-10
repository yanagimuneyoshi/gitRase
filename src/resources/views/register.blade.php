<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>

<body>
  <header>
    <div class="menu-button">
      <a href="/menu2"><button id="btn_menu8" class="btn_menu"><span>MENU</span></button></a>
    </div>
    <div class="rese">
      RESE
    </div>
  </header>

  <div class="login-form">
    <h2>Registration</h2>
    <form action="/register" method="POST">
      @csrf
      <div class="input-group">
        <i class="fa-solid fa-user"></i>
        <input type="text" name="username" placeholder="Username">
      </div>

      <div class="input-group">
        <i class="fa-solid fa-envelope"></i>
        <input type="email" name="email" placeholder="Email">
      </div>
      <div class="input-group">
        <i class="fa-solid fa-lock"></i>
        <input type="password" name="password" placeholder="Password">
      </div>

      <button type="submit" class="login-button">登録</button>
    </form>
  </div>
</body>

</html>