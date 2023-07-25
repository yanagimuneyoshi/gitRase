


// use App\Models\Shop;
// use Illuminate\Http\Request;

// class SearchController extends Controller
// 
//   // SearchController.php
//   public function search(Request $request)
//   {
//     logger('test', ['foo' => 'bar']);
//     $area = $request->input('all_areas');
//     $genre = $request->input('all_genres');
//     $keyword = $request->input('keyword');

//     $query = Shop::select();

//     if ($area) {
//       $query->where('area_id', '=', $area);
//     }

//     if ($genre) {
//       $query->where('genre_id', '=', $genre);
//     }

//     if ($keyword) {
//       $query->where('name', 'like', '%' . $keyword . '%');
//     }

//     // $results = $query->get();

//     // 検索結果をビューに渡す
//     // return view('shop_all', compact('results'));
//     //
//     $results = $query->get();
//     $areas = Area::all();
//     $genres = Genre::all();

//     return view('shop_all', compact('results', 'areas', 'genres'));
//   }



//     // return view('shop_all', compact('search'));


