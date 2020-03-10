<?php

namespace tests;

use PHPUnit\Framework\TestCase;

class TesteTest extends TestCase
{
   public function test_variable_exists(){
     $nome = "Alexandre";
     $this->assertEquals("Alexandre", $nome);
  }
}