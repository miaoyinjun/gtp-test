<?php
/**
 * Front page template.
 *
 * @package DingchengB2BRealty
 */

get_header();
?>
<main>
  <section class="hero">
    <div class="container hero-grid">
      <div>
        <p class="tag">B2B 企业房产服务</p>
        <h1>为成长型与集团型企业提供高效选址与资产增值方案</h1>
        <p class="subtitle">覆盖全国核心城市，整合办公、园区、仓储与投资管理资源，帮助企业降低不动产决策成本。</p>
        <div class="hero-actions">
          <a href="<?php echo esc_url(dingcheng_b2b_realty_page_url('contact')); ?>" class="btn">预约顾问</a>
          <a href="<?php echo esc_url(dingcheng_b2b_realty_page_url('cases')); ?>" class="btn btn-outline">查看案例</a>
        </div>
      </div>
      <div class="kpi-card">
        <h3>服务数据</h3>
        <ul>
          <li><strong>1200+</strong> 企业客户</li>
          <li><strong>320万㎡</strong> 累计交易面积</li>
          <li><strong>38</strong> 覆盖城市</li>
          <li><strong>96%</strong> 客户续约率</li>
        </ul>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <h2>我们的服务入口</h2>
      <div class="cards">
        <article class="card">
          <h3>业务板块</h3>
          <p>覆盖办公选址、产业园区、仓储物流与资产运营四大服务方向。</p>
          <a class="btn btn-sm" href="<?php echo esc_url(dingcheng_b2b_realty_page_url('services')); ?>">进入页面</a>
        </article>
        <article class="card">
          <h3>客户案例</h3>
          <p>查看不同产业客户的落地实践与可量化成果。</p>
          <a class="btn btn-sm" href="<?php echo esc_url(dingcheng_b2b_realty_page_url('cases')); ?>">查看案例</a>
        </article>
        <article class="card">
          <h3>核心优势</h3>
          <p>跨城资源协同、数据驱动决策、全流程交付能力。</p>
          <a class="btn btn-sm" href="<?php echo esc_url(dingcheng_b2b_realty_page_url('advantages')); ?>">了解优势</a>
        </article>
        <article class="card">
          <h3>关于我们</h3>
          <p>了解鼎城资产的发展历程与服务理念。</p>
          <a class="btn btn-sm" href="<?php echo esc_url(dingcheng_b2b_realty_page_url('about')); ?>">了解更多</a>
        </article>
      </div>
    </div>
  </section>
</main>
<?php
get_footer();
