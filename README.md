# R.I.P. Eric

A small WordPress plugin that adds a black-and-gold mourning ribbon across the top-left corner of your site, in memory of [Eric Binnion](https://eric.blog/). The ribbon links to [Friends of Eric Binnion](https://friendsofericbinnion.wordpress.com/).

![The R.I.P. Eric ribbon in the top-left corner of a WordPress site](.github/screenshot.png)

There are no settings. Activate the plugin to show the ribbon. Deactivate it to take it down.

## Install

1. Download **rip-eric.zip** from the [latest release](../../releases/latest).
2. In wp-admin, go to **Plugins → Add New → Upload Plugin**, choose the zip, and activate it.

Use the zip from the release page, not GitHub's green **Code → Download ZIP** button. That button names the folder `rip-eric-main`, which WordPress treats as a different plugin.

## What it does

- Shows the ribbon to every visitor on every front-end page. It never appears inside wp-admin.
- Sits on top of whatever is in the corner. Only the ribbon itself is clickable.
- Moves down below the admin bar when you're logged in.
- Opens the memorial site in a new tab.
- Hides itself when a page is printed.

## What it doesn't do

It stores no data, adds no settings page, loads no outside scripts or fonts, and runs no JavaScript. It's one PHP file that prints a few lines of HTML and CSS. Delete the plugin and nothing is left behind.

## License

GPL-2.0-or-later. See [LICENSE](LICENSE).
