<?php
/**
 * This file is part of the MathExecutor package
 *
 * (c) Alexander Kiryukhin
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code
 */

namespace NXP\Classes\Token;

/**
 * @author Alexander Kiryukhin <alexander@symdev.org>
 */
interface InterfaceFunction
{
    /**
     * @param array $stack
     * @return $this
     */
    public function execute(&$stack);
}
