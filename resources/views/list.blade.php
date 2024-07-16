@extends('layout')
@section('content')
    <table class="table w-75 ">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">title</th>
            <th scope="col">thumbnail</th>
            <th scope="col">author</th>
            <th scope="col">publisher</th>
            <th scope="col">publication</th>
            <th scope="col">price</th>
            <th scope="col">quantity</th>
            <th scope="col">category</th>
            <th scope="col">Thao tác</th>
        </tr>
        </thead>
        <tbody>
        @foreach($list as $item)
            <tr>
                <th scope="row">{{$item->id_book}}</th>
                <td>{{$item->title}}</td>
                <td>{{$item->thumbnail}}</td>
                <td>{{$item->author}}</td>
                <td>{{$item->publisher}}</td>
                <td>{{$item->publication}}</td>
                <td>{{number_format($item->price)}} đ</td>
                <td>{{$item->quantity}}</td>
                <td>{{$item->name}}</td>
                <td class="d-flex justify-content-center">
                    <a href="{{route('book.edit', $item->id_book)}}" class="btn btn-primary mx-3">
                        Sửa
                    </a>
                    <form action="{{route('book.delete', $item->id_book)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-primary">Xoa</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
