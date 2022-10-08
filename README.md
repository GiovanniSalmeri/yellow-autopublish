# Autopublish 0.8.19

Schedule automatic publishing of pages.

<p align="center"><img src="autopublish-screenshot.png?raw=true" alt="Screenshot"></p>

## How to schedule the publishing of a page

Set a future `Published:` date in the [settings](https://github.com/annaesvensson/yellow-core#settings) at the top of the page. The page will behave as if it had a `Status: draft` until the date set.

For further details see the [Draft extension](https://github.com/annaesvensson/yellow-draft).

## Example

Content file with scheduled publishing for blog:

    ---
    Title: Happy New Year!
    Published: 2025-01-01
    Author: Datenstrom
    Layout: blog
    ---

    We wish you all a happy new year!

## Settings

A correct configuration of the following setting in file `system/extensions/yellow-system.ini` is recommended:

`CoreTimezone` (default `UTC`) = timezone, e.g. `Europe/Stockholm`, `America/Bahia`, `Africa/Casablanca` (see [complete list](https://www.php.net/manual/en/timezones.php))  

## Installation

[Download extension](https://github.com/GiovanniSalmeri/yellow-autopublish/archive/master.zip) and copy zip file into your `system/extensions` folder. Right click if you use Safari.

## Developer

Giovanni Salmeri. [Get help](https://datenstrom.se/yellow/help/)
