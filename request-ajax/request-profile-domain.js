var getHttpRequest = function(){
    var httpRequest = false;

    if(window.XMLHttpRequest){
        httpRequest = new XMLHttpRequest();
        if(httpRequest.overrideMimeType){
            httpRequest.overrideMimeType('text/xml');
        }
    }
    else if(window.ActiveXObject){
        try{
            httpRequest = new ActiveXObject("Msxml2.XMLHTTP");
        }
        catch(e){
            try{
                httpRequest = new ActiveXObject("Microsoft.XMLHTTP");
            }
            catch(e){}
        }
    }
    if(!httpRequest){
        alert('Impossible de créer une instance XMLHTTP');
        return false;
    }
    else{
        return httpRequest;
    }
}

var httpRequest = getHttpRequest();

httpRequest.open('GET', );
httpRequest.send();