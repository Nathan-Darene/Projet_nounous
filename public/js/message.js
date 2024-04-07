function _(element){
    return document.getElementById(element);
}

var label = _("label_chat");
label.addEventListener("click",function(){
    var inner_panel = _("inner_left_panel");

    var ajax = new XMLHttpRequest();
    ajax.onload = function(){

        if(ajax.status == 200 || ajax.readyState == 4){

            inner_panel.innerHTML = ajax.responseText;
        }
    }

    ajax.open("POST", "file.txt", true);
    ajax.send();

})
