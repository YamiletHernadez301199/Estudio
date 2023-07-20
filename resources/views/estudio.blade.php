@extends('layouts/main')

@section('contenido')

    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table">
                    {{-- {{ print_r ($items)}} --}}
                    <thead>
                        <tr>
                            <th >id</th>
                            <th >apellido paterno</th>
                            <th >nombre</th>
                            <th >fecha nacimiento</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->nombre}}</td>
                            <td>{{$item->paterno}}</td>
                            <td>{{$item->FechaNacimiento}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection