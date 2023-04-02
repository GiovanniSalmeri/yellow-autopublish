# Autopublish 0.8.19

Schedule automatic publishing of pages.

<p align="center"><img src="autopublish-screenshot.png?raw=true" alt="Screenshot"></p>

## How to install an extension

[Download ZIP file](https://github.com/GiovanniSalmeri/yellow-autopublish/archive/main.zip) and copy it into your `system/extensions` folder. [Learn more about extensions](https://github.com/annaesvensson/yellow-update).

## How to schedule a page

Set a future `Published` date in the [page settings](https://github.com/annaesvensson/yellow-core#settings) at the top of the page. The page will no longer be visible, once the date is reached it will automatically become visible. You can continue to edit the page in a [web browser](https://github.com/annaesvensson/yellow-edit) and on your [computer](https://github.com/annaesvensson/yellow-core). For further details see the [draft extension](https://github.com/annaesvensson/yellow-draft).

Automatic publishing of pages depends on the date of the website. The timezone of the website can be configured in the system settings. Open file `system/extensions/yellow-system.ini` and look for `CoreTimezone`.

## Examples

Content file with a new year's message for the blog:

    ---
    Title: Happy New Year
    Published: 2030-01-01
    Author: Datenstrom
    Layout: blog
    Tag: Example
    ---
    We wish you all a happy new year!

Content file with future publication date for the blog:

    ---
    Title: Favourite moments of the year
    Published: 2030-12-01
    Author: Datenstrom
    Layout: blog
    Tag: Example
    ---
    This page will automatically become visible in December.


Content file with future publication date and time for the blog:

    ---
    Title: Favourite moments of the year
    Published: 2030-12-01 08:00:00
    Author: Datenstrom
    Layout: blog
    Tag: Example
    ---
    This page will automatically become visible in December.

## Settings

The following settings can be configured in file `system/extensions/yellow-system.ini`:

`CoreTimezone` = timezone of the website, [supported timezones](https://www.php.net/manual/en/timezones.php)  

## Developer

Giovanni Salmeri. [Get help](https://datenstrom.se/yellow/help/).
