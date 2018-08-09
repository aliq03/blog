<?php
header("Access-Control-Allow-Origin: *");
?>

<div class="yorumtogglebutton"><button class="Hide hide1" data-tooltip="Yorumlari Gizle">Yorumlari Gizle</button>
<button class="Show show1" data-tooltip="Yorumlari Göster">Yorumlari Goster</button></div>

<style>
.show1
{
  display:none;
}

</style>
<script>
$('.hide1').click(function() {
    $('table#blok1yorum, .lm-blok1yorum').hide(500);
    $('.hide1').hide(0);
 $('.show1').show(0);
   });
$('.show1').click(function() {
    $('table#blok1yorum').show(500);
    $('.hide1').show(0);
 $('.show1').hide(0);
   });

$('.toggle').click(function() {
    $('table#blok1yorum, .lm-blok1yorum').toggle('slow');
});
</script>
<button class="lm-button lm-blok1yorum">tüm yorumları gör</button>
<script type="text/javascript">
$( document ).ready(function() {
 $("table#yorumalani1").append($(".lm-blok1yorum"));

});
</script>
<style>
table#blok1yorum {display: none;}
</style>
<script>
$(function() {
  var colEl = $('table#blok1yorum').length,
    loadedEl = 0,
    start = 2,
    loadPo = 2222222;

  for (var i = 0; i < start; i++) {
    $('table#blok1yorum').eq(i).css('display', 'block');
  }

  for (var i = 1; i < start; i++) {
    $('.lm-blok1yorum').eq(i).css('display', 'none');
  }

  $('.lm-blok1yorum').on('click', loadMore);

  function loadMore() {
    if (colEl - loadedEl < loadPo) loadPo = colEl - loadedEl;
    for (var i = 1; i <= loadPo; i++) {
      $('table#blok1yorum').eq(loadedEl).fadeIn(400);
      loadedEl = loadedEl + 1;
    }
    if (colEl - loadedEl === 0) $(this).hide();
  }
});
</script>