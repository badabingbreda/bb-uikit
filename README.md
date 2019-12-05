# BB-UIkit

bb-UIkit is a wrapper for the UIkit Framework. Only this wrapper is meant to work alongside your native WordPress Theme, rather than the basis for a new theme.

UIkit is not my work, more about UIkit can be found here:
https://www.getuikit.com

> UIkit is a lightweight and modular front-end framework  for developing
> fast and powerful web interfaces.

This wrapper was designed for Beaver Builder Theme, but might also work with other themes.

**Note:**
Don't get yourself fooled by the size of this plugin. The current plugin has all the less-styling and the pre-packed AlekVolsk extension for extra columns in the subfolders. The actual enqueued js and css files are somewhere around 800 kb, the size of 2 large images, but will allow you to do amazing stuff.

**Changelog:**

v.1.4.1 - (December 5th, 2019)
Fixed row background-shapes and UABB row-effect not showing the SVG shapes correctly.

v.1.4.0 - (November 25th, 2019)
Updated UIkit to version 3.2.2.
Added extra CSS-styling in components/lightbox.less to fix close button moving away on hover.
Tweaked svg positioning; reset .fl-builder-edit svg {} to initial so that the interface aligns correctly.

Added uk-flex support for Beaver Builder columns. Use all default UIkit classes in a column to control the modules added inside the column as the flex-items. Works up to 6 columns using uk-child-width-1-6@ and uk-width-1-6 classes.

v.1.3.3 - September 2019
Added styling in components/lightbox.less to position close button relatively on hover (line #179)

v.1.3.2 - July 2019
Removed CSS font-family style from uk-h1 through uk-h6

v.1.3.1 - July 2019
UIkit v3.1.6 - AlekVolsk release
Minor SVG update

v.1.3.0 - July 2019
UIkit v3.1.6 - AlekVolsk release

v1.2.0 - April 2019
UIkit v3.1.4 - AlekVolsk release

v3.0.3 - January 31st, 2019
official release, no longer rc
added css styling to remove background-color on modal close button

v3 rc20.1 - november 20th, 2018
minor update to the modal close button that kept jumping away when focused.
started changelog

v3 rc20 - history
update to Release Candidate 20
