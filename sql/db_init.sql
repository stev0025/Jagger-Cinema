/*
Run this file to intialize database
*/

-- Database: f34ee
-- Tables: products, inventory

-- Drop tables if exists
use f34ee;
DROP TABLE IF EXISTS movies;
DROP TABLE IF EXISTS customers;
DROP TABLE IF EXISTS orders;
DROP TABLE IF EXISTS availability;

-- Initialize products table

CREATE TABLE movies (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `pict` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `detail1` text NOT NULL,
  `detail2` text NOT NULL,
  PRIMARY KEY (id)
);

-- Initialize customers table

CREATE TABLE customers (
  `id` int(10) NOT NULL  AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `salutation` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phonenumber` int(20) NOT NULL,
  PRIMARY KEY (id)
);

-- Initialize orders table

CREATE TABLE orders (
  `id` int(10) NOT NULL  AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `seat` int(5) NOT NULL,
  PRIMARY KEY (id)
);

-- Initialize customers table

CREATE TABLE availability (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `dayofweek` varchar(50) NOT NULL,
  `timing` varchar(100) NOT NULL,
  `seatcode` int(6) NOT NULL,
  `bookingstatus` varchar(50) NOT NULL,
  PRIMARY KEY (id)
);