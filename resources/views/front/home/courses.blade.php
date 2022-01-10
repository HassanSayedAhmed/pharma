@foreach($courses as $course)
	<div class="entry event mb-3 col-lg-4">
		<div class="grid-inner row align-items-center g-0 p-4">
			<div class="col-md-12 mb-md-0">
				<a href="#" class="entry-image">
					<img src="{{asset('uploads/defaults/defualt_medicine.jpg')}}" />
				</a>
			</div>
			<div class="col-md-12">
				<div class="entry-title title-xs">
					<h3 class="text-center"><a href="#">{{$course->name}}</a></h3>
					<div class="row">
						<div class="col-md-6">
							<b>Hours: </b>{{$course->hours}}
						</div>
						<div class="col-md-6">
							<b>Views: </b>{{$course->views}}
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<b>Rating: </b>{{$course->rating}}
						</div>
						<div class="col-md-6">
							<b>Level: </b>{{$course->getlevel()}}
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
@endforeach
{!! $courses->render() !!}