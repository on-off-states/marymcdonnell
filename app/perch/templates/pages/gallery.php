<?php   
  perch_layout('global/head',
    [
      // 'title'=>'portfolio',
      'title' => perch_page_title(true),
      'class'=>'gallery',
      'carousel' => true,
    ]);
  // main navigation
  perch_layout('global/nav');
  // masthead
  perch_layout('global/mast');
  // main content
  perch_content('Carousel');
?>
<!-- 
<div class="carousel arrows" data-transition="fade">
  <figure>
      <img src="/assets/dist/img/cups-oranges-lemons.jpg" alt="alt text"/>
      <figcaption>
        <p class="c-carousel__copy">Cups, oranges and lemons</p>
      </figcaption>
  </figure>    
  <figure>
      <img src="/assets/dist/img/cups-oranges-lemons.jpg" alt="" />
      <figcaption>
        <p class="c-carousel__copy">Cups, oranges and lemons</p>
      </figcaption>
  </figure>
  <figure>
      <img src="/assets/dist/img/letter-portrait.jpg" alt="" />
      <figcaption>
        <p class="c-carousel__copy">Letter</p>
      </figcaption>
  </figure>
  <figure>
      <img src="/assets/dist/img/to-francis-ledwidge-poetry1.jpg" alt="" />
      <figcaption>
        <p class="c-carousel__copy">To Francis Ledgwidge</p>
      </figcaption>
  </figure>
  
</div>  -->

<?php 
    // site info
    perch_layout('global/footer');
    // page close
    perch_layout('global/tail');
 




