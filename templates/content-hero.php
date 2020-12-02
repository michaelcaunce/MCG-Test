<!-- Advanced Custom Fields -->

<?php 
// Main feature image
$hero_feature_image = get_field('hero_feature_image');
// Main logo
$logo = get_field('logo');
// Left side of the hero
$left_section_content_1 = get_field('left_section_content_1');
$left_section_content_2 = get_field('left_section_content_2');
// Right side of the hero
$right_section_content_top = get_field('right_section_content_top');
$right_section_content_middle = get_field('right_section_content_middle');
// Social icon links
$facebook_link = get_field('facebook_link');
$twitter_link = get_field('twitter_link');
$instagram_link = get_field('instagram_link');
/* 
**** IMPORTANT ****
On a bigger project, Font-Awesome plugin would be used to allow for icons to be customised within the dashboard. 
*/

// Main content section
$top_element = get_field('top_element');
$title = get_field('title');
$subtitle = get_field('subtitle');
$link = get_field('link');

// Bottom section links
$link_1_content = get_field('link_1_content');
$link_2_content = get_field('link_2_content');
$link_3_content = get_field('link_3_content');

// Main background titles 
$title_left = get_field('title_left');
$title_right = get_field('title_right');

?>


<!-- Styling for the hero section -->
<section class="Hero">
  <!-- Img added instead of using a background image -->
  <img class="Hero--img" src="<?php echo $hero_feature_image['url']; ?>" alt="<?php echo $hero_feature_image['alt']; ?>" alt="" />
  <!-- Left side of the hero -->
  <div class="Hero--section__left">
    <!-- Two empty spans created for menu visualisation -->
    <div class="Hero--section__left--menu">
      <span></span>
      <span></span>
    </div>
    <p><?php echo $left_section_content_1; ?><br /><?php echo $left_section_content_2; ?></p>
  </div>
  <!-- Logo container -->
  <div class="Hero--logo">
    <embed class="Hero--logo__logo" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
  </div>
  <!-- Main hero content -->
  <div class="Hero--content">
    <div class="Hero--content__slider">
      <p>01 <input type="range" min="1" max="100" value="50" class="slider" id="myRange" /> 02 <?php echo $top_element; ?></p>
    </div>
    <h1 class="Hero--content__title"><?php echo $title; ?></h1>
    <h2 class="Hero--content__sub"><?php echo $subtitle; ?></h2>
    <p class="Hero--content__link">&rarr; <?php echo $link; ?></p>
  </div>
  <!-- Container for the large title -->
  <div class="Hero--title__left">
    <h1><?php echo $title_left; ?></h1>
  </div>
  <!-- Container for the large title -->
  <div class="Hero--title__right">
    <h1><?php echo $title_right; ?></h1>
  </div>
  <!-- Main container for the bottom navigation -->
  <div class="Hero--footer">
    <!-- Each nav element wrapped in a container for display flex purposes -->
    <div class="Hero--footer__container Hero--footer__container--active">
      <p><?php echo $link_1_content; ?></p>
      <span>01</span>
    </div>
    <!-- Each nav element wrapped in a container for display flex purposes -->
    <div class="Hero--footer__container">
      <p><?php echo $link_2_content; ?></p>
      <span>02</span>
    </div>
    <!-- Each nav element wrapped in a container for display flex purposes -->
    <div class="Hero--footer__container">
      <p><?php echo $link_3_content; ?></p>
      <span>03</span>
    </div>
  </div>
  <!-- Right side of the hero -->
  <div class="Hero--section__right">
    <p><?php echo $right_section_content_top; ?></p>
    <p><?php echo $right_section_content_middle; ?></p>
    <!-- Social icons container -->
    <div class="Hero--section__right__social">
      <ul class="Hero--section__right__social__list">
        <li class="Hero--section__right__social__list--icons">
          <a href="<?php echo $facebook_link; ?>" target="_blank">
            <i class="fab fa-facebook-f"></i>
          </a>
        </li>
        <li class="Hero--section__right__social__list--icons">
          <a href="#" target="_blank">
            <i class="fab fa-instagram test"></i>
          </a>
        </li>
        <li class="Hero--section__right__social__list--icons">
          <a href="#" target="_blank">
            <i class="fab fa-twitter"></i>
          </a>
        </li>
      </ul>
    </div>
  </div>
</section>