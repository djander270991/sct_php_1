<?php
function text(){
    return "lorem dfdsf oaf jsad asd  asdas";
}
function replaseText($newText){
   
   return str_replace("lorem",$newText,text());
}
echo replaseText("ya  afds yarik");