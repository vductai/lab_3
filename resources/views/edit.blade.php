@extends('layout')
@section('content')
    @foreach($edits as $edit )
        <form action="{{route('book.update', ['id'=> $edit->id_book])}}" class="w-75" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" class="form-control" name="title" value="{{$edit->title}}">
            </div>
            <div class="mb-3">
                <label class="form-label">thumbnail</label>
                <input type="text" class="form-control" name="thumbnail" value="{{$edit->thumbnail}}">
            </div>
            <div class="mb-3">
                <label class="form-label">author</label>
                <input type="text" class="form-control" name="author" value="{{$edit->author}}">
            </div>
            <div class="mb-3">
                <label class="form-label">publisher</label>
                <input type="text" class="form-control" name="publisher" value="{{$edit->publisher}}">
            </div>
            <div class="mb-3">
                <label class="form-label">publication</label>
                <input type="date" class="form-control" name="publication" value="{{$edit->publication}}">
            </div>
            <div class="mb-3">
                <label class="form-label">price</label>
                <input type="number" class="form-control" name="price" value="{{$edit->price}}">
            </div>
            <div class="mb-3">
                <label class="form-label">quantity</label>
                <input type="number" class="form-control" name="quantity" value="{{$edit->quantity}}">
            </div>
            <div class="mb-3">
                <label class="form-label">category</label>
                <select class="form-control" name="category_id" value="{{$edit->name}}">
                    @foreach($listcate as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Sửa</button>
        </form>
    @endforeach
@endsection