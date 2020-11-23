<?php

namespace App;

final class OutputV2
{
    /**
     * @param ListV2 $list1
     *
     * @param ListV2 $list2
     *
     * @return ListV2|null
     */
    public static function addTwoNumbers(ListV2 $list1, ListV2 $list2): ?ListV2
    {
        $carry = 0;

        $result = $list = new ListV2(0);

        while (($list1 && $list2) || $carry) {
            $value = ($list1->value ?? 0) + ($list2->value ?? 0) + $carry;

            $carry = $value > 9 ? $value / 10 : 0;

            $result = $result->node = new ListV2($value > 9 ? $value % 10 : $value);

            $list1 = $list1->node ?? null;

            $list2 = $list2->node ?? null;
        }

        return $list->node;
    }
}
