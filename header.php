<?php
// header.php — loads the HTML <head> and site header
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?php wp_title('|', true, 'right'); ?></title>

  <!-- ✅ Optional: force-load custom CSS in case enqueue fails -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
// ✅ Load the site header markup
get_template_part('template-parts/site-header');

// ✅ Load the hero section here
get_template_part('template-parts/hero');

?>
