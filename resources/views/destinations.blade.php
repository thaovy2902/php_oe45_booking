@extends('layouts.app-body')	

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
			@if ($tours ?? '')
				<div class="row">
				@foreach ($tours ?? '' as $tour)
					<div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
						<div href="tour_detail.html"><img src="{{ asset('assets/images/blog/home-blog1.jpg') }}" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
							<div class="desc">
								<span></span>
								<h3>{{ $tour->name }}</h3>
								<span>3 {{ trans('messages.nights') }} + Flight 5*Hotel</span>
								<span class="price">$1,000</span>
								<a class="btn btn-primary btn-outline" href="{{ route('tour.show',$tour->id) }}">{{ trans('messages.book_now') }} <i class="icon-arrow-right22"></i></a>
							</div>
						</div>
					</div>
				@endforeach
				</div>
			@endif
            {{ $tours->links() }}
			</div>
		</div>
@endsection
