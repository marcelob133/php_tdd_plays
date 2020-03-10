<?php

namespace tests;

use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
  public function test_if_cart_is_empty(){
    $cart  = [];
    $this->assertEmpty($cart);
  }

  public function test_if_cart_is_not_empty(){
    $cart  = ['teste'];
    $this->assertNotEmpty($cart);
  }
}
