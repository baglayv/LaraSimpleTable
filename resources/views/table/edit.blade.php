@extends('layout.layout', ['title' => 'Редактирование строки таблицы'])

@section('content')
<h1>Редактировать строку таблицы</h1>

<form method="post" action="{{ route('table.update', $line->id) }}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <input type="text" class="form-control" name="name" value="{{ $line->name }}">
    </div>
    <div class="form-group pt-4">
        <button type="submit" class="btn btn-info">Сохранить</button>
    </div>
</form>
    
@endsection