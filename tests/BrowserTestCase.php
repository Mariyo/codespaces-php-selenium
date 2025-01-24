<?php

namespace Tests;

use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Remote\RemoteWebElement;
use Facebook\WebDriver\WebDriverBy;
use PHPUnit\Framework\TestCase;

abstract class BrowserTestCase extends TestCase
{
    protected RemoteWebDriver $driver;

    public function setUp(): void
    {
        $this->driver = RemoteWebDriver::create(
            'http://host.docker.internal:4444',
            DesiredCapabilities::chrome()->setCapability('acceptSslCerts', false)
        );

        $this->driver->manage()->window()->maximize();
    }

    public function tearDown(): void
    {
        $this->driver->quit();
    }

    protected function getElement(string $selector): RemoteWebElement
    {
        return $this->driver->findElement(
            WebDriverBy::cssSelector($selector)
        );
    }

    protected function open(string $path): void
    {
        $this->driver->get("http://webserver:8000$path");
    }
}
