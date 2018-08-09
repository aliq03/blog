<?php
header("Access-Control-Allow-Origin: *");
?>
<div class="yorumtogglebutton"><button class="Hide hide4" data-tooltip="Yorumlari Gizle">Yorumlari Gizle</button>

<button class="Show show4" data-tooltip="Yorumlari Göster">Yorumlari Goster</button></div>


<style>

.show4

{

  display:none;

}



</style>

<script>

$('.hide4').click(function() {

    $('table#blok4yorum, .lm-blok4yorum').hide(500);

    $('.hide4').hide(0);

 $('.show4').show(0);

   });

$('.show4').click(function() {

    $('table#blok4yorum').show(500);

    $('.hide4').show(0);

 $('.show4').hide(0);

   });



$('.toggle').click(function() {

    $('table#blok4yorum, .lm-blok4yorum').toggle('slow');

});

</script>
<button class="lm-button lm-blok4yorum">tüm yorumları gör</button>

<script type="text/javascript">

$( document ).ready(function() {

 $("table#yorumalani4").append($(".lm-blok4yorum"));

});

</script>

<style>

table#blok4yorum {display: none;}

</style>

<script>

$(function() {

  var colEl = $('table#blok4yorum').length,

    loadedEl = 0,

    start = 2,

    loadPo = 2222222;



  for (var i = 0; i < start; i++) {

    $('table#blok4yorum').eq(i).css('display', 'block');

  }



  $('.lm-blok4yorum').on('click', loadMore);



  function loadMore() {

    if (colEl - loadedEl < loadPo) loadPo = colEl - loadedEl;

    for (var i = 1; i <= loadPo; i++) {

      $('table#blok4yorum').eq(loadedEl).fadeIn(400);

      loadedEl = loadedEl + 1;

    }

    if (colEl - loadedEl === 0) $(this).hide();

  }

});

</script>