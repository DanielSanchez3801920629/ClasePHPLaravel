<h1>{{ $registros_a_mostrar }}</h1>
<h1>{{ $población_minima }}</h1>
<h1>{{ $ordenar_por }}</h1>
<h1>{{ $orden }}</h1>

<br>

<table>
    <tr>
        <th>País</th>
        <th>Capital</th>
        <th>Moneda</th>
        <th>Población</th>
        <th>Descripción</th>
    </tr>
    @foreach ($paises as $pais=>$info)
        <tr>
            <td>{{ $pais }}</td>
            <td>{{ $info['capital'] }}</td>
            <td>{{ $info['moneda'] }}</td>
            <td>{{ $info['poblacion'] }}</td>
            <td>{{ $info['descripcion'] }}</td>
        </tr>
    @endforeach 
</table>