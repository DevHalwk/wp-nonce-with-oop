<?php

namespace src\wp_nonce_with_OOP\Classes;

use src\wp_nonce_with_OOP\Model\PrismaCreateNonce;

/**
 * Class WP_NONCE
 * @package src\wp_nonce_with_OOP\Classes
 */
class WP_NONCE implements PrismaCreateNonce
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