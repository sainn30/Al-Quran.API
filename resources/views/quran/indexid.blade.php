@extends('index')

@section('content')

<div class="jumbotrom" id="home" style="margin-top: 140px; margin-bottom: 10px">
    <div class="dark">
        <div class="text-center">
            <h2 class="about text-center" id="about" >{{ $response->name_translations->ar}}</h2>
        </div>
    </div>
</div>
<br>
<center>
    
    <div class="card text-center" style="width: 70%;">
    
        <div class="card-header">
         <strong>{{ $response->name}}</strong>
        </div>
        <div class="card-body">
          <p class="card-text">
            <table style="text-align: left; margin: 20px">
                <tr>
                    <td>Arti</td>
                    <td> :</td>
                    <td>{{ $response->name_translations->id }}</td>
                </tr>
                <tr>
                    <td>Nomor Surat</td>
                    <td> :</td>
                    <td>{{ $response->number_of_surah }}</td>
                </tr>
                <tr>
                    <td>Banyak Ayat</td>
                    <td> :</td>
                    <td>{{ $response->number_of_ayah }}</td>
                </tr>
                <tr>
                    <td>Tipe Surat</td>
                    <td>:</td>
                    <td>{{ $response->type }}</td>
                </tr>
            </table>
          </p>
        </div>
        <div class="card-footer text-body-secondary">
         <strong  style="margin-bottom: 50px"><b><u>Dengarkan Murotal</u></b></strong>
         <figure>
            <br>
            
            @foreach ($response->recitations as $audio)

            <p>{{ $audio->name }}</p>
            <audio src="{{ $audio->audio_url }}" controls></audio>
            <br>

            @endforeach
            
         </figure>
        </div>

          
    </div>

</center>
<br>


<table class="table table-striped" style="margin-bottom: 30px;">
    <thead>
        <tr>
            <td colspan="4" style="background-color: cornflowerblue; color: white; text-align: center">
                <strong>Ayat</strong>
            </td>
        </tr>
      <tr>
        <th scope="col">Ayat</th>
        <th scope="col">Lafazh</th>
        <th scope="col">Bahasa Inggris</th>
        <th scope="col">Bahasa Indonesia</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($response->verses as $ayat)
        <tr>
            <td>{{ $ayat->number}}</td>
            <td>{{ $ayat->text}}</td>
            <td>{{ $ayat->translation_en}}</td>
            <td>{{ $ayat->translation_id}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="card text-center">
    
    <div class="card-header">
     <strong>Tafsir</strong>
    </div>
    <div class="card-body">
      <table style="text-align: left; margin: 20px">
        <tr>
            <td>Penerbit Tafsir</td>
            <td>:</td>
            <td>{{ $response->tafsir->id->kemenag->name}}</td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td>:</td>
            <td>{{ $response->tafsir->id->kemenag->source}}</td>
        </tr>
      </table>
    </div>
    <div class="card-footer "></div>
      <div class="card-body">
        @foreach (  $response->tafsir->id->kemenag->text as $key => $ayat)
        <strong>Ayat : {{ $key }}</strong>
        <br>
        <p style="text-align: justify">Tafsir : {{ $ayat}}</p>
        <hr>
        <hr>
        @endforeach
      </div>

</div>


@endsection