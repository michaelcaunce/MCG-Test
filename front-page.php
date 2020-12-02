<!-- Created front page which would be used as the front page if the project was bigger -->
<?php 
// Get the header from header.php
get_header();
get_template_part('templates/content', 'hero');
get_template_part('templates/content', 'thoughts');
get_footer();

?>