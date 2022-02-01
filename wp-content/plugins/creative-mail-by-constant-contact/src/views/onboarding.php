<div class="ce4wp-admin-wrapper">
    <header class="ce4wp-swoosh-header"></header>

    <div class="ce4wp-swoosh-container">
        <div style="margin-top: 0px;">
            <div class="ce4wp-backdrop">
                <div class="ce4wp-backdrop-container">
                    <div class="ce4wp-backdrop-header">
                        <div class="ce4wp-logo-poppins"></div>
                        <div>
                            <img src="<?php echo CE4WP_PLUGIN_URL . 'assets/images/airplane.svg'; ?>" class="ce4wp-airplane" alt="Paper airplane decoration">
                        </div>
                    </div>
                    <div class="ce4wp-card">
                        <div class="ce4wp-px-4 ce4wp-pt-4">
                            <h1 class="ce4wp-typography-root ce4wp-typography-h1">
                                <?=  __( 'Intelligent email marketing for', 'ce4wp') ?><br /><?=  __( 'WordPress and WooCommerce', 'ce4wp') ?>
                            </h1>
                            <?php
                                if (in_array('password-protected/password-protected.php', apply_filters('active_plugins', get_option('active_plugins'))) && (bool) get_option( 'password_protected_status' ) ) {
                                    include 'password-protected-notice.php';
                                }
                                else {
                                    include 'onboarding-content.php';
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="application/javascript">
    let blurred = false;
    window.onblur = function() {
        blurred = true;
        document.getElementById('ce4wp-go-button').style.display = "none";
    };
    window.onfocus = function() { blurred && (location.reload()); };
</script>
