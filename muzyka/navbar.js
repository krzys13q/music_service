function check(){
    var path = window.location.pathname;
    var page = path.split("/").pop();
    var home = document.getElementById("home");
    var search = document.getElementById("search");
    var playlist = document.getElementById("playlist");
    var account = document.getElementById("account");
    var addmusic = document.getElementById("add-music");
    if(page=="playlist.php"){
        playlist.style.color = "aqua";
        
    }else if(page=="search.php"){
        search.style.color = "aqua";
    }else if(page=="start.php"){
        home.style.color = "aqua";
    }else if(page=="add-music.php"){
        addmusic.style.color = "aqua";
    }else if(page=="user.php"){
        account.style.color = "aqua";
    }

    }