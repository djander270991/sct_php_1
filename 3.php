<?php
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
echo getContent();
function replaceTitle($title,$newTitle){
    
}