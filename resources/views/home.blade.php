@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Панель пользователя </div>

                <div class="panel-body">
                    
                    @if ($articles->count() == 0)
                        У вас еще нету своих статей <br>
                        <a href="{{ route('create_article') }}" class="btn btn-success">Добавить статью</a>
                    @else
                        Ваши статьи

                        <table id="datatable-buttons" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Заголовок</th>
                                <th>Текст</th>
                                <th>Действие</th>
                            </tr>
                        </thead>
                            <tbody>
                            @foreach($articles as $article)
                                <tr>
                                    <td>{{$article->title}}</td>
                                    <td>{{$article->body}}</td>
                                    <td>
                                        <a href="{{ route('update_article', ['id' => $article->id]) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil" title="Edit"></i>Изменить</a>
                                        <a href="{{ route('delate_article', ['id' => $article->id]) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" title="Delete"></i>Удалить</a>
                                    </td>
                                </tr>

                            @endforeach

                           </tbody>
                        </table>

                        <a href="{{ route('create_article') }}" class="btn btn-success">Добавить статью</a>

                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
