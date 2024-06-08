@extends('layouts.admin')

@section('content')
    <div class=mb-2>
        <h2 class="">Список отзывов</h2>
    </div>
<div><a type="submit" class="btn btn-primary mb-2 mt-2" href="{{route('admin.review.create')}}">Создать</a></div>
<input type="button" class="btn btn-primary select_all" value="Выделить все">
<input type="button" class="btn btn-primary check_all" value="Снять все">
<form action="{{ route('admin.review.del') }}" method="post">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-danger mt-2">Удалить выбранные</button>
    <div class="content-header">
        <div class="container-fluid">
            @foreach($reviewRu as $review)
                <table class="table">
                    <tbody>
                    <tr>
                        <td>
                            <input type="checkbox" name="service_ids[]" value="{{$review->id}}" class="selected">
                        </td>
                        <td class="w-50">
                            <div><a href="{{ route('admin.review.show', $review->id) }}">{{$review->id}} . {{$review->full_nameRu}}</a></div>
                            <div>{{$review->textRu}}</div>
                        </td>
                        <td class="w-25">
                            <img src="{{url('storage/' . $review->imageRu)}}" alt="image" class="w-50">
                        </td>
                        <td class="w-10">
                            <form action="{{ route('admin.review.delete', $review->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Удалить</button>
                            </form>
                        </td>
                    </tr>
                    </tbody>
                </table>
            @endforeach
        </div>
    </div>
</form>
<div>
</div>
<script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
<script>
    $(".select_all").on("click", function(){
        $(".selected").each(function(){
            $(this).attr("checked", true);
        });
    });
</script>
<script>
    $(".check_all").on("click", function(){
        $(".selected").each(function(){
            $(this).attr("checked", false);
        });
    });
</script>
@endsection
