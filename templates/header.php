<header class="banner">
  <div class="container">
    <nav class="nav-primary navbar-fixed-top">
      <div class="container">
         <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapsingNavbar" aria-controls="collapsingNavbar" aria-expanded="false" aria-label="Toggle navigation">
            &#9776;
          </button>
          <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
          <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation','container' => 'div', 
                          'container_class'   => 'collapse navbar-toggleable-xs', 'container_id'=> 'collapsingNavbar',
                          'menu_class' => 'nav navbar-nav']);
          endif;
          ?>
        </div>
      </div>
    </nav>
  </div>
</header>
