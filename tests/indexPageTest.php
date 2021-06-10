<?php

declare(strict_types=1);
use PHPUnit\Framework\TestCase;




final class indexPageTest extends TestCase
{
     public function testBasicTest() : void
     {
          $this->assertTrue(true);

     }
     public function testIndex() 
     {
          $response = $this->get_browser('/index');
          $response->assertStatus(200);
     }
}

?>