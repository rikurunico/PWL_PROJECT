@foreach ($dataMember as $data)

<tr>
    <td>
        {{ $data->id }}
    </td>
    <td>
        {{ $data->name }}
    </td>
    <td>
        {{ $data->email }}
    </td>
</tr>
    
@endforeach