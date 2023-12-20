@extends('layouts.bila')

@section('content')
    <div class="container">
    <h1>Edit Data</h1>

<form action="/tiket/{{$tiket->id}}" method="POST">
    @method('put')
    @csrf
    <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Pemesan</label>
               <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$tiket->nama_pemesan}}">
             </div>
             <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Alamat Pemesan</label>
               <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$tiket->alamat_pemesan}}">
             </div>

            <select  class="form-select" name="jenis_tiket">
                <option value="">Pilih Jenis Tiket</option>
                <option value="VIP" @if($tiket->jenis_tiket == "VIP") selected @endif>VIP</option>
                <option value="VVIP" @if($tiket->jenis_tiket == "VVIP") selected @endif>VVIP</option>
                <option value="Festival" @if($tiket->jenis_tiket == "Festival") selected @endif>Festival</option>
            </select><br>
            <select  class="form-select" name="tanggal_konser">
                <option value="">Tanggal Konser</option>
                <option value="26 April" @if($tiket->tanggal_konser == "26 April") selected @endif>26 April</option>
                <option value="1 Mei" @if($tiket->tanggal_konser == "1 Mei") selected @endif>1 Mei</option>
                <option value="8 Desember" @if($tiket->tanggal_konser == "8 desember") selected @endif>8 Desember</option>
            </select><br>
            <input type="submit" name="submit" class="btn btn-secondary" value="Save"><br>

        </form>
    </div>
@endsection
