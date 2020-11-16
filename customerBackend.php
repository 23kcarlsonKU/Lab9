 <?php
 $email =$_POST["name"];
 $password =$_POST["password"];
 $qSmall =$_POST["small"];
 $qMed =$_POST["med"];
 $qLarge =$_POST["large"];
 $shipping =$_POST["shipping"];
 $cSmall =10;
 $cMed=15;
 $cLarge=20;
 $tSmall=($cSmall * $qSmall);
 $tMed=($cMed * $qMed);
 $tLarge=($cLarge * $qLarge);
 $cShipping=0;
 $cost = $tSmall+$tMed+$tLarge;
 if($shipping == "overnight"){
	$cShipping=50;
	$cost = $cost + 50;
 }elseif($shipping == "threeday"){
	$cShipping =5;
	$cost = $cost + 5;
 }
 print "<link rel=\"stylesheet\" href=\"style.css\">";
 print "<h1>Welcome, $email!</h1>";
 print "<p>I don't know why I am telling you this, but your password is $password</p>";
 print "<table><tr><th></th><th>Quantity</th><th>Cost per Item</th><th>Subtotal</th></tr>";
 print "<tr><th>Small Box</th><td>$qSmall</td><td>\$$cSmall</td><td>\$$tSmall</td></tr>";
 print "<tr><th>Medium Box</th><td>$qMed</td><td>\$$cMed</td><td>\$$tMed</td></tr>";
 print "<tr><th>Large Box</th><td>$qLarge</td><td>\$$cLarge</td><td>\$$tLarge</td></tr>";
 print "<tr><th>Shipping</th><td colspan=\"2\">$shipping</td><td>\$$cShipping</td></tr>";
 print "<tr><th colspan=\"3\">Total Cost</th><th>\$$cost</th></tr></table>";
 ?>