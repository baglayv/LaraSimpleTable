@extends('layout.layout', ['title' => 'Таблица'])

    
@section('content')
<table class="table">
    <tr>
        <th>№</th>
        <th>Название</th>
    </tr>
    @foreach ($table as $line)
        <tr>
            <td>
                {{ $loop->iteration }}
            </td>
            <td>
                {{ $line->name }}
            </td>
            <td><a href="{{ URL::to('table/'. $line->id . '/edit') }}"
                    class="btn btn-info" >Редактировать</a></td>
            <td>
                <form action="{{ route('table.destroy', $line->id) }}"
                    method="POST" >
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="Удалить">
                </form>
                
            </td>
        </tr>
    @endforeach
</table>
@endsection
