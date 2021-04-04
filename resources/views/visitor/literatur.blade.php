@extends('layouts.user')
@section('literatur','active')
@section('content')
    <main id="main">
        <div class="container my-5" data-aos="fade-up">
            <div class="row" style="margin-top: 100px">
                <div class="col">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Book</th>
                                <th scope="col">Author</th>
                                <th scope="col">Teacher</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->book->title }}</td>
                                <td>{{ $item->book->author }}</td>
                                <td>{{ $item->name }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
