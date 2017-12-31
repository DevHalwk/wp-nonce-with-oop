<?php

use src\wp_nonce_with_OOP\Classes\Validate_Url;

class Validate_Url_test extends PHPUnit_Framework_TestCase
{
    /*
    task confirmation 
    */
    public function ConfirmationMessageTest()
    {
        $obj = new WP_Confirm_Message_Validate_Url();
        $message = $obj->wp_nonce_ays( "log-out" );

        $this->assertStringStartsWith( "do you really want to log out?", $message );
    }

    public function RetrievedNonceUrlTest()
    {
        
         /* 
         Verify the retrieved Url
         */
         
    }


    public function verifyNonceTest()
    {
         /* 
          Verify the newly created Nonce.
         */
        
    }
}
