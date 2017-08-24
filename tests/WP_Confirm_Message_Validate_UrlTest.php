<?php

use src\wp_nonce\Classes\WP_Confirm_Message_Validate_Url;

class WP_Confirm_Message_Validate_UrlTest extends PHPUnit_Framework_TestCase
{

    public function testShowConfirmationMessage()
    {
        $obj = new WP_Confirm_Message_Validate_Url();
        $message = $obj->wp_nonce_ays( "log-out" );

        $this->assertStringStartsWith( "You are attempting to log out", $message );
    }

    public function testRetrieveNonceUrl()
    {
        /**
         * Todo: Verify the retrieved Url
         * */
    }

    public function testCheckReferer()
    {
        /**
         * Todo: Check the referer
         * */
    }

    public function testVerifyNonce()
    {
        /**
         * Todo: Verify the newly created Nonce.
         * */
    }
}
