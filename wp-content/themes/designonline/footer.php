<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package designonline
 */

?>

<footer class="footer">
  <div class="container">
  </div>
</footer>


 <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<?php wp_footer(); ?>

<!--Modals-->

<div class="modals">
  <div class="modal-overlay">
    <div class="modal modal--1" data-target="form-popup">
      <button class="btn-reset  modal__close js-modal-close" aria-label="Закрыть модальное окно"><img src="<?php echo get_template_directory_uri(); ?>/img/close.svg" alt=""></button>
      <div class="content-modal">
        <h2>Заявка на расчёт стоимости</h2>
        <form action="<?php echo get_template_directory_uri();?>/mail.php" method="POST">
          <label for="">Имя*</label>
          <input type="text" name="name">
          <label for="">Телефон*</label>
          <input type="text" class="tel" name="tel">
          <button class="btn-green">Отправить заявку</button>
        </form>
      </div>
    </div>

    <div class="modal modal--3" data-target="city-popup">
      <button class="btn-reset  modal__close js-modal-close" aria-label="Закрыть модальное окно"><img src="<?php echo get_template_directory_uri(); ?>/img/close.svg" alt=""></button>
      <div class="content-modal">
        <h2>Выбрать город</h2>
        <input type="text" id="inputSearch" placeholder="Поиск города" title="Поиск города">
        <?php
        $posts = get_posts(array(
          'posts_per_page'    => -1,
          'post_type'         => 'page'
        ));

        if ($posts) : ?>

          <ul class="list-reset" id="listcity">

            <?php foreach ($posts as $post) :

              setup_postdata($post);

            ?>
              <li>
                <a href="<?php the_permalink(); ?>">
                  <?php the_field('cityb'); ?></a>
              </li>

            <?php endforeach; ?>

          </ul>

          <?php wp_reset_postdata(); ?>

        <?php endif; ?>
      </div>
    </div>



  </div>
</div>

</div>


<script
  src="https://code.jquery.com/jquery-3.6.4.min.js"
  integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
  crossorigin="anonymous"></script>


<script>
  function search() {
    var input = document.getElementById("inputSearch");
    var filter = input.value.toUpperCase();
    var ul = document.getElementById("listcity");
    var li = ul.getElementsByTagName("li");

    // Перебирайте все элементы списка и скрывайте те, которые не соответствуют поисковому запросу
    for (var i = 0; i < li.length; i++) {
      var a = li[i].getElementsByTagName("a")[0];
      if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
        li[i].style.display = "";
      } else {
        li[i].style.display = "none";
      }
    }
  }

$(function () {

    $(document).on('click', '.open-modal-btn', function(){
      $('.modal-popup').eq( $(this).index('.open-modal-btn') ).css("display", "block").addClass('activemodal');
      $(".modal-gallery").css("display", "block");
      $("body").css("overflow", "hidden");
    });
    
    $(document).on('click', '.close', function(){
      $(this).parent().fadeOut();
      $(".modal-popup").removeAttr("style");
      $(".modal-gallery").css("display", "block");
      $("body").css("overflow", "unset");
    });

});   
  
</script>



</body>

</html>