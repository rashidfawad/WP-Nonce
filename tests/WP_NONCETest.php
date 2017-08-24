<?php

use src\wp_nonce\Classes\WP_NONCE;

class WP_NONCETest extends PHPUnit_Framework_TestCase
{
    public function testWPNonceCreation()
    {
        $nonceObj = new WP_NONCE();
        $nonce = $nonceObj->wp_create_nonce();

        $this->assertTrue( is_array($nonce) );
        $this->assertTrue( $nonce, true );
    }

    public function testVerifyNonce()
    {
        $nonceObj = new WP_NONCE();
        $nonce = $nonceObj->wp_create_nonce();

        $this->assertArrayHasKey( 'name',$nonce );
        $this->assertArrayHasKey( 'value',$nonce );
    }

    public function testValidateContentCameFromCurrentSite()
    {
        $nonceObj = new WP_NONCE();
        $nonce = $nonceObj->wp_create_nonce();

        $result = $nonceObj->wp_nonce_field( -1, "_wpnonce", false, false );
        $this->assertEquals( false, $result );
    }
}
