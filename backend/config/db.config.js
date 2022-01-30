module.exports.createDB = () => {
  var mysql = require('mysql2');
  var con = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: 'root'
  });
  con.connect((err) => {
    if (err) throw err;
    con.query('DROP DATABASE IF EXISTS Shopee', (err, result) => { if (err) throw err; });
    con.query('CREATE DATABASE Shopee', (err, result) => { if (err) throw err; });
    con.query('USE Shopee', (err, result) => {
      if (err) throw err;
      con.query(
        'CREATE TABLE users (' +
        'username VARCHAR(50) PRIMARY KEY, ' +
        'password VARCHAR(50) NOT NULL, ' +
        'type VARCHAR(10) NOT NULL)',
        (err, result) => { if (err) throw err; }
      );
      con.query(
        'INSERT INTO users VALUES' +
        '("adminbuyer", "123", "buyer"), ' +
        '("adminseller", "123", "seller")',
        (err, result) => { if (err) throw err; }
      );
      con.query(
        'CREATE TABLE product (' +
        'name VARCHAR(50) PRIMARY KEY, ' +
        'description TEXT NOT NULL, ' +
        'price FLOAT NOT NULL, ' +
        'count SMALLINT NOT NULL, ' +
        'image BLOB)',
        (err, result) => { if (err) throw err; }
      );
      con.query(
        'INSERT INTO product VALUES' +
        '("Item Name", "Item Description", 10.0, 5, NULL)',
        (err, result) => { if (err) throw err; }
      );
    });
  });
}