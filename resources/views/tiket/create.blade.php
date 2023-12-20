@extends('layouts.bila')

@section('content')
    
    <div class="container">
        <h1>Create Tiket</h1>
        <form action="/tiket/store" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Pemesan</label>
               <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
             </div>
             <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Alamat Pemesan</label>
               <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
             </div>

            <select  class="form-select" name="jenis_tiket">
                <option value="">Pilih Jenis Tiket</option>
                <option value="VIP">VIP</option>
                <option value="VVIP">VVIP</option>
                <option value="Festival">Festival</option>
            </select><br>
            <select  class="form-select" name="tanggal_konser">
                <option value="">Tanggal Konser</option>
                <option value="26 April">26 April</option>
                <option value="1 Mei">1 Mei</option>
                <option value="8 Desember">8 Desember</option>
            </select><br>
            <input type="submit" name="submit" class="btn btn-secondary" value="Save"><br>

        </form>
    </div>
@endsection
