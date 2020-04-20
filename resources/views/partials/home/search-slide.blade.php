 <!-- SEARCH AREA -->
 <section class="container">
    <div class="form-search">
        <form role="search" method="get" class="search-form" action="{{ esc_url( home_url( '/' ) ) }}">
            <div class="input-field input-group">
              <input type="search" class="text-field form-control" placeholder="{!! esc_attr_x( 'Search All Government', 'placeholder' ) !!}" value="{{ get_search_query() }}" name="s" />
              <div class="input-group-append">
                    <button type="submit" class="submit-field btn btn-primary" value="{{ esc_attr_x( 'Search', 'submit button' ) }}" /><span class="d-none d-md-inline">Search</span> <i class="icofont-search"></i></button>
              </div>
            </div>
          </form>
        <ul>
            <li>
                <label>Popular Keywords:</label>
                <ul>
                    <li><a href="/?s=driver's-license">driver's license</a></li>
                    <li><a href="service-detail.html">free health service</a></li>
                    <li><a href="service-detail.html">birth registration</a></li>
                </ul>
            </li>
        </ul>
    </div>
    
</section>