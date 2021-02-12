<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

	@foreach (Auth::user()->perfis as $perfil)

	<div class="p-6 bg-white border-b border-gray-200 text-center">
		
		{{ $perfil->Time }}

	</div>
	@endforeach
</div>
