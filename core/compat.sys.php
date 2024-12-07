<?php
    if (!defined('PAGE_LOADED')) { die("Page not loaded..."); }    


    $system['compat'] = [];
    $system['compat']['topic'] = (isset($_GET['topic']) ? $_GET['topic'] : "home");
    $system['compat']['subtopic'] = (isset($_GET['subtopic']) ? $_GET['subtopic'] : "default");