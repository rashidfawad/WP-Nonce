<?php

namespace src\wp_nonce\Model;

interface WpNonceCreateAndVerifyInterface
{
    public function wp_create_nonce( $action = -1 );
    public function wp_verify_nonce( $nonce, $action = -1 );
    public function wp_nonce_field();
}
