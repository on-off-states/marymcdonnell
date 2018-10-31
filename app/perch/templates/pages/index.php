<?php
    // output the top of the page
    perch_layout('global/head', [
        // 'page_title' => perch_page_title(true),
        'title' => perch_page_title(true),
        'class' => 'home',
    ]);
    // main navigation
	perch_layout('global/nav');
	// masthead
    perch_layout('global/mast');
    // site info
    perch_layout('global/footer');
    // page close
    perch_layout('global/tail');
