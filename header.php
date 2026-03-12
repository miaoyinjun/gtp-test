<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
  <div class="container nav-wrap">
    <a class="logo" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    <nav>
      <a href="<?php echo esc_url(home_url('/services/')); ?>">业务板块</a>
      <a href="<?php echo esc_url(home_url('/cases/')); ?>">客户案例</a>
      <a href="<?php echo esc_url(home_url('/advantages/')); ?>">核心优势</a>
      <a href="<?php echo esc_url(home_url('/about/')); ?>">关于我们</a>
      <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-sm">商务咨询</a>
    </nav>
  </div>
</header>
