<div class="card">
    <div class="card-body">
        <table class="table table-striped" @update="$refresh">
            <thead>
                <th>Id</th>
                <th>Bloque</th>
                <th>Nombre</th>
                <th>Encargado</th>
            </thead>
            <tbody>
                @foreach ($this->getlaboratories() ?? [] as $laboratory)
                <tr wire:click="getLaboratory({{$laboratory->id}})" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#modal">
                    <td>{{$laboratory->id}}</td>
                    <td>{{$laboratory->block}}</td>
                    <td>{{$laboratory->name}}</td>
                    <td>{{$laboratory->manager ? ($laboratory->manager->surname . ' ' . $laboratory->manager->name) : '------'}}</td>
                </tr>
                @endforeach
                {{-- <tr> --}}
                {{--     <td>2</td> --}}
                {{--     <td>SISA2</td> --}}
                {{--     <td>Laboratorio de hardware</td> --}}
                {{--     <td>---</td> --}}
                {{-- </tr> --}}
                {{-- <tr> --}}
                {{--     <td>3</td> --}}
                {{--     <td>SISB1</td> --}}
                {{--     <td>Laboratorio de Redes</td> --}}
                {{--     <td>---</td> --}}
                {{-- </tr> --}}
                {{-- <tr> --}}
                {{--     <td>4</td> --}}
                {{--     <td>SISB2</td> --}}
                {{--     <td>Laboratorio</td> --}}
                {{--     <td>---</td> --}}
                {{-- </tr> --}}
            </tbody>
        </table>
    </div>
</div>
