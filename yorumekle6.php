<?php
header("Access-Control-Allow-Origin: *");
?>

<!--yorum alma--basla--->
<div class="sayialmak sayialma6"></div>
<script>
var yorumadet=$('#yorumalani6 .byorum').length;
$('div.sayialma6').text(''+yorumadet+' yorum');
</script>
<!--yorumalma--bitis--->
<!--ayarlar--basla--->
<script>
function JSTR6_Id(id){
return document.getElementById(id);
}
function JSTR6_HideDiv(){
var bilgi6=JSTR6_Id("bilgi6");
if(! JSTR6_IsClickedyazi6) bilgi6.style.display="none";
JSTR6_IsClickedyazi6=false;
}
function JSTR6_AppToDiv(){
if(window.attachEvent){
document.attachEvent("onclick",JSTR6_HideDiv);
window.attachEvent("onresize",JSTR6_HideDiv);
}
else{
if(document.addEventListener){
document.addEventListener("click",JSTR6_HideDiv,false);
window.addEventListener("resize",JSTR6_HideDiv,false);
}
else{window.onclick=JSTR6_HideDiv;window.onresize=JSTR6_HideDiv;
}
}
}
</script> <script>
var JSTR6_IsClickedyazi6=false;
function goster6(){
var q;
q=JSTR6_Id("bilgi6");
q.style.display="";
JSTR6_IsClickedyazi6=true;
}
function gizle6(){
if(JSTR6_Id("bilgi6").style.display.length==0) JSTR6_Id("JSTR6_div").removeAttribute("onclick");
else JSTR6_Id("JSTR6_div").setAttribute("onclick","goster6 ()");
}
</script><form action="/blog.htm" method="POST"><a>
<div onclick="goster6()" id="JSTR6_div">
<div class="yazi6" id="yazi6">
<!--smile--basla---> <script>
function JSTR666_Id(id){
return document.getElementById(id);
}
function JSTR666_HideDiv(){
var bilgi666=JSTR666_Id("bilgi666");
if(! JSTR666_IsClickedyazi666) bilgi666.style.display="none";
JSTR666_IsClickedyazi666=false;
}
function JSTR666_AppToDiv(){
if(window.attachEvent){
document.attachEvent("onclick",JSTR666_HideDiv);
window.attachEvent("onresize",JSTR666_HideDiv);
}
else{
if(document.addEventListener){
document.addEventListener("click",JSTR666_HideDiv,false);
window.addEventListener("resize",JSTR666_HideDiv,false);
}
else{window.onclick=JSTR666_HideDiv;window.onresize=JSTR666_HideDiv;
}
}
}
</script> <script>
var JSTR666_IsClickedyazi666=false;
function goster666(){
var q;
q=JSTR666_Id("bilgi666");
q.style.display="";
JSTR666_IsClickedyazi666=true;
}
function gizle666(){
if(JSTR666_Id("bilgi666").style.display.length==0) JSTR666_Id("JSTR666_div").removeAttribute("onclick");
else JSTR666_Id("JSTR666_div").setAttribute("onclick","goster666 ()");
}
</script>
<div onclick="goster666()" id="JSTR666_div">
<div style="background-color:;">
<div class="yazi666" data-tooltip="Emoji Ekle" id="yazi666">yazıya tıkla</div>
</div>
<div class="bilgi666" id="bilgi666" style="display:none;">

<!--smile---yazi666--basla---->
<script type="text/javascript"> 
    function insertSmileyaliqqq6(smiley) 
    { 
        var currentText = document.getElementById("messagealiqqq6"); 
        var smileyWithPadding = " " + smiley + " "; 
        currentText.value += smileyWithPadding; 
        document.getElementById('messagealiqqq6').focus();
        
    } 
</script>  
<div class="smilemenudiv">
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt16.png"     onclick="insertSmileyaliqqq6(';)')" />
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt2.png"     onclick="insertSmileyaliqqq6(' :)')" />
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt1.png"     onclick="insertSmileyaliqqq6(':D')" />
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt13.png"     onclick="insertSmileyaliqqq6(' >:(')" />
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt3.png"     onclick="insertSmileyaliqqq6(':(')" />
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt4.png"     onclick="insertSmileyaliqqq6(' :o')" />

<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt7.png"     onclick="insertSmileyaliqqq6('8)')" />
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/ttt18.png"     onclick="insertSmileyaliqqq6(' ???')" />
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt15.png"     onclick="insertSmileyaliqqq6(';-)')" />

<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt9.png"     onclick="insertSmileyaliqqq6(':P')" />
<img class="smilemenu" src="https://img.webme.com/pic/s/s9games/kararsiz.png"     onclick="insertSmileyaliqqq6(':düşündürücü:')" />
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt12.png"     onclick="insertSmileyaliqqq6(':çok üzücü:')" />
</div>
<!--smile---yazi666--bitis---->


</div>
</div>
<script>(function(){JSTR666_AppToDiv()}())</script><!--smile----bitis-->


<textarea name="modulenter[text]"  id="messagealiqqq6" class="kommentartext" placeholder="Yorum ekle..."></textarea>

</div>
<div class="bilgi6" id="bilgi6" style="display:none;">
<!--ayarlar---yazi6--basla----> 
					<div class="select-6 select-x"></div>
<input class="adinizne" type="text" name="modulenter[name]" maxlength="20" placeholder="Adınız">
    <input type="hidden" name="mode" value="addacomment_step1">
					<input type="submit" value="Yorum ekle">
				
<!--ayarlar---yazi6--bitis----></div></a></form>
</div><!--ayarlar----bitis-->

<script type="text/javascript">
$( document ).ready(function() {
$( ".kullanici-adi" ).clone().appendTo( "div#bilgi6" );
$( ".kapatma-k-adi" ).clone().appendTo( "div#bilgi" );
$("center form[method='POST'] select").clone().appendTo("div.select-6");
$(".select-6 select option:nth-of-type(5)").remove();
$(".select-6 select option:nth-of-type(4)").remove();
$(".select-6 select option:nth-of-type(3)").remove();
$(".select-6 select option:nth-of-type(2)").remove();
$(".select-6 select option:nth-of-type(1)").remove();

$( "div#bilgi6 a.kullanici-adi" ).after ( '<div class="kapatma-k-adi"></div>' );
});
</script>
<style>
div.yazi666[data-tooltip]:before {
    margin-bottom: -65px;
    z-index: 2;
    background-color: #404040;
    width: 70px;
    font-size: 12px;
    font-weight: bold;
}
div.yazi666[data-tooltip]:after {
    margin-bottom: -37px;
    border-bottom: 5px solid hsla(0, 0%, 20%, 0.9);
    border-right: 5px solid transparent;
    border-left: 5px solid transparent;
    border-top: 0px;
}
</style>
<script>
var textarea6 = document.querySelector('textarea#messagealiqqq6');

textarea6.addEventListener('keydown', autosize);
             
function autosize(){
  var el6 = this;
  setTimeout(function(){
    el6.style.cssText = 'height:auto; padding:0';
    // for box-sizing other than "content-box" use:
    // el6.style.cssText = '-moz-box-sizing:content-box';
    el6.style.cssText = 'height:' + el6.scrollHeight + 'px';
  },0);
}
</script>