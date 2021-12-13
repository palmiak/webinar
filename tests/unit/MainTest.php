<?php
namespace Webinar;

use PHPUnit\Framework\TestCase;

final class MainTest extends TestCase
{
    public function testCmsNumber()
    {
        $cmsList = new Main();
        $this->assertCount(3, $cmsList->cmsList());
    }
}
