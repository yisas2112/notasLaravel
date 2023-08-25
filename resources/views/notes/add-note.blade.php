@extends('layouts.notas.app')

@section('title', 'Nueva Nota')

@section('content')
    <div class="wrap">
        <header class="head">
            <a href="#" class="logo"></a>
            
            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li class="main-nav-item">
                        <a href="{{route('notas.index')}}" class="main-nav-link">
                            <i class="icon icon-th-list"></i>
                            <span>Ver notas</span>
                        </a>
                    </li>
                    <li class="main-nav-item active">
                        <a href="{{route('notas.crear')}}" class="main-nav-link">
                            <i class="icon icon-pen"></i>
                            <span>Nueva nota</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </header>
        <main class="content">
            <div class="cards">
                <div class="card card-center">
                    <div class="card-body">
                        <h1>Nueva nota</h1>

                        <form  action="{{route('notas.guardar')}}" method="POST">
                            @csrf
                            <label for="title" class="field-label">Título: </label>
                            <input type="text" value="{{old('title')}}" name="title" id="title" class="field-input">
                            @error('title')                                
                                <small>*{{$message}}</small>
                                <br>
                            @enderror
                            <label for="content" class="field-label">Contenido:</label>
                            <textarea name="body" id="content" rows="10" class="field-textarea">{{old('body')}}</textarea>
                            @error('body')                                
                                <small>*{{$message}}</small>
                                <br>
                            @enderror

                            <button type="submit" class="btn btn-primary">Crear nota</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
@endsection
