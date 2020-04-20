
<style type="text/css">
    /* custom theme options default for navbar */
    .navbar { background-color: #f8f9fa; }
    .navbar .navbar-toggler { background-color: #254187; }
    /*desktop screen*/
    @media (min-width: 992px) {
        /*level 1*/
        .navbar ul.nav > li > a { display: block; margin-right:30px; color: #343a40; font-size: 18px; padding-top: 15px; padding-bottom: 15px; padding-left: 20px; padding-right: 20px; }
        /*level 1 on hover*/
        .navbar ul.nav > li > a:hover { color: #343a40; background-color: rgba(0, 0, 0, 0.1); }
        /*level 1 on active*/
        .navbar ul.nav > li.current-menu-item > a,
        .navbar ul.nav > li.current-post-ancestor > a,
        .navbar ul.nav > li.current-menu-ancestor > a { background-color: #254187; color: #fff; }
        /*level 1 dropdown arrow color*/
        .navbar ul.nav > li.menu-item-has-children > a::after { border-top-color: rgba(0, 0, 0, 0.1); }
        /*level 1 dropdown arrow color on active*/
        .navbar ul.nav > li.menu-item-has-children.current-menu-item > a::after,
        .navbar ul.nav > li.menu-item-has-children.current-menu-ancestor > a::after,
        .navbar ul.nav > li.menu-item-has-children.current-post-ancestor > a::after { border-top-color: #fff; }
        
        /*nex level*/
        .navbar ul.nav li ul { background-color: #F5F6FA; min-width: 220px; }
        .navbar ul.nav li ul li a { color: #343a40; font-size: 17px; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px; }
        /*next level on active */
        .navbar ul.nav li ul li.current-menu-item > a,
        .navbar ul.nav li ul li.current-menu-ancestor > a,
        .navbar ul.nav li ul li.current-post-ancestor > a,
        .navbar ul.nav li ul li a:hover { color: #343a40; background-color: rgba(0, 0, 0, 0.1); }
        /*next level dropdown arrow color*/
        .navbar ul.nav li ul li.menu-item-has-children > a::after { border-left-color: rgba(0, 0, 0, 0.1); }
        /*next level dropdown arrow color on active*/
        .navbar ul.nav li ul li.menu-item-has-children.current-menu-item > a::after,
        .navbar ul.nav li ul li.menu-item-has-children.current-menu-ancestor > a::after,
        .navbar ul.nav li ul li.menu-item-has-children.current-post-ancestor > a::after { border-left-color: rgba(0, 0, 0, 0.1); }
        
        /* Slideshow */
        .main-slideshow .slick-list .slick-track figure[data-id=slide-01] figcaption a { width: 27%; padding: 50px; line-height: 45px; font-size: 22px; }
        .main-slideshow .slick-list .slick-track figure[data-id=slide-02] figcaption a { width: 27%; padding: 30px; line-height: 45px; font-size: 22px; }
        .main-slideshow .slick-list .slick-track figure[data-id=slide-03] figcaption a { width: 27%; padding: 30px; line-height: 45px; font-size: 22px; }

        
        .header { padding-top: 15px; padding-bottom: 15px; }
        .header .title { text-align: center; margin-top: 20px; }
        .header .title .site-title { font-size: 32px; margin-bottom: 5px; }
        .header .title .tagline { font-size: 20px; margin-bottom: 5px; }


        .block-list[data-id=block-list-01] .wrap-item { /*  padding: 20px; background-color: #F5F6FA; */ margin-bottom: 30px; }
        .block-list[data-id=block-list-01] .wrap-item .thumbnail { margin-bottom: 0px; }
        .block-list[data-id=block-list-01] .wrap-item .title{ margin-bottom: 15px; /*background:  font-size: 18px; */ }
        .block-list[data-id=block-list-01] .wrap-item .excerpt{ margin-bottom: 15px; font-size: 18px; }
        .block-list[data-id=block-list-01] .wrap-item .meta{ margin-bottom: 15px; font-size: 14px; }

    }
    /* medium devices (tablets, 768px and up) */
    @media (min-width: 0px) and (max-width: 991.98px) {
        /*level 1*/
        .navbar ul.nav > li > a { color: #343a40; font-size: 16px; padding-top: 10px; padding-bottom: 10px; padding-left: 15px; padding-right: 15px; }
        /*level 1 on active*/
        .navbar ul.nav li.current-menu-item > a,
        .navbar ul.nav li.current-post-ancestor > a,
        .navbar ul.nav li.current-menu-ancestor > a { background-color: transparent; color: #343a40; font-weight: bold;}
        /*level 1 dropdown arrow color*/
        .navbar ul.nav > li.menu-item-has-children > a::after { border-top-color: rgba(0, 0, 0, 0.1); }
        /*level 1 dropdown arrow color on active*/
        .navbar ul.nav > li.menu-item-has-children.current-menu-item > a::after,
        .navbar ul.nav > li.menu-item-has-children.current-menu-ancestor > a::after,
        .navbar ul.nav > li.menu-item-has-children.current-post-ancestor > a::after { border-top-color: rgba(0, 0, 0, 0.1); }
 
        /*nex level*/
        .navbar ul.nav li ul { background-color: #F5F6FA; min-width: 220px; }
        .navbar ul.nav li ul li a { color: #343a40; font-size: 15px; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px; }
        /*next level on active */
        .navbar ul.nav li ul li.current-menu-item > a,
        .navbar ul.nav li ul li.current-menu-ancestor > a,
        .navbar ul.nav li ul li.current-post-ancestor > a,
        .navbar ul.nav li ul li a:hover { color: #343a40; background-color: transparent; font-weight: bold; }
        /*next level dropdown arrow color*/
        .navbar ul.nav li ul li.menu-item-has-children > a::after { border-top-color: rgba(0, 0, 0, 0.1); }
        /*next level dropdown arrow color on active*/
        .navbar ul.nav li ul li.menu-item-has-children.current-menu-item > a::after,
        .navbar ul.nav li ul li.menu-item-has-children.current-menu-ancestor > a::after,
        .navbar ul.nav li ul li.menu-item-has-children.current-post-ancestor > a::after { border-top-color: rgba(0, 0, 0, 0.1); }
    }

    /*Extra small devices (portrait phones, less than 576px)*/
    @media (max-width: 767.98px) {
        .header { padding-top: 5px; padding-bottom: 5px; }
        .header .title { text-align: center; margin-top: 6px; }
        .header .title .site-title { font-size: 18px; margin-bottom: 5px; }
        .header .title .tagline { font-size: 12px; margin-bottom: 5px; }

        
        /* Custom style for slide */
        .main-slideshow .slick-list .slick-track figure[data-id=slide-01] figcaption a { width: 55%; padding: 10px 20px; line-height: 20px; font-size: 13px; }
        .main-slideshow .slick-list .slick-track figure[data-id=slide-02] figcaption a { width: 55%; padding: 10px 20px; line-height: 20px; font-size: 13px; }
        .main-slideshow .slick-list .slick-track figure[data-id=slide-03] figcaption a { width: 55%; padding: 10px 20px; line-height: 20px; font-size: 13px; }

        .block-list[data-id=block-list-01] .wrap-item {  /* padding: 15px; background-color: #F5F6FA; */ margin-bottom: 15px; }
        .block-list[data-id=block-list-01] .wrap-item .thumbnail { margin-bottom: 10px; }
        .block-list[data-id=block-list-01] .wrap-item .title{ margin-bottom: 10px; font-size: 18px; }
        .block-list[data-id=block-list-01] .wrap-item .excerpt{ margin-bottom: 10px; font-size: 16px; }
        .block-list[data-id=block-list-01] .wrap-item .meta{ margin-bottom: 0px; font-size: 14px; }
    }

    /*Medium devices (tablets, 768px and up)*/
    @media (min-width: 768px) and (max-width: 991.98px) {
        .header { padding-top: 10px; padding-bottom: 10px; }
        .header .title { text-align: center; margin-top: 10px; }
        .header .title .site-title { font-size: 28px; margin-bottom: 5px; }
        .header .title .tagline { font-size: 18px; margin-bottom: 5px; }

        /* Custom style for slide */
        .main-slideshow .slick-list .slick-track figure[data-id=slide-01] figcaption a { width: 40%; padding: 30px; line-height: 29px; font-size: 18px; }
        .main-slideshow .slick-list .slick-track figure[data-id=slide-02] figcaption a { width: 40%; padding: 30px; line-height: 29px; font-size: 18px; }
        .main-slideshow .slick-list .slick-track figure[data-id=slide-03] figcaption a { width: 40%; padding: 30px; line-height: 29px; font-size: 18px; }
    
        .block-list[data-id=block-list-01] .wrap-item { /*  padding: 15px; background-color: #F5F6FA; */ margin-bottom: 15px; }
        .block-list[data-id=block-list-01] .wrap-item .thumbnail { margin-bottom: 10px; }
        .block-list[data-id=block-list-01] .wrap-item .title{ margin-bottom: 10px; font-size: 18px; */ }
        .block-list[data-id=block-list-01] .wrap-item .excerpt{ margin-bottom: 10px; font-size: 16px; }
        .block-list[data-id=block-list-01] .wrap-item .meta{ margin-bottom: 0px; font-size: 14px; }
    }

    /* .block-list[data-id=block-list-01].match-search .wrap-item {background: none;} */
    
</style>