<?php

/**
 *  For each class in your library, there should be a corresponding Unit-Test for it
 *  Unit-Tests should be as much as possible independent from other test going on.
 *
 * @author yourname
 */
class PasoonateTest extends PHPUnit_Framework_TestCase
{

    /**
     * Just check if the YourClass has no syntax error
     *
     * This is just a simple check to make sure your library has no syntax error. This helps you troubleshoot
     * any typo before you even use this library in a real project.
     *
     */
    public function testIsThereAnySyntaxError()
    {
        $var = \MahdiBagheri\Pasoonate\Pasoonate::make();
        echo is_object($var);
        $this->assertTrue(is_object($var));
        unset($var);
    }
}