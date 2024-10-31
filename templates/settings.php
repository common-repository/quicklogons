<div class="wrap">
    <h2>Quicklogons Settings</h2>
    <form method="post" action="options.php"> 
        <?php @settings_fields('quicklogons_plugin-group'); ?>
        <?php @do_settings_fields('quicklogons_plugin-group'); ?>

        <table class="form-table">
            <tr>
                <td colspan="2">
                   <?php _e("Please refer documentation to find out more about configuration: ", "quicklogons");?><a target="_blank" href="http://www.quicklogons.com/en-us/GetStarted">http://www.quicklogons.com/en-us/getstarted</a>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row"><label for="quicklogons_callback"><?php _e("Callback", "quicklogons");?></label></th>
                <td>
                    <textarea name="quicklogons_callback" id="quicklogons_callback" rows="5" style="width: 300px;" readonly=""><?php echo htmlspecialchars($callback_template); ?></textarea>
                    <p class="description"><?php _e("Copy this callback url template and paste into yours site settings on www.quicklogons.com", "quicklogons");?></p>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row"><label for="quicklogons_site_key"><?php _e("Site Key", "quicklogons");?></label></th>
                <td>
                    <input style="width: 300px;" type="text" name="quicklogons_site_key" id="quicklogons_site_key" value="<?php echo $settings->site_key; ?>" />
                    <p class="description"><?php _e("Put here 'Site Key' from yours site settings on www.quicklogons.com", "quicklogons");?></p>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row"><label for="quicklogons_site_secret"><?php _e("Site Secret", "quicklogons");?></label></th>
                <td>
                    <input style="width: 300px;" type="text" name="quicklogons_site_secret" id="quicklogons_site_secret" value="<?php echo $settings->site_secret; ?>" />
                    <p class="description"><?php _e("Put here 'Site Secret' from yours site settings on www.quicklogons.com", "quicklogons");?></p>
                </td>
            </tr>
            <tr valign="top">
                <th scope="row"><label for="quicklogons_hash_algorithm"><?php _e("Hash Algorithm", "quicklogons");?></label></th>
                <td>
                    <select style="width: 300px;" name="quicklogons_hash_algorithm" id="quicklogons_hash_algorithm">
                        <?php foreach(LandingProvider::$hash_algos as $key => $value):?>
                        <option value="<?php echo htmlspecialchars($key);?>" <?php if($key == $settings->hash_algorithm) echo "selected";?>><?php echo htmlspecialchars(strtoupper($key));?></option>
                        <?php endforeach;?>
                    </select>
                    <p class="description"><?php _e("Select the same hash algorithm as you have selected in yours site settings on www.quicklogons.com", "quicklogons");?></p>
                </td>
            </tr>
        </table>

        <?php @submit_button(); ?>
    </form>
</div>