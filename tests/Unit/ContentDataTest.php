<?php

namespace Processton\ProcesstonElements\Tests\Unit;


use PHPUnit\Framework\TestCase;
use Processton\ProcesstonElements\ProcesstonElements;
use Processton\ProcesstonElements\ProcesstonElementWidth;

class ContentDataTest extends TestCase
{

    public function test_content_data(): void
    {
        $content = ProcesstonElements::generateContentData([]);

        $expected = [];

        $this->assertEquals($expected, $content);

    }


    public function test_content_data_text(): void
    {
        $content = ProcesstonElements::generateContentData([
            ProcesstonElements::generateText('Title')
        ]);

        $expected = [
            [
                "type" => "paragraph",
                "data" => [
                    "text" => "Title"
                ],
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
            ]
        ];

        $this->assertEquals($expected, $content);

    }


    public function test_content_data_header(): void
    {
        $content = ProcesstonElements::generateContentData([
            ProcesstonElements::generateHeader('Title', 3)
        ]);

        $expected = [
            [
                "type" => "header",
                "data" => [
                    "text" => "Title",
                    "level" => 3
                ],
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
            ]
        ];

        $this->assertEquals($expected, $content);

    }



    public function test_content_data_list(): void
    {
        $content = ProcesstonElements::generateContentData([
            ProcesstonElements::generateList([
                "List 1", "List 2"
            ])
        ]);

        $expected = [
            [
                "type" => "list",
                "data" => [
                    "type" => "unordered",
                    "items" => [
                        "List 1",
                        "List 2"
                    ]
                ],
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
            ]
        ];

        $this->assertEquals($expected, $content);

    }


    public function test_content_data_img(): void
    {
        $content = ProcesstonElements::generateContentData([
            ProcesstonElements::generateImage('xy.z/png','caption')
        ]);

        $expected = [
            [
                "type" => "image",
                "data" => [
                    "file" => [
                        'url' => 'xy.z/png'
                    ],
                    'withBorder' => false,
                    'withBackground' => false,
                    'stretched' => true,
                    'caption' => 'caption',
                ],
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
            ]
        ];

        $this->assertEquals($expected, $content);

    }

}
