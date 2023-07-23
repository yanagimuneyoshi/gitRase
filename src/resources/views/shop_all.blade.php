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
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
</head>

<body>
  <div id="app">
    <div data-v-56ac30e2="" id="app">
      <div class="menu-button-1">
        <div class="menu-button">
          <a href="/menu2"><button id="btn_menu8" class="btn_menu"><span>MENU</span></button></a>
        </div>
        <div class="rese">
          <p class="RESE-1">RESE</p>
        </div>
      </div>
      <div data-v-56ac30e2="" class="search" method="get" action="/search">
        @csrf
        <div data-v-56ac30e2="" class="area">
          <select data-v-56ac30e2="" name="all_areas">
            <option data-v-56ac30e2="" value="" selected="selected">All area</option>
            @foreach ($areas as $area)
            <option data-v-56ac30e2="" name="areas" value="{{ $area->id }}">{{ $area->name }}</option>
            @endforeach
          </select>
        </div>
        <div data-v-56ac30e2="" class="genre">
          <select data-v-56ac30e2="" name="all_genres">
            <option data-v-56ac30e2="" value="" selected="selected">All genre</option>
            @foreach ($genres as $genre)
            <option data-v-56ac30e2="" name="genres" value="{{ $genre->id }}">{{ $genre->name }}</option>
            @endforeach
          </select>
        </div>
        <div data-v-56ac30e2="" class="research">
          <i data-v-56ac30e2="" class="fas fa-search check"></i>
          <input data-v-56ac30e2="" type="text" name="search" value="{{ old('search') }}" id="search-input">
        </div>
      </div>
      <div class=" album py-5 bg-light">
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
                      <p class="shop_name">{{ $shop->name }}</p>
                      @foreach ($areas as $area)
                      @if ($area->id == $shop->area_id)
                      <p class="area">#{{ $area->name }}</p>
                      @endif
                      @endforeach
                      @foreach ($genres as $genre)
                      @if ($genre->id == $shop->genre_id)
                      <p class="genre">#{{ $genre->name }}</p>
                      @endif
                      @endforeach
                      <a href="/shop_detail" method="POST">
                        @csrf
                        <p class="detail">詳しく見る</p>
                      </a>
                      <form action="{{ route('favorite') }}" method="POST">
                        @csrf
                        <input type="hidden" name="shop_id" value="{{ $shop->id }}">
                        <button type="submit" class="far fa-heart favorite-heart" name="favorite"></button>
                      </form>
                    </div>
                  </div>
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

    // 検索キー
    document.getElementById('search-input').addEventListener('keydown', function(event) {
      if (event.keyCode === 13) {
        // event.preventDefault(); // デフォルトのEnterキーの動作を無効化
        performSearch(); // 検索を実行する関数を呼び出す
      }
    });

    // 検索を実行する関数の定義
    function performSearch() {
      var searchInput = document.getElementById('search-input');
      alert(searchInput.value);
      // const area = document.all_areas;
      // alert(area);
      // var area = document.getElementByName('all_areas');
      // var areaValue = area[0].value;
      // alert(areaValue);
      var area = document.getElementsByName('all_areas');
      alert(area[0].value);
      var genre = document.getElementsByName('all_genres');
      alert(genre[0].value);
      $.ajax({
          url: "{{ route('search') }}",
          type: 'POST',
          dataType: 'json',
          data: {
            area: area[0].value,
            genre: genre[0].value,
            keyword: searchInput.value
          },
          timeout: 5000,
        })
        .done(function(ids) {
          alert('success');
        })
        .fail(function() {
          alert('failed');
        });


      // var searchTerm = searchInput.value;

      // searchTermを使って検索の処理を実行する（例：Ajaxリクエストなど）
      // ...

      // フォームの送信処理が必要な場合は、以下のコードを追加
      // document.getElementById('search-form').submit();
    }
  </script>
</body>

</html>