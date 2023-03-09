@extends('layouts.main')

@section('content')
<div class="mx-auto my-2 my-sm-3 my-lg-4 p-3">
<form class="form-inline" action="{{ route('links.send') }}" method="POST">
    @csrf
    <div class="col-md-8 mx-auto">
        @if(session()->has('success'))
            <p><strong>Новая ссылка: <a href="{{ session()->get('success') }}">{{ session()->get('success') }}</a></strong></p>
        @endif
        <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend">
                <div class="input-group-text">https://</div>
            </div>
            <input type="text" name="url" class="form-control" id="inlineFormInputGroupUsername2" placeholder="https://yandex.com">
        </div>
        <button type="submit" class="btn btn-primary mb-2" name="">Сохранить</button>
    </div>
</form>
</div>

@endsection