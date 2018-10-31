<?php
    // output top of page
    perch_layout('global/head', [
        // 'page_title' => perch_page_title(true),
        'title' => perch_page_title(true),
        'class' => 'about',
    ]);

    // perch_layout('global/mast');

    // perch_content('About_text');
?>
<p>Mary McDonnell’s artworks explore the qualities of pattern, line and colour in tandem with storytelling to evoke a deep sense of relation to place and it’s history. Shifting fluidly between textile, paint and mixed media works, she continues to draw inspiration from the local history, mythology and flora of her native Boyne Valley, and from the everyday happenings of family life.</p>

<?php   
    // page close
    perch_layout('global/tail');
?>
