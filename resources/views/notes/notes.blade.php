@extends('layouts.notas.app')

@section('title', 'Listado')   


@section('content')
    <div class="wrap">
        <header class="head">
            <a href="#" class="logo"></a>
            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li class="main-nav-item active">
                        <a href="{{route('notas.index')}}" class="main-nav-link">
                            <i class="icon icon-th-list"></i>
                            <span>Ver notas</span>
                        </a>
                    </li>
                    <li class="main-nav-item">
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
                @forelse ($notes as $note)
                    <div class="card card-{{$note->id % 2 == 0 ? 'small' : 'big' }}">
                        <div class="card-body">
                            <h4>{{$note->title}}</h4>

                            <p>{{$note->body}}</p>
                        </div>

                        <footer class="card-footer">
                            <a href="{{route('edit-note', $note)}}" class="action-link action-edit">
                                <i class="icon icon-pen"></i>
                            </a>
                            <a href="{{route('delete.note', $note)}}" class="action-link action-delete">
                                <i class="icon icon-trash"></i>
                            </a>
                        </footer>
                    </div>
                @empty
                <div class="card card-big">
                    <div id="not-note" class="card-body">
                        <h4 >No hay notas</h4>
                    </div>
                </div>
                
                 @endforelse                
            </div>
        </main>

@endsection


