<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/my_page.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<header>
  <div class="menu-button">
    <button id="btn_menu8" class="btn_menu" href="#"><span>MENU</span></button>
  </div>
  <div class="rese">
    <a>Rese</a>
  </div>

</header>

<body>
  <div data-v-40d1da2a="" class="user">
    <p data-v-40d1da2a="" class="userName">さん</p>
    <!-- お客様の名前 -->
  </div>
  <div data-v-40d1da2a="" class="contain">
    <div data-v-40d1da2a="" class="reserve">
      <p data-v-40d1da2a="" class="title">予約状況</p>
      <!-- 予約状況　詳細 -->
      <div class="btn-group">
        <i class="fa-regular fa-clock"></i>
        <p class="booking">予約1</p>
        <i class="fa-regular fa-circle-xmark"></i>
        <p class="shop_name">name</p>
        <p class="Date">date</p>
        <p class="Time">Time</p>
        <p class="Number">1人</p>
      </div>
    </div>
    <div data-v-40d1da2a="" class="likes">
      <div data-v-40d1da2a="">
        <p data-v-40d1da2a="" class="title">お気に入り店舗</p>
        <!-- お気に入り店舗　詳細 -->
        <div class="col">
          <div class="card shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
            </svg>
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <p class="shop_name">name</p>
                  <p class="area">'area_id'</p>
                  <p class="genre">genre_id</p>
                  <p class="detail">詳しく見る</p>
                </div>
              </div>
              <i class="far fa-heart favorite-heart"></i>
            </div>
          </div>
        </div>
      </div>
      <div data-v-40d1da2a="" class="like"></div>
    </div>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const favoriteHearts = document.querySelectorAll('.favorite-heart');
        favoriteHearts.forEach((heart) => {
          heart.addEventListener('click', (event) => {
            event.currentTarget.classList.toggle('fas');
            event.currentTarget.classList.toggle('far');
            event.currentTarget.classList.toggle('text-danger');
          });
        });
      });
    </script>
</body>

</html>