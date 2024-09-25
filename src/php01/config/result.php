<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
print "私の名前は、". $name;
echo "<br />";
$set = htmlspecialchars($_POST['set'], ENT_QUOTES);
print "ご希望の商品は、" . $set;
echo "<br />";
$amount = htmlspecialchars($_POST['amount'], ENT_QUOTES);
print "ご注文数は、" . $amount;