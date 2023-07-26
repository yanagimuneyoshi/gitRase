<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
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
      <div data-v-56ac30e2="" class="allDisplay">
        <form method="POST" id="search-form" action="{{ route('search') }}">
          @csrf
          <div data-v-56ac30e2="" class="area">
            <select data-v-56ac30e2="" name="all_areas" id="area-select">
              <option data-v-56ac30e2="" value="" selected="selected">All area</option>
              @foreach ($areas as $area)
              <option data-v-56ac30e2="" name="areas" value="{{ $area->id }}">{{ $area->name }}</option>
              @endforeach
            </select>
          </div>
          <div data-v-56ac30e2="" class="genre">
            <select data-v-56ac30e2="" name="all_genres" id="genre-select">
              <option data-v-56ac30e2="" value="" selected="selected">All genre</option>
              @foreach ($genres as $genre)
              <option data-v-56ac30e2="" name="genres" value="{{ $genre->id }}">{{ $genre->name }}</option>
              @endforeach
            </select>
          </div>
          <div data-v-56ac30e2="" class="research">
            <i data-v-56ac30e2="" class="fas fa-search check"></i>
            <input data-v-56ac30e2="" type="text" name="keyword" value="{{ old('keyword') }}" id="search-input">
          </div>
        </form>
      </div>
      <div class=" album py-5 bg-light">
        <div class="container">
          <div id="search-results" class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3">
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
</body>

<script>
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  document.addEventListener('DOMContentLoaded', function() {
    const favoriteHearts = document.querySelectorAll('.favorite-heart');
    favoriteHearts.forEach((heart) => {
      heart.addEventListener('click', (event) => {
        event.currentTarget.classList.toggle('fas');
        event.currentTarget.classList.toggle('far');
        event.currentTarget.classList.toggle('text-danger');
      });
    });

    document.getElementById('search-form').addEventListener('submit', function(event) {
      event.preventDefault();
      performSearch();
    });

    // 検索キー
    document.getElementById('search-input').addEventListener('keydown', function(event) {
      if (event.keyCode === 13) {
        performSearch();
      }
    });


    // document.querySelector('.area select').addEventListener('change', performSearch);
    // document.querySelector('.genre select').addEventListener('change', performSearch);
    document.getElementById('area-select').addEventListener('change', performSearch);
    document.getElementById('genre-select').addEventListener('change', performSearch);
  });

  var area = ""; // Declare 'area' outside the performSearch function
  var genre = ""; // Declare 'genre' outside the performSearch function
  var searchInput = "";

  // Update the performSearch function
  function performSearch() {
    var areaSelect = document.getElementById('area-select');
    var genreSelect = document.getElementById('genre-select');
    var areaValue = areaSelect.options[areaSelect.selectedIndex].value;
    var genreValue = genreSelect.options[genreSelect.selectedIndex].value;
    var searchInput = document.getElementById('search-input').value;

    // 未選択の場合に空の値を設定
    var area = areaValue === "" ? "all" : areaValue;
    var genre = genreValue === "" ? "all" : genreValue;

    //   // クライアント側から送信するデータをオブジェクトとして作成
    //   var formData = {
    //     all_areas: document.getElementById('area-select').value,
    //     all_genres: document.getElementById('genre-select').value,
    //     keyword: document.getElementById('search-input').value
    //   };
    console.log(area, 'area');
    console.log(genre, 'genre');
    console.log(searchInput, 'keyword');
    $.ajax({
        url: "{{ route('search') }}",
        type: 'POST',
        dataType: 'json',
        data: {
          all_areas: area,
          all_genres: genre,
          keyword: searchInput
        }, // データをJSON形式に変換して送信
        // contentType: 'application/json', // リクエストのContent-TypeをJSONに指定
        timeout: 5000,
        //   success: function(response) {
        //     // リクエストが成功した場合の処理
        //     displayResults(response);
        //   },
        //   error: function() {
        //     // リクエストが失敗した場合の処理
        //     alert('Failed to fetch data. Please try again later.');
        //   }
        // });
      })


      .done(function(response) {
        if (typeof response === 'string') {
          response = JSON.parse(response); // If the response is a string (e.g., when using PHP without JSON response), parse it
        }
        displayResults(response); // Pass the filtered data to the displayResults function
      })

      .fail(function(jqXHR, textStatus, errorThrown) {
        alert('Failed to fetch data. Please try again later.');
      });

  }
  // .fail(function() {
  //   alert('failed');
  // });

  // function displayResults(ids) {
  //   var resultsDiv = document.getElementById('search-results');
  //   resultsDiv.innerHTML = ''; // 一度表示された結果をクリア

  function displayResults(data) {

    var resultsDiv = document.getElementById('search-results');
    resultsDiv.innerHTML = ''; // Clear previous results

    if (data.length > 0) {
      data.forEach(function(shop) {
        var card = createCard(shop); // Create a card for each shop
        resultsDiv.appendChild(card);
      });
    } else {
      // Show a message when no results found
      var noResults = document.createElement('p');
      noResults.innerText = 'No results found.';
      resultsDiv.appendChild(noResults);
    }
  }


  function createCard(shop) {
    // カード要素を作成し、ショップデータに基づいて内容を設定する
    var card = document.createElement('div');
    card.className = 'col';
    card.innerHTML = `
      <div class="card shadow-sm">
        <img src="${shop.photo}" class="bd-placeholder-img card-img-top" width="100%" height="225" />
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
              <p class="shop_name">${shop.name}</p>
              <p class="area">#${shop.area.name}</p>
              <p class="genre">#${shop.genre.name}</p>
              <a href="/shop_detail/${shop.id}">
                <p class="detail">詳しく見る</p>
              </a>
              <form action="{{ route('favorite') }}" method="POST">
                @csrf
                <input type="hidden" name="shop_id" value="${shop.id}">
                <button type="submit" class="far fa-heart favorite-heart" name="favorite"></button>
              </form>
            </div>
          </div>
        </div>
      </div>
    `;
    return card;
  }
</script>
</body>

</html>