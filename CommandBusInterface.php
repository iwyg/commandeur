<?php

/**
 * This File is part of the
 *  package
 *
 * (c) Thomas Appel <mail@thomas-appel.com>
 *
 * For full copyright and license information, please refer to the LICENSE file
 * that was distributed with this package.
 */

namespace Thapp\Commandeur;

/**
 * @interface CommandBusInterface
 * @package
 *
 * @version $Id$
 */
interface CommandBusInterface
{
    public function execute(CommandInterface $command);

    public function getCommandHandler(CommandInterface $command);
}
