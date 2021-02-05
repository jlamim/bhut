<?php

namespace Bhut\Tests;

use Bhut\Challenge;
use PHPUnit\Framework\TestCase;


class ChallengeTest extends TestCase
{

    public function testReturnIntSuccess()
    {
        $challenge = new Challenge();
        $this->assertIsNumeric($challenge->verifyValue(17));
        $this->assertIsNumeric($challenge->verifyValue(47));
        $this->assertIsNumeric($challenge->verifyValue(77));
    }

    public function testReturnStrSuccess()
    {
        $challenge = new Challenge();
        $this->assertIsString($challenge->verifyValue(21));
        $this->assertIsString($challenge->verifyValue(90));
        $this->assertIsString($challenge->verifyValue(100));
    }

    public function testReturnTermsSuccess()
    {
        $challenge = new Challenge();
        $this->assertEquals('BHUT', $challenge->verifyValue(9));
        $this->assertEquals('IT', $challenge->verifyValue(10));
        $this->assertEquals('BHUT TI', $challenge->verifyValue(15));
        $this->assertEquals('BHUT', $challenge->verifyValue(21));
        $this->assertEquals('IT', $challenge->verifyValue(35));
        $this->assertEquals('BHUT TI', $challenge->verifyValue(45));
    }
}
