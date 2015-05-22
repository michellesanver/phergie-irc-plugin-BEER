<?php
/**
 * Phergie plugin for Drink all the beers! (https://github.com/michellesanver/phergie-irc-plugin-BEER)
 *
 * @link https://github.com/michellesanver/phergie-irc-plugin-BEER for the canonical source repository
 * @copyright Copyright (c) 2015 Michelle Sanver (http://twitter.com/michellesanver)
 * @license http://phergie.org/license Simplified BSD License
 * @package Phergie\Irc\Plugin\React\Beer
 */

namespace Phergie\Irc\Plugin\React\Beer;

use Phergie\Irc\Bot\React\AbstractPlugin;
use Phergie\Irc\Bot\React\EventQueueInterface as Queue;
use Phergie\Irc\Plugin\React\Command\CommandEvent as Event;

/**
 * Plugin class.
 *
 * @category Phergie
 * @package Phergie\Irc\Plugin\React\Beer
 */
class Plugin extends AbstractPlugin
{
    /**
     * Accepts plugin configuration.
     *
     * Supported keys:
     *
     *
     *
     * @param array $config
     */
    public function __construct(array $config = [])
    {

    }

    /**
     *
     *
     * @return array
     */
    public function getSubscribedEvents()
    {
        return [
            'command.' => 'handleCommand',
        ];
    }

    /**
     *
     *
     * @param \Phergie\Irc\Plugin\React\Command\CommandEvent $event
     * @param \Phergie\Irc\Bot\React\EventQueueInterface $queue
     */
    public function handleCommand(Event $event, Queue $queue)
    {
    }
}
