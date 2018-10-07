<?php
header("Access-Control-Allow-Origin: *");
?>
<div class="yorumtogglebutton"><button class="Hide hide3" data-tooltip="Yorumlari Gizle">Yorumlari Gizle</button>
<button class="Show show3" data-tooltip="Yorumlari Göster">Yorumlari Goster</button></div>


<style>
.show3
{ display:none;}
</style>

<script>
$('.hide3').click(function() {
    $('table#blok3yorum, .lm-blok3yorum').hide(500);
    $('.hide3').hide(0);
 $('.show3').show(0);
   });
$('.show3').click(function() {
    $('table#blok3yorum').show(500);
    $('.hide3').show(0);
 $('.show3').hide(0);
   });

$('.toggle').click(function() {
    $('table#blok3yorum, .lm-blok3yorum').toggle('slow');
});
</script>
<button class="lm-button lm-blok3yorum">tüm yorumları gör</button>
<script type="text/javascript">
$( document ).ready(function() {
 $("table#yorumalani3").append($(".lm-blok3yorum"));
});
</script>

<style>

table#blok3yorum {display: none;}

</style>

<script>

$(function() {

  var colEl = $('table#blok3yorum').length,

    loadedEl = 0,

    start = 2,

    loadPo = 2222222;



  for (var i = 0; i < start; i++) {

    $('table#blok3yorum').eq(i).css('display', 'block');

  }
  while (var colEl = 2; colEl == start; i++) {

    $('.lm-blok3yorum').eq(i).css('display', 'none');

  }


  $('.lm-blok3yorum').on('click', loadMore);



  function loadMore() {

    if (colEl - loadedEl < loadPo) loadPo = colEl - loadedEl;

    for (var i = 1; i <= loadPo; i++) {

      $('table#blok3yorum').eq(loadedEl).fadeIn(400);

      loadedEl = loadedEl + 1;

    }

    if (colEl - loadedEl === 2) $(this).hide();

  }

});

</script>
