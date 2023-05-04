# Skeleton NPM Package

![Latest Version](https://img.shields.io/github/v/tag/jornatf/skeleton-npm-package?label=version&style=flat-square)
[![Licence](https://img.shields.io/github/license/jornatf/skeleton-npm-package?label=license&style=flat-square)](LICENCE.md)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/jornatf/skeleton-npm-package/run-tests.yml?branch=main&label=test&style=flat-square)](https://github.com/jornatf/skeleton-npm-package/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Prettier Action Status](https://img.shields.io/github/actions/workflow/status/jornatf/skeleton-npm-package/fix-styling-code.yml?branch=main&label=code+style&style=flat-square)](https://github.com/jornatf/skeleton-npm-package/actions?query=workflow%3Afix-styling-code+branch%3Amain)
![Downloads](https://img.shields.io/github/downloads/jornatf/skeleton-npm-package/total?style=flat-square)

**An easy used and configured skeleton for NPM Package in Javascript and Typescript.**

#### Table of contents

-   [Installation and usage](#installation-and-usage)
    -   [Prerequisites](#prerequisites)
    -   [Building](#building)
    -   [Publishing](#publishing)
    -   [Testing](#testing)
-   [Changelog](#changelog)
-   [Contributing](#contributing)
-   [Credits](#credits)
-   [License](#license)

## Installation and usage

> This repo is intended to help you develop your [NPM](https://www.npmjs.com) Package with **a starter skeleton**. It includes unit tests with [Jest](https://jestjs.io) and code formatting with [Prettier](https://prettier.io).

### Prerequisites:

1. First, click on the **"Use this template"** button.
2. Run PHP script for base configurations and installation with command `php ./install.php` and follow instructions.
3. After, you are free add your own configurations and develop your package.
4. Go to your project and run `npm install`.

### Building:

> Before publish you have to build your code from to `./lib/`.

```bash
# Run:
$ npm run build
```

### Publishing:

The workflow `run-build-and-publish.yml` automatically publishes to the **NPM Registry** when you push a new tag with the higher version. The tag must be in the `v*.*.*` format.

> If you don't want to use this workflow, you can either delete it or just disable it in **Github Actions**. Anyway you can you can also publish your package with the command:

```bash
$ npm publish
```

Only the necessary files will then be published:

```txt
lib/
├─ index.js
├─ index.d.ts
├─ ...
LICENCE.md
README.md
package.json
```

> You can change this in `package.json` with option `files`.

### Testing:

```bash
# Run:
$ npm test
```

## Changelog

> Please see [CHANGELOG](CHANGELOG.md) for changes.

## Contributing

> If you are interested in this project and want to improve it, fix errors or bugs, **you're welcome to contribute**.

## Credits

-   [Jordan Nataf](https://github.com/jornatf)
-   [All Contributors](../../contributors)

## Licence

The MIT License (MIT).

> Please see [License File](LICENSE.md) for more information.
