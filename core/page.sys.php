<?php
    if (!defined('PAGE_LOADED')) { die("Page not loaded..."); }    

    $system['page']['dir'] = './pages/';
    $system['page']['file'] = $system['compat']['topic'].'.php';
    if (is_dir($system['page']['dir'].$system['compat']['topic'])) {
        $system['page']['dir'] .= $system['compat']['topic'].'/';
        $system['page']['file'] = $system['compat']['subtopic'].'.php';
    }
    $system['page']['fullpath'] = $system['page']['dir'].$system['page']['file'];

    if (file_exists($system['page']['fullpath'])) {
        ob_start();
        include($system['page']['fullpath']);
        $system['page']['content'] = ob_get_clean();
    } else {
        die("Page not exists...");
    }