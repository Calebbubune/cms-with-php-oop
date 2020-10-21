<?php 

$sql= "
    INSERT INTO users VALUES
    (NULL, 'public', 'publicUser', 'public@example.com', SHA1('publicPass'), NULL),
    (NULL, 'author', 'authorUser', 'author@example.com', SHA1('authorPass'), NULL),
    (NULL, 'admin', 'adminUser', 'admin@example.com', SHA1('adminPass'), NULL);
";