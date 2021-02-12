<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

	@foreach (Auth::user()->estadios as $estadio)

	<div class="p-6 bg-white border-b border-gray-200">
		
		Estádio: {{ $estadio->Nome }}
		<br>
		Jogo: {{ $estadio->Jogo }}
		<br>
		Local: {{ $estadio->Local }}
		<br>
		Descrição: {{ $estadio->Descricao }}

		<div class="m-0.5 border rounded-lg">

              <div class="grid grid-cols text-center">

                <a class="bg-red 200 rounded-lg hover:bg-red-300" href="{{route('rm-estadio', $estadio)}}">Excluir</a>

              </div>

            </div>
	</div>
	@endforeach
</div>