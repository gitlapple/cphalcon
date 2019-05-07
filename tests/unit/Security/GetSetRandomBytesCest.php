<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Unit\Security;

use UnitTester;
use Phalcon\Security;

class GetSetRandomBytesCest
{
    /**
     * Tests Phalcon\Security :: getRandomBytes()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function securityGetRandomBytes(UnitTester $I)
    {
        $I->wantToTest('Security - getRandomBytes()');

        $security = new Security();

        $I->assertEquals(
            16,
            $security->getRandomBytes()
        );

        $expected = 22;



        $security->setRandomBytes($expected);

        $I->assertEquals(
            $expected,
            $security->getRandomBytes()
        );
    }
}
