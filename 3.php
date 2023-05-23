<?php
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
function str_replaceTitle($new_text,$text){
    return str_replace("{{TITLE}}",$new_text,$text);
    }
    
    /**
    * Summary of str_replaceContent
    * @param mixed $new_text
    * @return string
    */
    function str_replaceContent($new_text,$text){
    return str_replace("{{CONTENT}}",$new_text,$text);
    }
    /**
    * Summary of getReplace
    * @param mixed $operation
    * @param mixed $text
    * @return mixed
    */
    function getReplace(string $operation,string $text){
    if($operation == 'title'){
    return str_replaceTitle($text,getContent());
    }
    elseif ($operation == 'content'){
    return str_replaceContent($text,getContent());
    }
    else{
    return null;
    }
}
echo getReplace ('title','ффф');