<div class="wrap">
    <h2><?php _e( 'affilinet Performance Ads', 'affilinet-performance-module' ) ?></h2>

    <?php

    Affilinet_Api::checkPartnershipStatus();


    if (get_option('affilinet_platform') == 4 ) {
        add_settings_error('affilinet-settings-group', 'invalid_platform', __('The Performance Ads Program will soon be available in Netherlands, too. Please choose another platform so far.', 'affilinet-performance-module'), 'error');
    }
    settings_errors('affilinet-settings-group');
    ?>

    <form method="post" action="options.php">
        <?php settings_fields( 'affilinet-settings-group' ); ?>
        <?php do_settings_sections( 'affilinet-settings-group' );



        ?>
        <table class="form-table">
            <tr valign="top">
                <th scope="row"><label for="affilinet_platform"></label>
                    <?php _e( 'affilinet Country Platform', 'affilinet-performance-module' ) ?>
                </th>
                <td>
                    <select name="affilinet_platform" id="affilinet_platform" style="min-width: 250px;">
                        <option <?php selected('1',get_option('affilinet_platform')); ?> value="1" >affilinet <?php _e('Germany', 'affilinet-performance-module'); ?></option>
                        <option <?php selected('2',get_option('affilinet_platform')); ?> value="2" >affilinet <?php _e('United Kingdom', 'affilinet-performance-module'); ?></option>
                        <option <?php selected('3',get_option('affilinet_platform')); ?> value="3" >affilinet <?php _e('France', 'affilinet-performance-module'); ?></option>
                        <?php  /*<option <?php selected('4',get_option('affilinet_platform')); ?> value="4" >affilinet <?php _e('Netherlands', 'affilinet-performance-module'); ?></option> */ ?>
                        <option <?php selected('6',get_option('affilinet_platform')); ?> value="6" >affilinet <?php _e('Switzerland', 'affilinet-performance-module'); ?></option>
                        <option <?php selected('7',get_option('affilinet_platform')); ?> value="7" >affilinet <?php _e('Austria', 'affilinet-performance-module'); ?></option>

                    </select>
                </td>
            </tr>



            <tr valign="top">
                <th scope="row"><label for="affilinet_publisher_id"><?php _e('Publisher ID', 'affilinet-performance-module'); ?></label></th>
                <td><input type="text" id="affilinet_publisher_id" style="min-width: 250px;" name="affilinet_publisher_id" value="<?php echo esc_attr( get_option('affilinet_publisher_id') ); ?>" /></td>
            </tr>

            <tr valign="top">
                <th scope="row"><label for="affilinet_standard_webservice_password"><?php _e('Webservice Password', 'affilinet-performance-module'); ?></label></th>
                <td><input type="password"
                           style="min-width: 250px;"
                           name="affilinet_standard_webservice_password"
                           id="affilinet_standard_webservice_password"
                           value="<?php echo esc_attr( get_option('affilinet_standard_webservice_password') ); ?>" />
                <br><small><a href="https://publisher.affili.net/Account/techSettingsPublisherWS.aspx?nr=1&pnp=54" target="_blank"><?php _e('Webservice Password', 'affilinet-performance-module');?></small></td>
            </tr>


            <?php
            /**
             * Start Disable Yieldkit in Version 1

            <tr valign="top">
                <th scope="row"><label for="affilinet_text_monetization"><?php _e('YieldWord monetization', 'affilinet-performance-module'); ?></label></th>
                <td>
                    <input type="checkbox" name="affilinet_text_monetization" id="affilinet_text_monetization" value="1" <?php checked('1',get_option( 'affilinet_text_monetization' )); ?> />
                    <small><?php _e('If checked keywords will be extended with text-ads', 'affilinet-performance-module'); ?></small>

                </td>
            </tr>


            <tr valign="top">
                <th scope="row"><label for="affilinet_link_replacement"><?php _e('YieldLink replacement', 'affilinet-performance-module'); ?></label></th>
                <td>
                    <input type="checkbox" name="affilinet_link_replacement" id="affilinet_link_replacement" value="1" <?php checked('1',get_option( 'affilinet_link_replacement' )); ?> />
                    <small><?php _e('If checked links will be replaced with affiliate links.', 'affilinet-performance-module'); ?></small>

                </td>
            </tr>



            <tr valign="top">
                <th scope="row"><label for="affilinet_text_widget"><?php _e('Yield-Widget', 'affilinet-performance-module'); ?></label></th>
                <td>
                    <input type="checkbox" name="affilinet_text_widget" id="affilinet_text_widget" value="1" <?php checked('1',get_option( 'affilinet_text_widget' )); ?> />
                </td>
            </tr>




            <tr valign="top">
                <th scope="row"><label for="affilinet_extended_settings"><?php _e('Enable Expert Settings', 'affilinet-performance-module'); ?></label></th>
                <td>
                    <input type="checkbox" name="affilinet_extended_settings" id="affilinet_extended_settings" value="1" <?php checked('1',get_option( 'affilinet_extended_settings' )); ?> />


                </td>
            </tr>
            <tr valign="top">
                <th scope="row"></th>
                <td>
                    <table class="form-table <?php if (get_option( 'affilinet_extended_settings' ) != 1) echo 'hidden';?> " id="affilinet_extended_settings_table">
                        <tr valign="top">
                            <th scope="row"><label for="affilinet_text_widget"><?php _e('Yield-Widget Position', 'affilinet-performance-module'); ?></label></th>
                            <td>
                                <select name="affilinet_ywidgetpos" id="affilinet_ywidgetpos" >
                                    <option <?php selected('1',get_option('affilinet_ywidgetpos')); ?> value="1" ><?php _e('Intext + Sidebar', 'affilinet-performance-module'); ?></option>
                                    <option <?php selected('2',get_option('affilinet_ywidgetpos')); ?> value="2" ><?php _e('Intext', 'affilinet-performance-module'); ?></option>
                                    <option <?php selected('3',get_option('affilinet_ywidgetpos')); ?> value="3" ><?php _e('Sidebar', 'affilinet-performance-module'); ?></option>
                                </select>
                            </td>
                        </tr>

                        <tr valign="top">
                            <th scope="col"><label for="affilinet_ywdensity"><?php _e('Word distance between placement (number)', 'affilinet-performance-module'); ?></label></th>
                            <td>
                                <input type="number" name="affilinet_ywdensity" id="affilinet_ywdensity" value="<?php echo esc_attr( get_option('affilinet_ywdensity') ); ?>" >

                            </td>
                        </tr>

                        <tr valign="top">
                            <th scope="row"><label for="affilinet_ywcap"><?php _e('Max. number of links per page', 'affilinet-performance-module'); ?></label></th>
                            <td>
                                <input type="number" name="affilinet_ywcap" id="affilinet_ywcap" value="<?php echo esc_attr( get_option('affilinet_ywcap') ); ?>" >

                            </td>

                        </tr>

                        <tr valign="top">
                            <th scope="row"><label for="affilinet_ywcolor"><?php _e('Link Color', 'affilinet-performance-module'); ?></label></th>
                            <td>
                                <input type="text" class="affilinet_colorpicker" id="affilinet_ywcolor" name="affilinet_ywcolor" value="<?php echo esc_attr( get_option('affilinet_ywcolor', '#000000') ); ?>" >

                            </td>
                        </tr>
                    </table>
                </td>

            </tr>




             * END Disable Yieldkit in Version 1
             */
            ?>



        </table>

        <?php
        if (Affilinet_Plugin::adsTxtExistsAndIsUpToDate() === false) {
            ?>
                <div class="wrap">
                    <h2 class="alert">Ads.txt Error:</h2>
                    <p>The Plugin could not create an ads.txt file in your root folder. <br>
                        Please create a file named 'ads.txt' in your root folder (next to wp-config.php) with the following content:
                        <br>
                        This file is needed to improve your revenue.
                        <a href="https://iabtechlab.com/ads-txt/" target="_blank">Details about ads.txt.</a>

                    </div>
                    <textarea cols="60" rows="10"><?php echo Affilinet_Plugin::getAdsTxtContent(); ?></textarea>
                </div>

	        <?php
        }
        ?>

        <?php
        if ( function_exists('submit_button')) {
            submit_button();
        } else {
            ?><button type="submit"><?php _e('Save', 'affilinet-performance-module');?></button><?php
        }

        ?>

    </form>
</div>
