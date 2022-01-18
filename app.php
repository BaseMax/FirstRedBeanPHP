<?php
require "rb.php";
R::setup("mysql:host=localhost;dbname=rb", "root", "01");

// R::freeze(1);

// Insert
$user = R::dispense("user");
$user->username = "max";
$user->password = sha1("hey");
$user->status = 1;
$user->balance = 1200;
$id = R::store($user);
print "User ID: $id\n";

// Update
$user = R::load("user", 1);
$user->balance += 100;
R::store($user);

// Delete
$user = R::load("user", 1);
R::trash($user);

// Select All
$users = R::findAll("user");
$user = R::load("user", $users[0]->id);
$user->balance += 4;
R::store($user);
print_r($user);

// Get Rows
$users = R::getAll("SELECT * FROM user");
print_r($users);

// Get a Row
$user = R::getRow("SELECT * FROM user");
print_r($user);

// Get a Row
$user = R::getRow("SELECT * FROM user WHERE id = ?",[1]);
print_r($user);

// Get a Row
$user = R::getRow("SELECT * FROM user WHERE id = :id",["id" => 1]);
print_r($user);

// Delete
R::exec("DELETE FROM user WHERE id = ?", [2]);
