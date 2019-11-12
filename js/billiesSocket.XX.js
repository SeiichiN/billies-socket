// billiesSocket.XX.js
//
var socket = io.connect('http://localhost:3000');

socket.on('message', function ( count ) {
	jQuery('.billiesSocket-body').html(count);
});
