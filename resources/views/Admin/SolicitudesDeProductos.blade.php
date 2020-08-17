@extends('layouts.app')

@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Precio</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($producto as $item)
            @if ($item->aprobado==0 && $item->priority==1)
                <th scope="row">1</th>
                    <td>{{$item->nombre}}</td>
                    <td>{{$item->precio}}</td>
                    <td>{{$item->descripcion}}</td>
                    <td>{{$item->direccion}}</td>
                    <td>{{$item->precioXmayor}}</td>
                </tr>
            @endif 
            @if ($item->aprobado==0 && $item->priority==0)
                <th scope="row">1</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
            @endif
        @endforeach
        @foreach ($producto as $item)
            
        @endforeach
    </tbody>
  </table>

@endsection