@extends('layouts.app_body')	
@section('header')
@include('components.header_guess')
<!-- end:header-top -->
@include('components.header_search')
@endsection
@section('content')
<!-- Destinations -->
<div id="fh5co-tours" class="fh5co-section-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
				<h3>{{ trans('messages.tour_spot') }}</h3>
				<p>"{{ trans('messages.quote_des') }}"</p>
			</div>
		</div>
	@include('errors.error404')
	@if ($tours ?? '')
		<div class="row" id="same">
		@foreach ($tours ?? '' as $tour)
			<div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
				<div href="{{ route('tours.show',$tour->id) }}">
					<img src="{{ $arr[ $loop->index ] }}" alt="">
					<div class="desc">
						<span></span>
						<h3>{{ $tour->name }}</h3>
						<span class="price">{{ number_format($tour->price) }} VNĐ</span>
						<a class="btn btn-primary btn-outline" href="{{ route('tours.show',$tour->id) }}">{{ trans('messages.book_now') }} <i class="icon-arrow-right22"></i></a>
					</div>
				</div>
			</div>
		@endforeach
		</div>
	@endif
	{{ $tours->fragment('same')->links() }}
	</div>
</div>
@endsection
