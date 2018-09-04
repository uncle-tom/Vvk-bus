<h1>Мои настройки</h1>

<form method="post" action="options.php">
	
    <?php settings_fields( 'my-settings-group' ); ?>
    <?php do_settings_sections( 'my-settings-group' ); ?>

    <table class="form-table">
        <tr valign="top">
        <th scope="row">Ссылка на Facebook</th>
        <td><input type="text" name="facebook_link" value="<?php echo esc_attr( get_option('facebook_link') ); ?>" /></td>
        </tr>
         
        <tr valign="top">
        <th scope="row">Ссылка на Vk</th>
        <td><input type="text" name="vk_link" value="<?php echo esc_attr( get_option('vk_link') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <th scope="row">Ссылка на Instagram</th>
        <td><input type="text" name="instagram_link" value="<?php echo esc_attr( get_option('instagram_link') ); ?>" /></td>
        </tr>
        
        <tr valign="top">
        <th scope="row">Ссылка на Telegram</th>
        <td><input type="text" name="telegram_link" value="<?php echo esc_attr( get_option('telegram_link') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <th scope="row">Телефон</th>
        <td><input type="text" name="phone" value="<?php echo esc_attr( get_option('phone') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <th scope="row">Email</th>
        <td><input type="text" name="email" value="<?php echo esc_attr( get_option('email') ); ?>" /></td>
        </tr>

        <tr valign="top">
        <th scope="row">Логотип</th>
        <td><input name="logo_image" type="file" id="logo_image" value="<?php echo esc_attr( get_option('logo_image') ); ?>" /><?php echo get_option('logo_image'); ?></td>
        </tr>        
    </table>
    
    <?php submit_button(); ?>

</form>