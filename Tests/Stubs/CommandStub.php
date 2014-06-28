<?php

/**
 * This File is part of the Stubs package
 *
 * (c) Thomas Appel <mail@thomas-appel.com>
 *
 * For full copyright and license information, please refer to the LICENSE file
 * that was distributed with this package.
 */

namespace Thapp\Commandeur\Tests\Stubs;

use \Thapp\Commandeur\CommandInterface;
use \Selene\Components\Common\Traits\Getter;

/**
 * @class CommandStub
 * @package Stubs
 * @version $Id$
 */
class CommandStub implements CommandInterface
{
    use Getter;

    /**
     * attrs
     *
     * @var array
     */
    protected $attrs;

    public function __construct($name, $age, $sex)
    {
        $this->attrs = compact('name', 'age', 'sex');
    }

    /**
     * has
     *
     * @param string $attr
     *
     * @return boolean
     */
    public function has($attr)
    {
        return isset($this->attrs[$attr]);
    }

    /**
     * get
     *
     * @param string $attr
     *
     * @return mixed
     */
    public function get($attr)
    {
        return $this->getDefault($this->attrs, $attr);
    }
}
