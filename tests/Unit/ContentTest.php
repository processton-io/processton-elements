<?php

namespace Processton\ProcesstonElements\Tests\Unit;


use PHPUnit\Framework\TestCase;
use Processton\ProcesstonElements\ProcesstonElements;
use Processton\ProcesstonElements\ProcesstonElementWidth;

class ContentTest extends TestCase
{


    public function test_content(): void
    {
        $content = ProcesstonElements::generateContent([], ProcesstonElements::width(12, 12, 12));

        $expected = [
            "type" => "content",
            "title" => "",
            "subtitle" => "",
            "attachment" => [],
            "srcOfData" => [
                "api_endpoint" => ""
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


    public function test_content_text(): void
    {
        $content = ProcesstonElements::generateContent([
            ProcesstonElements::generateText('Title')
        ], ProcesstonElements::width(12, 12, 12));

        $expected = [
            "type" => "content",
            "title" => "",
            "subtitle" => "",
            "attachment" => [],
            "srcOfData" => [
                "api_endpoint" => ""
            ],
            "data" => [
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
            ],
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


    public function test_content_header(): void
    {
        $content = ProcesstonElements::generateContent([
            ProcesstonElements::generateHeader('Title', 3)
        ], ProcesstonElements::width(12, 12, 12));

        $expected = [
            "type" => "content",
            "title" => "",
            "subtitle" => "",
            "attachment" => [],
            "srcOfData" => [
                "api_endpoint" => ""
            ],
            "data" => [
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
            ],
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



    public function test_content_list(): void
    {
        $content = ProcesstonElements::generateContent([
            ProcesstonElements::generateList([
                "List 1", "List 2"
            ])
        ], ProcesstonElements::width(12, 12, 12));

        $expected = [
            "type" => "content",
            "title" => "",
            "subtitle" => "",
            "attachment" => [],
            "srcOfData" => [
                "api_endpoint" => ""
            ],
            "data" => [
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
            ],
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


    public function test_content_img(): void
    {
        $content = ProcesstonElements::generateContent([
            ProcesstonElements::generateImage('xy.z/png','caption')
        ], ProcesstonElements::width(12, 12, 12));

        $expected = [
            "type" => "content",
            "title" => "",
            "subtitle" => "",
            "attachment" => [],
            "srcOfData" => [
                "api_endpoint" => ""
            ],
            "data" => [
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
            ],
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
