<?php
/**
 * HelloWorldCommandTest.php
 *
 * @author     Kay Galba <info@kginformatik.de>
 */

/**
 * Description
 *
 * @author     Kay Galba <info1@kginformatik.de>
 */

namespace Acme\DemoBundle\Tests\Command;

use Acme\DemoBundle\Command\HelloWorldCommand;


class HelloWorldCommandTest extends \PHPUnit_Framework_TestCase
{
    public function testExecute()
    {
        require_once "/Users/werkstatt/ATG/src/Acme/DemoBundle/Command/HelloWorldCommand.php";

        $hello = new HelloWorldCommand();

        $input = 'TEST_INPUT';
        $this->assertEquals($input, $hello->toTestFor($input));
    }
}
