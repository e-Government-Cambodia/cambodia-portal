@extends('layouts.app')

@section('content')

<div class="single-post">
  @include('partials/home.search')
</div>

<div class="container">
  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-single-'.get_post_type())
  @endwhile
</div>
@endsection
