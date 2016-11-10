$(document).ready(function(){
    getLatestMessages();
});

function getLatestMessages(){
    $.getJSON("http://192.168.25.96:8888/messages", function(json) {
        refreshChat(json);
        setTimeout(getLatestMessages,10000);
    });
}

function refreshChat(data) {
    if(typeof data != "undefined" && data.length > 0) {
        for(var i = 0; i < data.length; i++) {
            if (data[i].username == $.cookie("username")){
                $("#messagepane").append("<div class='message local'><div class='message-left'><p class='username'>" + data[i].username + "</p> <p class='timestamp'>" + data[i].timestamp + "</p></div><div class='message-right'><p class='message-content'>" + data[i].content + "</div></div>");

            } else {
                $("#messagepane").append("<div class='message'><div class='message-left'><p class='username'>" + data[i].username + "</p><p class='timestamp'>" + data[i].timestamp + "</p></div><div class='message-right'><p class='message-content'>" + data[i].content + "</div></div>");
                console.log(data[i].username + " - " + data[i].content + " - " + data[i].timestamp);
            }
        }
    }
}

