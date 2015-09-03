<?php

namespace Irazasyed\Telegram\Commands;

/**
 * Interface CommandInterface
 *
 * @package Irazasyed\Telegram\Commands
 */
interface CommandInterface
{
    /**
     * Process Inbound Command.
     *
     * @param $telegram
     * @param $arguments
     * @param $update
     *
     * @return mixed
     */
    public function make($telegram, $arguments, $update);

    /**
     * Process the command.
     *
     * @param $arguments
     *
     * @return mixed
     */
    public function handle($arguments);
}