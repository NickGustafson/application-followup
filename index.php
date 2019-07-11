<?php
/*
	List of minor "errors"
	===========================================================================================================

	1. added static keyword to class variable
	2. removed empty line before DOCTYPE declaration
	3. changed initial loop value to 0
	4. changed loop condition value to 10
	5. switched "+" before $lipsum to "." (php concatenation operator)
	6. switched "+" after $lipsum to "."
	7. changed form method from "GET" to "POST"
	8. changed from action from 'REQUEST_URI' to 'PHP_SELF' (prevent passing any unnecessary querystring values)
	9. changed input type to email type (use built-in validation where available)
	10. changed ->first_name to ['first_name'] (array element, not object property)
	11. changed ->last_name to ['last_name'] (array element, not object property)
	12. changed ->email to ['email'] (array element, not object property)
*/
class Interview
{
	
	public static $title = 'Interview test';
}
$lipsum = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus incidunt, quasi aliquid, quod officia commodi magni eum? Provident, sed necessitatibus perferendis nisi illum quos, incidunt sit tempora quasi, pariatur natus.';
$people = array(
	array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
	array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
	array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
	array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
	array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
);
$person = $_POST['person'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Interview test</title>
	<style>
		body {font: normal 14px/1.5 sans-serif;}
	</style>
</head>
<body>

	<h1><?=Interview::$title;?></h1>

	<?php
	// Print 10 times
	for ($i=0; $i<10; $i++) {
		echo '<p>'.$lipsum.'</p>';
	}
	?>


	<hr>

	<form method="post" action="<?=$_SERVER['PHP_SELF'];?>">
		<p><label for="firstName">First name</label> <input type="text" name="person[first_name]" id="firstName"></p>
		<p><label for="lastName">Last name</label> <input type="text" name="person[last_name]" id="lastName"></p>
		<p><label for="email">Email</label> <input type="email" name="person[email]" id="email"></p>
		<p><input type="submit" value="Submit" /></p>
	</form>

	<?php if ($person): ?>
		<p><strong>Person</strong> <?=$person['first_name'];?>, <?=$person['last_name'];?>, <?=$person['email'];?></p>
	<?php endif; ?>


	<hr>


	<table>
		<thead>
			<tr>
				<th>First name</th>
				<th>Last name</th>
				<th>Email</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($people as $person): ?>
				<tr>
					<td><?=$person['first_name'];?></td>
					<td><?=$person['last_name'];?></td>
					<td><?=$person['email'];?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

</body>
</html>
