<?php
global $title,$content;
/**
 * Summary of getContent
 * @return string
 */
function getContent(){

    return "<html>

    <head>
    
        <title>{{TITLE}}</title>
    
    </head>
    
    <body>
    
    {{CONTENT}}
    
    </body>
    
    </html>";
}



/**
 * Summary of str_replaceTitle
 * @param mixed $new_text
 * @return string
 */
function str_replaceTitle($new_text){
    return str_replace("{{TITLE}}",$new_text,getContent());
   }


/**
 * Summary of str_replaceContent
 * @param mixed $new_text
 * @return string
 */
function str_replaceContent($new_text){
 return str_replace("{{CONTENT}}",$new_text,getContent());
}
/**
 * Summary of getReplace
 * @param mixed $operation
 * @param mixed $text
 * @return mixed
 */
function getReplace(string $operation,string $text){
    $operation = 'str_'.$operation;
    if(function_exists($operation)){
        return $operation($text);
    }
    else{
        return null;
    }
}
echo getReplace("replaceContent",'ффф');
