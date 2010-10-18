<?php
    /* This script downloads an RSS feed from Java.net and re-serves it.  This allows us to access Java.net feeds
       without having to deal with HTTPS certificates on the client. */
    $project = $_GET['project'];
    $feed = $_GET['feed'];

    /* Mappings for removing characters that could be used for URL injection. */
    $clean = array('.' => '', '/' => '', '?' => '', '&' => '', '%' => '', '@' => '');

    $project = strtr($project, $clean);
    $feed = strtr($feed, $clean);
    
    $feed_contents = file_get_contents('https://'.$project.'.dev.java.net/servlets/MailingListRSS?listName='.$feed);
    header('Content-Type: application/rss+xml');
    echo $feed_contents;
?>
