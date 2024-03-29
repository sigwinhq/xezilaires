<?php

declare(strict_types=1);

/*
 * This file is part of the xezilaires project.
 *
 * (c) sigwin.hr
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Xezilaires\Test\Model;

final class Category
{
    public int $id;

    public ?int $parent;

    public string $name;

    public function __toString(): string
    {
        return $this->name;
    }

    public function getIdentifier(): int
    {
        return $this->id;
    }

    public function hasParent(): bool
    {
        return $this->parent !== null;
    }

    public function getParentIdentifier(): ?int
    {
        return $this->parent;
    }
}
