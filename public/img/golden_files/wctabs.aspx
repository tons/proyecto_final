function loadScript_form(url){

    if (document.getElementById('wcform_script') == null) {
    var script = document.createElement("script");
    script.type = "text/javascript";
        script.id = "wcform_script";

        if (script.readyState){  //IE
        script.onreadystatechange = function(){
            if (script.readyState == "loaded" ||
                    script.readyState == "complete"){
                script.onreadystatechange = null;
                    init_form();
										window.dispatchEvent(new Event('wcxReady'));
            }
        };
    } else {  
        script.onload = function(){
                init_form();
								window.dispatchEvent(new Event('wcxReady'));
        };
    }

    script.src = url;
    document.getElementsByTagName("head")[0].appendChild(script);
    }
}


function init_form(){
    if (typeof (wcbox) !== 'undefined') {
        wcbox.init({ 
            accountID: 'De4096', wcboxID: '84eb742d4d0e4e1597294b34fbf978ce', tabTooltip:'Contacto', tabImageURL:'Contacto', tabColor:'#FF9900', language:'es', hide_tab: true
        });
    } 
}

/*loadScript_form("https://wcentrix.net/tabhelp/external/wcbox/wcbox.js");*/
loadScript_form("https://f.wcentrix.com/tabhelp/external/wcbox-dist/wcbox.min.js?v=1.3");
var fileref=document.createElement("link");
fileref.setAttribute("rel", "stylesheet");
fileref.setAttribute("type", "text/css");
/*fileref.setAttribute("href", "https://wcentrix.net/tabhelp/external/wcbox/wcbox.css");*/
fileref.setAttribute("href", "https://f.wcentrix.com/tabhelp/external/wcbox-dist/wcbox.min.css?v=1.2");
document.getElementsByTagName("head")[0].appendChild(fileref);