@extends('layouts.bila')

@section('content')
    <div class="container">
        <a class="btn btn-secondary" href="/tiket/create">Add tiket</a>
        <table class="table table-striped table-hover">
            <tr>
                <th>Nama Pemesan</th>
                <th>Alamat Pemesan</th>
                <th>Jenis Tiket</th>
                <th>Tanggal Konser</th>
                <th>Aksi</th>
            </tr>
            @foreach($tiket as $t)
            <tr>
                <td>{{$t->nama_pemesan}}</td>
                <td>{{$t->alamat_pemesan}}</td>
                <td>{{$t->jenis_tiket}}</td>
                <td>{{$t->tanggal_konser}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a class="btn btn-dark" href="/tiket/{{$t->id}}/edit">Edit</a>
                        <form actiom="/tiket/{{$t->id}}/" method="POST">
                            @csrf
                            @method('delete')
                            <input class="btn btn-danger" type="submit" value="Delete">
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection
    
