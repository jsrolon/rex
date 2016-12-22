function es() {
    if(location.pathname.startsWith("/test")) {
        var pathname = location.pathname.substring(5, location.pathname.lenght);
        if(pathname.startsWith("/en")) {//english
            var new_href = 'http://' + location.hostname + '/test/es' + pathname.substring(3, pathname.lenght);
            console.log(new_href);
            window.location.href = new_href;
        }
    }
    else {
        if(location.pathname.startsWith("/en")) {//english
            var new_href = 'http://' + location.hostname + '/es' + location.pathname.substring(3, location.pathname.lenght);
            console.log(new_href);
            window.location.href = new_href;
        }
    }
}

function en() {  
    var showPopup = true;

    if (!showPopup){
        if(location.pathname.startsWith("/test")) {
            var pathname = location.pathname.substring(5, location.pathname.lenght);
            if(!pathname.startsWith("/en")) {//english
                var new_href = 'http://' + location.hostname + '/test/en' + pathname;
                console.log(new_href);
                window.location.href = new_href;
            }
        }
        else {
            if(!location.pathname.startsWith("/en")) {//english
                var new_href = 'http://' + location.hostname + '/en' + location.pathname;
                console.log(new_href);
                window.location.href = new_href;
            }
        }
    }
}