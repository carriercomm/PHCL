<?php

require '/Core/System.php';

$Test = new Penguin(‘USERNAME’, ‘PASSWORD’, ’SERVER’);

while ($Test->LoginStat = True)
{
	$Test->joinRoom(400);


	break;
}

$Test->disconnect();


?>