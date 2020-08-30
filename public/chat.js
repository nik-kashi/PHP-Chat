let userId;
let messagesDiv;
$(document).ready(function () {
    onStart()
});


function onStart() {
    const urlParams = new URLSearchParams(window.location.search);
    userId = urlParams.get('userId');
    messagesDiv = $("#messages");
    $.get('messages', function (response){
        response.forEach(onMessage)
        openGameEventSource()
    })
}


function onMessage(message) {
    messagesDiv.append(`<span>${message.userId}:${message.message}</span><br/>`)
    messagesDiv.scrollTop(messagesDiv[0].scrollHeight);
}

function sendMessage() {
    var message = $("#message_textarea").val()
    $.post('messages', {userId: userId, message: message});
}

function openGameEventSource() {
    var source = new EventSource(`/messages/sse`);
    source.onmessage = function (response) {
        onMessage(JSON.parse(response.data))
    }
}


