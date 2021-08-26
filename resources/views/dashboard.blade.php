<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Página Inicial') }}
        </h2>
    </x-slot>

    <div class="py-12 px-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h3 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Filtros de Pesquisa') }}
            </h3>


            <form method="GET" action="">
                <div class="flex-box justify-center mt-4 mt-2">
                    <div class="mw-100 inline-flex items-center mr-4">
                        <x-label for="type" :value="__('Tipo')" />

                        <x-input id="type" class="block mt-1 ml-3 w-full" type="text" name="type" :value=" request()->has('type') ? request()->get('type') : '' " autofocus />
                    </div>
                    <div class=" inline-flex items-center mr-4 mt-2">
                        <x-label for="brand" :value="__('Marca')" />

                        <x-input id="brand" class="block mt-1 ml-3 w-full" type="text" name="brand" :value=" request()->has('brand') ? request()->get('brand') : '' "  autofocus />
                    </div>

                    <div class=" inline-flex items-center mr-4 mt-2">
                        <x-label for="model" :value="__('Modelo')" />

                        <x-input id="model" class="block mt-1 ml-3 w-full" type="text" name="model" :value=" request()->has('model') ? request()->get('model') : '' "  autofocus />
                    </div>

                    <div class=" inline-flex items-center mt-2">
                        <x-label for="version" :value="__('Versão')" />

                        <x-input id="version" class="block mt-1 ml-3 w-full" type="text" name="version" :value="request()->has('version') ? request()->get('version') : ''"  autofocus />
                    </div>
                </div>


                <div class="flex items-center justify-end mt-4">

                    <x-button class="ml-3">
                        {{ __('Filtrar') }}
                    </x-button>
                </div>
            </form>
            {{request()->body}}
            Exibindo página {{$current_page}} de {{$last_page}}
            <a href="{{$prev_page_url}}{{request()->has('type') ? "&type=".request()->get('type') : ''}}{{request()->has('brand') ? "&brand=".request()->get('brand') : ''}}{{request()->has('model') ? "&model=".request()->get('model') : ''}}{{request()->has('version') ? "&version=".request()->get('version') : ''}}">Anterior</a>
            <a  href="{{$next_page_url}}{{request()->has('type') ? "&type=".request()->get('type') : ''}}{{request()->has('brand') ? "&brand=".request()->get('brand') : ''}}{{request()->has('model') ? "&model=".request()->get('model') : ''}}{{request()->has('version') ? "&version=".request()->get('version') : ''}}">Próxima</a>
        </div>
    </div>
    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Versão</th>
                        <th scope="col">Dica</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $hint)
                            <tr>
                                <th scope="row">{{$hint['id']}}</th>
                                <td>{{$hint['type']}}</td>
                                <td>{{$hint['brand']}}</td>
                                <td>{{$hint['model']}}</td>
                                <td>{{$hint['version']}}</td>
                                <td>
                                    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#hint{{$hint['id']}}">
                                        Ver dica
                                    </button>
                                </td>
                                <div class="modal" id="hint{{$hint['id']}}">
                                    <div class="modal-dialog ">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Dica #{{$hint['id']}} - {{$hint['model']." ".$hint['version']}}</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                {{$hint['hint']}}
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</x-app-layout>
