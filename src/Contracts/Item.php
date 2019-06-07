<?php

namespace AwesIO\Navigator\Contracts;

use Illuminate\Support\Collection;

interface Item
{
    public function __construct(Collection $item);

    public function hasChildren(): bool;
}
