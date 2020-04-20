@extends('layouts.app')

@section('content')
@include('partials/home.slide')
@include('partials/home.search')

<div class="container">

  @while(have_posts()) @php the_post() @endphp
    {{-- @include('partials.page-header') --}}
    @include('partials.content-page')
  @endwhile
  
</div>

@endsection
