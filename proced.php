<?php include "header.php"; ?>

<h1>Novo procedimento</h1>

<form action="do_proced.php" method="POST" id="proced">
	<fieldset>
		<label>Procedimento</label>
		<select name="procedimento">
			<option></option>
				<?php
				$sqlProced = mysql_query("SELECT * FROM procedimentos");
				while ($linha = mysql_fetch_array($sqlProced)) {
					$proced = $linha['procedimento'];
					echo "<option>".$proced."</option>";
				}
				?>
		</select><!--procedimento--><br />

		<label>Profissionais</label>
				<?php
				$sqlProf = mysql_query("SELECT * FROM profissionais");
				while ($linha = mysql_fetch_array($sqlProf)) {
					$profissional = $linha['nome'];
					echo "<input type='checkbox' name='profissionais[]' value='".$profissional."'>".$profissional;
					echo "<br />";
					}
				?>
			<br />

		<label>Outros profissionais</label>
		<textarea name="outros"></textarea><br />

		<label>Data</label>
		<input type="text" name="dp_d"> / <input type="text" name="dp_m"> / <input type="text" name="dp_a"><br />

		<label>Pacientes</label>
		<select name="pacientes">
			<option></option>
				<?php
				$sqlPac = mysql_query("SELECT * FROM pacientes ORDER BY nome");
				while ($linha = mysql_fetch_array($sqlPac)) {
					$nome = $linha['nome'];
					$id = $linha['id'];
					echo "<option>".$nome."-".$id."</option>";
				}
				?>
		</select><!--pacientes--><br />
	</fieldset>

	<fieldset class="buttons">
		<input type="submit" class="button" value="Enviar">&nbsp;<input type="reset" class="button" value="Limpar">
	</fieldset><!--buttons-->
</form><!--proced-->

<?php include "footer.php"; ?>