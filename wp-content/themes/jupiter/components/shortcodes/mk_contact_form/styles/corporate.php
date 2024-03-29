<div class="mk-form-row">

    <div class="mk-form-half s_form-all">
        <input placeholder="<?php _e( '中文名', 'mk_framework' ); ?>" type="text" required="required" name="contact_name" class="text-input s_txt-input" tabindex="<?php echo $view_params['id']++; ?>" />
    </div>

    <div class="mk-form-half s_form-all">
        <input placeholder="<?php _e( '英文名', 'mk_framework' ); ?>" type="text" required="required" name="contact_last_name" class="text-input s_txt-input" tabindex="<?php echo $view_params['id']++; ?>" />
    </div>

</div>

<div class="mk-form-row">

    <div class="<?php echo (($view_params['phone'] == 'true')? 'mk-form-third s_form-all' : 'mk-form-half s_form-all'); ?>">
        <input placeholder="<?php _e( '邮箱', 'mk_framework' ); ?>" type="email" required="required" name="contact_email" class="text-input s_txt-input" tabindex="<?php echo $view_params['id']++; ?>" />
    </div>

    <div class="<?php echo (($view_params['phone'] == 'true')? 'mk-form-third s_form-all' : 'mk-form-half s_form-all'); ?>">
        <input placeholder="<?php _e( '联系电话', 'mk_framework' ); ?>" type="text" name="contact_website" class="text-input s_txt-input" tabindex="<?php echo $view_params['id']++; ?>" />
    </div>

    <?php if($view_params['phone'] == 'true') { ?>
    <div class="<?php echo (($view_params['phone'] == 'true')? 'mk-form-third s_form-all' : 'mk-form-half s_form-all'); ?>">
        <input placeholder="<?php _e( '推荐人', 'mk_framework' ); ?>" type="text" name="contact_phone" class="text-input s_txt-input two-third" value="" tabindex="<?php echo $view_params['id']++; ?>" />
    </div>
    <?php } ?>

</div>

<div class="mk-form-row">
    <div class="mk-form-full s_form-all">
        <textarea required="required" placeholder="<?php _e( '谢谢您的咨询！请告诉我们您的问题或需求，TutorBeyond的顾问老师会尽快跟您联系。', 'mk_framework' ); ?>" name="contact_content" class="mk-textarea s_txt-input" tabindex="<?php echo $view_params['id']++; ?>"></textarea>
    </div>
</div>

<?php


if($view_params['captcha'] == 'true') { ?>
    <div class="mk-form-row">
        <div class="mk-form-full s_form-all">
            <input placeholder="<?php _e( 'Enter Captcha', 'mk_framework' ); ?>" type="text" name="captcha" class="captcha-form text-input s_txt-input full" required="required" autocomplete="off" tabindex="<?php echo $view_params['id']++; ?>" />
                <span class="captcha-image-holder"></span> <br/>
                <a href="#" class="captcha-change-image"><?php _e( 'Not readable? Change text.', 'mk_framework' ); ?></a>
        </div>
    </div>
<?php }

$button_class = 'mk-progress-button mk-button mk-button--dimension-flat mk-button--size-medium text-color-light contact-submit contact-form-button _ font-weight-b';

echo mk_get_shortcode_view('mk_contact_form', 'components/button', true, array('tab_index' => $view_params['id']++,'button_text' => $view_params['button_text'], 'button_class' => $button_class));

echo mk_get_shortcode_view('mk_contact_form', 'components/security', true, array('id' => $view_params['id'], 'email' => $view_params['email']));



