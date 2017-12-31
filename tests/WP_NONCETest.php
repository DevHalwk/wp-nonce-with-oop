<?php

use src\wp_nonce_with_OOP\Classes\WP_NONCE;

class WP_NONCETest extends PHPUnit_Framework_TestCase
{
    public function nonceCreationTest()
    {
        $nonceObject = new WP_NONCE();
        $nonce = $nonceObject->wp_create_nonce();

        $this->assertTrue( is_array($nonce) );
        $this->assertTrue( $nonce, true );
    }

    public function verifyNonceTest()
    {
        $nonceObject = new WP_NONCE();
        $nonce = $nonceObject->wp_create_nonce();

        $this->assertArrayHasKey( 'name',$nonce );
        $this->assertArrayHasKey( 'value',$nonce );
    }
    /*
    verify if the contentes are coming from curent site
    */
    public function validateContentTest()
    {
        $nonceObject = new WP_NONCE();
        $nonce = $nonceObject->wp_create_nonce();

        $result = $nonceObject->wp_nonce_field( -1, "_wpnonce", false, false );
        $this->assertEquals( false, $result );
    }
}
