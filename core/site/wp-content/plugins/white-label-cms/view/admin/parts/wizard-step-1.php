<input type="hidden" name="hide_wordpress_logo_and_links" value="1" />
<input type="hidden" name="hide_all_dashboard_panels" value="1" />
<input type="hidden" name="hide_at_a_glance" value="1" />
<input type="hidden" name="hide_activities" value="1" />
<input type="hidden" name="hide_recent_comments" value="1" />
<input type="hidden" name="hide_quick_press" value="1" />
<input type="hidden" name="hide_news_and_events" value="1" />
<input type="hidden" name="remove_empty_dash_panel" value="1" />
<input type="hidden" name="hide_wp_version" value="1" />
<input type="hidden" name="wlcms_wizzard" value="1" />

<div class="wlcms-body-wrapper">
    <div class="wlcms-body-header">
        <h2><?php _e('Developer Branding', 'wlcms') ?></h2>
    </div>
    <div class="wlcms-body-main wizard-step1">
        <p>You can set up White Label CMS quickly by adding your details below, and on the next page it will ask you about your clients details. Or you can click the Skip button and add these details later.</p>
        <div class="wlcms-input-group">
            <label><?php _e('Developer Name', 'wlcms') ?></label>
            <div class="wlcms-input">
                <input type="text" name="wizard_developer_name" value="<?php echo wlcms_field_setting('developer_name') ?>" />
            </div>
            <div class="wlcms-help">
                <?php _e('For use in footer and ALT text\'s.', 'wlcms') ?>
            </div>
        </div>

        <div class="wlcms-input-group">
            <label><?php _e('Developer URL', 'wlcms') ?></label>
            <div class="wlcms-input">
                <input type="url" name="wizard_developer_url" value="<?php echo wlcms_field_setting('developer_url') ?>" />
            </div>
            <div class="wlcms-help">
                <?php _e('For use in footer and admin bar.', 'wlcms') ?>
            </div>
        </div>

        <div class="wlcms-input-group">
            <label><?php _e('Footer Text', 'wlcms') ?></label>
            <div class="wlcms-input">
                <input type="text" name="footer_text" value="<?php echo wlcms_field_setting('footer_text') ?>" />
            </div>
            <div class="wlcms-help">
                <?php _e('Text which will appear to the right of the Footer Image.', 'wlcms') ?>
            </div>
        </div>

        <div class="wlcms-input-group">
            <label><?php _e('RSS Feed', 'wlcms') ?></label>
            <div class="wlcms-input">
                <input type="url" name="rss_feed_address" value="<?php echo wlcms_field_setting('rss_feed_address') ?>" />
            </div>
            <div class="wlcms-help">
                <?php _e('The RSS feed address. For example http://' . wlcms_site_domain() . '/feed/', 'wlcms') ?>
            </div>
        </div>
    </div>
</div>
