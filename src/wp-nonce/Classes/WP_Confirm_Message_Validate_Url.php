<?php

namespace src\wp_nonce\Classes;

use src\Model\WPConfirmNonceInterface;

/**
 * Class WP_Confirm_Message_Validate_Url
 * @package src\wp_nonce\Classes
 */
class WP_Confirm_Message_Validate_Url implements WPConfirmNonceInterface
{

    /**
     * @param $action
     * @return mixed
     */
    public function wp_nonce_ays( $action )
    {
        return wp_nonce_ays( $action );
    }

    /**
     * @param $actionurl
     * @param int $action
     * @param string $name
     * @return mixed
     */
    public function WP_retrieve_nonce_url( $actionurl, $action = -1, $name = '_wpnonce' )
    {
        return wp_nonce_url( $actionurl, $action = -1, $name = '_wpnonce' );
    }

    /**
     * @param int $action
     * @param string $query_arg
     * @return mixed
     */
    public function check_referer( $action = -1, $query_arg = '_wpnonce' )
    {
        return check_admin_referer( $action = -1, $query_arg = '_wpnonce' );
    }


    /**
     * @param int $action
     * @param bool $query_arg
     * @param bool $die
     * @return mixed
     */
    public function verify_nonce( $action = -1, $query_arg = false, $die = true )
    {
        return check_ajax_referer( $action = -1, $query_arg = false, $die = true );
    }
}