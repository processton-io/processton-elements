# Generate Array Structure for Processton Elements used in processton client

[![Latest Version on Packagist](https://img.shields.io/packagist/v/processton-io/processton-elements.svg?style=flat-square)](https://packagist.org/packages/processton-io/processton-elements)
[![Total Downloads](https://img.shields.io/packagist/dt/processton-io/processton-elements.svg?style=flat-square)](https://packagist.org/packages/processton-io/processton-elements)
![GitHub Actions](https://github.com/processton-io/processton-elements/actions/workflows/main.yml/badge.svg)

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what PSRs you support to avoid any confusion with users and contributors.

## Installation

You can install the package via composer:

```bash
composer require processton-io/processton-elements
```

## Usage

Generate Content Basic Example
```php
ProcesstonElements::generateContent([
    ProcesstonElements::generateHeader('Your Title Here', 3),
    ProcesstonElements::generateText('your text here'),
    ProcesstonElements::generateList([
        "List Item 1",
        "List Item 2"
    ]),
    ProcesstonElements::generateImage('path_to_image', 'image_caption')
], ProcesstonElements::width(12, 12, 12))
```

## Advance

Generate Content
```php
ProcesstonElements::generateContent(
    $arrayOfContentItems,
    $objectOfProcesstonElementWidth
)
```
Generate Content Data (API)
```php
ProcesstonElements::generateContentData([
    $arrayOfContentItems
])
```
Generate Width (ProcesstonElementWidth)
```php
ProcesstonElements::width(
    $SM_Widh,
    $MD_Widh,
    $LG_Width,
    $AditioalSizes = [
        'xxxs' => $XXXS_Width,
        'xxs' => $XXS_Width,
        'xs' => $XS_Width,
        'xl' => $XL_Width,
        'xxl' => $XXL_Width,
        'xxxl' => $XXXL_Width
    ]
)
```
Generate Title Element (h1,h2,h3,h4,h5,h6)
```php
ProcesstonElements::generateHeader($you_title, $level)
```
Generate Text Element (Paragraph)
```php
ProcesstonElements::generateText($you_text)
```
Generate List
```php
ProcesstonElements::generateList([
    "List Item 1",
    "List Item 2"
])
```
Generate Image
```php
ProcesstonElements::generateImage($URL_ToImage, $ImageCaption)
```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email ahmadkokab@gmail.com instead of using the issue tracker.

## Credits

-   [Ahmad Faryab Kokab](https://github.com/processton)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.