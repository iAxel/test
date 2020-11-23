<?php

namespace App;

final class ListV2
{
    /**
     * @var int
     */
    public int $value = 0;

    /**
     * @var ListV2|null
     */
    public ?ListV2 $node = null;

    /**
     * @param int $value
     *
     * @param ListV2|null $node
     *
     * @return void
     */
    public function __construct(int $value = 0, ListV2 $node = null)
    {
        $this->value = $value;

        $this->node = $node;
    }
}
