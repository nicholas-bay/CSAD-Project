// configuration for database
var config = require('./config');
var db = {
  host: config.host,
  user: config.user,
  password: config.password,
  database: config.database,
};
var { createDB } = require('./db');
createDB(db.host, db.user, db.password, db.database);

var http = require('http'); // creating an API using http
var url = require('url'); // using url to extract the route (e.g. /, /api/user)
var querystring = require('querystring'); // this will contain the body of the POST request
var fs = require('fs'); // file handling to read the index.html served for / route
var port = 8000; // port the server with listen on
var server = http.createServer(); // create the server

// recreate database connection
var mysql = require('mysql');
var con = mysql.createConnection({
  host: db.host,
  user: db.user,
  password: db.password,
  database: db.database,
  multipleStatements: true
});
// And make the connection - re-used later
con.connect((err) => {
  if (err) throw err;
  console.log('Database (shopee): Connected!');
});
// watch for Ctrl-C and then close database connection!
process.on('SIGINT', () => {
  con.end((err) => {
    if (err) return console.log('error:' + err.message);
    console.log('\nDatabase (shopee): Disconnected!');
    process.exit();
  });
});
// Set up the HTTP server and listen on port 8000
server.listen(port, () => {
  console.log('CSAD Project (HTTP) API server running on port: ' + port);
});