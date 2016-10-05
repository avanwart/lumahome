
<header class="top-bar">
  <div class="top-bar__container"><a href="<?= esc_url(home_url('/')); ?>" class="top-bar__logo"><svg class="logo-luma" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 98.5 40">
  <path class="logo-luma__text" fill="#7B7B7B" d="M25.4 29.2V16.8h4.8v22.8h-4.8v-4.2c-.8 1.4-1.8 2.5-3.2 3.3-1.4.8-2.8 1.2-4.4 1.2-2.6 0-4.7-.8-6.2-2.4-1.6-1.6-2.4-3.8-2.4-6.8v-14H14v12.5c0 4.2 1.7 6.3 5.2 6.3 1.7 0 3.1-.6 4.3-1.7 1.3-.9 1.9-2.5 1.9-4.6zM37.1 27.3v12.4h-4.8V16.8h4.8V21c.7-1.4 1.7-2.5 3.1-3.3 1.4-.8 2.9-1.2 4.5-1.2 3.6 0 6 1.5 7.3 4.5 2.3-3 5.1-4.5 8.5-4.5 2.6 0 4.7.8 6.2 2.4 1.6 1.6 2.4 3.8 2.4 6.8v14h-4.8V27.1c0-4.2-1.7-6.3-5.2-6.3-1.6 0-3.1.5-4.3 1.6-1.2 1-1.9 2.6-1.9 4.6v12.7h-4.8V27.1c0-2.2-.4-3.8-1.2-4.8-.8-1-2-1.5-3.6-1.5-1.7 0-3.1.6-4.3 1.7-1.2 1.1-1.9 2.7-1.9 4.8z"/>
  <path class="logo-luma__text" fill="#7B7B7B" d="M88.8 39.7h-4.4v-3C82.5 38.9 80 40 76.8 40c-2.4 0-4.3-.7-5.9-2-1.6-1.3-2.3-3.1-2.3-5.4 0-2.2.8-3.9 2.5-5s3.9-1.7 6.7-1.7H84V25c0-3-1.7-4.5-5.1-4.5-2.1 0-4.3.8-6.6 2.3l-2.1-3c2.8-2.2 5.9-3.3 9.4-3.3 2.7 0 4.9.7 6.6 2 1.7 1.4 2.6 3.5 2.6 6.4v14.8zM84 31.2v-1.9h-5.4c-3.5 0-5.2 1.1-5.2 3.3 0 1.1.4 2 1.3 2.6.9.6 2.1.9 3.6.9s2.9-.4 4-1.3c1.1-1 1.7-2.2 1.7-3.6zM0 0h5.6v39.7H0z"/>
  <path class="logo-luma__dot" fill="#FF8300" d="M92.2 39.3l-1.7-2.9c-.1-.2-.1-.5 0-.7l1.7-2.9c.1-.2.4-.4.6-.4h3.3c.3 0 .5.1.6.4l1.7 2.9c.1.2.1.5 0 .7l-1.7 2.9c-.1.2-.4.4-.6.4h-3.3c-.3 0-.5-.2-.6-.4z"/>
</svg></a><a href="#" class="top-bar__menu-button"><svg xmlns="http://www.w3.org/2000/svg" width="21.1" height="16" viewBox="0 0 21.1 16">
  <line fill="none" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="2" y1="2" x2="19.1" y2="2"/>
  <line fill="none" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="2" y1="14" x2="19.1" y2="14"/>
  <line fill="none" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="2" y1="8" x2="19.1" y2="8"/>
</svg></a>
    <nav class="top-bar__nav">
      <?php if (has_nav_menu('primary_navigation')): ?>
      <?php wp_nav_menu(['theme_location' => 'new_navigation', 'menu_class' => 'top-bar__list nav-primary']); ?>
      <?php endif; ?>
    </nav>
  </div>
</header>