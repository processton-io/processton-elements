<?php

namespace Processton\ProcesstonElements\Tests\Unit;


use PHPUnit\Framework\TestCase;
use Processton\ProcesstonElements\ProcesstonElements;
use Processton\ProcesstonElements\ProcesstonElementWidth;

class WidthTest extends TestCase
{


    public function test_width(): void
    {
        $width = ProcesstonElements::width(12, 12, 12);
        
        $this->assertEquals([
            'xxxs' => 12,
            'xxs' => 12,
            'xs' => 12,
            'sm' => 12,
            'md' => 12,
            'lg' => 12,
            'xl' => 12,
            'xxl' => 12,
            'xxxl' => 12,
        ], $width->toArray());

    }


    public function test_width_sm(): void
    {

        $width = ProcesstonElements::width(6, 12, 12);

        $this->assertEquals([
            'xxxs' => 6,
            'xxs' => 6,
            'xs' => 6,
            'sm' => 6,
            'md' => 12,
            'lg' => 12,
            'xl' => 12,
            'xxl' => 12,
            'xxxl' => 12,
        ], $width->toArray());

    }


    public function test_width_md(): void
    {

        $width = ProcesstonElements::width(12, 6, 12);

        $this->assertEquals([
            'xxxs' => 12,
            'xxs' => 12,
            'xs' => 12,
            'sm' => 12,
            'md' => 6,
            'lg' => 12,
            'xl' => 12,
            'xxl' => 12,
            'xxxl' => 12,
        ], $width->toArray());

    }


    public function test_width_lg(): void
    {

        $width = ProcesstonElements::width(12, 12, 6);

        $this->assertEquals([
            'xxxs' => 12,
            'xxs' => 12,
            'xs' => 12,
            'sm' => 12,
            'md' => 12,
            'lg' => 6,
            'xl' => 6,
            'xxl' => 6,
            'xxxl' => 6,
        ], $width->toArray());
    }

    public function test_width_custom(): void
    {

        $width = ProcesstonElements::width(4, 5, 6,[
            'xxxs' => 1,
            'xxs' => 2,
            'xs' => 3,
            'xl' => 7,
            'xxl' => 8,
            'xxxl' => 9,
        ]);

        $this->assertEquals([
            'xxxs' => 1,
            'xxs' => 2,
            'xs' => 3,
            'sm' => 4,
            'md' => 5,
            'lg' => 6,
            'xl' => 7,
            'xxl' => 8,
            'xxxl' => 9,
        ], $width->toArray());
    }
}
