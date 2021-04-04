@extends('layouts.user')
@section('kelembagaan','active')
@section('content')
<main id="main">
    <div class="container my-5" data-aos="fade-up">
        <div class="row" style="margin-top: 100px">
            <div class="col">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Lembaga</th>
                            <th scope="col">Telp.</th>
                            <th scope="col">Alamat</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->address }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection
