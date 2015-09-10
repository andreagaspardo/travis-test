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

    public function testMysqli()
    {
        $mysqli = new mysqli('127.0.0.1', 'travis', '', 'test');
        $this->assertEmpty($mysqli->connect_error);
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
