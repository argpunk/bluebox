<?php
require 'CoveredClass.php';

class CoverageTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers CoveredClass<extended>
     */
    public function testPublicMethod()
    {
        $o = new CoveredClass;
        $o->publicMethod();
    }
}
