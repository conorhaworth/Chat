var prevTimestamp;
$(document).ready(function(){
    prevTimestamp = $.now;
    getLatestMessages();
});

function getLatestMessages(){
    $.getJSON("http://192.168.24.173/messages", function(json) {
        refreshChat(json);
        setTimeout(getLatestMessages,1000);
    });
}

function refreshChat(data) {
    if(typeof data != "undefined" && data.length > 0) {
        for(var i = 0; i < data.length; i++) {
            if (data[i].timestamp > prevTimestamp) {
                if (data[i].username == $.cookie("username")) {
                    $("#messagepane").append("<div class='message local'><div class='message-left'><p class='username'>" + data[i].username + "</p> <p class='timestamp'>" + data[i].timestamp + "</p></div><div class='message-right'><p class='message-content'>" + data[i].content + "</div></div>");

                } else {
                    $("#messagepane").append("<div class='message'><div class='message-left'><p class='username'>" + data[i].username + "</p><p class='timestamp'>" + data[i].timestamp + "</p></div><div class='message-right'><p class='message-content'>" + data[i].content + "</div></div>");
                    console.log(data[i].username + " - " + data[i].content + " - " + data[i].timestamp);
                }
                prevTimestamp = data[i].timestamp;
            }
        }
    }
}

