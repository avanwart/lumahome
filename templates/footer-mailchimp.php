
<form action="<?=the_field('mailchimp_form_action', 'option') ?>" id="mc-embedded-subscribe-form" method="post" name="mc-embedded-subscribe-form" novalidate="" target="_blank">
  <input id="mce-EMAIL" name="EMAIL" type="email" value="" placeholder="Enter your email" class="inpt inpt--dark"/>
  <div aria-hidden="true" style="position: absolute; left: -5000px;">
    <input name="<?=the_field('mailchimp_honeypot_name', 'option') ?>" tabindex="-1" type="text" value=""/>
  </div>
  <input id="mc-embedded-subscribe" name="subscribe" type="submit" value="&gt;" class="inpt inpt--plain"/>
</form>