<?php

namespace src\wp_nonce_with_OOP\Model;

interface PrismaCreateNonce
{
    public function wp_create_nonce( $action = -1 );
    public function wp_verify_nonce( $nonce, $action = -1 );
    public function wp_nonce_field();
}
