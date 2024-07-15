@extends('layout')
@section('content')
    <form action="{{route('book.add')}}" class="w-75" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="mb-3">
            <label class="form-label">thumbnail</label>
            <input type="text" class="form-control" name="thumbnail">
        </div>
        <div class="mb-3">
            <label class="form-label">author</label>
            <input type="text" class="form-control" name="author">
        </div>
        <div class="mb-3">
            <label class="form-label">publisher</label>
            <input type="text" class="form-control" name="publisher">
        </div>
        <div class="mb-3">
            <label class="form-label">publication</label>
            <input type="date" class="form-control" name="publication">
        </div>
        <div class="mb-3">
            <label class="form-label">price</label>
            <input type="number" class="form-control" name="price">
        </div>
        <div class="mb-3">
            <label class="form-label">quantity</label>
            <input type="number" class="form-control" name="quantity">
        </div>
        <div class="mb-3">
            <label class="form-label">category</label>
            <select name="category_id">
                @foreach($listcate as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Thêm</button>
    </form>
@endsection