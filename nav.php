<nav>
  <div class="row">
    <div class="col-sm-12">

      <div id="menu">
        <ul class="links">
          <?php wp_list_pages('&title_li=')?>
        </ul>
       <!--  <div class="text-right"> -->
          <ul class="social-search">
            <li class="social text-right">
              <a aria-hidden="true" class="icon fa-twitter" href="#"></a>
            </li>
            <li class="social text-right">
              <a aria-hidden="true" class="icon fa-facebook" href="#"></a>
            </li>
            <li>
              <div id="hide-mobile">
                <?php get_search_form(); ?>
              </div>
              <div id="x-button">
                <div aria-hidden="true" class="icon fa-times text-right"></div>
              </div>
            </li>
          </ul> 
        <!-- </div> -->
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