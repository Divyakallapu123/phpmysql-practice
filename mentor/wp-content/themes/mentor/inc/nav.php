
======= Header =======
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Mentor</a></h1>
      <a href="index.html" class="logo me-auto"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="" class="img-fluid"></a>
      <div class="menu-secondary-menu-container">
      <nav id="navbar" class="navbar order-last order-lg-0">
      <?php while(have_rows('menu',112)): the_row(); ?>
        <ul id="menu-secondary-menu" class="nav">
        
          <!-- <li id="menu-item-378" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-378"><a class="active" href="index.html">Home</a></li> -->
          <li><a href="about.html"><?php echo get_sub_field('menu_name',112) ?></a></li>
          <!-- <li><a href="courses.html">Courses</a></li>
          <li><a href="trainers.html">Trainers</a></li>
          <li><a href="events.html">Events</a></li>
          <li><a href="pricing.html">Pricing</a></li> -->
          <?php  endwhile; ?>
          
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
            <?php while(have_rows('dropdown_menu',112)): the_row(); ?>
              <li><a href="#"><?php echo get_sub_field('dropdown_menu_name',112) ?></a></li>
              <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li> -->
                <!-- </ul>
              </li> -->
              <?php  endwhile; ?>
              <!-- <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li> -->
            </ul>
          </li>
          <li><a href="contact.html"><?php echo get_field('contact',112);?></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
</div>
      <a href="courses.html" class="get-started-btn"><?php echo get_field('get_started',112);?></a>

    </div>
  </header>



  <!-- <div class="menu-secondary-menu-container">
    <ul id="menu-secondary-menu" class="nav">
        <li id="menu-item-378" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-378"><a href="#">Menu item 1</a></li>
        <li id="menu-item-381" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-381"><a href="#">Menu item 2</a></li>
        <li id="menu-item-382" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-382"><a href="#">Menu item 3</a></li>
        <li id="menu-item-382" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-382"><a href="#">Menu item 3</a></li>
      </ul>
</div> -->

