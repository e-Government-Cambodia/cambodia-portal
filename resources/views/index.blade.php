@extends('layouts.app')

@section('content')
  {{-- @include('partials.page-header') --}}
  @include('partials/home.slide')
  @include('partials/home.search-slide')
  <main>

    @include('partials/home.service')
    @include('partials/home.topic')
    @include('partials/home.message')
    @include('partials/home.explore')

  </main>

  {{-- @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  @while (have_posts()) @php the_post() @endphp
    @include('partials.content-'.get_post_type())
  @endwhile --}}

  {!! get_the_posts_navigation() !!}
@endsection
