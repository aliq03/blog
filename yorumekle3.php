<?php
header("Access-Control-Allow-Origin: *");
?>

<!--yorum alma--basla--->
<div class="sayialmak sayialma3"></div>
<script>
var yorumadet=$('#yorumalani3 .byorum').length;
$('div.sayialma3').text(''+yorumadet+' yorum');
</script>
<!--yorumalma--bitis--->
<!--ayarlar--basla--->
<script>
function JSTR3_Id(id){
return document.getElementById(id);
}
function JSTR3_HideDiv(){
var bilgi3=JSTR3_Id("bilgi3");
if(! JSTR3_IsClickedyazi3) bilgi3.style.display="none";
JSTR3_IsClickedyazi3=false;
}
function JSTR3_AppToDiv(){
if(window.attachEvent){
document.attachEvent("onclick",JSTR3_HideDiv);
window.attachEvent("onresize",JSTR3_HideDiv);
}
else{
if(document.addEventListener){
document.addEventListener("click",JSTR3_HideDiv,false);
window.addEventListener("resize",JSTR3_HideDiv,false);
}
else{window.onclick=JSTR3_HideDiv;window.onresize=JSTR3_HideDiv;
}
}
}
</script> <script>
var JSTR3_IsClickedyazi3=false;
function goster3(){
var q;
q=JSTR3_Id("bilgi3");
q.style.display="";
JSTR3_IsClickedyazi3=true;
}
function gizle3(){
if(JSTR3_Id("bilgi3").style.display.length==0) JSTR3_Id("JSTR3_div").removeAttribute("onclick");
else JSTR3_Id("JSTR3_div").setAttribute("onclick","goster3 ()");
}
</script><form action="/blog.htm" method="POST"><a>
<div onclick="goster3()" id="JSTR3_div">
<div class="yazi3" id="yazi3">
<!--smile--basla---> <script>
function JSTR333_Id(id){
return document.getElementById(id);
}
function JSTR333_HideDiv(){
var bilgi333=JSTR333_Id("bilgi333");
if(! JSTR333_IsClickedyazi333) bilgi333.style.display="none";
JSTR333_IsClickedyazi333=false;
}
function JSTR333_AppToDiv(){
if(window.attachEvent){
document.attachEvent("onclick",JSTR333_HideDiv);
window.attachEvent("onresize",JSTR333_HideDiv);
}
else{
if(document.addEventListener){
document.addEventListener("click",JSTR333_HideDiv,false);
window.addEventListener("resize",JSTR333_HideDiv,false);
}
else{window.onclick=JSTR333_HideDiv;window.onresize=JSTR333_HideDiv;
}
}
}
</script> <script>
var JSTR333_IsClickedyazi333=false;
function goster333(){
var q;
q=JSTR333_Id("bilgi333");
q.style.display="";
JSTR333_IsClickedyazi333=true;
}
function gizle333(){
if(JSTR333_Id("bilgi333").style.display.length==0) JSTR333_Id("JSTR333_div").removeAttribute("onclick");
else JSTR333_Id("JSTR333_div").setAttribute("onclick","goster333 ()");
}
</script>
<div onclick="goster333()" id="JSTR333_div">
<div style="background-color:;">
<div class="yazi333" data-tooltip="Emoji Ekle" id="yazi333">yazıya tıkla</div>
</div>
<div class="bilgi333" id="bilgi333" style="display:none;">

<!--smile---yazi333--basla---->
<script type="text/javascript"> 
    function insertSmileyaliqqq3(smiley) 
    { 
        var currentText = document.getElementById("messagealiqqq3"); 
        var smileyWithPadding = " " + smiley + " "; 
        currentText.value += smileyWithPadding; 
        document.getElementById('messagealiqqq3').focus();
        
    } 
</script>  
<div class="smilemenudiv">
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt16.png"     onclick="insertSmileyaliqqq3(';)')" />
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt2.png"     onclick="insertSmileyaliqqq3(' :)')" />
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt1.png"     onclick="insertSmileyaliqqq3(':D')" />
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt13.png"     onclick="insertSmileyaliqqq3(' >:(')" />
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt3.png"     onclick="insertSmileyaliqqq3(':(')" />
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt4.png"     onclick="insertSmileyaliqqq3(' :o')" />

<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt7.png"     onclick="insertSmileyaliqqq3('8)')" />
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/ttt18.png"     onclick="insertSmileyaliqqq3(' ???')" />
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt15.png"     onclick="insertSmileyaliqqq3(';-)')" />

<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt9.png"     onclick="insertSmileyaliqqq3(':P')" />
<img class="smilemenu" src="https://img.webme.com/pic/s/s9games/kararsiz.png"     onclick="insertSmileyaliqqq3(':düşündürücü:')" />
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt12.png"     onclick="insertSmileyaliqqq3(':çok üzücü:')" />
</div>
<!--smile---yazi333--bitis---->


</div>
</div>
<script>(function(){JSTR333_AppToDiv()}())</script><!--smile----bitis-->


<textarea name="modulenter[text]" id="messagealiqqq3" class="kommentartext" placeholder="Yorum ekle..."></textarea>


</div>
<div class="bilgi3" id="bilgi3" style="display:none;">
<!--ayarlar---yazi3--basla----> 
<div class="select-3 select-x"></div>					
<input class="adinizne" type="text" name="modulenter[name]" maxlength="20" placeholder="Adınız">
    <input type="hidden" name="mode" value="addacomment_step1">
					<input type="submit" value="Yorum ekle">
				
<!--ayarlar---yazi3--bitis----></div></a></form>
</div><!--ayarlar----bitis-->

<script type="text/javascript">
$( document ).ready(function() {
$( ".kullanici-adi" ).clone().appendTo( "div#bilgi3" );
$( ".kapatma-k-adi" ).clone().appendTo( "div#bilgi" );
$("center form[method='POST'] select").clone().appendTo("div.select-3");
$(".select-3 select option:nth-of-type(2)").remove();
$(".select-3 select option:nth-of-type(1)").remove();

$( "div#bilgi3 a.kullanici-adi" ).after ( '<div class="kapatma-k-adi"></div>' );
});
</script>
<style>
div.yazi333[data-tooltip]:before {
    margin-bottom: -65px;
    z-index: 2;
    background-color: #404040;
    width: 70px;
    font-size: 12px;
    font-weight: bold;
}
div.yazi333[data-tooltip]:after {
    margin-bottom: -37px;
    border-bottom: 5px solid hsla(0, 0%, 20%, 0.9);
    border-right: 5px solid transparent;
    border-left: 5px solid transparent;
    border-top: 0px;
}
</style>
<script>
var textarea3=document.querySelector('textarea#messagealiqqq3');

textarea3.addEventListener('keydown', autosize);
             
function autosize(){
  var el3 = this;
  setTimeout(function(){
    el3.style.cssText = 'height:auto; padding:0';
    // for box-sizing other than "content-box" use:
    // el3.style.cssText = '-moz-box-sizing:content-box';
    el3.style.cssText = 'height:' + el3.scrollHeight + 'px';
  },0);
}
</script>