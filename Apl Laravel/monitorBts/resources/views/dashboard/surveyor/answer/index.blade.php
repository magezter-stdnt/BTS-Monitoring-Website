@extends('dashboard.layouts.main')

<!-- Main Awal -->
@section('container')
    <h1 class="mt-4 border-3 rounded-3 border-bottom">Survey Saya</h1>
    @if(session()->has('success'))
    <div class="alert alert-success col-lg-12" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    {{-- <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Survey aktif:</li>
    </ol> --}}
    <h5 class="mt-4 border-3 rounded-3 border-bottom">Selesai: </h5>
    <div class="d-flex flex-wrap survey-cards" style="justify-content:space-evenly;">
        @foreach ($mysurveys->where('user_id', auth()->user()->id)->where('status', true) as $mysurvey)
        <div class="card text-white bg-bts-3 border-3 survey-card" style="width: 18rem; margin:10px">
            <h3 class="card-header">{{ $mysurvey->survey->name }}</h3>
            <div class="card-body">
                <p class="card-text">{{ $mysurvey->survey->description }}</p>
                {{-- <h6 class="card-title">{{ $survey->name }}</h6> --}}
                {{-- <div class="d-flex" style="justify-content: flex-end;">
                    <a class="text-black-50" href="/dashboard/show-survey" class="card-link">Lihat</a>
                    <!-- <a href="#" class="card-link">Edit Jawaban</a> -->
                </div> --}}
            </div>
            <p class='card-header text-end text-light'><span class='fw-bolder text-light'>{{$mysurvey->survey->question->count()}}</span> pertanyaan</p>
            {{-- <form action="/dashboard/surveys/{{ $survey->id }}" method="post" class="card-footer text-center ">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0 " title="Delete" data-toggle="tooltip" onclick="return confirm('Are you sure?')"><i class="bi bi-trash-fill"></i></button>
            </form> --}}
        </div>
        {{-- <div class="card text-black bg-light border-3 add-card survey-card" style="width: 18rem; margin:10px">
            <h3 class="card-header">Tambah Survey</h3>
            <div class="card-body d-flex" style="justify-content: center;">
                <a class="text-black" style="font-size: 6em; align-self: center;" href="/dashboard/surveys/create" class="card-link">+</a>
            </div>
        </div> --}}
        @endforeach
    </div>

    <h5 class="mt-4 border-3 rounded-3 border-bottom">Belum Selesai: </h5>
    <div class="d-flex flex-wrap survey-cards" style="justify-content:space-evenly;">
        @foreach ($mysurveys->where('user_id', auth()->user()->id)->where('status', false) as $mysurvey)
        <div class="card text-white bg-bts-3 border-3 survey-card" style="width: 18rem; margin:10px">
            <h3 class="card-header">{{ $mysurvey->survey->name }}</h3>
            <div class="card-body">
                <p class="card-text">{{ $mysurvey->survey->description }}</p>
                {{-- <h6 class="card-title">{{ $survey->name }}</h6> --}}
                {{-- <div class="d-flex" style="justify-content: flex-end;">
                    <a class="text-black-50" href="/dashboard/show-survey" class="card-link">Lihat</a>
                    <!-- <a href="#" class="card-link">Edit Jawaban</a> -->
                </div> --}}
            </div>
            <p class='card-header text-end text-light'><span class='fw-bolder text-light'>{{$mysurvey->survey->question->count()}}</span> pertanyaan</p>
            <form action="/dashboard/answers/{{ $survey->id }}" method="post" class="card-footer text-center ">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0 " title="Delete" data-toggle="tooltip" onclick="return confirm('Are you sure?')"><i class="bi bi-trash-fill"></i></button>
            </form>
        </div>
        {{-- <div class="card text-black bg-light border-3 add-card survey-card" style="width: 18rem; margin:10px">
            <h3 class="card-header">Tambah Survey</h3>
            <div class="card-body d-flex" style="justify-content: center;">
                <a class="text-black" style="font-size: 6em; align-self: center;" href="/dashboard/surveys/create" class="card-link">+</a>
            </div>
        </div> --}}
        @endforeach
    </div>
@endsection
<!-- Main Akhir -->