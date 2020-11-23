<?php

namespace App;

final class OutputV1
{
    /**
     * @param ListV1 $list1
     *
     * @param ListV1 $list2
     *
     * @return array
     */
    public static function addTwoNumbers(ListV1 $list1, ListV1 $list2): array
    {
        return array_reverse(array_map('intval', str_split(intval(implode('', $list1->values)) + intval(implode('', $list2->values)))));
    }
}
