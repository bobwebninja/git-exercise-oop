<?php
$users = include __DIR__.'/../model/users.php';

function cmpByName($a, $b)
{
    return strcmp($a['name'], $b['name']);
}
function cmpByEmail($a, $b)
{
    return strcmp($a['email'], $b['email']);
}
function cmpByUsername($a, $b)
{
    return strcmp($a['username'], $b['username']);
}

if (isset($_GET['byName'])) {
    usort($users, "cmpByName"); //error
} else if (isset($_GET['byEmail'])) {
    usort($users, "cmpByEmail");
} else if (isset($_GET['byUsername'])) {
    usort($users, "cmpByUsername"); //error
}

/*
if (isset($_GET['search']) && !empty($_GET['search'])) {
    foreach ($users as $key => $user) {
		//error
        if (!strstr($user['username'], $_GET['search'])) {
        unset($users[$key]);
    	}
	}
} //error
*/

//if finished replace this by: array_map and array_filter
//only one opening curly brace is allowed
if (isset($_GET['search']) && !empty($_GET['search']))
	$users = array_filter(
		array_map(
			function($a)
				{
					if(strstr($a['username'], $_GET['search']))
						return $a;
				}, $users));


?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>picture</th>
			<th>name</th>
			<th>email</th>
			<th>username</th>
			<th>phone</th>
			<th>address</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($users as $user) { ?>
		<tr>
			<td><img alt="thumbnail" src="<?php echo $user['picture'];?>"></td>
			<td><?php echo $user['name'];?></td>
			<td><?php echo $user['email'];?></td>
			<td><?php echo $user['username'];?></td>
			<td><?php echo $user['phone'];?></td>
			<td><?php echo $user['address'];?></td>
		</tr>
		<?php }?>
	</tbody>
</table>
