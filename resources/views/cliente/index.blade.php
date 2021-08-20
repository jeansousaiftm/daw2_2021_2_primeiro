<html>
	<body>
		<form method="POST" action="/cliente">
			
			@csrf
			<input type="hidden" id="id" name="id" value="{{ $cliente->id }}" />
			
			<h1>Cadastro</h1>
			<div>
				<label for="nome">Nome: </label>
				<input type="text" id="nome" name="nome" value="{{ $cliente->nome }}" />
			</div>
			<div>
				<label for="cpf">CPF: </label>
				<input type="text" id="cpf" name="cpf" value="{{ $cliente->cpf }}" />
			</div>
			<div>
				<label for="email">E-mail: </label>
				<input type="email" id="email" name="email" value="{{ $cliente->email }}" />
			</div>
			<div>
				<label for="telefone">Telefone: </label>
				<input type="text" id="telefone" name="telefone" value="{{ $cliente->telefone }}" />
			</div>
			<div>
				<label for="data_nascimento">Data Nascimento: </label>
				<input type="date" id="data_nascimento" name="data_nascimento" value="{{ $cliente->data_nascimento }}" />
			</div>
			<div>
				<button type="submit">Salvar</button>
				<a href="/cliente">Novo</a>
			</div>
		</form>
		
		<div>
			<h1>Listagem</h1>
			
			<table border="1">
				<thead>
					<tr>
						<th>Nome</th>
						<th>E-mail</th>
						<th>Editar</th>
						<th>Excluir</th>
					</tr>
				</thead>
				<tbody>
					@foreach($clientes as $cliente)
						<tr>
							<td>{{ $cliente->nome }}</td>
							<td>{{ $cliente->email }}</td>
							<td>
								<a href="/cliente/{{ $cliente->id }}/edit">Editar</a>
							</td>
							<td>
								<form action="/cliente/{{ $cliente->id }}" method="POST">
									@csrf
									<input type="hidden" name="_method" value="DELETE" />
									<button type="submit">Excluir</button>
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>	
			
		</div>
	</body>
</html>