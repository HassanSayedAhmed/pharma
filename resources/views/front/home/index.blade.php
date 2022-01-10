<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="UP Agency" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('front/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('front/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('front/css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('front/css/font-icons.css')}}" type="text/css" />


	<!-- Document Title
	============================================= -->
	<title>Home</title>

</head>

<body>

	

	<section id="content">
		<div class="container pt-5">
			<div class="row">
                <input type="hidden" name="hidden_page" id="hidden_page" value="1" />               

				<div class="col-3">
					<div class="form-group">
						<input type="text" name="searchText" id="search" placeholder="Search" class="form-control"/>
					</div>
				</div>
				<div class="col-3">
					<div class="form-group">
                        {!! Form::select('category_id', array(""=>__("Select Category"))+$categories, null, array('id'=> 'category_id', 'title'=> 'Category', 'class'=>'form-control')) !!}
					</div>
				</div>
				<div class="col-2">
					<div class="form-group">
						{{-- <input type="button" id="search" value="Search" class="btn btn-primary"/> --}}
					</div>
				</div>
			</div>
		</div>
		<div class="content-wrap">
			<div class="container clearfix">
	
				<div class="row gutter-40 col-mb-80">
					<!-- Post Content
					============================================= -->
					<div class="postcontent col-lg-9 order-lg-last">
	
						<!-- Shop
						============================================= -->
						<div id="shop" class="shop row grid-container gutter-20" data-layout="fitRows">
							<div id="coursesDiv" class="oc-item row">
								
								@include('front.home.courses')
							</div>

						</div>
						
					</div><!-- .postcontent end -->
	
				</div>
	
			</div>
		</div>
	</section>

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="{{asset('front/js/jquery.js')}}"></script>
	<script src="{{asset('front/js/plugins.min.js')}}"></script>

	<script>

		function search(page, query,category) {
			var link = "{{route('front_index_search')}}?page="+page+"&text="+query+"&searchCategory="+category;
			$.ajax({
				url:link,
				success:function(data) {
					//console.log(data);
					$('#coursesDiv').html('');
					//$('#catsDiv').html('');
					//console.log(data);
					$('#coursesDiv').html(data);
				}
			});
		}

		$(document).keypress( function(e){
			var key = e.which;
			if(key == 13){
				var query = $('#search').val();
				var category = $('#category_id').val();
				
				var page = $('#hidden_page').val();
				search(1, query, category);
			}
		});

		$(document).on('keyup', '#search',function(){
			//if(!$(this).val()){
				var query = $('#search').val();
				var category = $('#category_id').val();

				search(1, query, category);
			//}
		});

		$(document).on('change', '#category_id',function(){
			//if(!$(this).val()){
				var query = $('#search').val();
				var category = $('#category_id').val();

				search(1, query, category);
			//}
		});

		$(document).on('click', '.pagination a', function(event){
			event.preventDefault();
			var page = $(this).attr('href').split('page=')[1];
			$('#hidden_page').val(page);
			var query = $('#search').val();
			var category = $('#category_id').val();

			search(page, query, category);
		});
	</script>

</html>

	
