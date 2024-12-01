<div>
    <table class="table table-striped">
        <thead>
            <th>Id</th>
            <th>Nombre</th>
        </thead>
        <tbody>
            @foreach ($types ?? [] as $type)
            <tr>
                <td>{{$type->id}}</td>
                <td>{{$type->name}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
