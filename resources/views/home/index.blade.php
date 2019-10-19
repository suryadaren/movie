@extends('home.template')

@section('content')


<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- ASIDE -->
			<div id="aside" class="col-md-3">
				<!-- aside Widget -->
				<div class="aside">
					<h5 class="aside-title">Genre Filters</h5>
					<div class="checkbox-filter">
							{{csrf_field()}}
							@foreach($genre as $genr)
								<div class="input-checkbox">
									<input style="width: 50px" class="big-checkbox" name="genre[]" id="checkbox" value="{{$genr->genre}}" type="checkbox">
									<label>
										<span></span>
										{{$genr->genre}}
									</label>
								</div>
							@endforeach
					</div>
				</div>
				<!-- /aside Widget -->
			</div>
			<!-- /ASIDE -->

			<!-- STORE -->
			<div id="store" class="col-md-9">
				<!-- store top filter -->
				<div class="store-filter clearfix">
					<div class="store-sort">
							<label>
								Sort By:
								<select class="input-select" id="type" name="type">
									<option value="title">Title</option>
									<option value="rating">Rating</option>
									<option value="release">Release</option>
									<option value="genre">Genre</option>
									<option value="director">Director</option>
								</select>
							</label>
					</div>
				</div>
				<!-- /store top filter -->

				<!-- store products -->
				<div class="row" id="daftar_album">
					<!-- product -->
					@foreach($movie as $mov)
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img style="width: 100%;height: 200px" src="{{$mov->image}}" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">{{$mov->genre}}</p>
								<h5 >{{$mov->title}}</h5>
								<div class="product-rating">
								@for($i=0;$i<$mov->rating;$i++)
									<i class="fa fa-star"></i>
								@endfor
								<p class="product-category">{{$mov->release}}</p>
								</div>
							</div>
							<div class="add-to-cart">
								<a href="/{{$mov->id}}" class="add-to-cart-btn">Details</a>
							</div>
						</div>
					</div>
					@endforeach
					<!-- /product -->

				<!-- store bottom filter -->
					<div class="col-md-12 tex-center">
							{{ $movie->links() }}
					</div>

				</div>
				<!-- /store products -->
				<br><br>
				<!-- /store bottom filter -->
			</div>
			<!-- /STORE -->
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
		$('option').click(function(){
			$.ajax({
				url : '/sortby',
				type : 'get',
				data : {
					type : $('#type').val()
				},
				success : function(data){
					$('#daftar_album').replaceWith(data);
				},
				error : function(){
					alert('error');
				}
			});
		});

		$("input[type='checkbox']").change(function(){
			var check = [];

            $.each($("input[type='checkbox']:checked"), function(){

                check.push($(this).val());

            });
			$.ajax({
				url : '/filter',
				type : 'get',
				data : {
					filter : check,
				},
				success : function(data){
					$('#daftar_album').replaceWith(data);
				},
				error : function(){
					alert('error');
				}
			});
		});
	});
</script>

@stop
