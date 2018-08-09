<?php
header("Access-Control-Allow-Origin: *");
?>


<!--yorum alma--basla--->
<div class="sayialmak sayialma5"></div>
<script>
var yorumadet=$('#yorumalani5 .byorum').length;
$('div.sayialma5').text(''+yorumadet+' yorum');
</script>
<!--yorumalma--bitis--->
<!--ayarlar--basla--->
<script>
function JSTR5_Id(id){
return document.getElementById(id);
}
function JSTR5_HideDiv(){
var bilgi5=JSTR5_Id("bilgi5");
if(! JSTR5_IsClickedyazi5) bilgi5.style.display="none";
JSTR5_IsClickedyazi5=false;
}
function JSTR5_AppToDiv(){
if(window.attachEvent){
document.attachEvent("onclick",JSTR5_HideDiv);
window.attachEvent("onresize",JSTR5_HideDiv);
}
else{
if(document.addEventListener){
document.addEventListener("click",JSTR5_HideDiv,false);
window.addEventListener("resize",JSTR5_HideDiv,false);
}
else{window.onclick=JSTR5_HideDiv;window.onresize=JSTR5_HideDiv;
}
}
}
</script> <script>
var JSTR5_IsClickedyazi5=false;
function goster5(){
var q;
q=JSTR5_Id("bilgi5");
q.style.display="";
JSTR5_IsClickedyazi5=true;
}
function gizle5(){
if(JSTR5_Id("bilgi5").style.display.length==0) JSTR5_Id("JSTR5_div").removeAttribute("onclick");
else JSTR5_Id("JSTR5_div").setAttribute("onclick","goster5 ()");
}
</script><form action="/blog.htm" method="POST"><a>
<div onclick="goster5()" id="JSTR5_div">
<div class="yazi5" id="yazi5">
<!--smile--basla---> <script>
function JSTR555_Id(id){
return document.getElementById(id);
}
function JSTR555_HideDiv(){
var bilgi555=JSTR555_Id("bilgi555");
if(! JSTR555_IsClickedyazi555) bilgi555.style.display="none";
JSTR555_IsClickedyazi555=false;
}
function JSTR555_AppToDiv(){
if(window.attachEvent){
document.attachEvent("onclick",JSTR555_HideDiv);
window.attachEvent("onresize",JSTR555_HideDiv);
}
else{
if(document.addEventListener){
document.addEventListener("click",JSTR555_HideDiv,false);
window.addEventListener("resize",JSTR555_HideDiv,false);
}
else{window.onclick=JSTR555_HideDiv;window.onresize=JSTR555_HideDiv;
}
}
}
</script> <script>
var JSTR555_IsClickedyazi555=false;
function goster555(){
var q;
q=JSTR555_Id("bilgi555");
q.style.display="";
JSTR555_IsClickedyazi555=true;
}
function gizle555(){
if(JSTR555_Id("bilgi555").style.display.length==0) JSTR555_Id("JSTR555_div").removeAttribute("onclick");
else JSTR555_Id("JSTR555_div").setAttribute("onclick","goster555 ()");
}
</script>
<div onclick="goster555()" id="JSTR555_div">
<div style="background-color:;">
<div class="yazi555" data-tooltip="Emoji Ekle" id="yazi555">yazıya tıkla</div>
</div>
<div class="bilgi555" id="bilgi555" style="display:none;">

<!--smile---yazi555--basla---->
<script type="text/javascript"> 
    function insertSmileyaliqqq5(smiley) 
    { 
        var currentText = document.getElementById("messagealiqqq5"); 
        var smileyWithPadding = " " + smiley + " "; 
        currentText.value += smileyWithPadding; 
        document.getElementById('messagealiqqq5').focus();
        
    } 
</script>  
<div class="smilemenudiv">
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt16.png"     onclick="insertSmileyaliqqq5(';)')" />
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt2.png"     onclick="insertSmileyaliqqq5(' :)')" />
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt1.png"     onclick="insertSmileyaliqqq5(':D')" />
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt13.png"     onclick="insertSmileyaliqqq5(' >:(')" />
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt3.png"     onclick="insertSmileyaliqqq5(':(')" />
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt4.png"     onclick="insertSmileyaliqqq5(' :o')" />

<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt7.png"     onclick="insertSmileyaliqqq5('8)')" />
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/ttt18.png"     onclick="insertSmileyaliqqq5(' ???')" />
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt15.png"     onclick="insertSmileyaliqqq5(';-)')" />

<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt9.png"     onclick="insertSmileyaliqqq5(':P')" />
<img class="smilemenu" src="https://img.webme.com/pic/s/s9games/kararsiz.png"     onclick="insertSmileyaliqqq5(':düşündürücü:')" />
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt12.png"     onclick="insertSmileyaliqqq5(':çok üzücü:')" />
</div>
<!--smile---yazi555--bitis---->


</div>
</div>
<script>(function(){JSTR555_AppToDiv()}())</script><!--smile----bitis-->


<textarea name="modulenter[text]" id="messagealiqqq5" class="kommentartext" placeholder="Yorum ekle..."></textarea>

</div>
<div class="bilgi5" id="bilgi5" style="display:none;">
<!--ayarlar---yazi5--basla----> 
<div class="select-5 select-x"></div>
<input class="adinizne" type="text" name="modulenter[name]" maxlength="20" placeholder="Adınız">
    <input type="hidden" name="mode" value="addacomment_step1">
					<input type="submit" value="Yorum ekle">
				
<!--ayarlar---yazi5--bitis----></div></a></form>
</div><!--ayarlar----bitis-->

<script type="text/javascript">
$( document ).ready(function() {
$( ".kullanici-adi" ).clone().appendTo( "div#bilgi5" );
$( ".kapatma-k-adi" ).clone().appendTo( "div#bilgi" );
$("center form[method='POST'] select").clone().appendTo("div.select-5");
$(".select-5 select option:nth-of-type(4)").remove();
$(".select-5 select option:nth-of-type(3)").remove();
$(".select-5 select option:nth-of-type(2)").remove();
$(".select-5 select option:nth-of-type(1)").remove();

$( "div#bilgi5 a.kullanici-adi" ).after ( '<div class="kapatma-k-adi"></div>' );
});
</script>
<style>
div.yazi555[data-tooltip]:before {
    margin-bottom: -65px;
    z-index: 2;
    background-color: #404040;
    width: 70px;
    font-size: 12px;
    font-weight: bold;
}
div.yazi555[data-tooltip]:after {
    margin-bottom: -37px;
    border-bottom: 5px solid hsla(0, 0%, 20%, 0.9);
    border-right: 5px solid transparent;
    border-left: 5px solid transparent;
    border-top: 0px;
}
</style>
<script>
var textarea5 = document.querySelector('textarea#messagealiqqq5');

textarea5.addEventListener('keydown', autosize);
             
function autosize(){
  var el5 = this;
  setTimeout(function(){
    el5.style.cssText = 'height:auto; padding:0';
    // for box-sizing other than "content-box" use:
    // el5.style.cssText = '-moz-box-sizing:content-box';
    el5.style.cssText = 'height:' + el5.scrollHeight + 'px';
  },0);
}
</script>