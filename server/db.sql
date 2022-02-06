DROP DATABASE IF EXISTS shopee;
CREATE DATABASE shopee;
USE shopee;
CREATE TABLE users (
  username VARCHAR(50) PRIMARY KEY,
  password VARCHAR(50) NOT NULL,
  type VARCHAR(10) NOT NULL);
CREATE TABLE products (
  name VARCHAR(50) PRIMARY KEY,
  description TEXT NOT NULL,
  price FLOAT NOT NULL,
  count SMALLINT NOT NULL,
  image LONGBLOB NOT NULL);
INSERT INTO users VALUES
  ('buyer', '123', 'buyer'),
  ('admin', '123', 'seller');