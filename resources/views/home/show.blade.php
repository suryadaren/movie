@extends('home.template')

@section('content')



		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- Product thumb imgs -->
					<div class="col-md-7 text-right">
						<div>
							<div>
								<img width="50%" src="{{$movie->image}}" alt="">
							</div>
						</div>
					</div>
					<!-- /Product thumb imgs -->

					<!-- Product details -->
					<div class="col-md-5">
						<div class="product-details">
							<h2 class="product-name">{{$movie->title}}</h2>
							<div>
								<div class="product-rating" id="product-rating">
								@for($i=0;$i<$movie->rating;$i++)
									<i class="fa fa-star"></i>
								@endfor
								</div>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

							<div class="product-options">
								<label>
									Release
									<h5>{{$movie->release}}</h5>
								</label>
							</div>

							<div class="add-to-cart">
								<div class="qty-label">
									Genre
									<h5>{{$movie->genre}}</h5>
								</div>
							</div>

							<ul class="product-btns">
								<li><a href="#">Director</a></li>
								<li><a href="#"> : {{$movie->director}}</a></li>
							</ul>

						</div>
					</div>
					<!-- /Product details -->

					<!-- Product tab -->
					<div class="col-md-12">
						<div id="product-tab">
							<!-- product tab nav -->
							<ul class="tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab3">Comments</a></li>
							</ul>
							<!-- /product tab nav -->

							<!-- product tab content -->
							<div class="tab-content">
								<!-- tab1  -->
								<div id="tab3" class="tab-pane fade in active">
									<div class="row">
										<!-- Rating -->


										<!-- Reviews -->
										<div class="col-md-8">
											<div id="reviews">
												<ul class="reviews" id="reviews_comment">
													@if(count($comment) > 0)
														@foreach($comment as $com)
														<li>
															<div class='review-heading'>
																<h5 class='name'>Anonymous</h5>
																<p class='date'>{{$com->created_at}}</p>
															</div>
															<div class='review-body'>
																<p>{{$com->content}}</p>
															</div>
														</li>
														@endforeach
													@endif
												</ul>
											</div>
										</div>
										<!-- /Reviews -->



										<!-- Review Form -->
										<div class="col-md-4">
											<div id="review-form">
												<form class="review-form">
													<textarea class="input" name="content" id="content_comment" cols="30" rows="10" placeholder="input your comment about this movie here.."></textarea>
													<br>
													<div class="input-rating">
														<span>Your Rating: </span>
														<div class="stars">
															<input id="star5" name="rating" id="rating" value="5" type="radio"><label for="star5"></label>
															<input id="star4" name="rating" id="rating" value="4" type="radio"><label for="star4"></label>
															<input id="star3" name="rating" id="rating" value="3" type="radio"><label for="star3"></label>
															<input id="star2" name="rating" id="rating" value="2" type="radio"><label for="star2"></label>
															<input id="star1" name="rating" id="rating" value="1" type="radio"><label for="star1"></label>
														</div>
													</div>
												</form>
													<button class="primary-btn" id="submit_comment">Submit</button>
											</div>
										</div>
										<!-- /Review Form -->
									</div>
								</div>
								<!-- /tab3  -->
							</div>
							<!-- /product tab content  -->
						</div>
					</div>
					<!-- /product tab -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

@stop

@section('js')
<script>
	$('document').ready(function(){

			

		// menyimpan data comment
		$('#submit_comment').click(function(){

			// jika komentar dan bintang belum di inputkan maka akan menampilkan alert
			if (!$('#content_comment').val() || !$('input[name=rating]:checked').val()) {
				alert("comment and rating cannot be null");		
			}else{

					// menyimpan data comment dengan ajax
					$.ajax({
		            type : 'GET',
		            url : '/{{$movie->id}}/comment/store',
		            data : {
		                content : $('#content_comment').val(),
		                rating : $('input[name=rating]:checked').val()
		            },
		            // jika sukses maka : 
		            success : function (data) {

		            	// menambah data comment
		            	$('#reviews_comment').append('<li><div class="review-heading"><h5 class="name">Anonymous</h5><p class="date">'+data.comment.created_at+'</p></div><div class="review-body"><p>'+data.comment.content+'</p></div></li>'
		            		);

		            	// memperbarui rating movie
		            	var rating_film = data.movie.rating;
		            	var star = '<div class="product-rating" id="product-rating">';
		            	for (var i = 0; i < rating_film; i++) {
		            		star += '<i class="fa fa-star"></i>';
		            	}
		            	star += '</div>';
		            	$('#product-rating').replaceWith(star);

		            	// mengosongkan comment
		                $('#content_comment').val('');
		            },error : function () {
		                alert('gagal');
		            }
		        });
			}
		});
	});
</script>
@stop