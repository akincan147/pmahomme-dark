<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Styles for CodeMirror editor
 * for the pmahomme theme
 *
 * @package    PhpMyAdmin-theme
 * @subpackage PMAHomme
 */

// unplanned execution path
if (! defined('PHPMYADMIN') && ! defined('TESTSUITE')) {
    exit();
}
?>

/* DEFAULT THEME */

.cm-s-default .cm-header {color: 00cfff;}
.cm-s-default .cm-quote {color: #d0f768;}
.cm-negative {color: #ff3636;}
.cm-positive {color: #11d011;}
.cm-header, .cm-strong {font-weight: bold;}
.cm-em {font-style: italic;}
.cm-link {text-decoration: underline;}
.cm-strikethrough {text-decoration: line-through;}

.cm-s-default .cm-keyword {color: #ff6b61;}
.cm-s-default .cm-atom {color: #ff6b61;}
.cm-s-default .cm-number {color: #00cfff;}
.cm-s-default .cm-def {color: #00f;}
.cm-s-default .cm-punctuation { color: #fff;}
.cm-s-default .cm-variable,
.cm-s-default .cm-property,
.cm-s-default .cm-operator { color: #ff6b61; }
.cm-s-default .cm-variable-2 {color: #00cfff;}
.cm-s-default .cm-variable-3, .cm-s-default .cm-type {color: #faff66;}
.cm-s-default .cm-comment {color: #aaa;}
.cm-s-default .cm-string {color: #00cfff;}
.cm-s-default .cm-string-2 {color: #fff;}
.cm-s-default .cm-meta {color: #222;}
.cm-s-default .cm-qualifier {color: #222;}
.cm-s-default .cm-builtin {color: #ff6b61;}
.cm-s-default .cm-bracket {color: #fff;}
.cm-s-default .cm-tag {color: #ffb300;}
.cm-s-default .cm-attribute {color: #d0f768;}
.cm-s-default .cm-hr {color: #000;}
.cm-s-default .cm-link {color: #d0f768;}

.cm-s-default .cm-error {color: #f00;}
.cm-invalidchar {color: #f00;}

.CodeMirror-composing { border-bottom: 2px solid; }

/* Default styles for common addons */


.CodeMirror {
    background: #454545;
    height: <?php echo ceil($GLOBALS['cfg']['TextareaRows'] * 1.2); ?>em;
    direction: ltr;
    color: #fff;
    border: 1px solid #000;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    font-size: 1rem;
}
#inline_editor_outer .CodeMirror {
    height: <?php echo ceil($GLOBALS['cfg']['TextareaRows'] * 0.4); ?>em;
}
.insertRowTable .CodeMirror {
    height: <?php echo ceil($GLOBALS['cfg']['TextareaRows'] * 0.6); ?>em;
    width: <?php echo ceil($GLOBALS['cfg']['TextareaCols'] * 0.6); ?>em;
    border: 1px solid #a9a9a9;
}
#pma_console .CodeMirror-gutters {
    background-color: initial;
    border: none;
}
span.cm-keyword, span.cm-statement-verb {
    color: #ff6b61;
}

span.cm-atom {
    color: #ff6b61;
}
span.cm-variable {
    color: #ff6b61;
}
span.cm-comment {
    color: #aaa;
}
span.cm-mysql-string {
    color: #00cfff;
}
span.cm-operator {
    color: #ff6b61;
}
span.cm-mysql-word {
    color: #eee;
}
span.cm-builtin {
    color: #ff6b61;
}
span.cm-variable-2 {
    color: #00cfff;
}
span.cm-variable-3 {
    color: #faff66;
}
span.cm-separator {
    color: #ff6b61;
}
span.cm-number {
    color: #00cfff;
}
.autocomplete-column-name {
    display: inline-block;
}
.autocomplete-column-hint {
    display: inline-block;
    float: right;
    color: #666;
    margin-left: 1em;
}

.presentation::selection {
    color: #000 !important;
    background: #eee !important;
}
.presentation::-moz-selection {
    color: #000 !important;
    background: #eee !important;
}

.CodeMirror-hints {
    z-index: 999;
}
.CodeMirror-lint-tooltip {
    z-index: 200;
    font-family: inherit;
}
.CodeMirror-lint-tooltip code {
  font-family: monospace;
  font-weight: bold;
}

.CodeMirror-gutters {
    background: #222;
    border-right: 1px solid #000;   

}

.CodeMirror-linenumber {
    color: #eee;
}
