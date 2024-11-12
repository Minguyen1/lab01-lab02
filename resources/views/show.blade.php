@extends('home')

@section('title', 'Danh sách theo loại')

@section('content')
    <h2>Sách theo loại</h2>

    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Thumbnail</th>
                <th>Author</th>
                <th>Publisher</th>
                <th>Publication</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Category</th>
                <th>Chi tiết</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td><img src="{{ $book->thumbnail }}" alt="{{ $book->title }}" width="200px"></td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->publisher }}</td>
                    <td>{{ $book->publication }}</td>
                    <td>{{ $book->price }}</td>
                    <td>{{ $book->quantity }}</td>
                    <td>{{ $book->category_name }}</td>
                    <td>
                        <a href="">Xem chi tiết</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection