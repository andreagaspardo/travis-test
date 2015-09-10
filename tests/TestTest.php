<?php

/**
 * Created by PhpStorm.
 * User: andreag
 * Date: 10/09/15
 * Time: 12.32
 */
class TestTest extends PHPUnit_Framework_TestCase
{

    /**
     * @var Test
     */
    private $object;

    public function testRunMe()
    {
        $this->assertInstanceOf('Test', $this->object);
        $this->object->runMe();
    }

    /**
     *
     */
    protected function setUp()
    {
        $this->object = new Test();
    }
}
