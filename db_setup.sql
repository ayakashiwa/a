CREATE DATABASE IF NOT EXISTS admire_db;

CREATE USER IF NOT EXISTS admire_admin
    IDENTIFIED BY '6112';

GRANT ALL ON admire_db.* TO admire_admin;

