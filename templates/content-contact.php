
<section class="contact-columns">
  <div class="contact-columns__container">
    <aside class="contact-columns__aside">
      <dl class="definition-list">
        <div class="definition-list__item">
          <dt class="definition-list__title">phone:</dt>
          <dd class="definition-list__description">1-800-684-LUMA</dd>
        </div>
        <div class="definition-list__item">
          <dt class="definition-list__title">media:</dt>
          <dd class="definition-list__description">media@getluma.com</dd>
        </div>
        <div class="definition-list__item">
          <dt class="definition-list__title">sales:</dt>
          <dd class="definition-list__description">sales@getluma.com</dd>
        </div>
        <div class="definition-list__item">
          <dt class="definition-list__title">general:</dt>
          <dd class="definition-list__description">general@getluma.com</dd>
        </div>
      </dl>
      <p>75 5th Street NW <br>Atlanta, GA 30308</p>
    </aside>
    <main class="contact-columns__main">
      <?php the_content(); ?>
    </main>
  </div>
</section>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>