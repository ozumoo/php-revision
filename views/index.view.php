<?php require 'views/partials/head.php'; ?> 

<?php foreach ($users as $user) : ?>
	<li><?= $user->name; ?> </li>
<?php endforeach; ?>

<h1>Submit Your Name</h1>

<form action="names" method="POST">
	<input name="name">
	<button type="submit">Submit</button>
</form>
<?php require 'views/partials/footer.php'; ?> 

