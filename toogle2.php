<?php
header("Access-Control-Allow-Origin: *");
?>
<div class="yorumtogglebutton"><button class="Hide hide2" data-tooltip="Yorumlari Gizle">Yorumlari Gizle</button>
<button class="Show show2" data-tooltip="Yorumlari Göster">Yorumlari Goster</button></div>


<style>
.show2{display:none;}
</style>

<script>
$('.hide2').click(function() {
  $('table#blok2yorum, .lm-blok2yorum').hide(500);
     $('.hide2').hide(0);
 $('.show2').show(0);
 });
$('.show2').click(function() {
$('table#blok2yorum').show(500);
$('.hide2').show(0);
$('.show2').hide(0);
 });

$('.toggle').click(function() {
$('table#blok2yorum, .lm-blok2yorum').toggle('slow');
});
</script>
<button class="lm-button lm-blok2yorum">tüm yorumları gör</button>
<script type="text/javascript">
$( document ).ready(function() {
$("table#yorumalani2").append($(".lm-blok2yorum"));
});
</script>

<style>
table#blok2yorum {display: none;}
</style>
<script>
$(function() {
var colEl = $('table#blok2yorum').length,
loadedEl = 0,
start = 2,

    loadPo = 2222222;



  for (var i = 0; i < start; i++) {

    $('table#blok2yorum').eq(i).css('display', 'block');

  }



  $('.lm-blok2yorum').on('click', loadMore);



  function loadMore() {

    if (colEl - loadedEl < loadPo) loadPo = colEl - loadedEl;

    for (var i = 1; i <= loadPo; i++) {

      $('table#blok2yorum').eq(loadedEl).fadeIn(400);

      loadedEl = loadedEl + 1;

    }

    if (colEl - loadedEl === 0) $(this).hide();

  }

});

</script>