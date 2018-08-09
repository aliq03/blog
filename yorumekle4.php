<?php
header("Access-Control-Allow-Origin: *");
?>


<!--yorum alma--basla--->
<div class="sayialmak sayialma4"></div>
<script>
var yorumadet=$('#yorumalani4 .byorum').length;
$('div.sayialma4').text(''+yorumadet+' yorum');
</script>
<!--yorumalma--bitis--->
<!--ayarlar--basla--->
<script>
function JSTR4_Id(id){
return document.getElementById(id);
}
function JSTR4_HideDiv(){
var bilgi4=JSTR4_Id("bilgi4");
if(! JSTR4_IsClickedyazi4) bilgi4.style.display="none";
JSTR4_IsClickedyazi4=false;
}
function JSTR4_AppToDiv(){
if(window.attachEvent){
document.attachEvent("onclick",JSTR4_HideDiv);
window.attachEvent("onresize",JSTR4_HideDiv);
}
else{
if(document.addEventListener){
document.addEventListener("click",JSTR4_HideDiv,false);
window.addEventListener("resize",JSTR4_HideDiv,false);
}
else{window.onclick=JSTR4_HideDiv;window.onresize=JSTR4_HideDiv;
}
}
}
</script> <script>
var JSTR4_IsClickedyazi4=false;
function goster4(){
var q;
q=JSTR4_Id("bilgi4");
q.style.display="";
JSTR4_IsClickedyazi4=true;
}
function gizle4(){
if(JSTR4_Id("bilgi4").style.display.length==0) JSTR4_Id("JSTR4_div").removeAttribute("onclick");
else JSTR4_Id("JSTR4_div").setAttribute("onclick","goster4 ()");
}
</script><form action="/blog.htm" method="POST"><a>
<div onclick="goster4()" id="JSTR4_div">
<div class="yazi4" id="yazi4">
<!--smile--basla---> <script>
function JSTR444_Id(id){
return document.getElementById(id);
}
function JSTR444_HideDiv(){
var bilgi444=JSTR444_Id("bilgi444");
if(! JSTR444_IsClickedyazi444) bilgi444.style.display="none";
JSTR444_IsClickedyazi444=false;
}
function JSTR444_AppToDiv(){
if(window.attachEvent){
document.attachEvent("onclick",JSTR444_HideDiv);
window.attachEvent("onresize",JSTR444_HideDiv);
}
else{
if(document.addEventListener){
document.addEventListener("click",JSTR444_HideDiv,false);
window.addEventListener("resize",JSTR444_HideDiv,false);
}
else{window.onclick=JSTR444_HideDiv;window.onresize=JSTR444_HideDiv;
}
}
}
</script> <script>
var JSTR444_IsClickedyazi444=false;
function goster444(){
var q;
q=JSTR444_Id("bilgi444");
q.style.display="";
JSTR444_IsClickedyazi444=true;
}
function gizle444(){
if(JSTR444_Id("bilgi444").style.display.length==0) JSTR444_Id("JSTR444_div").removeAttribute("onclick");
else JSTR444_Id("JSTR444_div").setAttribute("onclick","goster444 ()");
}
</script>
<div onclick="goster444()" id="JSTR444_div">
<div style="background-color:;">
<div class="yazi444" data-tooltip="Emoji Ekle" id="yazi444">yazıya tıkla</div>
</div>
<div class="bilgi444" id="bilgi444" style="display:none;">

<!--smile---yazi444--basla---->
<script type="text/javascript"> 
    function insertSmileyaliqqq4(smiley) 
    { 
        var currentText = document.getElementById("messagealiqqq4"); 
        var smileyWithPadding = " " + smiley + " "; 
        currentText.value += smileyWithPadding; 
        document.getElementById('messagealiqqq4').focus();
        
    } 
</script>  
<div class="smilemenudiv">
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt16.png"     onclick="insertSmileyaliqqq4(';)')" />
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt2.png"     onclick="insertSmileyaliqqq4(' :)')" />
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt1.png"     onclick="insertSmileyaliqqq4(':D')" />
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt13.png"     onclick="insertSmileyaliqqq4(' >:(')" />
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt3.png"     onclick="insertSmileyaliqqq4(':(')" />
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt4.png"     onclick="insertSmileyaliqqq4(' :o')" />

<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt7.png"     onclick="insertSmileyaliqqq4('8)')" />
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/ttt18.png"     onclick="insertSmileyaliqqq4(' ???')" />
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt15.png"     onclick="insertSmileyaliqqq4(';-)')" />

<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt9.png"     onclick="insertSmileyaliqqq4(':P')" />
<img class="smilemenu" src="https://img.webme.com/pic/s/s9games/kararsiz.png"     onclick="insertSmileyaliqqq4(':düşündürücü:')" />
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt12.png"     onclick="insertSmileyaliqqq4(':çok üzücü:')" />
</div>
<!--smile---yazi444--bitis---->


</div>
</div>
<script>(function(){JSTR444_AppToDiv()}())</script><!--smile----bitis-->


<textarea name="modulenter[text]" id="messagealiqqq4" class="kommentartext" placeholder="Yorum ekle..."></textarea>
</div>
<div class="bilgi4" id="bilgi4" style="display:none;">
<!--ayarlar---yazi4--basla----> 
<div class="select-4 select-x"></div>						
<input class="adinizne" type="text" name="modulenter[name]" maxlength="20" placeholder="Adınız">
    <input type="hidden" name="mode" value="addacomment_step1">
					<input type="submit" value="Yorum ekle">
				
<!--ayarlar---yazi4--bitis----></div></a></form>
</div><!--ayarlar----bitis-->

<script type="text/javascript">
$( document ).ready(function() {
$( ".kullanici-adi" ).clone().appendTo( "div#bilgi4" );
$( ".kapatma-k-adi" ).clone().appendTo( "div#bilgi" );
$("center form[method='POST'] select").clone().appendTo("div.select-4");
$(".select-4 select option:nth-of-type(3)").remove();
$(".select-4 select option:nth-of-type(2)").remove();
$(".select-4 select option:nth-of-type(1)").remove();

$( "div#bilgi4 a.kullanici-adi" ).after ( '<div class="kapatma-k-adi"></div>' );
});
</script>
<style>
div.yazi444[data-tooltip]:before {
    margin-bottom: -65px;
    z-index: 2;
    background-color: #404040;
    width: 70px;
    font-size: 12px;
    font-weight: bold;
}
div.yazi444[data-tooltip]:after {
    margin-bottom: -37px;
    border-bottom: 5px solid hsla(0, 0%, 20%, 0.9);
    border-right: 5px solid transparent;
    border-left: 5px solid transparent;
    border-top: 0px;
}
</style>
<script>
var textarea4 = document.querySelector('textarea#messagealiqqq4');

textarea4.addEventListener('keydown', autosize);
             
function autosize(){
  var el4 = this;
  setTimeout(function(){
    el4.style.cssText = 'height:auto; padding:0';
    // for box-sizing other than "content-box" use:
    // el4.style.cssText = '-moz-box-sizing:content-box';
    el4.style.cssText = 'height:' + el4.scrollHeight + 'px';
  },0);
}
</script>