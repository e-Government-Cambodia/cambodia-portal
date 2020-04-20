@extends('layouts.app')

@section('content')
{!! get_search_form(false) !!}
  <div class="container my-5">

  @include('partials.page-header')

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, but the page you were trying to view does not exist.', 'sage') }}
    </div>
  @endif

  </div>
@endsection
