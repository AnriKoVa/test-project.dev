@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Редактирование статьи</div>

                <div class="panel-body">
                    
                    {!! Form::open(['route' => ['update_article', $article->id]]) !!}

                   	<div class="form-group">
		              <label for="title" class="control-label">Заголовок статьи</label>
		              <input value="{{ $article->title }}" id="title" name="title" type="text" class="form-control"/>
		            </div>

                   	<div class="form-group">
		              <label for="body" class="control-label">Текст статьи</label>
		              <textarea id="body" name="body" type="text" class="form-control"/>{{ $article->body }}</textarea>
		            </div>

		            <input class="btn btn-success" value="Редактированть статью" type="submit">

                    {!! Form::close() !!}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection