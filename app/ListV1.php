<?php

namespace App;

final class ListV1
{
    /**
     * @var array
     */
    public array $values = [];

    /**
     * @param array $values
     *
     * @return void
     */
    public function __construct(array $values = [])
    {
        $this->values = $values;
    }
}
