<?php
function getContent(){
    $title = '';
    $content = '';
    return "<html>

    <head>
    
        <title>$title </title>
    
    </head>
    
    <body>
    
     $content
    
    </body>
    
    </html>";
}

/**
 * Summary of str_replaceTitle
 * @param mixed $title
 * @param mixed $newTitle
 * @return mixed
 */
function str_replaceTitle($title,$newTitle){
    $title = $newTitle;
    return $title;
}

/**
 * Summary of str_replaceContent
 * @param mixed $content
 * @param mixed $newContent
 * @return mixed
 */
function str_replaceContent($content,$newContent){
   $content = $newContent;
    return $content;
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
        return $operation(getContent());
    }
}
getReplace('replaceTitle','dsfdsfdsfjnsdfjsdnfsdfds');