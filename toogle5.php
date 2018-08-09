<?php
header("Access-Control-Allow-Origin: *");
?>

<div class="yorumtogglebutton"><button class="Hide hide5" data-tooltip="Yorumlari Gizle">Yorumlari Gizle</button>

<button class="Show show5" data-tooltip="Yorumlari Göster">Yorumlari Goster</button></div>



<style>

.show5

{

  display:none;

}



</style>

<script>

$('.hide5').click(function() {

    $('table#blok5yorum, .lm-blok5yorum').hide(500);

    $('.hide5').hide(0);

 $('.show5').show(0);

   });

$('.show5').click(function() {

    $('table#blok5yorum').show(500);

    $('.hide5').show(0);

 $('.show5').hide(0);

   });



$('.toggle').click(function() {

    $('table#blok5yorum, .lm-blok5yorum').toggle('slow');

});

</script>



<!--->



<button class="lm-button lm-blok5yorum">tüm yorumları gör</button>

<script type="text/javascript">

$( document ).ready(function() {

 $("table#yorumalani5").append($(".lm-blok5yorum"));

});

</script>

<style>

table#blok5yorum {display: none;}

</style>

<script>

$(function() {

  var colEl = $('table#blok5yorum').length,

    loadedEl = 0,

    start = 2,

    loadPo = 2222222;



  for (var i = 0; i < start; i++) {

    $('table#blok5yorum').eq(i).css('display', 'block');

  }



  $('.lm-blok5yorum').on('click', loadMore);



  function loadMore() {

    if (colEl - loadedEl < loadPo) loadPo = colEl - loadedEl;

    for (var i = 1; i <= loadPo; i++) {

      $('table#blok5yorum').eq(loadedEl).fadeIn(400);

      loadedEl = loadedEl + 1;

    }

    if (colEl - loadedEl === 0) $(this).hide();

  }

});

</script>