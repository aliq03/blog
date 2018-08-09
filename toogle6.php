<?php
header("Access-Control-Allow-Origin: *");
?>


<div class="yorumtogglebutton"><button class="Hide hide6" data-tooltip="Yorumlari Gizle">Yorumlari Gizle</button>

<button class="Show show6" data-tooltip="Yorumlari Göster">Yorumlari Goster</button></div>




<style>

.show6

{

  display:none;

}



</style>

<script>

$('.hide6').click(function() {

    $('table#blok6yorum, .lm-blok6yorum').hide(500);

    $('.hide6').hide(0);

 $('.show6').show(0);

   });

$('.show6').click(function() {

    $('table#blok6yorum').show(500);

    $('.hide6').show(0);

 $('.show6').hide(0);

   });



$('.toggle').click(function() {

    $('table#blok6yorum, .lm-blok6yorum').toggle('slow');

});

</script>

<button class="lm-button lm-blok6yorum">tüm yorumları gör</button>

<script type="text/javascript">

$( document ).ready(function() {

 $("table#yorumalani6").append($(".lm-blok6yorum"));

});

</script>

<style>

table#blok6yorum {display: none;}

</style>

<script>

$(function() {

  var colEl = $('table#blok6yorum').length,

    loadedEl = 0,

    start = 2,

    loadPo = 2222222;



  for (var i = 0; i < start; i++) {

    $('table#blok6yorum').eq(i).css('display', 'block');

  }



  $('.lm-blok6yorum').on('click', loadMore);



  function loadMore() {

    if (colEl - loadedEl < loadPo) loadPo = colEl - loadedEl;

    for (var i = 1; i <= loadPo; i++) {

      $('table#blok6yorum').eq(loadedEl).fadeIn(400);

      loadedEl = loadedEl + 1;

    }

    if (colEl - loadedEl === 0) $(this).hide();

  }

});

</script>