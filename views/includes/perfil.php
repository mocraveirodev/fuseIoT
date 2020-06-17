<div class="caixa">
	<h2 class="titulo"><span class="case"><i class="ico user"></i>Meu perfil</span> Editar e alterar dados do perfil</h2>
</div>
<div class="base-home">
	<div class="rows base-perfil py-3">
		<div class="col-12">
			<div class="caixa">
				<form action="/?alterasenha" method="post" enctype="multipart/form-data">
					<fieldset class="mt-1">
						<legend>Dados do cadastro</legend>
						<div class="rows">
							<div class="col-6">
								<label>Foto perfil</label>
								<div class="thumb">
									<img src="views/img/foto01.png">
									<input type="file" name="" value="">
								</div>
								<small class="text-center d-block">Tamanho máximo: 220px altura x 220px largura</small>
							</div>
							
							<div class="col-6">
								<div class="py-1">
									<label>Nome</label>
									<input type="text" placeholder="Nome" value="<?= $_SESSION['usuario']->nome." ".$_SESSION['usuario']->sobrenome ?>">
								</div>
								<div class="py-1">
									<label>Email</label>
									<input type="text" placeholder="Email" value="<?= $_SESSION['usuario']->email ?>">
								</div>
								<div class="py-1">
									<label>Senha</label>
									<input type="password" placeholder="Senha">
								</div>
							</div>
						</div>
					</fieldset>
					
					<fieldset>
						<legend>Dados pessoais</legend>
						<div class="rows">
							<div class="col-3 mb-3">
								<label>CPF</label>
								<input type="text" placeholder="CPF" value="<?= $_SESSION['usuario']->cpf ?>">
							</div>
							<div class="col-3 mb-3">
								<label>Data de nascimento</label>
								<input type="text" placeholder="Data" value="<?= $_SESSION['usuario']->data_nascimento ?>">
							</div>
							<div class="col-3 mb-3">
								<label>Telefone</label>
								<input type="text" placeholder="Telefone" value="<?= $_SESSION['usuario']->telefone ?>">
							</div>
							<div class="col-3 mb-3">
								<label>Profissão</label>
								<input type="text" placeholder="Profissão"value="<?= $_SESSION['usuario']->profissao ?>">
							</div>
						</div>
					</fieldset>
					
					<fieldset>
						<legend>Endereço</legend>
						<div class="rows">
							<div class="col-4 mb-3">
								<label>Bairro</label>
								<input type="text" placeholder="Bairro" value="<?= $_SESSION['usuario']->bairro ?>">
							</div>
							<div class="col-4 mb-3">
								<label>Cidade</label>
								<input type="text" placeholder="Cidade" value="<?= $_SESSION['usuario']->cidade ?>">
							</div>
							<div class="col-4 mb-3">
								<label>Endereço</label>
								<input type="text" placeholder="Endereço" value="<?= $_SESSION['usuario']->endereco ?>">
							</div>
						</div>
						<div class="rows">	
							<div class="col-3 mb-3">
								<label>Estado</label>
								<input type="text" placeholder="Estado" value="<?= $_SESSION['usuario']->estado ?>">
							</div>	
							<div class="col-3 mb-3">
								<label>CEP</label>
								<input type="text" placeholder="CEP" value="<?= $_SESSION['usuario']->cep ?>">
							</div>
							<div class="col-4 mb-3">
								<label>Complemento</label>
								<input type="text" placeholder="Complemento" value="<?= $_SESSION['usuario']->complemento ?>">
							</div>
							<div class="col-2 mb-3">
								<label>Número</label>
								<input type="text" placeholder="Número" value="<?= $_SESSION['usuario']->numero ?>">
							</div>
						</div>
					</fieldset>					
					<input type="submit" value="Atualizar perfil" class="btn d-table m-auto px-5 width-auto">
				</form>
			</div>
		</div>
	</div>
</div>