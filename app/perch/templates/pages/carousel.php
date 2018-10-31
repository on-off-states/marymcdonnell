<?php include($_SERVER['DOCUMENT_ROOT'].'/perch/runtime.php'); 

  perch_layout('global/head',
    array(
      'title'=>'paintings',
      'class'=>'work',
      )
    );

  perch_layout('global/mast');

  perch_content('Carousel');
?>  


<!-- hard coded content 
<div class="carousel arrows" data-transition="fade"> 
  <figure>
      <img src="/assets/img/woman-with-dog.jpg" alt="" />
      <figcaption>
        <p class="c-carousel__copy">Woman with dog</p>
      </figcaption>
  </figure>
</div>  end .carousel -->
 
<?php   
  Perch_layout('global/footer');
  perch_layout('global/global.js');
  perch_layout('global/carousel.js');
  // perch_layout('global/analytics'); 
?> 

</body>
</html>
