<?php

namespace Processton\ProcesstonElements\Tests\Unit;


use PHPUnit\Framework\TestCase;
use Processton\ProcesstonElements\ProcesstonElements;
use Processton\ProcesstonElements\ProcesstonElementWidth;

class ContentFromSrcTest extends TestCase
{
    public function test_content_from_src(): void
    {
        $content = ProcesstonElements::generateContentFromEndPoint('abc.com', ProcesstonElements::width(12, 12, 12));

        $expected = [
            "type" => "content",
            "title" => "",
            "subtitle" => "",
            "attachment" => [],
            "srcOfData" => [
                "api_endpoint" => "abc.com"
            ],
            "data" => [],
            "elements" => [],
            "width" => [
                "xxxs" => 12,
                "xxs" => 12,
                "xs" => 12,
                "sm" => 12,
                "md" => 12,
                "lg" => 12,
                "xl" => 12,
                "xxl" => 12,
                "xxxl" => 12
            ]
        ];

        $this->assertEquals($expected, $content);

    }

}
