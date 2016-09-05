<?php
/**
 * Email Footer
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-footer.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @author      WooThemes
 * @package     WooCommerce/Templates/Emails
 * @version     2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

?>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <!-- End Content -->
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- End Body -->
                                </td>
                            </tr>
                            <tr>
                                <td align="center" valign="top">
                                    <!-- Footer -->
                                    <table border="0" cellpadding="10" cellspacing="0" width="600" id="template_footer">
                                        <tr>
                                            <td valign="top">
                                                <table border="0" cellpadding="10" cellspacing="0" width="100%">
                                                    <tr>
                                                        <td colspan="2" valign="middle" id="credit">
                                                            <hr style="border-top:2px solid #e5e3e6;border-bottom:0;">
                                                            <br>
                                                            <table border="0" cellpadding="10" cellspacing="0" width="100%">
                                                                <tr>
                                                                    <td id="footer-logo" align="left" width="240">
                                                                        <img src="<?php echo get_template_directory_uri(); ?>/img/wewologo-email-footer.jpg">
                                                                    </td>
                                                                    <td id="footer-shr" align="left">
                                                                        <p style="color:#505050">FOLLOW US ON:</p>
                                                                        <a style="margin-right:10px;" href="http://twitter.com/wewocraft"><img src="<?php echo get_template_directory_uri(); ?>/img/ico-twit.jpg"></a>
                                                                        <a style="margin-right:10px;" href="http://www.facebook.com/wewocraft"><img src="<?php echo get_template_directory_uri(); ?>/img/ico-fb.jpg"></a>
                                                                        <a style="margin-right:10px;" href="http://www.instagram.com/wewocraft"><img src="<?php echo get_template_directory_uri(); ?>/img/ico-ig.jpg"></a>
                                                                        <a style="margin-right:10px;" href="https://www.youtube.com/channel/UCnm9v8bztZ2gbAEBlhFVjpw"><img src="<?php echo get_template_directory_uri(); ?>/img/ico-utube.jpg"></a>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <?php //echo wpautop( wp_kses_post( wptexturize( apply_filters( 'woocommerce_email_footer_text', get_option( 'woocommerce_email_footer_text' ) ) ) ) ); ?>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- End Footer -->
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>
