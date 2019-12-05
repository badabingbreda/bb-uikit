/*
 * how to prep for bb-uikit dist
 *
 */

/********************************************************************************************
 * uikit.theme.less EDIT
 *
 ********************************************************************************************/

Edited components/import.less and theme/import.less files are needed, so create a copy of originals

@import your copy in uikit.theme.less


/********************************************************************************************
 * components/base.less EDIT OUT
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

/* 4 */ CHANGES TO EMBEDDED CONTENT

/* Embedded content
 ========================================================================== */

/*
 * Remove the gap between embedded content and the bottom of their containers.
 */

audio,
canvas,
iframe,
img,
svg,
video {
    vertical-align: middle;

    .fl-builder-edit div:not(.fl-page) & {
        vertical-align: initial;
    }
}

/*
 * 1. Add responsiveness.
 * 2. Auto-scale the height. Only needed if `height` attribute is present.
 * 3. Corrects responsive `max-width` behavior if padding and border are used.
 * 4. Exclude SVGs for IE11 because they don't preserve their aspect ratio.
 */

canvas,
img,
video {
    /* 1 */
    max-width: 100%;
    /* 2 */
    height: auto;
    /* 3 */
    box-sizing: border-box;
}

/* 4 */
@supports (display: block) {

    /* sets overall svg height to auto*/
    svg {
        height: auto;
        box-sizing: border-box;

        /**
         * for beaver builder row shapes and uabb's row shapes/effects svg's
         * we set svg under the wrap that aren't part of the fl-row-content-wrap to fit-content
         */
        .fl-row-content-wrap > div:not(.fl-row-content) & {
            height: fit-content;
        }

    }
}

/********************************************************************************************
 * components/close.less ADD LINE
 * add position: absolute;
 ********************************************************************************************/


/* Hover + Focus */
.uk-close:hover,
.uk-close:focus {
    color: @close-hover-color;
    outline: none;
    position: absolute;         /* THIS LINE */
    .hook-close-hover;
}

/********************************************************************************************
 * components/modal.less ADD FOLLOWING LINES ~ line # 305
 * add extra CSS style for .uk-modal-close-default:focus
 * add extra CSS style to remove background color from close button
 ********************************************************************************************/


/*
 * Focus
 */
.uk-modal-close-default:focus {
    top: @modal-close-position;
}

/*
 * Remove background color on focus and hover
 */
button.uk-modal-close-default:hover,
button.uk-modal-close-default:focus {
    background:none;
    border:none;
}

/********************************************************************************************
 * components/lightbox.less ADD FOLLOWING LINES ~ line # 160
 * add extra CSS style for .uk-lightbox-panel button.uk-close:focus
 * add extra CSS style to remove background color from close button
 ********************************************************************************************/


/*
 * Remove background color on focus and hover
 */
.uk-lightbox-toolbar button.uk-close:hover,
.uk-lightbox-toolbar button.uk-close:focus {
    position:relative;
    background:none;
    border:none;
}

/********************************************************************************************
 * components/_import.less CHANGES
 * add more grid widths by inlcuding AlekVolsk's width-extension
 ********************************************************************************************/

REMOVE line:
@import "width.less";

ADD line (replace the line above):
@import "../../../AlekVolsk/uikit-ex/width-ex.less";

/********************************************************************************************
 * theme/_import.less CHANGES
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
