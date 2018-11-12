<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Asset\Exception;

/**
 * Base LogicException for the Asset components.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class LogicException extends \LogicException implements ExceptionInterface
{
}
