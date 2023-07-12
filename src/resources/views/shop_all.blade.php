<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/shop_all.css" />
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
  <div id="app">
    <div data-v-56ac30e2="" id="app">
      <div class="menu-button">
        <a href="/menu2"><button id="btn_menu8" class="btn_menu"><span>MENU</span></button></a>
      </div>
      <div class="rese">
        <p>RESE</p>
      </div>
      <div data-v-56ac30e2="" class="search">
        <div data-v-56ac30e2="" class="area">
          <select data-v-56ac30e2="">
            <option data-v-56ac30e2="" value="" selected="selected">All area</option>
            <option data-v-56ac30e2="" value="東京都">東京都</option>
            <option data-v-56ac30e2="" value="大阪府">大阪府</option>
            <option data-v-56ac30e2="" value="福岡県">福岡県</option>

          </select>
        </div>
        <div data-v-56ac30e2="" class="genre">
          <select data-v-56ac30e2="">
            <option data-v-56ac30e2="" value="" selected="selected">All genre</option>
            <option data-v-56ac30e2="" value="寿司">寿司</option>
            <option data-v-56ac30e2="" value="焼肉">焼肉</option>
            <option data-v-56ac30e2="" value="居酒屋">居酒屋</option>
            <option data-v-56ac30e2="" value="イタリアン">イタリアン</option>
            <option data-v-56ac30e2="" value="ラーメン">ラーメン</option>

          </select>
        </div>
        <div data-v-56ac30e2="" class="research">
          <i data-v-56ac30e2="" class="fas fa-search check"></i>
          <input data-v-56ac30e2="" type="text" placeholder="Search…">
        </div>
      </div>
      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3">
            @foreach ($shops as $shop)
            <div class="col">
              <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                  <title>Placeholder</title>
                  <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                </svg>
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <p class="shop_name">{{ $shop['name'] }}</p>
                      <p class="area">#{{ $shop['area_id'] }}</p>
                      <p class="genre">#{{ $shop['genre_id'] }}</p>
                      <p class="detail">詳しく見る</p>
                    </div>
                  </div>
                  <i class="far fa-heart favorite-heart"></i>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
    <div data-v-56ac30e2="" class="flex"></div>
  </div>
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