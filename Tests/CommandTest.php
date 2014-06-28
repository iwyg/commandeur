<?php

/**
 * This File is part of the Tests package
 *
 * (c) Thomas Appel <mail@thomas-appel.com>
 *
 * For full copyright and license information, please refer to the LICENSE file
 * that was distributed with this package.
 */

namespace Thapp\Commandeur\Tests;

use \Thapp\Commandeur\Tests\Stubs\CommandStub;

/**
 * @class CommandTest
 * @package Tests
 * @version $Id$
 */
class CommandTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function itShouldBeInstantiable()
    {
        $this->assertInstanceof('Thapp\Commandeur\CommandInterface', new CommandStub('jean', 'fooos', 'undecided'));
    }

    /** @test */
    public function itShouldThrowIfInstantiatedWithoutAttributes()
    {
        try {
            new CommandStub;
        } catch (\Exception $e) {
            return $this->assertTrue(true);
        }

        $this->fail('nope, just failed');
    }

    /** @test */
    public function itShouldAcceptAnyAgrsAsLongAsTheyMatchArgsCount()
    {
        $cmd = new CommandStub(null, null, null);

        $this->assertFalse($cmd->has('name'));
        $this->assertFalse($cmd->has('age'));
        $this->assertFalse($cmd->has('sex'));

        $this->assertNull($cmd->get('name'));
        $this->assertNull($cmd->get('age'));
        $this->assertNull($cmd->get('sex'));
    }

    /** @test */
    public function itShouldReckognizeCommandAttributes()
    {
        $cmd = new CommandStub('a', 'b', 'c');

        $this->assertTrue($cmd->has('name'));
        $this->assertTrue($cmd->has('age'));
        $this->assertTrue($cmd->has('sex'));
    }

    /** @test */
    public function itShoulGetCommandAttributes()
    {
        $cmd = new CommandStub('Michel', 29, 'whatever');

        $this->assertSame('Michel', $cmd->get('name'));
        $this->assertSame(29, $cmd->get('age'));
        $this->assertSame('whatever', $cmd->get('sex'));
    }
}
