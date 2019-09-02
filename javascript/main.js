$(document).ready(function(){
    var item = 0;
    $("li").each(function(c){
        $(this).click(function(){
        checked = c;
         //check the status of li before setting text-decoration
         if(item == 0){
            $(this).css("text-decoration", "line-through");
            item = 1;
            sessionStorage.setItem(checked, item);
 
           }else{
               $(this).css("text-decoration", "none");
               item = 0;
               sessionStorage.setItem(checked, item);
            }
        });
    });
 $("li").each(function(c){
    if(sessionStorage.getItem(c)==1){
        $(this).css("text-decoration", "line-through");
    }
 });
 });
 