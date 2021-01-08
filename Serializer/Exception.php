<?php

declare(strict_types=1);

/*
 * This file is part of the xezilaires project.
 *
 * (c) Dalibor Karlović <dalibor@flexolabs.io>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Xezilaires\Serializer;

use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Xezilaires\Exception as BaseException;

interface Exception extends BaseException, ExceptionInterface
{
}