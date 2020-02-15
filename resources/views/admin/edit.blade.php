@extends('layouts.app')
@section('content')
    <!-- Форма создания задачи... -->
    <div class="panel-body">
        <!-- Отображение ошибок проверки ввода -->
    {{--    @include('common.errors')--}}

    <!-- Форма новой задачи -->
        <form action="{{ url('/admin/'.$banner->id.'/update') }}" method="POST" class="form-horizontal">
            <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}
        <!-- Имя задачи -->
            <div class="form-group">
                <label for="title" class="col-sm-3 control-label">Название</label>
                <div class="col-sm-6">
                    <input type="text" name="title" id="title" value="{{ $banner->title }}"
                           class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="image" class="col-sm-3 control-label">Изображение</label>
                <div class="col-sm-6">
                    <input type="text" name="image" id="image" value="{{ $banner->image }}"
                           class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="url" class="col-sm-3 control-label">URl</label>
                <div class="col-sm-6">
                    <input type="text" name="url" id="url" value="{{ $banner->url }}" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="status" class="col-sm-3 control-label">Статус</label>
                <div class="col-sm-6">
                    <input type="text" name="status" id="status" value="{{ $banner->status }}" class="form-control">
{{--                    <select class="form-control" name="status" id="status">--}}
{{--                        <option value="{{ $banner->status }}">Enable</option>--}}
{{--                        <option value="0">Disable</option>--}}

{{--                    </select>--}}

                </div>
            </div>
            <div class="form-group">
                <label for="position" class="col-sm-3 control-label">Позиция</label>
                <div class="col-sm-6">
                    <input type="text" name="position" id="position" value="{{ $banner->position }}"
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
