@extends('nav')

@section('content')
    <div class="container w-25 border p-4">
        <form action="{{ route('actividades') }}" method="POST">
            @csrf
            @if (session('success'))
                <p class="alert alert-success">{{ session('success') }}</p>
            @endif

            @error('titulo')
                <p class="alert alert-danger">{{ $message }}</p>
            @enderror
            <div class="mb-3">
                <label for="activitie" class="form-label">Activitie title</label>
                <input name="titulo" type="text" class="form-control" id="title">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
