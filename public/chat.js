let userId;
let messagesDiv;
$(document).ready(function () {
    onStart()
});


function onStart() {
    const urlParams = new URLSearchParams(window.location.search);
    userId = Number(urlParams.get('userId'));
    messagesDiv = $("#messages");
    $.get('messages', function (response) {
        response.forEach(onMessage)
        openGameEventSource()
    })
}


function onMessage(message) {
    let name = message.user.id === userId ? "You" : message.user.name;
    messagesDiv.append(`<span><b>${name}</b>:${message.message}</span><br/>`)
    messagesDiv.scrollTop(messagesDiv[0].scrollHeight);
}

function sendMessage() {
    var message = $("#message_text").val()
    $.post('messages', {userId: userId, message: message});
}

function openGameEventSource() {
    var source = new EventSource(`/messages/sse`);
    source.onmessage = function (response) {
        onMessage(JSON.parse(response.data))
    }
}


