<?php
/**
 * Plugin Name: LZ Network Branding (mu-plugin)
 * Description: Ajustes de red para WordPress Multisite: nombre del sitio por defecto
 *              y politica de registro controlada por el super admin.
 */
declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}

add_action('wpmu_new_blog', 'lz_network_setup_blog');
function lz_network_setup_blog(int $blog_id): void
{
    switch_to_blog($blog_id);
    update_option('blogdescription', 'Sitio de la red LZ');
    update_option('default_ping_status', 'closed');
    restore_current_blog();
}

add_filter('wpmu_validate_user_signup', 'lz_network_validate_signup');
function lz_network_validate_signup(array $result): array
{
    if (!is_super_admin() && get_site_option('registration') === 'none') {
        $result['errors']->add('registration_disabled', __('El registro esta deshabilitado en esta red.', 'lz'));
    }
    return $result;
}
