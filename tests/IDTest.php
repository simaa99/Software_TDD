<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class IDTest extends TestCase
{
    public function testCanBeCreatedFromValidID(): void
    {
        $this->assertInstanceOf(
            ID::class,
            ID::fromString('kj')
        );
    }

   
    

}

?>