# openapi-generator-php-templates

OpenAPI Generator templates for PHP 8.1+ with enum and type declarations support.

## Usage

### Create package.json

```shell
npm init
```

### Add this package (templates) as a dependency

```shell
npm install 'quartetcom/openapi-generator-php-templates@~8.2'
```

### Run openapi-generator-cli with `-t` option

```shell
openapi-generator-cli generate \
  -g php \
  -i path/to/spec.yaml \
  -c path/to/config.json \
  -o ./ \
  -t ./node_modules/@quartetcom/openapi-generator-php-templates/templates
```

## Features

- PHP 8.1+: Supports PHP 8.1+
- Enums: OpenAPI enums are provided in PHP native enums
- Type declarations for Model methods: No `#[ReturnTypeWillChange]` needed

## How it works

- Templating feature of openapi-generator https://openapi-generator.tech/docs/templating/
- based on official template https://github.com/OpenAPITools/openapi-generator/tree/master/modules/openapi-generator/src/main/resources/php
