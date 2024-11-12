@extends('home')

@section('title', 'Trang chủ')

@section('content')
    <h2 class="ms-3">Thể loại</h2>
    @foreach ($books as $item)
        <a class="ms-3 mt-3" href="{{ route('show.category', $item->id) }}">Sách {{ $item->name }}</a>
        <br>
    @endforeach
    <h2 class="ms-3">Sản phẩm có giá cao nhất</h2>
    <div>
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
                @foreach ($highestPriceBooks as $hight)
                    <tr>
                        <td>{{ $hight->title }}</td>
                        <td><img src="{{ $hight->thumbnail }}" alt="{{ $hight->title }}" width="200px"></td>
                        <td>{{ $hight->author }}</td>
                        <td>{{ $hight->publisher }}</td>
                        <td>{{ $hight->publication }}</td>
                        <td>{{ number_format($hight->price, 2) }} VNĐ</td>
                        <td>{{ $hight->quantity }}</td>
                        <td>{{ $hight->category_name }}</td>
                        <td>
                            <a href="">Xem chi tiết</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <br>
    <br>
    <h2 class="ms-3">Sản phẩm có giá thấp nhất</h2>
    <div>
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
                @foreach ($lowestPriceBooks as $low)
                    <tr>
                        <td>{{ $low->title }}</td>
                        <td><img src="{{ $low->thumbnail }}" alt="{{ $low->title }}" width="200px"></td>
                        <td>{{ $low->author }}</td>
                        <td>{{ $low->publisher }}</td>
                        <td>{{ $low->publication }}</td>
                        <td>{{ number_format($low->price, 2) }} VNĐ</td>
                        <td>{{ $low->quantity }}</td>
                        <td>{{ $low->category_name }}</td>
                        <td>
                            <a href="">Xem chi tiết</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
