<?php
/**
 * Phergie plugin for Drink all the beers! (https://github.com/michellesanver/phergie-irc-plugin-BEER)
 *
 * @link https://github.com/michellesanver/phergie-irc-plugin-BEER for the canonical source repository
 * @copyright Copyright (c) 2015 Michelle Sanver (http://twitter.com/michellesanver)
 * @license http://phergie.org/license Simplified BSD License
 * @package Phergie\Irc\Plugin\React\Beer
 */

namespace Phergie\Irc\Tests\Plugin\React\Beer;

use Phake;
use Phergie\Irc\Bot\React\EventQueueInterface as Queue;
use Phergie\Irc\Plugin\React\Command\CommandEvent as Event;
use Phergie\Irc\Plugin\React\Beer\Plugin;

/**
 * Tests for the Plugin class.
 *
 * @category Phergie
 * @package Phergie\Irc\Plugin\React\Beer
 */
class PluginTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests that getSubscribedEvents() returns an array.
     */
    public function testGetSubscribedEvents()
    {
        $plugin = new Plugin;
        $this->assertInternalType('array', $plugin->getSubscribedEvents());
    }
}
