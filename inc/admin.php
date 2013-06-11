<?php

/**
 * @link http://justintadlock.com/archives/2009/09/10/adding-and-using-custom-user-profile-fields
 */

add_action( 'show_user_profile', 'satus_extra_profile_fields' );
add_action( 'edit_user_profile', 'satus_extra_profile_fields' );
function satus_extra_profile_fields( $user ) { ?>
  <h3>Social Network Information</h3>
  <table class="form-table">
    <tr>
      <th><label for="googleprofile">Google Profile</label></th>
      <td>
        <input type="text" name="googleprofile" id="googleprofile" value="<?php echo esc_attr( get_the_author_meta( 'googleprofile', $user->ID ) ); ?>" class="regular-text" /><br />
        <span class="description">Please enter your Google Profile url.</span>
      </td>
    </tr>   
    <tr>
      <th><label for="twitter">Twitter</label></th>
      <td>
        <input type="text" name="twitter" id="twitter" value="<?php echo esc_attr( get_the_author_meta( 'twitter', $user->ID ) ); ?>" class="regular-text" /><br />
        <span class="description">Please enter your Twitter url.</span>
      </td>
    </tr> 
    <tr>
      <th><label for="facebook">Facebook</label></th>
      <td>
        <input type="text" name="facebook" id="facebook" value="<?php echo esc_attr( get_the_author_meta( 'facebook', $user->ID ) ); ?>" class="regular-text" /><br />
        <span class="description">Please enter your Facebook url.</span>
      </td>
    </tr>   
    <tr>
      <th><label for="linkedin">LinkedIn</label></th>
      <td>
        <input type="text" name="linkedin" id="linkedin" value="<?php echo esc_attr( get_the_author_meta( 'linkedin', $user->ID ) ); ?>" class="regular-text" /><br />
        <span class="description">Please enter your LinkedIn url.</span>
      </td>
    </tr>   
    <tr>
      <th><label for="flickr">Flickr</label></th>
      <td>
        <input type="text" name="flickr" id="flickr" value="<?php echo esc_attr( get_the_author_meta( 'flickr', $user->ID ) ); ?>" class="regular-text" /><br />
        <span class="description">Please enter your Flickr url.</span>
      </td>
    </tr>   
    <tr>
      <th><label for="youtube">YouTube</label></th>
      <td>
        <input type="text" name="youtube" id="youtube" value="<?php echo esc_attr( get_the_author_meta( 'youtube', $user->ID ) ); ?>" class="regular-text" /><br />
        <span class="description">Please enter your YouTube url.</span>
      </td>
    </tr>   
    <tr>
      <th><label for="vimeo">Vimeo</label></th>
      <td>
        <input type="text" name="vimeo" id="vimeo" value="<?php echo esc_attr( get_the_author_meta( 'vimeo', $user->ID ) ); ?>" class="regular-text" /><br />
        <span class="description">Please enter your Vimeo url.</span>
      </td>
    </tr>
  </table>
<?php }

add_action( 'personal_options_update', 'satus_save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'satus_save_extra_profile_fields' );
function satus_save_extra_profile_fields( $user_id ) {
  if ( !current_user_can( 'edit_user', $user_id ) )
    return false;
  
  // Copy and paste the following line for additional fields. Make sure to change 'twitter' to the field ID
  update_user_meta( $user_id, 'googleprofile', $_POST['googleprofile'] );
  update_user_meta( $user_id, 'twitter', $_POST['twitter'] );
  update_user_meta( $user_id, 'facebook', $_POST['facebook'] );
  update_user_meta( $user_id, 'linkedin', $_POST['linkedin'] );
  update_user_meta( $user_id, 'flickr', $_POST['flickr'] );
  update_user_meta( $user_id, 'youtube', $_POST['youtube'] );
  update_user_meta( $user_id, 'vimeo', $_POST['vimeo'] );
}

?>