
<header style="background-image:url(<?=the_post_thumbnail_url(); ?>);" class="header header--left header--shadow-bg header--shadow-left header--light <?=the_field('mobile_background_position') ?>">
  <div class="header__container">
    <?php if ( get_field('header_headline') ): ?>
    <h1 class="header__title"><?= the_field('header_headline'); ?></h1>
    <?php endif; ?>
    <?php if ( get_field('header_description') ): ?>
    <p class="header__description"><?= the_field('header_description'); ?></p>
    <?php endif; ?>
    <ul class="header__ctas">
      <?php if ( get_field('app_store_link') ): ?>
      <li><a href="<?=the_field('app_store_link'); ?>" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="135" height="40" viewBox="0 0 135 40"><path fill="#A6A6A6" d="M130.2 40H4.7C2.1 40 0 37.9 0 35.3V4.7C0 2.1 2.1 0 4.7 0h125.5c2.6 0 4.8 2.1 4.8 4.7v30.5c0 2.7-2.2 4.8-4.8 4.8z"/><path d="M134 35.3c0 2.1-1.7 3.8-3.8 3.8H4.7c-2.1 0-3.8-1.7-3.8-3.8V4.7C.9 2.6 2.6.9 4.7.9h125.5c2.1 0 3.8 1.7 3.8 3.8v30.6z"/><g fill="#FFF"><path d="M30.1 19.8c0-3.2 2.6-4.8 2.8-4.9-1.5-2.2-3.9-2.5-4.7-2.5-2-.2-3.9 1.2-4.9 1.2-1 0-2.6-1.2-4.2-1.1-2.1 0-4.1 1.3-5.2 3.2-2.3 3.9-.6 9.7 1.6 12.9 1.1 1.6 2.4 3.3 4 3.2 1.6-.1 2.2-1 4.2-1 1.9 0 2.5 1 4.2 1 1.7 0 2.8-1.6 3.9-3.1 1.3-1.8 1.8-3.5 1.8-3.6-.1-.2-3.4-1.5-3.5-5.3zM26.9 10.3c.9-1.1 1.5-2.6 1.3-4.1-1.3.1-2.8.9-3.8 1.9-.8.9-1.5 2.5-1.3 3.9 1.5.2 2.9-.6 3.8-1.7z"/></g><g fill="#FFF"><path d="M53.6 31.5h-2.3l-1.2-3.9h-4.3l-1.2 3.9h-2.2l4.3-13.3h2.6l4.3 13.3zM49.8 26l-1.1-3.5c-.1-.4-.3-1.2-.7-2.5-.1.6-.3 1.4-.6 2.5L46.2 26h3.6zM64.7 26.6c0 1.6-.4 2.9-1.3 3.9-.8.8-1.8 1.3-2.9 1.3-1.3 0-2.2-.5-2.7-1.4v5.1h-2.1V25.1c0-1 0-2.1-.1-3.2h1.9l.1 1.5c.7-1.1 1.8-1.7 3.2-1.7 1.1 0 2.1.4 2.8 1.3.7.9 1.1 2.1 1.1 3.6zm-2.2.1c0-.9-.2-1.7-.6-2.3-.5-.6-1.1-.9-1.9-.9-.5 0-1 .2-1.4.5-.4.4-.7.8-.8 1.4-.1.3-.1.5-.1.6v1.6c0 .7.2 1.3.6 1.8s1 .7 1.7.7c.8 0 1.4-.3 1.9-.9.4-.7.6-1.5.6-2.5zM75.7 26.6c0 1.6-.4 2.9-1.3 3.9-.8.8-1.8 1.3-2.9 1.3-1.3 0-2.2-.5-2.7-1.4v5.1h-2.1V25.1c0-1 0-2.1-.1-3.2h1.9l.1 1.5c.7-1.1 1.8-1.7 3.2-1.7 1.1 0 2.1.4 2.8 1.3.7.9 1.1 2.1 1.1 3.6zm-2.2.1c0-.9-.2-1.7-.6-2.3-.5-.6-1.1-.9-1.9-.9-.5 0-1 .2-1.4.5-.4.4-.7.8-.8 1.4-.1.3-.1.5-.1.6v1.6c0 .7.2 1.3.6 1.8.4.5 1 .7 1.7.7.8 0 1.4-.3 1.9-.9.4-.7.6-1.5.6-2.5zM88 27.8c0 1.1-.4 2.1-1.2 2.8-.9.8-2.1 1.2-3.6 1.2-1.4 0-2.6-.3-3.4-.8l.5-1.8c.9.6 2 .9 3.1.9.8 0 1.4-.2 1.9-.5.4-.4.7-.8.7-1.5 0-.5-.2-1-.6-1.4-.4-.4-1-.7-1.8-1-2.3-.9-3.5-2.1-3.5-3.8 0-1.1.4-2 1.2-2.7.8-.7 1.9-1 3.3-1 1.2 0 2.2.2 3 .6l-.6 1.6c-.8-.4-1.6-.6-2.5-.6-.8 0-1.3.2-1.8.6-.4.3-.5.7-.5 1.2s.2 1 .6 1.3c.4.3 1 .7 1.9 1 1.1.5 2 1 2.5 1.6.6.6.8 1.4.8 2.3zM95.1 23.5h-2.3v4.7c0 1.2.4 1.8 1.2 1.8.4 0 .7 0 .9-.1l.1 1.6c-.4.2-1 .2-1.7.2-.8 0-1.5-.3-2-.8s-.7-1.4-.7-2.6v-4.8h-1.4v-1.6h1.4v-1.8l2.1-.6v2.4H95l.1 1.6zM105.7 26.6c0 1.5-.4 2.7-1.3 3.6-.9 1-2.1 1.5-3.5 1.5s-2.5-.5-3.4-1.4-1.3-2.1-1.3-3.5c0-1.5.4-2.7 1.3-3.7.9-.9 2-1.4 3.5-1.4 1.4 0 2.5.5 3.4 1.4.9.9 1.3 2.1 1.3 3.5zm-2.2.1c0-.9-.2-1.6-.6-2.3-.4-.8-1.1-1.1-1.9-1.1-.9 0-1.5.4-2 1.1-.4.6-.6 1.4-.6 2.3 0 .9.2 1.6.6 2.3.5.8 1.1 1.1 1.9 1.1.8 0 1.5-.4 1.9-1.2.5-.6.7-1.3.7-2.2zM112.6 23.8c-.2 0-.4-.1-.7-.1-.8 0-1.3.3-1.7.9-.4.5-.5 1.1-.5 1.9v5h-2.1v-6.6c0-1.1 0-2.1-.1-3h1.9l.1 1.8h.1c.2-.6.6-1.1 1.1-1.5.5-.3 1-.5 1.5-.5h.5l-.1 2.1zM122.2 26.3c0 .4 0 .7-.1 1h-6.4c0 .9.3 1.7.9 2.2.5.4 1.2.7 2.1.7.9 0 1.8-.2 2.6-.5l.3 1.5c-.9.4-2 .6-3.2.6-1.5 0-2.7-.4-3.5-1.3-.8-.9-1.3-2-1.3-3.5 0-1.4.4-2.7 1.2-3.6.8-1 1.9-1.5 3.4-1.5 1.4 0 2.4.5 3.1 1.5.6.6.9 1.7.9 2.9zm-2.1-.6c0-.6-.1-1.2-.4-1.6-.4-.6-.9-.9-1.7-.9-.7 0-1.3.3-1.7.9-.4.5-.6 1-.6 1.7l4.4-.1z"/></g><g fill="#FFF"><path d="M49 10c0 1.2-.4 2.1-1.1 2.7-.7.5-1.6.8-2.8.8-.6 0-1.1 0-1.5-.1V7c.6-.1 1.2-.1 1.8-.1 1.1 0 2 .2 2.6.7.7.6 1 1.4 1 2.4zm-1.1 0c0-.8-.2-1.3-.6-1.8-.4-.4-1-.6-1.8-.6-.3 0-.6 0-.8.1v4.9h.7c.8 0 1.4-.2 1.9-.7s.6-1 .6-1.9zM54.9 11c0 .7-.2 1.3-.6 1.8-.4.5-1 .7-1.7.7s-1.2-.2-1.7-.7c-.4-.5-.6-1-.6-1.7s.2-1.3.6-1.8 1-.7 1.7-.7 1.2.2 1.7.7c.4.5.6 1 .6 1.7zm-1.1.1c0-.4-.1-.8-.3-1.1-.2-.4-.5-.6-.9-.6s-.7.2-1 .6c-.2.3-.3.7-.3 1.1 0 .4.1.8.3 1.1.2.4.5.6 1 .6.4 0 .7-.2.9-.6.2-.3.3-.7.3-1.1zM62.8 8.7l-1.5 4.7h-1l-.6-2c-.2-.5-.3-1-.4-1.5-.1.5-.2 1-.4 1.5l-.6 2h-1l-1.4-4.7H57l.5 2.2.3 1.5c.1-.4.2-.9.4-1.5l.7-2.2h.9l.6 2.2c.2.5.3 1.1.4 1.6.1-.5.2-1 .3-1.6l.6-2.2h1.1zM68.2 13.4h-1v-2.7c0-.8-.3-1.2-.9-1.2-.3 0-.6.1-.8.3-.2.2-.3.5-.3.8v2.8h-1V10 8.7h.8v.7c.1-.2.3-.4.5-.6.3-.2.6-.3.9-.3.4 0 .8.1 1.1.4.4.3.5.9.5 1.6v2.9zM71.1 13.4h-1V6.6h1v6.8zM77.3 11c0 .7-.2 1.3-.6 1.8-.4.5-1 .7-1.7.7s-1.2-.2-1.7-.7c-.4-.5-.6-1-.6-1.7s.2-1.3.6-1.8 1-.7 1.7-.7 1.2.2 1.7.7c.4.5.6 1 .6 1.7zm-1.1.1c0-.4-.1-.8-.3-1.1-.2-.4-.5-.6-.9-.6s-.7.2-1 .6c-.2.3-.3.7-.3 1.1 0 .4.1.8.3 1.1.2.4.5.6 1 .6.4 0 .7-.2.9-.6.2-.3.3-.7.3-1.1zM82.3 13.4h-.9l-.1-.5c-.3.4-.8.6-1.4.6-.4 0-.8-.1-1.1-.4-.2-.3-.4-.6-.4-1 0-.6.2-1 .7-1.3.5-.3 1.2-.5 2-.4v-.1c0-.6-.3-.9-1-.9-.5 0-.9.1-1.2.3l-.1-.7c.4-.3 1-.4 1.6-.4 1.2 0 1.8.6 1.8 1.9v1.7c.1.6.1 1 .1 1.2zm-1.1-1.6v-.7c-1.2 0-1.7.3-1.7.9 0 .2.1.4.2.6.1.1.3.2.5.2s.4-.1.6-.2c.2-.1.3-.3.4-.6v-.2zM88.3 13.4h-.9v-.8c-.3.6-.8.9-1.5.9-.6 0-1-.2-1.4-.7s-.6-1-.6-1.7c0-.8.2-1.4.6-1.9.4-.4.9-.7 1.5-.7s1.1.2 1.3.6V6.6h1v5.6c-.1.4 0 .8 0 1.2zm-1.1-2v-.8-.3c-.1-.3-.2-.5-.4-.6-.2-.2-.4-.3-.7-.3-.4 0-.7.2-.9.5-.2.3-.3.7-.3 1.2s.1.8.3 1.1c.2.3.5.5.9.5.3 0 .6-.1.8-.4.2-.2.3-.5.3-.9zM97.2 11c0 .7-.2 1.3-.6 1.8-.4.5-1 .7-1.7.7s-1.2-.2-1.7-.7c-.4-.5-.6-1-.6-1.7s.2-1.3.6-1.8 1-.7 1.7-.7 1.2.2 1.7.7c.4.5.6 1 .6 1.7zm-1 .1c0-.4-.1-.8-.3-1.1-.2-.4-.5-.6-.9-.6s-.7.2-1 .6c-.2.3-.3.7-.3 1.1 0 .4.1.8.3 1.1.2.4.5.6 1 .6.4 0 .7-.2.9-.6.2-.3.3-.7.3-1.1zM102.9 13.4h-1v-2.7c0-.8-.3-1.2-1-1.2-.3 0-.6.1-.8.3s-.3.5-.3.8v2.8h-1V10 8.7h.9v.7c.1-.2.3-.4.5-.6.3-.2.6-.3 1-.3s.8.1 1.1.4c.4.3.5.9.5 1.6v2.9zM109.9 9.5h-1.2v2.3c0 .6.2.9.6.9h.5v.8c-.2.1-.5.1-.8.1-.4 0-.7-.1-1-.4-.2-.3-.3-.7-.3-1.3V9.5h-.7v-.8h.7v-.8l1-.3v1.2h1.2v.7zM115.5 13.4h-1v-2.7c0-.8-.3-1.3-.9-1.3-.5 0-.8.2-1 .7V13.3h-1V6.6h1v2.8c.3-.5.8-.8 1.4-.8.4 0 .8.1 1.1.4.4.4.5.9.5 1.6l-.1 2.8zM121.2 10.9v.5H118c0 .5.2.8.5 1.1.3.2.6.3 1 .3.5 0 .9-.1 1.3-.2l.2.7c-.4.2-1 .3-1.6.3-.7 0-1.3-.2-1.7-.6-.4-.4-.6-1-.6-1.7s.2-1.3.6-1.8c.4-.5 1-.8 1.6-.8.7 0 1.2.3 1.5.8.3.3.4.8.4 1.4zm-1-.3c0-.3-.1-.6-.2-.8-.2-.3-.5-.4-.8-.4-.3 0-.6.1-.8.4-.2.2-.3.5-.3.8h2.1z"/></g></svg></a></li>
      <?php endif; ?>
      <?php if ( get_field('google_play_link_copy') ): ?>
      <li><a href="<?=the_field('google_play_link_copy'); ?>" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="135" height="40" viewBox="0 0 135 40"><path d="M130 40H5c-2.8 0-5-2.2-5-5V5c0-2.8 2.2-5 5-5h125c2.8 0 5 2.2 5 5v30c0 2.8-2.2 5-5 5z"/><path fill="#A6A6A6" d="M130 .8c2.3 0 4.2 1.9 4.2 4.2v30c0 2.3-1.9 4.2-4.2 4.2H5C2.7 39.2.8 37.3.8 35V5C.8 2.7 2.7.8 5 .8h125m0-.8H5C2.2 0 0 2.3 0 5v30c0 2.8 2.2 5 5 5h125c2.8 0 5-2.2 5-5V5c0-2.7-2.2-5-5-5z"/><g fill="#FFF" stroke="#FFF" stroke-width=".2" stroke-miterlimit="10"><path d="M47.4 10.2c0 .8-.2 1.5-.7 2-.6.6-1.3.9-2.2.9-.9 0-1.6-.3-2.2-.9-.6-.6-.9-1.3-.9-2.2 0-.9.3-1.6.9-2.2.6-.6 1.3-.9 2.2-.9.4 0 .8.1 1.2.3.4.2.7.4.9.7l-.5.5c-.4-.5-.9-.7-1.6-.7-.6 0-1.2.2-1.6.7-.5.4-.7 1-.7 1.7s.2 1.3.7 1.7c.5.4 1 .7 1.6.7.7 0 1.2-.2 1.7-.7.3-.3.5-.7.5-1.2h-2.2v-.8h2.9v.4zM52 7.7h-2.7v1.9h2.5v.7h-2.5v1.9H52v.8h-3.5V7H52v.7zM55.3 13h-.8V7.7h-1.7V7H57v.7h-1.7V13zM59.9 13V7h.8v6h-.8zM64.1 13h-.8V7.7h-1.7V7h4.1v.7H64V13zM73.6 12.2c-.6.6-1.3.9-2.2.9-.9 0-1.6-.3-2.2-.9-.6-.6-.9-1.3-.9-2.2s.3-1.6.9-2.2c.6-.6 1.3-.9 2.2-.9.9 0 1.6.3 2.2.9.6.6.9 1.3.9 2.2 0 .9-.3 1.6-.9 2.2zm-3.8-.5c.4.4 1 .7 1.6.7.6 0 1.2-.2 1.6-.7.4-.4.7-1 .7-1.7s-.2-1.3-.7-1.7c-.4-.4-1-.7-1.6-.7-.6 0-1.2.2-1.6.7-.4.4-.7 1-.7 1.7s.2 1.3.7 1.7zM75.6 13V7h.9l2.9 4.7V7h.8v6h-.8l-3.1-4.9V13h-.7z"/></g><path fill="#FFF" d="M68.1 21.8c-2.4 0-4.3 1.8-4.3 4.3 0 2.4 1.9 4.3 4.3 4.3s4.3-1.8 4.3-4.3c0-2.6-1.9-4.3-4.3-4.3zm0 6.8c-1.3 0-2.4-1.1-2.4-2.6s1.1-2.6 2.4-2.6c1.3 0 2.4 1 2.4 2.6 0 1.5-1.1 2.6-2.4 2.6zm-9.3-6.8c-2.4 0-4.3 1.8-4.3 4.3 0 2.4 1.9 4.3 4.3 4.3s4.3-1.8 4.3-4.3c0-2.6-1.9-4.3-4.3-4.3zm0 6.8c-1.3 0-2.4-1.1-2.4-2.6s1.1-2.6 2.4-2.6c1.3 0 2.4 1 2.4 2.6 0 1.5-1.1 2.6-2.4 2.6zm-11.1-5.5v1.8H52c-.1 1-.5 1.8-1 2.3-.6.6-1.6 1.3-3.3 1.3-2.7 0-4.7-2.1-4.7-4.8s2.1-4.8 4.7-4.8c1.4 0 2.5.6 3.3 1.3l1.3-1.3c-1.1-1-2.5-1.8-4.5-1.8-3.6 0-6.7 3-6.7 6.6 0 3.6 3.1 6.6 6.7 6.6 2 0 3.4-.6 4.6-1.9 1.2-1.2 1.6-2.9 1.6-4.2 0-.4 0-.8-.1-1.1h-6.2zm45.4 1.4c-.4-1-1.4-2.7-3.6-2.7s-4 1.7-4 4.3c0 2.4 1.8 4.3 4.2 4.3 1.9 0 3.1-1.2 3.5-1.9l-1.4-1c-.5.7-1.1 1.2-2.1 1.2s-1.6-.4-2.1-1.3l5.7-2.4-.2-.5zm-5.8 1.4c0-1.6 1.3-2.5 2.2-2.5.7 0 1.4.4 1.6.9l-3.8 1.6zM82.6 30h1.9V17.5h-1.9V30zm-3-7.3c-.5-.5-1.3-1-2.3-1-2.1 0-4.1 1.9-4.1 4.3s1.9 4.2 4.1 4.2c1 0 1.8-.5 2.2-1h.1v.6c0 1.6-.9 2.5-2.3 2.5-1.1 0-1.9-.8-2.1-1.5l-1.6.7c.5 1.1 1.7 2.5 3.8 2.5 2.2 0 4-1.3 4-4.4V22h-1.8v.7zm-2.2 5.9c-1.3 0-2.4-1.1-2.4-2.6s1.1-2.6 2.4-2.6c1.3 0 2.3 1.1 2.3 2.6s-1 2.6-2.3 2.6zm24.4-11.1h-4.5V30h1.9v-4.7h2.6c2.1 0 4.1-1.5 4.1-3.9s-2-3.9-4.1-3.9zm.1 6h-2.7v-4.3h2.7c1.4 0 2.2 1.2 2.2 2.1-.1 1.1-.9 2.2-2.2 2.2zm11.5-1.8c-1.4 0-2.8.6-3.3 1.9l1.7.7c.4-.7 1-.9 1.7-.9 1 0 1.9.6 2 1.6v.1c-.3-.2-1.1-.5-1.9-.5-1.8 0-3.6 1-3.6 2.8 0 1.7 1.5 2.8 3.1 2.8 1.3 0 1.9-.6 2.4-1.2h.1v1h1.8v-4.8c-.2-2.2-1.9-3.5-4-3.5zm-.2 6.9c-.6 0-1.5-.3-1.5-1.1 0-1 1.1-1.3 2-1.3.8 0 1.2.2 1.7.4-.2 1.2-1.2 2-2.2 2zm10.5-6.6l-2.1 5.4h-.1l-2.2-5.4h-2l3.3 7.6-1.9 4.2h1.9l5.1-11.8h-2zm-16.8 8h1.9V17.5h-1.9V30z"/><linearGradient id="a" gradientUnits="userSpaceOnUse" x1="21.8" y1="13712.616" x2="5.017" y2="13695.834" gradientTransform="matrix(1 0 0 -1 0 13721.326)"><stop offset="0" stop-color="#00A0FF"/><stop offset=".007" stop-color="#00A1FF"/><stop offset=".26" stop-color="#00BEFF"/><stop offset=".512" stop-color="#00D2FF"/><stop offset=".76" stop-color="#00DFFF"/><stop offset="1" stop-color="#00E3FF"/></linearGradient><path fill="url(#a)" d="M10.4 7.5c-.3.3-.4.8-.4 1.4V31c0 .6.2 1.1.5 1.4l.1.1L23 20.1v-.2L10.4 7.5z"/><linearGradient id="b" gradientUnits="userSpaceOnUse" x1="33.834" y1="13701.324" x2="9.637" y2="13701.324" gradientTransform="matrix(1 0 0 -1 0 13721.326)"><stop offset="0" stop-color="#FFE000"/><stop offset=".409" stop-color="#FFBD00"/><stop offset=".775" stop-color="#FFA500"/><stop offset="1" stop-color="#FF9C00"/></linearGradient><path fill="url(#b)" d="M27 24.3l-4.1-4.1V19.9l4.1-4.1.1.1 4.9 2.8c1.4.8 1.4 2.1 0 2.9l-5 2.7z"/><linearGradient id="c" gradientUnits="userSpaceOnUse" x1="24.827" y1="13699.03" x2="2.069" y2="13676.272" gradientTransform="matrix(1 0 0 -1 0 13721.326)"><stop offset="0" stop-color="#FF3A44"/><stop offset="1" stop-color="#C31162"/></linearGradient><path fill="url(#c)" d="M27.1 24.2L22.9 20 10.4 32.5c.5.5 1.2.5 2.1.1l14.6-8.4"/><linearGradient id="d" gradientUnits="userSpaceOnUse" x1="7.297" y1="13721.15" x2="17.46" y2="13710.987" gradientTransform="matrix(1 0 0 -1 0 13721.326)"><stop offset="0" stop-color="#32A071"/><stop offset=".069" stop-color="#2DA771"/><stop offset=".476" stop-color="#15CF74"/><stop offset=".801" stop-color="#06E775"/><stop offset="1" stop-color="#00F076"/></linearGradient><path fill="url(#d)" d="M27.1 15.8L12.5 7.5c-.9-.5-1.6-.4-2.1.1L22.9 20l4.2-4.2z"/><path opacity=".2" d="M27 24.1l-14.5 8.2c-.8.5-1.5.4-2 0l-.1.1.1.1c.5.4 1.2.5 2 0L27 24.1z"/><path opacity=".12" d="M10.4 32.3c-.3-.3-.4-.8-.4-1.4v.1c0 .6.2 1.1.5 1.4v-.1h-.1zM32 21.3l-5 2.8.1.1 4.9-2.8c.7-.4 1-.9 1-1.4 0 .5-.4.9-1 1.3z"/><path opacity=".25" fill="#FFF" d="M12.5 7.6L32 18.7c.6.4 1 .8 1 1.3 0-.5-.3-1-1-1.4L12.5 7.5c-1.4-.8-2.5-.2-2.5 1.4V9c0-1.5 1.1-2.2 2.5-1.4z"/></svg></a></li>
      <?php endif; ?>
    </ul>
  </div>
</header>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>