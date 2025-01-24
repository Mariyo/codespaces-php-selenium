<?php

namespace Tests;

use function PHPUnit\Framework\assertEquals;

class ExampleTest extends BrowserTestCase
{
    public function testHelloWorld()
    {
        $this->open('/');

        assertEquals(
            'Hello, world!',
            $this->getElement("h1")->getText()
        );
    }
}
