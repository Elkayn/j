@extends('layouts.admin')
@section('content')
    <div>
        <div>{{$priceRu->id}}. {{$priceRu->titleRu}}</div>
        <div>{{$priceRu->textRu}}</div>
        <div>{{$priceRu->imageRu}}</div>
        <div class="mt-3"><a href="{{ route('admin.price.edit', $priceRu->id) }}" class="btn btn-primary mb-3">Редактировать</a></div>
{{--        <div><a href="{{ route('admin.promo.edit', $promo->id) }}" class="btn btn-danger mb-3">Удалить</a></div>--}}
        <div>
            <form action="{{ route('admin.price.delete', $priceRu->id) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger mb-3">Удалить</button>
            </form>
        </div>
        <div><a href="{{ route('admin.price.index') }}" class="btn btn-primary mb-3">Назад</a></div>
    </div>
@endsection