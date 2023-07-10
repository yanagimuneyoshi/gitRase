<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/shop_all.css') }}" />
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
            <option data-v-56ac30e2="">東京都</option>
            <option data-v-56ac30e2="">大阪府</option>
            <option data-v-56ac30e2="">福岡県</option>
          </select>
        </div>
        <div data-v-56ac30e2="" class="genre">
          <select data-v-56ac30e2="">
            <option data-v-56ac30e2="" value="" selected="selected">All genre</option>
            <option data-v-56ac30e2="">寿司</option>
            <option data-v-56ac30e2="">焼肉</option>
            <option data-v-56ac30e2="">居酒屋</option>
            <option data-v-56ac30e2="">イタリアン</option>
            <option data-v-56ac30e2="">ラーメン</option>
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
            <div class="col">
              <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                  <title>Placeholder</title>
                  <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                </svg>
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <i class="far fa-heart favorite-heart"></i>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <!-- ... 他のカードの記述 ... -->
          </div>
        </div>
      </div>
      <div data-v-56ac30e2="" class="flex"></div>
    </div>
  </div>
  <script>
    // お気に入りハートマークをクリックした場合の動作
    document.addEventListener('DOMContentLoaded', function() {
      const favoriteHearts = document.querySelectorAll('.favorite-heart');
      favoriteHearts.forEach((heart) => {
        heart.addEventListener('click', (event) => {
          event.currentTarget.classList.toggle('fas'); // ハートマークの表示切り替え
          event.currentTarget.classList.toggle('far');
          event.currentTarget.classList.toggle('text-danger'); // ハートマークの色の切り替え
        });
      });
    });
  </script>
</body>

</html>