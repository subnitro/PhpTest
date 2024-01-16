<?php
include 'header.php';
include 'content.php';
?>

<form methode='GET' action='save.php'>
<input type='name' name='userName'/>
<input type='password' name='password'/>
<button>Login</button>

<select name='region'>
    <option value='India'>India</option>
    <option value='UAE'>UAE</option>
    <option value='America'>America</option>
</select>

</form>

<?php

include 'footer.php';
?>