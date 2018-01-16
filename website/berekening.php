<?
echo ord(substr(md5('password'),5,1)) * ord(substr(md5('password'),10,1)) * substr(md5('password'), 3, 1) - (ord('F')*100+ord('K'));
?>

<!-- Error executing SELECT name FROM thugs WHERE id = ../../../../../: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near './../../../../' at line 1 -->