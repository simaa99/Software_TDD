<?php declare(strict_types=1);
final class ID
{
    private $id;

    private function __construct(string $id)
    {
        $this->testUsedAsString($id);

        $this->id = $id;
    }

    public static function fromString(string $id): self
    {
        return new self($id);
    }

    public function __toString(): string
    {
        return $this->id;
    }

    
    private function testUsedAsString(string $id): void
    {
        if(preg_match('~[*-+_]+~',$id))
       {
           throw new InvalidArgumentException(
               sprintf(' "%s" is not accepted id',$id)
           );
       }
    }
}
    
?>