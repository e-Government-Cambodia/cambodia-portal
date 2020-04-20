<section class="search">
  <ul class="list-inline tab">
      <li class="list-inline-item tab-item current">
          All Government
      </li>
      <li class="list-inline-item tab-item">
          <a href="search-image.html">Images</a>
      </li>
      <li class="list-inline-item tab-item">
          <a href="search-video.html">Videos</a>
      </li>
  </ul>
</section>
<div class="block-list match-search" data-id="block-list-01" data-match="{{get_search_query()}}">
  <article class="wrap-item hrb">
    <h5 class="title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}<i class="ml-4 icofont-external-link"></i></a></h5>
    @if (get_post_type() === 'post')
      @include('partials/entry-meta')
    @endif
    <div class="entry-summary">
      @php the_excerpt() @endphp
    </div>
  </article>
</div>
