@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Добавление новой статьи</div>

                <div class="panel-body">
                    
                    {!! Form::open(['route' => 'save_article']) !!}

                   	<div class="form-group">
		              <label for="title" class="control-label">Заголовок статьи</label>
		              <input id="title" name="title" type="text" class="form-control"/>
		            </div>

                   	<div class="form-group">
		              <label for="body" class="control-label">Текст статьи</label>
		              <textarea id="body" name="body" type="text" class="form-control"/></textarea>
		            </div>

		            <input class="btn btn-success" value="Сохранить статью" type="submit">

                    {!! Form::close() !!}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection