@extends('layouts.app')

@section('content')
<section class="main-slideshow slick-slideshow" data-slick='{"adaptiveHeight": false, "mobileFirst": true, "pauseOnDotsHover": true, "dots": false, "autoplay": true, "autoplaySpeed": 3000, "arrows": false, "cssEase": "ease-in-out"}'>
       
  <figure data-id="slide-01">
      <img class="d-none" width="100%" src="@asset('images/content/slide-01.jpg')" />
      <div class="aspectratio-8-1">
          <div class="img blend" style="background-image: url(@asset('images/content/phnompenh.jpg'));"></div>
      </div>
  </figure>
</section>
@include('partials/home.search-slide')
  <div class="container">
    @include('partials.page-header')

{!! Breadcrumbs::mptcBreadcrumbs() !!}

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    
  @endif

  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-search')
  @endwhile

  {!! get_the_posts_navigation() !!}
  </div>
@endsection
