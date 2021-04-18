<div class="row botao-novo">
	<div class="col-md-12">
		<button data-toggle="modal" data-target="#modal" type="button" class="btn btn-secondary">Novo Paciente</button>
	</div>
</div>
<div class="row mt-4">
	<div class="col-md-6 col-sm-12">
		<div class="float-left">
			<label class="registro" for="exampleFormControlSelect1">Registros</label>
			<select class="form-control-sm" id="exampleFormControlSelect1">
				<option>10</option>
				<option>20</option>
				<option>50</option>
				<option>4</option>
				<option>5</option>
			</select>

		</div>

	</div>
	
	<div class="col-md-6 col-sm-12">

		<div class="float-rithg mr-4">
			<form class="form-inline my-2 my-lg-0">
				
				<input class="form-control me-2" type="search" placeholder="Nome ou CPF" aria-label="Search" name="txtbuscar">
				<button class="btn btn-outline-sucondary" type="submit" name="<?php ?><?php echo $item4; ?>"><Buscar</button>
			</form>
		</form>

	</div>

</div>


<table class="table table-sm mt-5">
	<thead class="thead-dark">
		<tr>


			<th scope="col">Nome</th>
			<th scope="col">Usuário</th>
			<th scope="col">Senha</th>
			<th scope="col">E-mail</th>
			<th scope="col">Ações</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$res = $pdo->query("SELECT * from usuarios 0rder by nome asc");
		
		$dados = $res->fetchAll(PDO::FETCH_ASSOC);
		for($i=0;  $i < count($dados); $i++) {
			foreach ($dados[$i] as $key => $value) {
		$nome = $dados[$i]['nome'];
		$Paciente = $dados[$i]['Paciente'];
		$senha = $dados[$i]['senha'];
		
		$linhas = count($dados);


		?>

		<tr>

			<td><?php echo $nome  ?></td>
			<td><?php echo $paciente  ?></td>
			<td><?php echo $senha  ?></td>
			
			<td>
				<a href="#"><i class="fas fa-edit text-info"></i></a>
				<a href="#"><i class="far fa-trash-alt text-danger"></i></a>
			</td>
		</tr>
		<?php } ?>

	</tbody>
</table>
<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Cadastros de Médicos</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">



				<form>
					<div class="form-group">
						<label for="exampleFormControlInput1">Nome</label>
						<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Insira um Nome" name="name">
					</div>
					
					<div class="form-group">
						<label for="exampleFormControlSelect1">Especialidade</label>
						<select class="form-control" id="" name="Especialidade">
							<option>1</option>
						</select>
					</div>
					<div class="form-group">
						<label for="exampleFormControlInput1">CRM</label>
						<input type="text" class="form-control" id="crm" name="crm" placeholder="Insira o CRM">
					</div>
					<div class="form-group">
						<label for="exampleFormControlInput1">CPF</label>
						<input type="text" class="form-control" id="cpf" name="cpf" placeholder="Insira o CPF">
					</div>
					<div class="form-group">
						<label for="exampleFormControlInput1">Telefone</label>
						<input type="text" class="form-control" id="telefone" name="telefone" placeholder="Insira o Telefone">
					</div>
					<label for="exampleFormControlInput1">Email</label>
					<input type="email" class="form-control" id="" placeholder="Insira o E-mail">
				</div>

			</form>

		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
			<button type="button" class="btn btn-primary">Salvar/button>
			</div>
		</div>
	</div>
</div>