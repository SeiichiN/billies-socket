// billiesSocket.connect.js
//
// var socket = io.connect('http://localhost:3000');
var socket = io.connect('http://billieschatcorner.herokuapp.com/');

socket.on('message', function ( count ) {
	jQuery('.billiesSocket-body').html(count);
});
