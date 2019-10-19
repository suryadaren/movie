<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Movie;
use \App\Comment;

class HomeController extends Controller
{
    
	// menampilkan daftar movie
	function index(){
		
		$movie = Movie::paginate(4);
		$genre = Movie::select('genre')->distinct('genre')->get();
		return view('home.index',compact('movie','genre'));
	}

	// menampilkan daftar movie secara sortby(berurut)
	function sortby(Request $request){

		$movie = Movie::orderBy($request->type,'desc')->get();
		$daftar_film = '<div class="row" id="daftar_album">';
		foreach ($movie as $mov) {
			$star = "";
			for ($i=0; $i < $mov->rating; $i++) { 
				$star .= '<i class="fa fa-star"></i>';
			}
			$daftar_film .= '<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img style="width: 100%;height: 200px" src="'.$mov->image.'" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">'.$mov->genre.'</p>
								<div class="product-rating">'.$star.'
								<p class="product-category">'.$mov->release.'</p>
								</div>
							</div>
							<div class="add-to-cart">
								<a href="/'.$mov->id.'" class="add-to-cart-btn">Details</a>
							</div>
						</div>
					</div>';
		}
		$daftar_film .= '</div>';
		return $daftar_film;
	}

	// menampilkan daftar movie setelah difilter
	function filter(Request $request){

		$movie = Movie::all();
		$daftar_film = '<div class="row" id="daftar_album">';
		foreach ($movie as $mov) {
			if (in_array($mov->genre,$request->filter)) {
				$star = "";
				for ($i=0; $i < $mov->rating; $i++) { 
					$star .= '<i class="fa fa-star"></i>';
				}
				$daftar_film .= '<div class="col-md-3 col-xs-6">
							<div class="product">
								<div class="product-img">
									<img style="width: 100%;height: 200px" src="'.$mov->image.'" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">'.$mov->genre.'</p>
									<div class="product-rating">'.$star.'
									<p class="product-category">'.$mov->release.'</p>
									</div>
								</div>
								<div class="add-to-cart">
									<a href="/'.$mov->id.'" class="add-to-cart-btn">Details</a>
								</div>
							</div>
						</div>';
			}
		}
		$daftar_film .= '</div>';
		return $daftar_film;
	}

	// menampilkan daftar movie
	function show($id){
		$movie = Movie::findorfail($id);
		$comment = $movie->comment()->get();
		return view('home.show',compact('movie','comment'));
	}

	// menyimpan comment
	function store(Request $request,$id){

		// mengambil data rating yang di input
		$rating = $request->rating;
		$movie = Movie::findorfail($id);
		$jumlah_comment = count($movie->comment()->get());

		// memperbarui data rating
		if($jumlah_comment < 1){
			$rating_baru = ($rating+$movie->rating);
		}
		else{
			$rating_baru = ($rating+$movie->rating)/2;
		}

		// menyimpan data comment
		$comment = Comment::create([
			"movie_id" => $id,
			"content" => $request->content
		]);

		// memperbarui data rating
		$movie->fill([
			"rating" => $rating_baru
		])->save();

		// data disimpan ke dalam array agar dapat di bawa ke view dengan dua variabel
		$data = [
			'comment' => $comment,
			"movie" => $movie
		];
		return response()->json($data);
	}
}
