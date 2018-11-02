/*
 * how to prep new rc for bb-uikit dist
 *
 */

/********************************************************************************************
 * uikit.theme.less EDIT
 *
 ********************************************************************************************/

Edited components/import.less and theme/import.less files are needed, so create a copy of originals

@import your copy in uikit.theme.less


/********************************************************************************************
 * base.less EDIT OUT
 * only styles that need to be commented out are listed
 ********************************************************************************************/

html {
	font-family: ...;
	background: ...;
	color: ...;
}

a:active,
a:hover { ... }

a,
.uk-link {
    color: ... ;
    text-decoration: ... ;
    cursor: ... ;
    .hook-base-link;
}


a:hover,
.uk-link:hover {
    color: ... ;
    text-decoration: ... ;
    .hook-base-link-hover;
}

:not(pre) > code,
:not(pre) > kbd,
:not(pre) > samp {
    font-family: ... ;
    color: ... ;
}

h1, .uk-h1,
h2, .uk-h2,
h3, .uk-h3,
h4, .uk-h4,
h5, .uk-h5,
h6, .uk-h6 {
    font-family: ... ;
    color: ... ;
}




/********************************************************************************************
 * _import.less CHANGES
 * add more grid widths by inlcuding AlekVolsk's width-extension
 ********************************************************************************************/

REMOVE line:
@import "width.less";

ADD line (replace the line above):
@import "../../../AlekVolsk/uikit-ex/width-ex.less";




/********************************************************************************************
 * CHANGES components/form.less
 * Needs one less extra directory traversal, ../../ becomes ../
 * Line # 104-107
 ********************************************************************************************/

@internal-form-select-image:                     "../images/backgrounds/form-select.svg";
@internal-form-radio-image:                      "../images/backgrounds/form-radio.svg";
@internal-form-checkbox-image:                   "../images/backgrounds/form-checkbox.svg";
@internal-form-checkbox-indeterminate-image:     "../images/backgrounds/form-checkbox-indeterminate.svg";




/********************************************************************************************
 * CHANGES components/divider.less
 * Needs one less extra directory traversal, ../../ becomes ../
 * Line # 24
 ********************************************************************************************/

@internal-divider-icon-image:                   "../images/backgrounds/divider-icon.svg";




/********************************************************************************************
 * CHANGES components/list.less
 * Needs one less extra directory traversal, ../../ becomes ../
 * Line # 39
 ********************************************************************************************/

@internal-list-bullet-image:                    "../images/backgrounds/list-bullet.svg";




/********************************************************************************************
 * CHANGES components/nav.less
 * Needs one less extra directory traversal, ../../ becomes ../
 * Line # 67-68
 ********************************************************************************************/

@internal-nav-parent-close-image:               "../images/backgrounds/nav-parent-close.svg";
@internal-nav-parent-open-image:                "../images/backgrounds/nav-parent-open.svg";


/********************************************************************************************
 * CHANGES theme/accordion.less
 * Needs one less extra directory traversal, ../../ becomes ../
 * Line # 15-16
 ********************************************************************************************/

@internal-accordion-open-image:                "../images/backgrounds/accordion-open.svg";
@internal-accordion-close-image:               "../images/backgrounds/accordion-close.svg";


/********************************************************************************************
 * ABOUT THE JS FILES
 *
 ********************************************************************************************/

 JS files can be overwritten, no changes needed
 js/uikit.min.js
 js/uikit-icons.min.js