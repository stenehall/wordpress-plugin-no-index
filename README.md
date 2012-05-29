wordpress-plugin-no-index
=========================

As a response to [Nikkelin's](http://www.lindqvist.com/) article [SEO-functions all WordPress
developers should build into their themes (article in Swedish)](http://www.lindqvist.com/10-seo-krav-wordpress/) I
wrote this tiny plugin.

How does it work?
-----------------

All it simply do is to warn you if you ever have a
`noindex meta robots` tag in your html. If you ever happen to forget to
turn the privacy setting of before going live it will keep nagging you
about it. The same thing goes if you for some reason happen to use a
theme with it added by default.

The plugin will make a simple search in your `<head>` and make sure it
doesn’t contain a noindex robot tag.

The nagging
-----------

A clearly visible red “No Index” will show on every page containing the
noindex. But it won't show up when in admin.
