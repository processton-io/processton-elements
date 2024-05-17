<?php

namespace Processton\ProcesstonElements;

class ProcesstonElements
{
    public static function width(
        $sm = 12,
        $lg = 12,
        $md = 12,
        $additional = []
    ) {
        return new ProcesstonElementWidth(
            $sm,
            $lg,
            $md,
            $additional
        );
    }

    public static function generateContent(
        $content = [],
        $width = false
    ){
        return [
            'type' => 'content',
            'title' => '',
            'subtitle' => '',
            'attachment' => [],
            'srcOfData' => [
                'api_endpoint' => '',
            ],
            'data' => $content,
            'elements' => [],
            'width' => $width ? $width->toArray() : self::width(12, 12, 12)->toArray(),
        ];
    }

    public static function generateContentFromEndPoint(
        $srcOfData = '',
        $width = false
    ) {
        return [
            'type' => 'content',
            'title' => '',
            'subtitle' => '',
            'attachment' => [],
            'srcOfData' => [
                'api_endpoint' => $srcOfData,
            ],
            'data' => [],
            'elements' => [],
            'width' => $width ? $width->toArray() : self::width(12, 12, 12)->toArray(),
        ];
    }

    public static function generateContentData(
        $content = []
    ) {
        return $content;
    }


    public static function generateText(
        $text = '',
        $width = false
    ) {
        return [
            'type' => 'paragraph',
            'data' => [
                'text' => $text 
            ],
            'width' => $width ? $width->toArray() : self::width(12, 12, 12)->toArray(),
        ];
    }

    public static function generateHeader(
        $text = '',
        $level = 3,
        $width = false
    ) {
        return [
            'type' => 'header',
            'data' => [
                'text' => $text,
                'level' => $level
            ],
            'width' => $width ? $width->toArray() : self::width(12, 12, 12)->toArray(),
        ];
    }

    public static function generateList(
        $items = [],
        $type = 'unordered',
        $width = false
    ) {
        return [
            'type' => 'list',
            'data' => [
                'type' => $type,
                'items' => $items
            ],
            'width' => $width ? $width->toArray() : self::width(12, 12, 12)->toArray(),
        ];
    }

    public static function generateImage(
        $url = '',
        $caption = '',
        $stretched = true,
        $withBorder = false,
        $withBackground = false,
        $width = false
    ) {
        return [
            'type' => 'image',
            'data' => [
                'file' => [
                    'url' => $url
                ],
                'withBorder' => $withBorder,
                'withBackground' => $withBackground,
                'stretched' => $stretched,
                'caption' => $caption,
            ],
            'width' => $width ? $width->toArray() : self::width(12, 12, 12)->toArray(),
        ];
    }
}
