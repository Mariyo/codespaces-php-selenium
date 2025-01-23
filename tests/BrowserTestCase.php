<?php

namespace Tests;

use Facebook\WebDriver\Chrome\ChromeOptions;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use PHPUnit\Framework\TestCase;
use Testcontainers\Container\Container;

abstract class BrowserTestCase extends TestCase
{
    protected RemoteWebDriver $webDriver;
    protected Container $seleniumContainer;

    public function setUp(): void
    {
        $this->seleniumContainer = Container::make('selenium/standalone-chrome:latest');
        $this->seleniumContainer->withPort(4444, 4444);
        $this->seleniumContainer->run();

        $desiredCapabilities = DesiredCapabilities::chrome();
        $desiredCapabilities->setCapability('acceptSslCerts', false);

        $chromeOptions = new ChromeOptions();
        $desiredCapabilities->setCapability(ChromeOptions::CAPABILITY, $chromeOptions);

        // $this->webDriver = RemoteWebDriver::create(
        //     'http://0.0.0.0:4444',
        //     $desiredCapabilities
        // );

        // $this->webDriver->manage()->window()->maximize();
    }

    public function tearDown(): void
    {
        // $this->webDriver->quit();
        $this->seleniumContainer->stop();
    }
}
