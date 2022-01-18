# First RedBean PHP

Here is a quick tour to show how **RedBeanPHP** as a very old **ORM** PHP-based library can give you a **non-SQL** experience in developing.

**This automatically generates the database, tables and columns... on-the-fly. It infers relations based on naming conventions.**

## What is RedBeanPHP?

> Save tens of thousands of dollars* worth of development time by boosting your productivity with the most powerful, zero config object relational mapper the industry has ever known.
> Powering enterprise web applications since 2009 and still running strong.

## Case Study of RedBeanPHP

During my time as a developer I have made some interesting observations regarding the use of RedBeanPHP. This report describes my findings when developing a very similar e-commerce solution for two companies. Company A uses Java/Hibernate and company B uses PHP/RedBeanPHP. In fact, company A recommended to use the same tooling for B, instead I opted for RedBeanPHP. In addition I added a 3rd company using Laravel/Eloquent. Names of the
companies cannot be revealed due to NDAs.

Results:

|            | Company A | Company B | Company C |
| ---------- | --------- | --------- | --------- |
| Stack      |  Java/Hibernate | PHP/RedBeanPHP | PHP/Laravel/Eloq |
| Application | e-Commerce | e-Commerce | Portal |
| Complexity | Medium | Medium | Low |
| Developers | 10 | 2 | 5 |
| Development time | 3 months | 1 month | 6 months |
| Est. Total Cost | 150k | 7k | 70k |
| Lifetime | 1-2 years | Still running (4+ years) | Unknown |

### Notes:

Reasons from lead developers for not choosing **RedBeanPHP**:

– **Company A:** “PHP is not a serious platform”, apparently, being ‘serious’ is worth 100k (!),
because the projects of A and B were very similar the lead developer recommended Company B to
use the same tools, however Company B refused and selected RedBeanPHP instead.

– **Company C:** “RedBeanPHP is not an official part of Laravel, sticking with industry standards is
important”, in this case ‘Industry Standards’ was worth 63k (!).

### Preview Example

```php
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
?>
```

### Fluid Schema

During development, RedBeanPHP will adapt the database schema to fit your needs, giving you the NoSQL experience. When deploying to production servers, you can freeze the schema and benefit from performance gains and referential integrity.
RedBeanPHP offers the best of both worlds!

### Powerful

RedBeanPHP features: auto-discovery of models, fast trees, deep copying and smart import.
Write less, do more!

### Compatible

RedBeanPHP strives to support all ALL Free, Open Source databases.

Currently, RedBeanPHP supports: MySQL, MariaDB, SQLite, PostgreSQL, CUBRID and Firebird/Interbase***. RedBeanPHP supports PHP version HHVM, 5.2*, 5.3.0-5.3.2**, 5.3.3, 5.4, 5.5, 5.6, 6.0*, 7.0, 7.1, 7.2, 7.3, 7.4, 8.0 and 8.1. We take backward compatibility very serious! RedBeanPHP has a track record of 16 years of PHP language level compatibility without a single breaking change! You can trust RedBeanPHP.

```
*=partial (according to community)
**=requires patch
***=experimental
```
