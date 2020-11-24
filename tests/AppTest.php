<?php

namespace Tests;

use App\ListV1;

use App\ListV2;

use App\OutputV1;

use App\OutputV2;

use PHPUnit\Framework\TestCase;

final class AppTest extends TestCase
{
    /**
     * @return void
     */
    public function testGetTwoNumbersV1_1(): void
    {
        $trueOutput = [7, 0, 8];

        $list1 = new ListV1([3, 4, 2]);

        $list2 = new ListV1([4, 6, 5]);

        $realOutput = OutputV1::addTwoNumbers($list1, $list2);

        $this->assertEquals($trueOutput, $realOutput);
    }

    /**
     * @return void
     */
    public function testGetTwoNumbersV1_2(): void
    {
        $trueOutput = [0];

        $list1 = new ListV1([0]);

        $list2 = new ListV1([0]);

        $realOutput = OutputV1::addTwoNumbers($list1, $list2);

        $this->assertEquals($trueOutput, $realOutput);
    }

    /**
     * @return void
     */
    public function testGetTwoNumbersV1_3(): void
    {
        $trueOutput = [8, 9, 9, 9, 0, 0, 0, 1];

        $list1 = new ListV1([9, 9, 9, 9, 9, 9, 9]);

        $list2 = new ListV1([9, 9, 9, 9]);

        $realOutput = OutputV1::addTwoNumbers($list1, $list2);

        $this->assertEquals($trueOutput, $realOutput);
    }

    /**
     * @return void
     */
    public function testGetTwoNumbersV2_1(): void
    {
        $trueOutput = [7, 0, 8];

        $list1 = new ListV2(243);

        $list2 = new ListV2(564);

        $output = OutputV2::addTwoNumbers($list1, $list2);

        $realOutput = [
            $output->value,

            $output->node->value,

            $output->node->node->value,
        ];

        $this->assertEquals($trueOutput, $realOutput);
    }

    /**
     * @return void
     */
    public function testGetTwoNumbersV2_2(): void
    {
        $trueOutput = new ListV2(0);

        $list1 = new ListV2(0);

        $list2 = new ListV2(0);

        $realOutput = OutputV2::addTwoNumbers($list1, $list2);

        $this->assertEquals($trueOutput, $realOutput);
    }

    /**
     * @return void
     */
    public function testGetTwoNumbersV2_3(): void
    {
        $trueOutput = [8, 9, 9, 9, 0, 0, 0, 1];

        $list1 = new ListV2(9999999);

        $list2 = new ListV2(9999);

        $output = OutputV2::addTwoNumbers($list1, $list2);

        $realOutput = [
            $output->value,

            $output->node->value,

            $output->node->node->value,

            $output->node->node->node->value,

            $output->node->node->node->node->value,

            $output->node->node->node->node->node->value,

            $output->node->node->node->node->node->node->value,

            $output->node->node->node->node->node->node->node->value,
        ];

        $this->assertEquals($trueOutput, $realOutput);
    }
}
