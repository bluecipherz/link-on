{{-- /resources/views/app/academy/courses/index.blade.php --}}

@extends('layouts.master')

@section('title', 'Courses')

{{---------------------------------------------------------------------------------------------------------

	This section is for admin navigation bar. Put this code top of every page if you need admin tools in 
	that page. 

----------------------------------------------------------------------------------------------------------}}
@if(Auth::user())
	@section('adminTools')
		
		<div class="ad-nav-base">
			<div class="container bczh-main">
				<div class="row">
					<div class="top-link pull-right ad-panel-btns">
						<a href="{{ route('courses.create') }}" class="btn ad-nav-sd-btn clr-cust-grey cl-cust-blue bcz-help --btn" >Create Course</a>
						<a href="{{ route('subjects.create') }}" class="btn ad-nav-sd-btn clr-cust-grey cl-cust-green bcz-help  --btn" >Create Subject</a>
						<a href="{{ route('subjects.index') }}" class="btn ad-nav-sd-btn clr-cust-grey cl-cust-red bcz-help --btn-e" extra="You can also add/delete subjects from here.">View Subjects</a>
						<a class="fakeLink clr-cust-grey btn ad-nav-sd-btn cl-cust-blue bcz-help " id="bcz-cons-btn" tip="Click console and type quick commands">Console</a>
					</div>
				</div>	
			</div>
		</div>		
	@endsection
	@section('fakeAdminHead')
		<div class="fakeAdminHead"> </div>
	@endsection
@endif
{{--------------------------------------------------------------------------------------------------------}}
	
@section('content')

<div class="">
	<div class="container row-space-top">
		<div class="row">
			@if(Session::has('success-message'))
				<div class="alert alert-success alert-dismissable">
					<a href="#" data-dismiss="alert" class="close">&times;</a>{{ Session::get('success-message') }}
				</div>
			@endif
			@if(Session::has('failure-message'))
				<div class="alert alert-danger alert-dismissable">
					<a href="#" data-dismiss="alert" class="close">&times;</a>{{ Session::get('failure-message') }}
				</div>
			@endif
			

			<div id="coursesGrid"><!-- gridbox width class here -->
				@if($courses)
					@foreach($courses as $course)
							<div id="cors-container">
								<div id="dummy"></div>
								<div id="element">
									<a href="{{ route('courses.show', $course) }}" class="">
										<div class="cors-container">
											<div class="cors-g-ribbon-wrapper"><div class="cors-g-ribbon">New</div></div>

											<div class="cors-top">
												COST : {{ $course->cost() }} Rs
												
											</div>
											<div class="cors-back ">
												<div class="badge cors-badge">{{ $course->acronym }}</div>
												
											</div>
											<div class="cors-front">
												<div class="cors-head">
												{{ $course->title }}
												</div>
												<div class="cors-body">
												{{ str_limit($course->description, 100) }} <?php if(strlen($course->description) > 100 ){ ?> <span class="faveLink cl-color-green clr-color-blue"> continue reading</span><?php } ?>
												</div>
											</div>
										</div>	
									</a>
								</div>
							</div>
					@endforeach
				@endif
			</div>
		</div>
	</div>
</div>	
@endsection