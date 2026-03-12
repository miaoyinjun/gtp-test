<?php
/**
 * Template Name: 商务咨询页面
 * Contact page template.
 *
 * @package DingchengB2BRealty
 */

get_header();
?>
<main>
  <section class="section contact">
    <div class="container">
      <h1>商务咨询</h1>
      <p>留下企业信息，我们将在 1 个工作日内安排顾问与您联系。</p>
      <form class="contact-form" id="contact-form">
        <input type="text" placeholder="企业名称" required>
        <input type="text" placeholder="联系人" required>
        <input type="tel" placeholder="联系电话" required>
        <select required>
          <option value="">咨询方向</option>
          <option>办公选址</option>
          <option>园区招商</option>
          <option>仓储物流</option>
          <option>资产运营</option>
        </select>
        <button type="submit" class="btn">提交咨询</button>
      </form>
      <p id="form-msg" class="form-msg" aria-live="polite"></p>
    </div>
  </section>
</main>
<?php
get_footer();
