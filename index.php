<?php
/**
 * Main fallback template.
 *
 * @package DingchengB2BRealty
 */

get_header();
?>
<main class="section">
  <div class="container">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <article <?php post_class(); ?>>
          <h1><?php the_title(); ?></h1>
          <div><?php the_content(); ?></div>
        </article>
      <?php endwhile; ?>
    <?php else : ?>
      <h1>欢迎使用鼎城 B2B 房产主题</h1>
      <p>请在后台将“静态首页”设置为首页，以展示企业官网页面。</p>
    <?php endif; ?>
  </div>
</main>
<?php
get_footer();
