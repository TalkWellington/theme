<nav>
  <div class="row">
    <div class="blog-nav col-sm-12">
      <div id="menu">
        <div class="menu-div">
          <?php wp_list_pages('&title_li=')?>
        </div>
        <div class="menu-div text-right">
          <ul>
            <li class="social">
              <a aria-hidden="true" class="icon fa-twitter" href="#"></a>
            </li>
            <li class="social">
              <a aria-hidden="true" class="icon fa-facebook" href="#"></a>
            </li>
            <li id="hide-mobile">
              <div aria-hidden="true" class="icon fa-search"></div><?php get_search_form(); ?>
            </li>
            <li id="x-button">
              <div aria-hidden="true" class="icon fa-times text-right"></div>
            </li>
          </ul>
        </div>
      </div>
      <div class="mobile-head">
        <div class="mobile-search">
          <?php get_search_form(); ?>
        </div>
        <div id="slide-menu-button">
          MENU
        </div>
      </div>
    </div>
  </div>
</nav>