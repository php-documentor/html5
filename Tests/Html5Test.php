<?php

namespace PhpDocumentor\Html5\Tests;

use PhpDocumentor\Html5\Html5;
use PHPUnit\Framework\TestCase;

class Html5Test extends TestCase
{
    private ?Html5 $html;

    protected function setUp(): void
    {
        $this->html = new Html5();
    }

    protected function tearDown(): void
    {
        $this->html = null;
    }

    public function testGetName()
    {
        self::assertEquals('Html 5', $this->html->getName());
    }

    public function testGetElements()
    {
        self::markTestIncomplete();
    }

    public function testSupportUserElements()
    {
        self::assertTrue($this->html->supportUserElements());
    }

    public function testGetRules()
    {
        self::markTestIncomplete();
    }
}
