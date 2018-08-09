<?php
header("Access-Control-Allow-Origin: *");
?>

<!--yorum alma--basla--->
<div class="sayialmak sayialma1"></div>
<script>
var yorumadet=$('#yorumalani1 .byorum').length;
$('div.sayialma1').text(''+yorumadet+' yorum');
</script>
<!--yorumalma--bitis--->
<!--ayarlar--basla--->
<script>
function JSTR_Id(id){
return document.getElementById(id);
}
function JSTR_HideDiv(){
var bilgi=JSTR_Id("bilgi");
if(! JSTR_IsClickedyazi) bilgi.style.display="none";
JSTR_IsClickedyazi=false;
}
function JSTR_AppToDiv(){
if(window.attachEvent){
document.attachEvent("onclick",JSTR_HideDiv);
window.attachEvent("onresize",JSTR_HideDiv);
}
else{
if(document.addEventListener){
document.addEventListener("click",JSTR_HideDiv,false);
window.addEventListener("resize",JSTR_HideDiv,false);
}
else{window.onclick=JSTR_HideDiv;window.onresize=JSTR_HideDiv;
}
}
}
</script> <script>
var JSTR_IsClickedyazi=false;
function Goster(){
var q;
q=JSTR_Id("bilgi");
q.style.display="";
JSTR_IsClickedyazi=true;
}
function Gizle(){
if(JSTR_Id("bilgi").style.display.length==0) JSTR_Id("jstr_div").removeAttribute("onclick");
else JSTR_Id("jstr_div").setAttribute("onclick","Goster ()");
}
</script><form action="/blog.htm" method="POST"><a>
<div onclick="Goster()" id="jstr_div">
<div class="yazi" id="yazi">
<!--smile--basla---> <script>
function JSTR111_Id(id){
return document.getElementById(id);
}
function JSTR111_HideDiv(){
var bilgi111=JSTR111_Id("bilgi111");
if(! JSTR111_IsClickedyazi111) bilgi111.style.display="none";
JSTR111_IsClickedyazi111=false;
}
function JSTR111_AppToDiv(){
if(window.attachEvent){
document.attachEvent("onclick",JSTR111_HideDiv);
window.attachEvent("onresize",JSTR111_HideDiv);
}
else{
if(document.addEventListener){
document.addEventListener("click",JSTR111_HideDiv,false);
window.addEventListener("resize",JSTR111_HideDiv,false);
}
else{window.onclick=JSTR111_HideDiv;window.onresize=JSTR111_HideDiv;
}
}
}
</script> <script>
var JSTR111_IsClickedyazi111=false;
function goster111(){
var q;
q=JSTR111_Id("bilgi111");
q.style.display="";
JSTR111_IsClickedyazi111=true;
}
function gizle111(){
if(JSTR111_Id("bilgi111").style.display.length==0) JSTR111_Id("JSTR111_div").removeAttribute("onclick");
else JSTR111_Id("JSTR111_div").setAttribute("onclick","goster111 ()");
}
</script>
<div onclick="goster111()" id="JSTR111_div">
<div style="background-color:;">
<div class="yazi111" data-tooltip="Emoji Ekle" id="yazi111">yazıya tıkla</div>
</div>
<div class="bilgi111" id="bilgi111" style="display:none;">

<!--smile---yazi--basla---->
<script type="text/javascript"> 
    function insertSmileyaliqqq1(smiley) 
    { 
        var currentText = document.getElementById("messagealiqqq1"); 
        var smileyWithPadding = " " + smiley + " "; 
        currentText.value += smileyWithPadding; 
        document.getElementById('messagealiqqq1').focus();
        
        
    } 
</script>  
<div class="smilemenudiv">
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt16.png"     onclick="insertSmileyaliqqq1(';)')" />
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt2.png"     onclick="insertSmileyaliqqq1(' :)')" />
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt1.png"     onclick="insertSmileyaliqqq1(':D')" />
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt13.png"     onclick="insertSmileyaliqqq1(' >:(')" />
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt3.png"     onclick="insertSmileyaliqqq1(':(')" />
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt4.png"     onclick="insertSmileyaliqqq1(' :o')" />

<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt7.png"     onclick="insertSmileyaliqqq1('8)')" />
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/ttt18.png"     onclick="insertSmileyaliqqq1(' ???')" />
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt15.png"     onclick="insertSmileyaliqqq1(';-)')" />

<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt9.png"     onclick="insertSmileyaliqqq1(':P')" />
<img class="smilemenu" src="https://img.webme.com/pic/s/s9games/kararsiz.png"     onclick="insertSmileyaliqqq1(':düşündürücü:')" />
<img class="smilemenu" src="https://img.webme.com/pic/a/aliq/tt12.png"     onclick="insertSmileyaliqqq1(':çok üzücü:')" />
</div>
<!--smile---yazi--bitis---->


</div>
</div>
<script>(function(){JSTR111_AppToDiv()}())</script><!--smile----bitis-->


<textarea id="messagealiqqq1" name="modulenter[text]" class="kommentartext" placeholder="Yorum ekle..."></textarea>
</div>
<div class="bilgi" id="bilgi" style="display:none;">
<!--ayarlar---yazi--basla----> 
					<div class="select-1 select-x"></div>
<input class="adinizne" type="text" name="modulenter[name]" maxlength="20" placeholder="Adınız">
<input type="hidden" name="mode" value="addacomment_step1">
					<input type="submit" value="Yorum ekle">
				
<!--ayarlar---yazi--bitis----></div></a></form>
</div><!--ayarlar----bitis-->

<script type="text/javascript">
$( document ).ready(function() {
$( ".kullanici-adi" ).clone().appendTo( "div#bilgi" );
$( ".kapatma-k-adi" ).clone().appendTo( "div#bilgi" );
$("center form[method='POST'] select").clone().appendTo("div.select-1");
$(".select-1 select option:nth-of-type(2)").remove();
$(".select-1 select option:nth-of-type(3)").remove();
$(".select-1 select option:nth-of-type(4)").remove();
$(".select-1 select option:nth-of-type(5)").remove();
$(".select-1 select option:nth-of-type(6)").remove();

$( "div#bilgi a.kullanici-adi" ).after ( '<div class="kapatma-k-adi"></div>' );
});
</script>
<style>
div.yazi111[data-tooltip]:before {
    margin-bottom: -65px;
    z-index: 2;
    background-color: #404040;
    width: 70px;
    font-size: 12px;
    font-weight: bold;
}
div.yazi111[data-tooltip]:after {
    margin-bottom: -37px;
    border-bottom: 5px solid hsla(0, 0%, 20%, 0.9);
    border-right: 5px solid transparent;
    border-left: 5px solid transparent;
    border-top: 0px;
}
</style>
<script>
var textarea1=document.querySelector('textarea#messagealiqqq1');

textarea1.addEventListener('keydown', autosize);
             
function autosize(){
  var el1 = this;
  setTimeout(function(){
    el1.style.cssText = 'height:auto; padding:0';
    // for box-sizing other than "content-box" use:
    // el1.style.cssText = '-moz-box-sizing:content-box';
    el1.style.cssText = 'height:' + el1.scrollHeight + 'px';
  },0);
}
</script>