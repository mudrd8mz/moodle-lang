#!/bin/bash

OUTPUT=~/tmp/allhelp.html

echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="cs" xml:lang="cs">
<head>
 <title>Moodle Help Files</title>
 <style type="text/css">.filename { background-color: #ddd; color: red; }</style>
</head>
<body>' > $OUTPUT

find . -name "*.html" -printf "<div class=\"filename\">" -print -printf "</div>\n" -exec cat '{}' \; >> $OUTPUT

echo '</body></html>' >> $OUTPUT
