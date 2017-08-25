<?php
if(isset($_GET['faux'])) echo "<h3>Login ou mdp incorrect</h3>";
?>
<form method="POST" name='connexion' action="">
<ul>
    <li style='display:inline;'><input type="text" name='login' /></li>
    <li style='display:inline;'><input type="password" name='pwd' /></li>
    <li style='display:inline;'><input type="submit" value='Connexion' /></li>
</ul>
</form>
