var mysql = require('mysql2');
var con = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: 'root',
  database: 'Shopee'
});
con.connect((err) => {
  if (err) throw err;
  console.log('connected to database')
})
module.exports = con;