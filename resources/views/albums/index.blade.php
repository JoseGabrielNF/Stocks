@extends('layouts.app')
@section('title', 'Meus álbuns')
@section('content')
        <div class="content">
            <div class="container">
                <div class="header">
                    <h2 class="page-title">Meus álbuns</h2>
                    <button class="align-right" onclick="toggleModal()"><i class="far fa-images"></i> Criar</button>
                </div>
                
                @if(count($albums) > 0)

                <div class="albums">

                @foreach($albums as $album)

                    <div class="album" style="background-image: url(https://i.ytimg.com/vi/rklY-mJj9dc/maxresdefault.jpg);">
                        <div class="album-header">
                            <h3 class="name">{{ $album->name }}</h3>
                        </div>
                    </div>
                
                @endforeach

                </div>
                <div class="footer">
                    <ul class="pagination">
                        <li><a href="#">Anterior</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">Próxima</a></li>
                    </ul>
                </div>
                
                @else

                <div class="error-message"><i class="fas fa-exclamation-circle"></i>Desculpe, você não possui nenhum álbum!</div>
                
                @endif

            </div>
            <div class="modal-background" id="modal-background">
                <div class="form-container">
                    <h2 class="form-title">Criar álbum</h2>
                    <form action="/albums" method="post">
                        @csrf

                        <div class="row">
                            <label for="name">Nome do álbum</label>
                        </div>
                        <input type="text" name="name">

                        <div class="row">
                            <label for="visibility">Visibilidade</label>
                        </div>
                        <select name="visibility">
                            <option value="public">Público</option>
                            <option value="private">Privado</option>
                        </select>

                        <button type="submit">Criar</button>
                    </form>
                    <button class="close-modal" onclick="toggleModal()"><i class="fas fa-times"></i></button>
                </div>
            </div>
        </div>
@endsection