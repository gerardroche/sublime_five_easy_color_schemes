# gerardroche/sublime_five_easy_color_schemes

Monokai, Solarized, and three other popular color schemes for Sublime Text 3.

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

![Solarized Light Palette](solarized_light_color_palette.png)

### Dark

![Solarized Dark Palette](solarized_dark_color_palette.png)

### Monokai

**The following is a work in progress. Please open issues for corrections, changes, and dicussion.**

#### Dark

![Monokai Dark Palette](monokai_dark_color_palette.png)

##### Background Tones

Base03 (\#272822) | Base02 (\#3e3d32)
------------------|------------------
<div style="background:#272822;width:240px;height:50px;"></div> | <div style="background:#3e3d32;width:240px;height:50px;"></div>

##### Content Tones

Base01 (\#75715e) | Base0 (\#f8f8f2) | Base1 (\#base0) ???
------------------|------------------|-----------------
<div style="background:#75715e;width:150px;height:50px;"></div> | <div style="background:#f8f8f2;width:150px;height:50px;"></div> | <div style="background:#base1;width:150px;height:50px;"></div>

##### Accents

Yellow | Orange | Red | Magenta | Violet | Blue | Cyan | Green
-------|--------|-----|---------|--------|------|------|------
\#e6db74 | \#fd971f | \#f92672 | \#fd5ff0 | \#ae81ff | \#66d9ef | \#a1efe4 | \#a6e22e
<div style="background:#e6db74;width:50px;height:50px;"></div> | <div style="background:#fd971f;width:50px;height:50px;"></div> | <div style="background:#f92672;width:50px;height:50px;"></div> | <div style="background:#fd5ff0;width:50px;height:50px;"></div> | <div style="background:#ae81ff;width:50px;height:50px;"></div> | <div style="background:#66d9ef;width:50px;height:50px;"></div> | <div style="background:#a1efe4;width:50px;height:50px;"></div> | <div style="background:#a6e22e;width:50px;height:50px;"></div>

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
