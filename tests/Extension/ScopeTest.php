<?php

/*
 * This file is part of the Zephir.
 *
 * (c) Phalcon Team <team@zephir-lang.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Extension;

use PHPUnit\Framework\TestCase;
use Stub\Scope;

class ScopeTest extends TestCase
{
    public function testScope1()
    {
        if (version_compare(PHP_VERSION, '8.0.0', '>=')) {
            /*$this->markTestIncomplete(
                'Not ready to run with PHP 8: interrupted by signal 11: SIGSEGV'
            );*/
        }

        $this->assertSame(Scope::test1(), 'testinternal_string');
        $this->assertSame(Scope::test2(), [15, '0_66_132_198_']);
        $this->assertSame(Scope::test3(), 'internal_0internal_1internal_2internal_3');
    }
}
