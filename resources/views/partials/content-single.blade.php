<article @php post_class() @endphp>
  <header class="block-heading">
    <h4 class="text-left text-danger font-weight-bold">{!! get_the_title() !!}</h4>
  </header>
  <div class="entry-content">
    <section class="breadcrumbs">
      {!! Breadcrumbs::mptcBreadcrumbs() !!}
    </section>
    <figure class="hero-banner">
        <img class="d-none w-100" src="{{the_post_thumbnail_url()}}">
        <div class="aspectratio-4-1">
            <div class="img blend" style="background-image: url({{the_post_thumbnail_url()}});"></div>
        </div>
        <figcaption class="hero-content d-flex">
            <div class="my-auto">
                <h3 class="hero-title"><strong>{!!the_title() !!}</strong></h3>
                <p class="hero-description">{!!get_the_excerpt()!!}</p>
            </div>
        </figcaption>
    </figure>
    @php the_content() @endphp
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
</article>