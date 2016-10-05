
<footer class="bottom-bar">
  <div class="bottom-bar__container">
    <div class="bottom-bar__section bottom-bar__section--primary bottom-primary">
      <?php if (has_nav_menu('footer_product')): ?>
      <nav class="bottom-primary__nav bottom-primary__nav--product">
        <h4 class="bottom-primary__title">Product</h4>
        <?php wp_nav_menu(['theme_location' => 'footer_product', 'menu_class' => 'bottom-primary__list']); ?>
      </nav>
      <?php endif; ?>
      <?php if (has_nav_menu('footer_company')): ?>
      <nav class="bottom-primary__nav bottom-primary__nav--company">
        <h4 class="bottom-primary__title">Company</h4>
        <?php wp_nav_menu(['theme_location' => 'footer_company', 'menu_class' => 'bottom-primary__list']); ?>
      </nav>
      <?php endif; ?>
      <?php if (has_nav_menu('footer_support')): ?>
      <nav class="bottom-primary__nav bottom-primary__nav--support">
        <h4 class="bottom-primary__title">Support</h4>
        <?php wp_nav_menu(['theme_location' => 'footer_support', 'menu_class' => 'bottom-primary__list']); ?>
      </nav>
      <?php endif; ?>
      <div class="bottom-primary__email">
        <?php if ( get_field('mailchimp_form_action', 'option') && get_field('mailchimp_honeypot_name', 'option') ): ?>
        <h4 class="bottom-primary__title">GET THE LATEST NEWS</h4>
        <?php get_template_part('templates/footer', 'mailchimp'); ?>
      </div>
      <?php endif; ?>
    </div>
    <div class="bottom-bar__section bottom-bar__section--secondary bottom-secondary"><a href="<?= esc_url(home_url('/')); ?>" class="bottom-secondary__logo"><svg class="logo-luma" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 98.5 40">
  <path class="logo-luma__text" fill="#7B7B7B" d="M25.4 29.2V16.8h4.8v22.8h-4.8v-4.2c-.8 1.4-1.8 2.5-3.2 3.3-1.4.8-2.8 1.2-4.4 1.2-2.6 0-4.7-.8-6.2-2.4-1.6-1.6-2.4-3.8-2.4-6.8v-14H14v12.5c0 4.2 1.7 6.3 5.2 6.3 1.7 0 3.1-.6 4.3-1.7 1.3-.9 1.9-2.5 1.9-4.6zM37.1 27.3v12.4h-4.8V16.8h4.8V21c.7-1.4 1.7-2.5 3.1-3.3 1.4-.8 2.9-1.2 4.5-1.2 3.6 0 6 1.5 7.3 4.5 2.3-3 5.1-4.5 8.5-4.5 2.6 0 4.7.8 6.2 2.4 1.6 1.6 2.4 3.8 2.4 6.8v14h-4.8V27.1c0-4.2-1.7-6.3-5.2-6.3-1.6 0-3.1.5-4.3 1.6-1.2 1-1.9 2.6-1.9 4.6v12.7h-4.8V27.1c0-2.2-.4-3.8-1.2-4.8-.8-1-2-1.5-3.6-1.5-1.7 0-3.1.6-4.3 1.7-1.2 1.1-1.9 2.7-1.9 4.8z"/>
  <path class="logo-luma__text" fill="#7B7B7B" d="M88.8 39.7h-4.4v-3C82.5 38.9 80 40 76.8 40c-2.4 0-4.3-.7-5.9-2-1.6-1.3-2.3-3.1-2.3-5.4 0-2.2.8-3.9 2.5-5s3.9-1.7 6.7-1.7H84V25c0-3-1.7-4.5-5.1-4.5-2.1 0-4.3.8-6.6 2.3l-2.1-3c2.8-2.2 5.9-3.3 9.4-3.3 2.7 0 4.9.7 6.6 2 1.7 1.4 2.6 3.5 2.6 6.4v14.8zM84 31.2v-1.9h-5.4c-3.5 0-5.2 1.1-5.2 3.3 0 1.1.4 2 1.3 2.6.9.6 2.1.9 3.6.9s2.9-.4 4-1.3c1.1-1 1.7-2.2 1.7-3.6zM0 0h5.6v39.7H0z"/>
  <path class="logo-luma__dot" fill="#FF8300" d="M92.2 39.3l-1.7-2.9c-.1-.2-.1-.5 0-.7l1.7-2.9c.1-.2.4-.4.6-.4h3.3c.3 0 .5.1.6.4l1.7 2.9c.1.2.1.5 0 .7l-1.7 2.9c-.1.2-.4.4-.6.4h-3.3c-.3 0-.5-.2-.6-.4z"/>
</svg></a><span class="bottom-secondary__copyright">© 2016 Luma Home Inc. All rights reserved.</span>
      <ul class="bottom-secondary__social-media">
        <?php if ( get_field('facebook_url', 'option') ): ?>
        <li><a href="<?=the_field('facebook_url', 'option'); ?>" target="_blank"><svg class="logo-facebook" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22">
  <path fill="#FFF" d="M20.8 0H1.2C.5 0 0 .5 0 1.2v19.6c0 .7.5 1.2 1.2 1.2h10.5v-8.5H8.9v-3.3h2.9V7.7c0-2.8 1.7-4.4 4.3-4.4 1.2 0 2.3.1 2.6.1v3h-1.8c-1.4 0-1.6.7-1.6 1.6v2.1h3.3l-.6 3.4h-2.9V22h5.6c.7 0 1.2-.5 1.2-1.2V1.2C22 .5 21.5 0 20.8 0z"/>
</svg></a></li>
        <?php endif; ?>
        <?php if ( get_field('twitter_url', 'option') ): ?>
        <li><a href="<?=the_field('twitter_url', 'option'); ?>" target="_blank"><svg class="logo-twitter" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27.1 22">
  <path fill="#FFF" d="M27.1 2.6c-1 .4-2.1.7-3.2.9 1.1-.7 2-1.8 2.4-3.1-1.1.6-2.3 1.1-3.5 1.3-1-1.1-2.5-1.8-4.1-1.8-3.1 0-5.6 2.5-5.6 5.6 0 .4 0 .9.1 1.3C8.7 6.6 4.6 4.4 1.9 1c-.5.8-.8 1.8-.8 2.8 0 1.9 1 3.6 2.5 4.6-.9 0-1.8-.3-2.5-.7v.1c0 2.7 1.9 4.9 4.5 5.4-.5.1-1 .2-1.5.2-.4 0-.7 0-1-.1.7 2.2 2.8 3.8 5.2 3.9-1.9 1.5-4.3 2.4-6.9 2.4-.4 0-.9 0-1.3-.1C2.5 21.1 5.4 22 8.5 22c10.2 0 15.8-8.5 15.8-15.8v-.7c1.1-.8 2-1.8 2.8-2.9z"/>
</svg></a></li>
        <?php endif; ?>
        <?php if ( get_field('instagram_url', 'option') ): ?>
        <li><a href="<?=the_field('instagram_url', 'option'); ?>" target="_blank"><svg class="logo-instagram" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22">
  <g fill="#FFF">
    <path d="M11 2c2.9 0 3.3 0 4.4.1 1.1 0 1.7.2 2 .4.5.2.9.4 1.3.8s.6.8.8 1.3c.2.4.3 1 .4 2 .1 1.1.1 1.5.1 4.4s0 3.3-.1 4.4c0 1.1-.2 1.7-.4 2-.2.5-.4.9-.8 1.3s-.8.6-1.3.8c-.4.2-1 .3-2 .4-1.1.1-1.5.1-4.4.1H6.6c-1.1 0-1.7-.2-2-.4-.5-.2-.9-.4-1.3-.8s-.6-.8-.8-1.3c-.2-.4-.3-1-.4-2C2 14.3 2 13.9 2 11V6.6c0-1.1.2-1.7.4-2 .2-.6.5-1 .8-1.4.4-.3.8-.6 1.3-.8.4-.2 1-.3 2-.4H11m0-2C8 0 7.6 0 6.5.1c-1.2.1-2 .2-2.7.5-.7.3-1.3.6-2 1.2-.6.6-1 1.2-1.3 1.9-.2.8-.4 1.6-.4 2.8C0 7.6 0 8 0 11s0 3.4.1 4.5c.1 1.2.2 2 .5 2.7.3.7.7 1.3 1.3 1.9.6.6 1.2 1 1.9 1.3.7.3 1.5.5 2.7.5 1.1.1 1.5.1 4.5.1s3.4 0 4.5-.1c1.2-.1 2-.2 2.7-.5.7-.3 1.3-.7 1.9-1.3.6-.6 1-1.2 1.3-1.9.3-.7.5-1.5.5-2.7.1-1.1.1-1.5.1-4.5s0-3.4-.1-4.5c-.1-1.2-.2-2-.5-2.7-.3-.7-.7-1.3-1.3-1.9-.6-.6-1.2-1-1.9-1.3-.7-.3-1.5-.5-2.7-.5C14.4 0 14 0 11 0z"/>
    <path d="M11 5.4c-3.1 0-5.6 2.5-5.6 5.6s2.5 5.6 5.6 5.6 5.6-2.5 5.6-5.6-2.5-5.6-5.6-5.6zm0 9.3c-2 0-3.7-1.6-3.7-3.7S9 7.3 11 7.3 14.7 9 14.7 11 13 14.7 11 14.7z"/>
    <circle cx="16.9" cy="5.1" r="1.3"/>
  </g>
</svg></a></li>
        <?php endif; ?>
        <?php if ( get_field('pinterest_url', 'option') ): ?>
        <li><a href="<?=the_field('pinterest_url', 'option'); ?>" target="_blank"><svg class="logo-pinterest" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22">
  <path fill="#FFF" d="M11 0C4.9 0 0 4.9 0 11c0 4.7 2.9 8.6 7 10.2-.1-.9-.2-2.2 0-3.2.2-.9 1.3-5.5 1.3-5.5S8 12 8 11c0-1.5.9-2.7 2-2.7.9 0 1.4.7 1.4 1.5 0 .9-.6 2.4-.9 3.7-.3 1.1.5 2 1.6 2 2 0 3.5-2.1 3.5-5C15.5 7.8 13.7 6 11 6c-3.1 0-5 2.3-5 4.8 0 .9.4 2 .8 2.5.1.1.1.2.1.3-.1.3-.3 1.1-.3 1.2 0 .2-.2.2-.4.1-1.4-.5-2.2-2.6-2.2-4.2C4 7.2 6.5 4 11.3 4c3.8 0 6.8 2.7 6.8 6.4 0 3.8-2.4 6.8-5.7 6.8-1.1 0-2.2-.6-2.5-1.3 0 0-.6 2.1-.7 2.6-.2 1-.9 2.2-1.4 2.9 1 .3 2.1.5 3.3.5 6.1 0 11-4.9 11-11C22 4.9 17.1 0 11 0z"/>
</svg></a></li>
        <?php endif; ?>
        <?php if ( get_field('youtube_url', 'option') ): ?>
        <li><a href="<?=the_field('youtube_url', 'option'); ?>" target="_blank"><svg class="logo-youtube" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.3 22">
  <path fill="#FFF" d="M31 4.7s-.3-2.2-1.2-3.1C28.6.4 27.3.3 26.7.3 22.2 0 15.6 0 15.6 0S9 0 4.7.3c-.6.1-2 .1-3.1 1.3C.6 2.6.3 4.7.3 4.7S0 7.3 0 9.8v2.4c0 2.5.3 5.1.3 5.1s.3 2.2 1.2 3.1c1.2 1.2 2.8 1.2 3.4 1.3 2.6.2 10.7.3 10.7.3s6.6 0 10.9-.3c.6-.1 1.9-.1 3.1-1.3.9-.9 1.2-3.1 1.2-3.1s.3-2.5.3-5.1V9.8c.2-2.5-.1-5.1-.1-5.1zM12.4 15.1V6.3l8.5 4.4-8.5 4.4z"/>
</svg></a></li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</footer>