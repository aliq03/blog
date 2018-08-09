<?php
header("Access-Control-Allow-Origin: *");
?>

<!--yorum alma--basla--->
<div class="sayialmak sayialma2"></div>
<script>
var yorumadet=$('#yorumalani2 .byorum').length;
$('div.sayialma2').text(''+yorumadet+' yorum');
</script>
<!--yorumalma--bitis--->
<!--ayarlar--basla--->
<script>
function JSTR2_Id(id){
return document.getElementById(id);
}
function JSTR2_HideDiv(){
var bilgi2=JSTR2_Id("bilgi2");
if(! JSTR2_IsClickedyazi2) bilgi2.style.display="none";
JSTR2_IsClickedyazi2=false;
}
function JSTR2_AppToDiv(){
if(window.attachEvent){
document.attachEvent("onclick",JSTR2_HideDiv);
window.attachEvent("onresize",JSTR2_HideDiv);
}
else{
if(document.addEventListener){
document.addEventListener("click",JSTR2_HideDiv,false);
window.addEventListener("resize",JSTR2_HideDiv,false);
}
else{window.onclick=JSTR2_HideDiv;window.onresize=JSTR2_HideDiv;
}
}
}
</script> <script>
var JSTR2_IsClickedyazi2=false;
function goster2(){
var q;
q=JSTR2_Id("bilgi2");
q.style.display="";
JSTR2_IsClickedyazi2=true;
}
function gizle2(){
if(JSTR2_Id("bilgi2").style.display.length==0) JSTR2_Id("JSTR2_div").removeAttribute("onclick");
else JSTR2_Id("JSTR2_div").setAttribute("onclick","goster2 ()");
}
</script><form action="/blog.htm" method="POST"><a>
<div onclick="goster2()" id="JSTR2_div">
<div class="yazi2" id="yazi2">

<!--smile--basla---> <script>
function JSTR222_Id(id){
return document.getElementById(id);
}
function JSTR222_HideDiv(){
var bilgi222=JSTR222_Id("bilgi222");
if(! JSTR222_IsClickedyazi222) bilgi222.style.display="none";
JSTR222_IsClickedyazi222=false;
}
function JSTR222_AppToDiv(){
if(window.attachEvent){
document.attachEvent("onclick",JSTR222_HideDiv);
window.attachEvent("onresize",JSTR222_HideDiv);
}
else{
if(document.addEventListener){
document.addEventListener("click",JSTR222_HideDiv,false);
window.addEventListener("resize",JSTR222_HideDiv,false);
}
else{window.onclick=JSTR222_HideDiv;window.onresize=JSTR222_HideDiv;
}
}
}
</script> <script>
var JSTR222_IsClickedyazi222=false;
function goster222(){
var q;
q=JSTR222_Id("bilgi222");
q.style.display="";
JSTR222_IsClickedyazi222=true;
}
function gizle222(){
if(JSTR222_Id("bilgi222").style.display.length==0) JSTR222_Id("JSTR222_div").removeAttribute("onclick");
else JSTR222_Id("JSTR222_div").setAttribute("onclick","goster222 ()");
}
</script>
<div onclick="goster222()" id="JSTR222_div">
<div style="background-color:;">
<div class="yazi222"  data-tooltip="Emoji Ekle" id="yazi222">yazıya tıkla</div>
</div>
<div class="bilgi222" id="bilgi222" style="display:none;">


<!--smile---yazi222--basla---->
<script type="text/javascript"> 
    function insertSmileyaliqqq2(smiley) 
    { 
        var currentText = document.getElementById("messagealiqqq2"); 
        var smileyWithPadding = " " + smiley + " "; 
        currentText.value += smileyWithPadding; 
        document.getElementById('messagealiqqq2').focus();
        
    } 
</script>  
<div class="smilemenudiv">
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt16.png"     onclick="insertSmileyaliqqq2(';)')" />
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt2.png"     onclick="insertSmileyaliqqq2(' :)')" />
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt1.png"     onclick="insertSmileyaliqqq2(':D')" />
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt13.png"     onclick="insertSmileyaliqqq2(' >:(')" />
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt3.png"     onclick="insertSmileyaliqqq2(':(')" />
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt4.png"     onclick="insertSmileyaliqqq2(' :o')" />

<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt7.png"     onclick="insertSmileyaliqqq2('8)')" />
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/ttt18.png"     onclick="insertSmileyaliqqq2(' ???')" />
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt15.png"     onclick="insertSmileyaliqqq2(';-)')" />

<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt9.png"     onclick="insertSmileyaliqqq2(':P')" />
<img class="smilemenu" src="https://img.webme.com/pic/s/s9games/kararsiz.png"     onclick="insertSmileyaliqqq2(':düşündürücü:')" />
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt12.png"     onclick="insertSmileyaliqqq2(':çok üzücü:')" />
</div>
<!--smile---yazi222--bitis---->


</div>
</div>
<script>(function(){JSTR222_AppToDiv()}())</script><!--smile----bitis-->


<textarea name="modulenter[text]" id="messagealiqqq2" class="kommentartext" placeholder="Yorum ekle..."></textarea>



</div>
<div class="bilgi2" id="bilgi2" style="display:none;">
<!--ayarlar---yazi2--basla----> 
<div class="select-2 select-x"></div>				
<input class="adinizne" type="text" name="modulenter[name]" maxlength="20" placeholder="Adınız">
    <input type="hidden" name="mode" value="addacomment_step1">
					<input type="submit" value="Yorum ekle">
				
<!--ayarlar---yazi2--bitis----></div></a></form>
</div><!--ayarlar----bitis-->

<script type="text/javascript">
$( document ).ready(function() {
$( ".kullanici-adi" ).clone().appendTo( "div#bilgi2" );
$( ".kapatma-k-adi" ).clone().appendTo( "div#bilgi" );
$("center form[method='POST'] select").clone().appendTo("div.select-2");
$(".select-2 select option:nth-of-type(1)").remove();
$(".select-2 select option:nth-of-type(3)").remove();
$(".select-2 select option:nth-of-type(4)").remove();
$(".select-2 select option:nth-of-type(5)").remove();
$(".select-2 select option:nth-of-type(6)").remove();

$( "div#bilgi2 a.kullanici-adi" ).after('<div class="kapatma-k-adi"></div>');
});
</script>
<style>
div.yazi222[data-tooltip]:before {
    margin-bottom: -65px;
    z-index: 2;
    background-color: #404040;
    width: 70px;
    font-size: 12px;
    font-weight: bold;
}
div.yazi222[data-tooltip]:after {
    margin-bottom: -37px;
    border-bottom: 5px solid hsla(0, 0%, 20%, 0.9);
    border-right: 5px solid transparent;
    border-left: 5px solid transparent;
    border-top: 0px;
}
</style>
<script>
var textarea2=document.querySelector('textarea#messagealiqqq2');
textarea2.addEventListener('keydown', autosize);
             
function autosize(){
  var el2 = this;
  setTimeout(function(){
    el2.style.cssText = 'height:auto; padding:0';
    // for box-sizing other than "content-box" use:
    // el2.style.cssText = '-moz-box-sizing:content-box';
    el2.style.cssText = 'height:' + el2.scrollHeight + 'px';
  },0);
}
</script>