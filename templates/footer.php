<footer id="footer" role="contentinfo">
  <section>

    <h2 class="assistive-text"><?php _e( 'Footer', 'satus' ); ?></h2>
    
    <section class="org-info" vocab="http://schema.org/" typeof="Organization">
      <h3 property="name">
        <?php bloginfo('name'); ?>
      </h3>
      <p>
        <span property="address" vocab="http://schema.org/" typeof="http://schema.org/PostalAddress">
          <span property="streetAddress">Street Address</span><br>
          <span property="addressLocality">City</span>,
          <span property="addressRegion">State</span>
          <span property="postalCode">Zip Code</span><br>
          <span property="addressCountry">Country</span>
        </span><br>
        <span>Phone</span>: <span property="telephone"><a class="telephone" href="tel:155555555555">1-555-555-5555</a></span><br>
        <span>Fax</span>: <span property="faxNumber"><a class="telephone" href="tel:155555555555">1-555-555-5555</a></span><br>
        <span><a href="<?php echo home_url('/'); ?>" property="url" rel="bookmark">website.com</a></span><br>
        <span><a href="mailto:you@yourdomain.com" property="email">you@yourdomain.com</a></span>
      </p>
    </section>
    
    <p class="copyright"><small>&copy; <?php echo date('Y');?> <?php bloginfo('name'); ?></small></p>
    <p class="design-by">design by <a href="#">Your Design Company</a></p>
    
  </section>
</footer>
<!-- /#footer -->

<?php if (GOOGLE_ANALYTICS_ID) : ?>
<script>
  var _gaq=[['_setAccount','<?php echo GOOGLE_ANALYTICS_ID; ?>'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
<?php endif; ?>

<?php wp_footer(); ?>