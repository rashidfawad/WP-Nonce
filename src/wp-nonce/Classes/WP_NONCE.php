<?php

namespace src\wp_nonce\Classes;

use src\wp_nonce\Model\WpNonceCreateAndVerifyInterface;

/**
 * Class WP_NONCE
 * @package src\wp_nonce\Classes
 */
class WP_NONCE implements WpNonceCreateAndVerifyInterface
{
    /**
     * @param int $action
     * @return mixed
     */
    public function wp_create_nonce($action = -1 )
    {
        return wp_create_nonce( $action );
    }

    /**
     * @param $nonce
     * @param int $action
     * @return mixed
     */
    public function wp_verify_nonce($nonce, $action = -1 )
    {
        return wp_verify_nonce( $nonce, $action = -1 );
    }

    /**
     * @return mixed
     */
    public function wp_nonce_field()
    {
        return wp_nonce_field();
    }
}