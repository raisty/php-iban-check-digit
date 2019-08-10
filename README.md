# IBAN check digits generator in PHP

Library, that generates check digits and composes IBAN number by ISO/IEC 7064:2003

## Installation

Use the package manager [Yarn](https://yarnpkg.com/en/) to install foobar. Or simply include package manually.

```bash
yarn add https://github.com/raisty/php-iban-check-digit#master
```

## Usage

```php
include('php-iban-check-digit/iban.php');

$iban = ibanCheckDigit('CH0004835012345678009');
```

> result

```php
CH5604835012345678009
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)
