@extends('index')

@section('content')

<div class="py-2" id="home" style="margin-top: 40px; margin-bottom: 0px">
    <div  style="background-color: rgb(80, 125, 209)">
        <div class="text-center font-weight-bold">
            <h2 class="about text-center text-white" id="about">DAFTAR SURAT</h2>
        </div>
    </div>
</div>

<table class="table table-striped" style="margin-bottom: 30px">
    <thead style="--bs-table-bg: cornflowerblue; --bs-table-color: white">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Surat</th>
        <th scope="col">Nama latin</th>
        <th scope="col">Arti</th>
        <th scope="col">Jumlah Ayat</th>
        <th scope="col">Tempat Turun</th>
        <th scope="col">Tipe</th>
        <th scope="col">Audio</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($response as $quran) 
      <tr>
        <th scope="row">{{ $quran->number_of_surah }}</th>
        <td>{{ $quran->name_translations->ar }}<br>
            <a href="/quran/{{ $quran->number_of_surah }}">
                <button class="btn btn-primary btn-sm btn-menu">Lihat Surat</button>
            </a>
        </td>
        <td>{{ $quran->name }}</td>
        <td>{{$quran->name_translations->id}}</td>
        <td>{{ $quran->number_of_ayah }} Ayat</td>
        <td class="text-align justify">{{ $quran->place }}</td>
        <td class="text-align justify">{{ $quran->type }}</td>
        <td>
            <figure>
                <figcaption>Dengarkan Murotal</figcaption>
                <audio src="{{ $quran->recitation }}" controls></audio>
            </figure>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

@endsection