@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="{{ route('update-post', $post->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <label for="title">عنوان المقالة</label>
                <input class="form-control" type="text" name="title" value="{{ $post->title }}">

                <label for="description">المقالة</label>
                <textarea class="form-control" name="description" cols="30" rows="10">{{ $post->description }}</textarea>

                <label for="image">صورة المقالة</label>
                <input class="form-control" type="file" name="image">

                <button class="form-control" type="submit">تعديل المقالة</button>
            </form>
        </div>
    </div>

</div>

@endsection
