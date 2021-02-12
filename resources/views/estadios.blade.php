<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

	@foreach (Auth::user()->estadios as $estadio)

	<div class="p-6 bg-white border-b border-gray-200">
		
		Nome: {{ $estadio->Nome }}
		<br>
		Jogo: {{ $estadio->Jogo }}
		<br>
		Local: {{ $estadio->Local }}
		<br>
		Descrição: {{ $estadio->Descricao }}

	</div>
	@endforeach
</div>