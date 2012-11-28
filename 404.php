<?php get_template_part( 'templates/page-header' ); ?>    

<div property="mainContentOfPage">
  
  <p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for or it\'s temporarily unavailable. Perhaps one of the following links or tips, can help.', 'satus' ); ?></p>
  
  <ul>
    <li><?php _e('Check your spelling', 'satus'); ?></li>
    <li><?php printf(__('Return to the <a href="%s">home page</a>', 'satus'), home_url()); ?></li>
    <li><?php _e('Click the <a href="javascript:history.back()">Back</a> button', 'satus'); ?></li>
  </ul>
</div>

<?php get_search_form(); ?>