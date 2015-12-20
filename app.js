var express = require('express');
var app = express();
var http = require('http').Server(app);

app.use('/assets', express.static('assets'));
app.use('/templates', express.static('templates'));

app.get('/', function(req, res){
  res.sendFile(__dirname + '/index.html');
});

http.listen(3000, function(){
  console.log('listening on 127.0.0.1:3000');
});
