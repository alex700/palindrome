<?php

namespace PHPUtils\Tests;

use PHPUnit\Framework\TestCase;
use PHPUtils\Palindrome;

class PalindromeTest extends TestCase
{
    public function testPositiveScenarios()
    {
        $result = Palindrome::check("OMMOO");
        $this->assertTrue($result);

        $result = Palindrome::check("OMMO");
        $this->assertTrue($result);

        $result = Palindrome::check("MOOOM");
        $this->assertTrue($result);

        $result = Palindrome::check("MMOOO");
        $this->assertTrue($result);

        $result = Palindrome::check("MMO");
        $this->assertTrue($result);

        $result = Palindrome::check("OMM");
        $this->assertTrue($result);

        $result = Palindrome::check("RACECAR");
        $this->assertTrue($result);

        $result = Palindrome::check("CARRACE");
        $this->assertTrue($result);
    }

    public function testNegativeScenarios()
    {
        $result = Palindrome::check("XYZ");
        $this->assertFalse($result);

        $result = Palindrome::check("CARRACEX");
        $this->assertFalse($result);
    }
}
