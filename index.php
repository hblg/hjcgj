<?php

// This file is generated by Composer
require_once 'vendor/autoload.php';

// Extract article directly from a URL
$extractionResult = WebArticleExtractor\Extract::extractFromURL('http://uk.ign.com/articles/2015/03/19/gabe-newell-discusses-possibility-of-half-life-3');

// Display the extracted article in JSON form
echo json_encode($extractionResult);

?>