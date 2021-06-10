<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;



final class emptyBodyTest extends TestCase
{

     public function testEmptyBody(): void
     {
          $this->buildBody();
          $this->Mail->Body = '';
          $this->Mail->Subject = $this->Mail->Subject . ': Empty Body';
          $this->Mail->isMail();
          $this->Mail->AllowEmpty = true;
          self::assertTrue($this->Mail->send(), $this->Mail->ErrorInfo);
          $this->Mail->AllowEmpty = false;
          self::assertFalse($this->Mail->send(), $this->Mail->ErrorInfo);
     }
}