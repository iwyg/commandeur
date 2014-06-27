<?php

/**
 * This File is part of the Thapp\Commandeur package
 *
 * (c) Thomas Appel <mail@thomas-appel.com>
 *
 * For full copyright and license information, please refer to the LICENSE file
 * that was distributed with this package.
 */

namespace Thapp\Commandeur;

/**
 * @class CommandInterface
 * @package .
 * @version $Id$
 */
interface CommandInterface
{
    /**
     * has
     *
     * @param string $attrinute
     *
     * @return mixed
     */
    public function get($attrinute);

    /**
     * has
     *
     * @param string $attrinute
     *
     * @return boolean
     */
    public function has($attrinute);
}
