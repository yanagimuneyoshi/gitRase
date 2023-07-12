<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/shop_detail.css') }}" />
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
  <div class="container">
    <div class="left-section">
      <h2>お店名</h2>
      <img src="path_to_image" alt="お店の写真">
      <p>エリア: エリア名</p>
      <p>ジャンル: ジャンル名</p>
      <div class="about">
        <h3>About</h3>
        <p>お店の説明文など</p>
      </div>
    </div>

    <div class="right-section">
      <h2>予約する</h2>
      <form action="/reservation" method="POST">
        @csrf
        <div class="form-group">
          <label for="date">日付</label>
          <input type="date" id="date" name="date" required>
        </div>
        <div class="form-group">
          <label for="time">時間</label>
          <input type="time" id="time" name="time" required>
        </div>
        <div class="form-group">
          <label for="guests">人数</label>
          <input type="number" id="guests" name="guests" required>
        </div>
      </form>

      <div class="reservation-summary">
        <h2>予約内容</h2>
        <p>店舗名: ショップ名</p>
        <p>日付: 選択された日付</p>
        <p>時間: 選択された時間</p>
        <p>人数: 選択された人数</p>
      </div>
      <div class="submit-all">
        <button type="submit">予約する</button>
      </div>
    </div>
  </div>
</body>

</html>