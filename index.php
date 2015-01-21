<?php include "header.php"; ?>
		<section>
			<form action="do-teste.php" method="POST">
				<input type="checkbox" name="teste[]" value="1">1
				<input type="checkbox" name="teste[]" value="2">2
				<input type="checkbox" name="teste[]" value="3">3
				<input type="checkbox" name="teste[]" value="4">4
				<input type="submit" value="Enviar">
			</form>
		</section>
<?php include "footer.php"; ?>