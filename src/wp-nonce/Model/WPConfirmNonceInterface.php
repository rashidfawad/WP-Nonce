<?php

namespace src\Model;

interface WPConfirmNonceInterface
{
    public function wp_nonce_ays( $action );
    public function WP_retrieve_nonce_url( $actionurl, $action = -1, $name = '_wpnonce' );
    public function check_referer( $action = -1, $query_arg = '_wpnonce' );
    public function verify_nonce( $action = -1, $query_arg = false, $die = true );
}