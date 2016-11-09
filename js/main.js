$(document).ready(function(){
    getLatestMessages();
});

function getLatestMessages(){
    var mockData = '{"messages":[{"username":"bob", "content":"hello", "timestamp":"09/11/2016 10:38"},{"username": "fred", "content":"hi", "timestamp":"09/11/2016 10:38"},{"username":"jim", "content":"hey", "timestamp":"09/11/2016 10:38"}]}';

    var json = $.parseJSON(mockData);

    refreshChat(json);

    /**$.getJSON("https://jsonplaceholder.typicode.com/comments", function(json) {
        refreshChat(json);
        setTimeout(getLatestMessages,10000);
    });**/
}

function refreshChat(data) {
    if(typeof data == "object") {
        if (!(typeof data.messages == "undefined")) {
            for(var i = 0; i < data.messages.length; i++) {

                $("#messagepane").append("<div class='message-left'>" + data.messages[i].username + "</div> <div class='message-right'> <p class='message-content'>" + data.messages[i].content + " </div>");
                console.log(data.messages[i].username + " - " + data.messages[i].content + " - " + data.messages[i].timestamp);
            }
        }
    }
}