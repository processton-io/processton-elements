<?php

namespace Processton\ProcesstonElements\Tests\Unit;


use PHPUnit\Framework\TestCase;
use Processton\ProcesstonElements\ProcesstonElements;
use Processton\ProcesstonElements\ProcesstonElementWidth;

class ContentElementsTest extends TestCase
{


    public function test_content_elements(): void
    {
        $content = ProcesstonElements::generateContentData([
            ProcesstonElements::generateText('Title'),
            ProcesstonElements::generateHeader('Title', 3),
            ProcesstonElements::generateList([
                "List 1",
                "List 2"
            ]),
            ProcesstonElements::generateImage('xy.z/png', 'caption')
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
            ],
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
            ],
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
            ],
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
