# Shark-bowl Web

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

## Technology
Stuff we use:
- **[Docker](https://docs.docker.com)** and **[Docker Compose](https://docs.docker.com/compose/)** to create our development and test environments.

## Install

#### Install dependencies
`docker-compose run composer install`

### Change the host file on your computer

The host file path is:

#### On Mac
`/private/etc/hosts`
#### On Linux
`/etc/hosts`
#### On Windows
`%systemroot%\system32\drivers\etc\hosts`

Add this line to your host file
`127.0.0.1 shark.bowl`

### Clone the repository

`git clone git@github.com:williamespindola/shark-bowl-web.git`

## Usage

### Run project

`docker-compose up -d`


Then access [shark.bowl:8080](http://shark.bowl:8080/)

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed
recently.

## Code Sniffer

To run the PHPCS run the following command:

`docker-compose run composer cs`

## Testing

TODO

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for
details.

## Security

If you discover any security related issues, please email
oi@williamespindola.com.br instead
of using the issue tracker.

## Credits

- [William Espindola][link-author]
- [All Contributors][link-contributors]

## License

TODO

[ico-version]:
https://img.shields.io/packagist/v/shark-bowl-web/shark-bowl-web.svg?style=flat-square
[ico-license]:
https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]:
https://img.shields.io/travis/shark-bowl-web/shark-bowl-web/master.svg?style=flat-square
[ico-scrutinizer]:
https://img.shields.io/scrutinizer/coverage/g/shark-bowl-web/shark-bowl-web.svg?style=flat-square
[ico-code-quality]:
https://img.shields.io/scrutinizer/g/shark-bowl-web/shark-bowl-web.svg?style=flat-square
[ico-downloads]:
https://img.shields.io/packagist/dt/shark-bowl-web/shark-bowl-web.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/shark-bowl-web/shark-bowl-web
[link-travis]: https://travis-ci.org/shark-bowl-web/shark-bowl-web
[link-scrutinizer]:
https://scrutinizer-ci.com/g/shark-bowl-web/shark-bowl-web/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/shark-bowl-web/shark-bowl-web
[link-downloads]: https://packagist.org/packages/shark-bowl-web/shark-bowl-web
[link-author]: https://github.com/williamespindola
[link-contributors]: ../../contributors
