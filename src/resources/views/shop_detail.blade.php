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
      <form action="{{ route('reservation.store') }}" method="POST">
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
          <input type="number" id="guests" name="guests" min="0" required>
        </div>

        <div class="reservation-summary">
          <h2>予約内容</h2>
          <p>店舗名: ショップ名</p>
          <p>日付: <span id="selected-date"></span></p>
          <p>時間: <span id="selected-time"></span></p>
          <p>人数: <span id="selected-guests"></span></p>
        </div>

        <div class="submit-all" href="/">
          @csrf
          <button type="submit">予約する</button>
        </div>
      </form>
    </div>
  </div>
</body>

</html>

<script>
  // フォームの入力値が変更されたときに呼び出される関数
  function updateReservationSummary() {
    const date = document.getElementById('date').value;
    const time = document.getElementById('time').value;
    const guests = document.getElementById('guests').value;

    document.getElementById('selected-date').textContent = date;
    document.getElementById('selected-time').textContent = time;
    document.getElementById('selected-guests').textContent = guests;
  }

  // フォームの入力値が変更されたときにupdateReservationSummary関数を呼び出す
  document.getElementById('date').addEventListener('change', updateReservationSummary);
  document.getElementById('time').addEventListener('change', updateReservationSummary);
  document.getElementById('guests').addEventListener('input', updateReservationSummary);
</script>

</div>