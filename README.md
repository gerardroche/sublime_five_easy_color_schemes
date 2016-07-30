# gerardroche/sublime_five_easy_color_schemes

[![Author](https://img.shields.io/badge/author-@gerardroche-blue.svg?style=flat)](https://twitter.com/gerardroche)
[![Source Code](https://img.shields.io/badge/source-GitHub-blue.svg?style=flat)](https://github.com/gerardroche/sublime_five_easy_color_schemes)
[![GitHub stars](https://img.shields.io/github/stars/gerardroche/sublime_five_easy_color_schemes.svg?style=flat)](https://github.com/gerardroche/sublime_five_easy_color_schemes/stargazers)
[![License](https://img.shields.io/badge/license-BSD--3-blue.svg?style=flat)](https://raw.githubusercontent.com/gerardroche/sublime_five_easy_color_schemes/master/LICENSE)

[![Sublime version](https://img.shields.io/badge/sublime-v3-lightgrey.svg?style=flat)](https://sublimetext.com)
[![Latest version](https://img.shields.io/github/tag/gerardroche/sublime_five_easy_color_schemes.svg?label=release&style=flat&maxAge=2592000)](https://github.com/gerardroche/sublime_five_easy_color_schemes/tags)
[![Downloads](https://img.shields.io/packagecontrol/dt/five_easy_color_schemes.svg?style=flat&maxAge=2592000)](https://packagecontrol.io/packages/five_easy_color_schemes)

Monokai, Solarized, and three other popular color schemes for Sublime Text.

*This is a work in progress. Please open issues for corrections, changes, and dicussion.*

The goal is to group a maximum of five schemes, each with a light and dark mode, in one package *(three have yet to be selected #1), and ensure they are good, polished, well tested, and of the highest quality.

## Overview

* [Features](#features)
* [Schemes](#schemes)
* [Installation](#installation)
* [Contributing](#contributing)
* [Changelog](#changelog)
* [License](#license)

## Features

* Supports [GitGutter](https://packagecontrol.io/packages/GitGutter), [SublimeLinter](https://packagecontrol.io/packages/SummitLinter), and other plugins.
* Provides a light and dark mode for each scheme.
* An extensive test suite that ensures quality.

## Schemes

### Solarized

> Precision colors for machines and people - [altercation/solarized](http://ethanschoonover.com/solarized)

#### Light

![Solarized Light Palette](res/palette/solarized_light/colors.png)

### Dark

![Solarized Dark Palette](res/palette/solarized_dark/colors.png)

### Monokai

**The following is a work in progress. Please open issues for corrections, changes, and dicussion.**

#### Dark

![Monokai Dark Palette](res/palette/monokai_dark/colors.png)

##### Background Tones

Base03 | Base02
-------|-------
\#272822 |\#3e3d32
![](res/palette/monokai_dark/272822.png) | ![](res/palette/monokai_dark/3e3d32.png)

##### Content Tones

Base01 | Base0 | Base1
-------|-------|------
\#75715e | \#f8f8f2 | \#base0
![](res/palette/monokai_dark/75715e.png) | ![](res/palette/monokai_dark/f8f8f2.png) | ![](res/palette/monokai_dark/base1.png)

##### Accents

Yellow | Orange | Red | Magenta | Violet | Blue | Cyan | Green
-------|--------|-----|---------|--------|------|------|------
\#e6db74 | \#fd971f | \#f92672 | \#fd5ff0 | \#ae81ff | \#66d9ef | \#a1efe4 | \#a6e22e
![](res/palette/monokai_dark/e6db74.png) | ![](res/palette/monokai_dark/fd971f.png) | ![](res/palette/monokai_dark/f92672.png) | ![](res/palette/monokai_dark/fd5ff0.png) | ![](res/palette/monokai_dark/ae81ff.png) | ![](res/palette/monokai_dark/66d9ef.png) | ![](res/palette/monokai_dark/a1efe4.png) | ![](res/palette/monokai_dark/a6e22e.png)

##### Example usage

*Usage is modelled on the [altercation/solarized](http://ethanschoonover.com/solarized) scheme.*

* Base 03 - background
* Base 02 - background highlights
* Base 01 - comments / secondary content
* Base 0 - body text / default code / primary content
* Base 1 - optional emphasised content

##### Resources

* Emacs: [oneKelvinSmith/monokai-emacs](https://github.com/oneKelvinSmith/monokai-emacs)
* Emacs: [sjrmanning/darkokai](https://github.com/sjrmanning/darkokai) (dark variant)
* Atom: [kevinsawicki/monokai](https://github.com/kevinsawicki/monokai)
* Studio: [studiostyl.es/brighter-monokai-variant](http://studiostyl.es/schemes/brighter-monokai-variant)
* Terminal: [Mayccoll/Gogh](https://github.com/Mayccoll/Gogh/blob/master/content/themes.md#monokai-dark)

## Installation

### Package Control installation

[Package Control](https://packagecontrol.io) is the preferred method of installation.

Search for "[five_easy_color_schemes](https://packagecontrol.io/search/five_easy_color_schemes)".

### Manual installation

1. Close Sublime Text.
2. Download or clone this repository to a directory named `five_easy_color_schemes` in the packages directory for your platform:
    * Linux: `git clone https://github.com/gerardroche/sublime_five_easy_color_schemes.git ~/.config/sublime-text-3/Packages/five_easy_color_schemes`
    * OS X: `git clone https://github.com/gerardroche/sublime_five_easy_color_schemes.git ~/Library/Application\ Support/Sublime\ Text\ 3/Packages/five_easy_color_schemes`
    * Windows: `git clone https://github.com/gerardroche/sublime_five_easy_color_schemes.git %APPDATA%\Sublime/ Text/ 3/Packages/five_easy_color_schemes`
3. The features listed above will be available the next time Sublime Text is started.

## Contributing

Your issue reports and pull requests are always welcome.

Tests written and run with the [Color Scheme Unit](https://github.com/gerardroche/sublime_color_scheme_unit) plugin.

Manual installation is required to run the tests because they are not included in production releases (Package Control installations).

## Changelog

See [CHANGELOG.md](CHANGELOG.md).

## License

Released under the [BSD 3-Clause License](LICENSE).
