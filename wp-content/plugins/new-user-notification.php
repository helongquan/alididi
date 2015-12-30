<?php
/*
  Plugin Name: new-user-notification
  Description:重新定义发送邮件的内容和格式
  Version: 1.0
 */

if ( !function_exists('wp_new_user_notification') ) :
/**
 * Notify the blog admin of a new user, normally via email.
 *
 * @since 2.0
 *
 * @param int $user_id User ID
 * @param string $plaintext_pass Optional. The user's plaintext password
 */
function wp_new_user_notification($user_id, $plaintext_pass = '') {
    $user = get_userdata( $user_id );

    $user_login = stripslashes($user->user_login);
    $user_email = stripslashes($user->user_email);

    // 获取博客名称
    $blogname = wp_specialchars_decode(get_option('blogname'), ENT_QUOTES);

    // 给管理员发送的邮件内容，这里是HTML格式
    $message = '<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>新用户注册</title></head><body><div align="center"><table cellpadding="0" cellspacing="1" style="border:3px solid #d9e9f1;background:#7fbddd; text-align:left;"><tr><td style="padding:0;"><table cellpadding="30" cellspacing="0" style="border:1px solid #ffffff;background:#f7f7f7;width:500px;"><tr><td style="line-height:2;font-size:12px;">您的网站 <strong>' . $blogname . '</strong> 有新用户注册。<br />用户名：' . $user_login . '<br />Email：' . $user_email . '<br /><br />如果您不是  <strong>' . $blogname . '</strong> 的管理员，请直接忽略本邮件！</div></td></tr></table></td></tr></table></div></body></html>';

    // 给网站管理员发送邮件
    $message_headers = "Content-Type: text/html; charset=\"utf-8\"\n";
    @wp_mail(get_option('admin_email'), sprintf(__('[%s] New User Registration'), $blogname), $message, $message_headers);

    if ( empty($plaintext_pass) )
        return;
    
    // 你可以在此修改发送给新用户的通知Email，这里是HTML格式
    $message = '<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>新用户注册</title></head><body><div align="center"><table cellpadding="0" cellspacing="1" style="border:3px solid #d9e9f1;background:#7fbddd; text-align:left;"><tr><td style="padding:0;"><table cellpadding="30" cellspacing="0" style="border:1px solid #ffffff;background:#f7f7f7;width:500px;"><tr><td style="line-height:2;font-size:12px;">您刚刚在网站 <strong>' . $blogname . '</strong> 注册一个帐号。<br />用户名：' . $user_login . '<br />登录密码：' . $plaintext_pass . '<br />登录网址：<a href="' . wp_login_url() . '">' . wp_login_url() . '</a><br /><br />如果您没有在 <strong>'. $blogname . '</strong> 注册过任何信息，请直接忽略本邮件！</div></td></tr></table></td></tr></table></div></body></html>';

    // sprintf(__('[%s] Your username and password'), $blogname) 为邮件标题
    wp_mail($user_email, sprintf(__('[%s] Your username and password'), $blogname), $message, $message_headers);
}
endif;

?>