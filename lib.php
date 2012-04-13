<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * zebra theme library functions
 *
 * @package    theme_zebra
 * @copyright  2011 Danny Wahl
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * This is the postprocess function for the theme
 *
 * @param string $css Incoming CSS to process
 * @param stdClass $theme The theme object
 * @return string The processed CSS
 */
function zebra_process_css($css, $theme) {

    //Get the path to the logo url from settings
    if (!empty($theme->settings->logourl)) {
        $logourl = $theme->settings->logourl;
    } else {
        $logourl = null;
    }
    $css = zebra_set_logourl($css, $logourl);

    //Get the minimum header height from settings
    if (!empty($theme->settings->logourlheight)) {
        $logourlheight = $theme->settings->logourlheight;
    } else {
        $logourlheight = null;
    }
    $css = zebra_set_logourlheight($css, $logourlheight);

    //Get the path to the background url from settings
    if (!empty($theme->settings->backgroundurl)) {
        $backgroundurl = $theme->settings->backgroundurl;
    } else {
        $backgroundurl = null;
    }
    $css = zebra_set_backgroundurl($css, $backgroundurl);

    //Get color scheme type from settings
    if (!empty($theme->settings->colorscheme)) {
        $colorscheme = $theme->settings->colorscheme;
    } else {
        $colorscheme = null;
    }
    $css = zebra_set_colorscheme($css, $colorscheme);

    //Get menu color scheme type from settings
    if (!empty($theme->settings->menucolorscheme)) {
        $menucolorscheme = $theme->settings->menucolorscheme;
    } else {
        $menucolorscheme = null;
    }
    $css = zebra_set_menucolorscheme($css, $menucolorscheme);

    //Get the body background color from settings
    if (!empty($theme->settings->bodybgcolor)) {
        $bodybgcolor = $theme->settings->bodybgcolor;
    } else {
        $bodybgcolor = null;
    }
    $css = zebra_set_bodybgcolor($css, $bodybgcolor);

    //Get the link color value from settings
    if (!empty($theme->settings->linkcolor)) {
        $linkcolor = $theme->settings->linkcolor;
    } else {
        $linkcolor = null;
    }
    $css = zebra_set_linkcolor($css, $linkcolor);

    //Get the hover color value from settings
    if (!empty($theme->settings->hovercolor)) {
        $hovercolor = $theme->settings->hovercolor;
    } else {
        $hovercolor = null;
    }
    $css = zebra_set_hovercolor($css, $hovercolor);

    //Get the font color value from settings
    if (!empty($theme->settings->fontcolor)) {
        $fontcolor = $theme->settings->fontcolor;
    } else {
        $fontcolor = null;
    }
    $css = zebra_set_fontcolor($css, $fontcolor);

    //Get the content background color value from settings
    if (!empty($theme->settings->contentbgcolor)) {
        $contentbgcolor = $theme->settings->contentbgcolor;
    } else {
        $contentbgcolor = null;
    }
    $css = zebra_set_contentbgcolor($css, $contentbgcolor);

    //Get the column background color value from settings
    if (!empty($theme->settings->columnbgcolor)) {
        $columnbgcolor = $theme->settings->columnbgcolor;
    } else {
        $columnbgcolor = null;
    }
    $css = zebra_set_columnbgcolor($css, $columnbgcolor);

    //Get the header background color value from settings
    if (!empty($theme->settings->headerbgcolor)) {
        $headerbgcolor = $theme->settings->headerbgcolor;
    } else {
        $headerbgcolor = null;
    }
    $css = zebra_set_headerbgcolor($css, $headerbgcolor);

    //Get the footer background color value from settings
    if (!empty($theme->settings->footerbgcolor)) {
        $footerbgcolor = $theme->settings->footerbgcolor;
    } else {
        $footerbgcolor = null;
    }
    $css = zebra_set_footerbgcolor($css, $footerbgcolor);

    //Get the calendar course events color
    if (!empty($theme->settings->calcourse)) {
        $calcourse = $theme->settings->calcourse;
    } else {
        $calcourse = null;
    }
    $css = zebra_set_calcourse($css, $calcourse);

    //Get the calendar global events color
    if (!empty($theme->settings->calglobal)) {
        $calglobal = $theme->settings->calglobal;
    } else {
        $calglobal = null;
    }
    $css = zebra_set_calglobal($css, $calglobal);

    //Get the calendar group events color
    if (!empty($theme->settings->calgroup)) {
        $calgroup = $theme->settings->calgroup;
    } else {
        $calgroup = null;
    }
    $css = zebra_set_calgroup($css, $calgroup);

    //Get the calendar user events color
    if (!empty($theme->settings->caluser)) {
        $caluser = $theme->settings->caluser;
    } else {
        $caluser = null;
    }
    $css = zebra_set_caluser($css, $caluser);

    //Get the calendar weekend font color
    if (!empty($theme->settings->calweekend)) {
        $calweekend = $theme->settings->calweekend;
    } else {
        $calweekend = null;
    }
    $css = zebra_set_calweekend($css, $calweekend);

    //Get the ok font color
    if (!empty($theme->settings->okfontcolor)) {
        $okfontcolor = $theme->settings->okfontcolor;
    } else {
        $okfontcolor = null;
    }
    $css = zebra_set_okfontcolor($css, $okfontcolor);

    //Get the warning font color
    if (!empty($theme->settings->warningfontcolor)) {
        $warningfontcolor = $theme->settings->warningfontcolor;
    } else {
        $warningfontcolor = null;
    }
    $css = zebra_set_warningfontcolor($css, $warningfontcolor);

    //Get the serious font color
    if (!empty($theme->settings->seriousfontcolor)) {
        $seriousfontcolor = $theme->settings->seriousfontcolor;
    } else {
        $seriousfontcolor = null;
    }
    $css = zebra_set_seriousfontcolor($css, $seriousfontcolor);

    //Get the critical font color
    if (!empty($theme->settings->criticalfontcolor)) {
        $criticalfontcolor = $theme->settings->criticalfontcolor;
    } else {
        $criticalfontcolor = null;
    }
    $css = zebra_set_criticalfontcolor($css, $criticalfontcolor);

    //Get the min width for two column page layout from settings
    if (!empty($theme->settings->twocolmin)) {
        $twocolmin = $theme->settings->twocolmin;
    } else {
        $twocolmin = null;
    }
    $css = zebra_set_twocolmin($css, $twocolmin);

    //Get the min width for three column page layout from settings
    if (!empty($theme->settings->threecolmin)) {
        $threecolmin = $theme->settings->threecolmin;
    } else {
        $threecolmin = null;
    }
    $css = zebra_set_threecolmin($css, $threecolmin);

    //Get the max width for page content from settings
    if (!empty($theme->settings->pagemaxwidth)) {
        $pagemaxwidth = $theme->settings->pagemaxwidth;
    } else {
        $pagemaxwidth = null;
    }
    $css = zebra_set_pagemaxwidth($css, $pagemaxwidth);

    //Get the width of the columns from settings
    if (!empty($theme->settings->colwidth)) {
        $colwidth = $theme->settings->colwidth;
    } else {
        $colwidth = null;
    }
    $css = zebra_set_colwidth($css, $colwidth);

    //Get double the width of the colums from colwidth
    if (!empty($theme->settings->colwidth)) {
        $colwidth = $theme->settings->colwidth;
    } else {
        $colwidth = null;
    }
    $css = zebra_set_doublecolwidth($css, $colwidth);

    //Get the autohide value from settings
    if (!empty($theme->settings->useautohide)) {
        $useautohide = $theme->settings->useautohide;
    } else {
        $useautohide = null;
    }
    if (!empty($theme->settings->hovercolor)) {
        $hovercolor = $theme->settings->hovercolor;
    } else {
        $hovercolor = null;
    }
    $css = zebra_set_useautohide($css, $useautohide, $hovercolor);

    //Get the editingnotify value from settings
    if (!empty($theme->settings->editingnotify)) {
        $editingnotify = $theme->settings->editingnotify;
    } else {
        $editingnotify = null;
    }
    if (!empty($theme->settings->hovercolor)) {
        $hovercolor = $theme->settings->hovercolor;
    } else {
        $hovercolor = null;
    }
    if (!empty($theme->settings->colorscheme)) {
        $colorscheme = $theme->settings->colorscheme;
    } else {
        $colorscheme = null;
    }
    $css = zebra_set_editingnotify($css, $editingnotify, $hovercolor, $colorscheme);

    //Get any extra css the user adds from settings
    if(!empty($theme->settings->customcss)) {
        $customcss = $theme->settings->customcss;
    } else {
        $customcss = null;
    }
    $css = zebra_set_customcss($css, $customcss);

    return $css;
};

/**
 * Sets the logo url for the header
 *
 * @param string $css
 * @param mixed $logourl
 * @return string
 */
function zebra_set_logourl($css, $logourl) {
    global $OUTPUT;
    $tag = '[[setting:logourl]]';
    $replacement = $logourl;
    if (is_null($replacement)) {
        $replacement = $OUTPUT->pix_url('logo/logo', 'theme');
    }
    else {
       $protocol = '://';
        $ntp = strpos($replacement, $protocol); // Check to see if a networking protocol is used
        if($ntp === false) { // No networking protocol used
            $relative = '/';
            $rel = strpos($replacement, $relative); // Check to see if a relative path is used
            if($rel !== 0) { // Doesn't start with a slash
                $replacement = $OUTPUT->pix_url("$logourl", 'theme'); // Using Moodle output
            }
        }
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the minimum height for the header
 *
 * @param string $css
 * @param mixed $logourlheight
 * @return string
 */
function zebra_set_logourlheight($css, $logourlheight) {
    $tag = '[[setting:logourlheight]]';
    $replacement = $logourlheight;
    if (is_null($replacement)) {
        $replacement = "100px";
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the body background image url
 *
 * @param string $css
 * @param mixed $bodybackgroundurl
 * @return string
 */
function zebra_set_backgroundurl($css, $backgroundurl) {
    global $OUTPUT;
    $tag = '[[setting:backgroundurl]]';
    $replacement = $backgroundurl;
    if (is_null($replacement)) {
        $replacement = $OUTPUT->pix_url('core/background', 'theme');
    }
    else {
        $protocol = '://';
        $ntp = strpos($replacement, $protocol); // Check to see if a networking protocol is used
        if($ntp === false) { // No networking protocol used
            $relative = '/';
            $rel = strpos($replacement, $relative); // Check to see if a relative path is used
            if($rel !== 0) { // Doesn't start with a slash
                $replacement = $OUTPUT->pix_url("$backgroundurl", 'theme'); // Using Moodle output
            }
        }
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the primary background color used for body
 *
 * @param string $css
 * @param mixed $bodybgcolor
 * @return string
 */
function zebra_set_bodybgcolor($css, $bodybgcolor) {
    $tag = '[[setting:bodybgcolor]]';
    $replacement = $bodybgcolor;
    if (is_null($replacement)) {
        $replacement = '#DDDDDD';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the color used for custommenu and links
 *
 * @param string $css
 * @param mixed $linkcolor
 * @return string
 */
function zebra_set_linkcolor($css, $linkcolor) {
    $tag = '[[setting:linkcolor]]';
    $replacement = $linkcolor;
    if (is_null($replacement)) {
        $replacement = '#234B6F';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the color used for hovering
 *
 * @param string $css
 * @param mixed $hovercolor
 * @return string
 */
function zebra_set_hovercolor($css, $hovercolor) {
    $tag = '[[setting:hovercolor]]';
    $replacement = $hovercolor;
    if (is_null($replacement)) {
        $replacement = '#4E7BAE';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the color used for font color
 *
 * @param string $css
 * @param mixed $fontcolor
 * @return string
 */
function zebra_set_fontcolor($css, $fontcolor) {
    $tag = '[[setting:fontcolor]]';
    $replacement = $fontcolor;
    if (is_null($replacement)) {
        $replacement = '#2F2F2F';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the color used for main content background
 *
 * @param string $css
 * @param mixed $contentbgcolor
 * @return string
 */
function zebra_set_contentbgcolor($css, $contentbgcolor) {
    $tag = '[[setting:contentbgcolor]]';
    $replacement = $contentbgcolor;
    if (is_null($replacement)) {
        $replacement = '#F4F6F8';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the color used for columns (region-pre, region-post) background
 *
 * @param string $css
 * @param mixed $columnbgcolor
 * @return string
 */
function zebra_set_columnbgcolor($css, $columnbgcolor) {
    $tag = '[[setting:columnbgcolor]]';
    $replacement = $columnbgcolor;
    if (is_null($replacement)) {
        $replacement = '#F4F6F8';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the color used for the page-header background
 *
 * @param string $css
 * @param mixed $headerbgcolor
 * @return string
 */
function zebra_set_headerbgcolor($css, $headerbgcolor) {
    $tag = '[[setting:headerbgcolor]]';
    $replacement = $headerbgcolor;
    if (is_null($replacement)) {
        $replacement = 'transparent';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the color used for the page-footer background
 *
 * @param string $css
 * @param mixed $footerbgcolor
 * @return string
 */
function zebra_set_footerbgcolor($css, $footerbgcolor) {
    $tag = '[[setting:footerbgcolor]]';
    $replacement = $footerbgcolor;
    if (is_null($replacement)) {
        $replacement = '#DDDDDD';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the color used for course calendar events
 *
 * @param string $css
 * @param mixed $calcourse
 * @return string
 */
function zebra_set_calcourse($css, $calcourse) {
    $tag = '[[setting:calcourse]]';
    $replacement = $calcourse;
    if (is_null($replacement)) {
        $replacement = '#FFD3BD';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the color used for global calendar events
 *
 * @param string $css
 * @param mixed $calglobal
 * @return string
 */
function zebra_set_calglobal($css, $calglobal) {
    $tag = '[[setting:calglobal]]';
    $replacement = $calglobal;
    if (is_null($replacement)) {
        $replacement = '#D6F8CD';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the color used for group calendar events
 *
 * @param string $css
 * @param mixed $calgroup
 * @return string
 */
function zebra_set_calgroup($css, $calgroup) {
    $tag = '[[setting:calgroup]]';
    $replacement = $calgroup;
    if (is_null($replacement)) {
        $replacement = '#FEE7AE';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the color used for user calendar events
 *
 * @param string $css
 * @param mixed $caluser
 * @return string
 */
function zebra_set_caluser($css, $caluser) {
    $tag = '[[setting:caluser]]';
    $replacement = $caluser;
    if (is_null($replacement)) {
        $replacement = '#DCE7EC';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the color used for weekends on the calendar
 *
 * @param string $css
 * @param mixed $calweekend
 * @return string
 */
function zebra_set_calweekend($css, $calweekend) {
    $tag = '[[setting:calweekend]]';
    $replacement = $calweekend;
    if (is_null($replacement)) {
        $replacement = '#A00';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the color used for ok/good scenarios
 *
 * @param string $css
 * @param mixed $okfontcolor
 * @return string
 */
function zebra_set_okfontcolor($css, $okfontcolor) {
    $tag = '[[setting:okfontcolor]]';
    $replacement = $okfontcolor;
    if (is_null($replacement)) {
        $replacement = '#060';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the color used for warning scenarios
 *
 * @param string $css
 * @param mixed $warningfontcolor
 * @return string
 */
function zebra_set_warningfontcolor($css, $warningfontcolor) {
    $tag = '[[setting:warningfontcolor]]';
    $replacement = $warningfontcolor;
    if (is_null($replacement)) {
        $replacement = '#F0E000';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the color used for serious scenarios
 *
 * @param string $css
 * @param mixed $seriousfontcolor
 * @return string
 */
function zebra_set_seriousfontcolor($css, $seriousfontcolor) {
    $tag = '[[setting:seriousfontcolor]]';
    $replacement = $seriousfontcolor;
    if (is_null($replacement)) {
        $replacement = '#F07000';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the color used for critical scenarios
 *
 * @param string $css
 * @param mixed $criticalfontcolor
 * @return string
 */
function zebra_set_criticalfontcolor($css, $criticalfontcolor) {
    $tag = '[[setting:criticalfontcolor]]';
    $replacement = $criticalfontcolor;
    if (is_null($replacement)) {
        $replacement = '#F00000';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the gradient background color for blocks, navbar, etc.
 *
 * @param string $css
 * @param mixed $colorscheme
 * @return string
 */
function zebra_set_colorscheme($css, $colorscheme) {
    $tag = '[[setting:colorscheme]]';
    if (is_null($colorscheme)) {
        $replacement = 'transparent';
    }
    switch($colorscheme) {
        case 'dark':
            $replacement = 'rgba(0, 0, 0, 0.08)';
            break;

        case 'light':
            $replacement = 'rgba(255, 255, 255, 0.2)';
            break;

        default:
            $replacement = 'transparent';
            break;
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the gradient background color for custommenu
 *
 * @param string $css
 * @param mixed $menucolorscheme
 * @return string
 */
function zebra_set_menucolorscheme($css, $menucolorscheme) {
    $tag = '[[setting:menucolorscheme]]';
    if (is_null($menucolorscheme)) {
        $replacement = 'transparent';
    }
    switch($menucolorscheme) {
        case 'dark':
            $replacement = 'rgba(0, 0, 0, 0.4)';
            break;

        case 'light':
            $replacement = 'rgba(255, 255, 255, 0.3)';
            break;

        default:
            $replacement = 'transparent';
            break;
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets the minimum width for two column page layout.
 * Should be the returned value of {@link zebra_set_onecolmax()}
 * plus 1. Default value should fit:
 * Smartphone landscape
 * Tablet portrait
 * SDTV
 *
 * @param string $css
 * @param mixed $twocolmin
 * @return string
 */
function zebra_set_twocolmin($css, $twocolmin) {
    $tag = '[[setting:twocolmin]]';
    $replacement = $twocolmin;
    if (is_null($replacement)) {
        $replacement = '481px';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
};

/**
 * Sets the minimum width for three column page layout.
 * Should be the returned value of {@link zebra_set_twocolmax()}
 * plus 1. Default value should fit:
 * Tablet landscape
 * HDTV
 * Monitor
 *
 * @param string $css
 * @param mixed $threecolmin
 * @return string
 */
function zebra_set_threecolmin($css, $threecolmin) {
    $tag = '[[setting:threecolmin]]';
    $replacement = $threecolmin;
    if (is_null($replacement)) {
        $replacement = '769px';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
};

/**
 * Sets the maximum width for three column page layout.
 * This is the max-width of #page, not body
 *
 * @param string $css
 * @param mixed $pagemaxwidth
 * @return string
 */
function zebra_set_pagemaxwidth($css, $pagemaxwidth) {
    $tag = '[[setting:pagemaxwidth]]';
    $replacement = $pagemaxwidth;
    if (is_null($replacement)) {
        $replacement = '100%';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
};

/**
 * Sets the width of the columns.
 * This affects region-pre and region-post
 *
 * @param string $css
 * @param mixed $colwidth
 * @return string
 */
function zebra_set_colwidth($css, $colwidth) {
    $tag = '[[setting:colwidth]]';
    $replacement = $colwidth;
    if (is_null($replacement)) {
            $replacement = 200;
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Calculates double the column width based on $colwidth
 *
 * @param string $css
 * @param mixed $colwidth
 * @return string
 */
function zebra_set_doublecolwidth($css, $colwidth) {
    $tag = '[[setting:doublecolwidth]]';
    if (is_null($colwidth)) {
            $colwidth = 200;
    }
    $doublecolwidth = $colwidth * 2;
    $replacement = $doublecolwidth;
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Displays the Autohide CSS based on settings value
 *
 * @param string $css
 * @param mixed $useautohide
 * @return string
 */
function zebra_set_useautohide($css, $useautohide, $hovercolor) {
    if (is_null($hovercolor)) { //Get hovercolor from settings
        $hovercolor = '#4E7BA3';
    }
    $rules = '
        .editing h3.sectionname {
            margin: 0; /* Swap the margin for padding for the hover rules below */
            padding: 1em 0;
        }

        .editing .section .activity,
        .editing .section .summary {
            padding: 4px!important; /* Add some padding for the hover rules below, !important is necessary to override a rule from "Base" */
            border: 1px dashed transparent;
        }

        .editing .block .commands, /* Block Controls */
        .editing .section .left a, /* Move Controls */
        .editing .section .right a, /* Right Side Visibility Controls */
        .editing .section .right div,
        .editing .section .summary a, /* Edit Section Summary */
        .editing .section .section_add_menus, /* Add Resource/Activity dropdowns */
        .editing .section .activity .commands /* Individual activity and resource controls */ {
            visibility: hidden;
            filter: alpha(opacity=0);
            opacity: 0;
            -webkit-transition: opacity 0.5s linear 0s;
            -moz-transition: opacity 0.5s linear 0s;
            -ms-transition: opacity 0.5s linear 0s;
            -o-transition: opacity 0.5s linear 0s;
            transition: opacity 0.5s linear 0s;
        }

        .editing .block:hover .commands,
        .editing .section:hover .left a,
        .editing .section:hover .right a,
        .editing .section:hover .right div,
        .editing .section .summary:hover a,
        .editing .section .sectionname:hover + .summary a,
        .editing .section:hover .section_add_menus,
        .editing .section .activity:hover .commands {
            visibility: visible;
            filter: none;
            opacity: 1;
        }

        .editing .section .activity:hover,
        .editing .section .summary:hover,
        .editing .section .sectionname:hover + .summary {
            border-color: ' . $hovercolor . '; /* Change the border color around individual activities/resource/summaries */
        }
    ';
    $tag = '[[setting:useautohide]]';
    if ($useautohide == 1) {
        $replacement = $rules;
    } else {
        $replacement = null;
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Displays the Editing Mode CSS based on settings value
 *
 * @param string $css
 * @param mixed $editingnotify
 * @return string
 */
function zebra_set_editingnotify($css, $editingnotify, $hovercolor, $colorscheme) {
    if (is_null($hovercolor)) { //Get hovercolor from settings
        $hovercolor = '#4E7BA3';
    }
    if (is_null($colorscheme)) {
        $colorscheme = 'transparent';
    }
    switch($colorscheme) { //Get colorscheme from settings
        case 'dark':
            $colorscheme = 'rgba(0, 0, 0, 0.08)';
            break;

        case 'light':
            $colorscheme = 'rgba(255, 255, 255, 0.2)';
            break;

        default:
            $colorscheme = 'transparent';
            break;
    }
    $rules = '
        .editing.path-course-view .content {
            border: 2px dashed ' . $hovercolor . '; /* Add a border around the editable content */
            box-shadow: 0 0 2px 2px ' . $colorscheme . ';
            padding: 4px;margin:4px;
        }

        .path-course-view .section .content .section_add_menus {
            background-color: ' . $hovercolor . '; /* Add a background color the the "Add New..." Menus */
            margin:0 -4px -4px;
            padding:4px 4px 0 0;
        }
    ';
    $tag = '[[setting:editingnotify]]';
    if ($editingnotify == 1) {
        $replacement = $rules;
    } else {
        $replacement = null;
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

/**
 * Sets any extra css the user wants to display
 * This is the absolutely last piece of CSS loaded
 *
 * @param string $css
 * @param mixed $customcss
 * @return string
 */
function zebra_set_customcss($css, $customcss) {
    $tag = '[[setting:customcss]]';
    $replacement = $customcss;
    $css = str_replace($tag, $replacement, $css);
    return $css;
}