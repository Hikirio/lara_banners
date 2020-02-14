@extends('layouts.app')
@section('content')
    <!-- Форма создания задачи... -->
    <div class="panel-body">
        <!-- Отображение ошибок проверки ввода -->
    {{--    @include('common.errors')--}}

    <!-- Форма новой задачи -->
        <form action="{{ url('/admin/tables/'.$banner->id.'/update') }}" method="POST" class="form-horizontal">
            <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}
        <!-- Имя задачи -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Название</label>
                <div class="col-sm-6">
                    <input type="text" name="first_name" id="first_name" value="{{ $banner->title }}"
                           class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Изображение</label>
                <div class="col-sm-6">
                    <input type="text" name="second_name" id="second_name" value="{{ $banner->image }}"
                           class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">URl</label>
                <div class="col-sm-6">
                    <input type="text" name="surname" id="surname" value="{{ $banner->url }}" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Статус</label>
                <div class="col-sm-6">
                    <input type="text" name="street" id="street" value="{{ $banner->status }}" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Позиция</label>
                <div class="col-sm-6">
                    <input type="text" name="numberofhome" id="numberofhome" value="{{ $banner->position }}"
                           class="form-control">
                </div>
            </div>
            <!-- Кнопка добавления задачи -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-save"></i> Save
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
