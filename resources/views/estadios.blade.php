<div x-data="{ add_modal: false }">
	<div class="p-6 bg-white overflow-hidden">
		<div class="border-b border-gray-200">
			<table class="w-full divide-y divide-solid divide-gray-200">
				<tbody class="divide-y divide-gray-200">

					@foreach ($user->estadios as $estadio)

					Estádio: {{ $estadio->Nome }}
					<br>
					Jogo: {{ $estadio->Jogo }}
					<br>
					Local: {{ $estadio->Local }}
					<br>
					Descrição: {{ $estadio->Descricao }}
					<br>

					<div class="grid grid-cols text-center">

						<a class="bg-red 200 rounded-lg hover:bg-red-300" href="{{route('rm-estadio', $estadio)}}">Excluir</a>

					</div>
					<br>

					@endforeach
					<tr class="p-2 m-0.5 bg-green-400">
						<td colspan="4" class="">
							<a class="text-center block w-full font-semibold hover:text-green-700 m-2 py-1 cursor-pointer" @click="add_modal = true">
								Adicionar
							</a>

							<div class="fixed z-10 inset-0 overflow-y-auto" style="display:none" x-show="add_modal">
								<div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <!--
          Background overlay, show/hide based on modal state.
          Entering: "ease-out duration-300"
            From: "opacity-0"
            To: "opacity-100"
          Leaving: "ease-in duration-200"
            From: "opacity-100"
            To: "opacity-0"
        -->
        <div class="fixed inset-0 transition-opacity" aria-hidden="true" @click="add_modal = false">
        	<div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
        <!--
          Modal panel, show/hide based on modal state.
          Entering: "ease-out duration-300"
            From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            To: "opacity-100 translate-y-0 sm:scale-100"
          Leaving: "ease-in duration-200"
            From: "opacity-100 translate-y-0 sm:scale-100"
            To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        -->
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
        	<div class="p-3">
        		<h1>Adicione o estádio que visitou</h1>
        		<form action="{{ route('add-estadio') }}" method="POST">
        			@csrf

        			<div>
        				<x-label for="Nome" :value="__('Estádio')" />

        				<x-input id="Nome" class="block mt-1 w-full" type="text" name="Nome" :value="old('Nome')" required />
        			</div>
        			<div>
        				<x-label for="Jogo" :value="__('Jogo')" />

        				<x-input id="Jogo" class="block mt-1 w-full" type="text" name="Jogo" :value="old('Jogo')" required />
        			</div>
        			<div>
        				<x-label for="Local" :value="__('Local')" />

        				<x-input id="Local" class="block mt-1 w-full" type="text" name="Local" :value="old('Local')" required />
        			</div>
        			<div>
        				<x-label for="Descricao" :value="__('Descricao')" />

        				<x-input id="Descricao" class="block mt-1 w-full" type="text" name="Descricao" :value="old('Descricao')" required />
        			</div>
        			<div class="flex items-center justify-end mt-4">
        				<a class="underline text-sm text-red-600 hover:text-red-900" @click="add_modal = false">
        					{{ __('Cancelar') }}
        				</a>
        				<x-button class="ml-4">
        					{{ __('Adicionar') }}
        				</x-button>
        			</div>
        		</form>
        	</div>
        </div>
    </div>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>