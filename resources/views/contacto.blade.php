<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>CONTACTO</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">
    </head>
    <body>
        <header>
            <div class="nav">
                <a href="/landingpage">LANDING PAGE</a>
                <a href="/contacto">CONTACTO</a>
            </div>
        </header>
        <h1>Contacto</h1>
        <!-- @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif -->
        <div class="form">
            <form action="/recibe-form-contacto" method="POST">
                @csrf
                <label for="nombre">Nombre</label><br/>
                <input type="text" id="nombre" class="datos" name="nombre" value="{{ $nombre ?? ''}} {{ old('nombre') }}"></br>
                @error('nombre')
                    <i>{{ $message }}</i>
                @enderror
                <br/>
                <label for="email">Email</label><br/>
                <input type="text" id="email" class="datos" name="email" value="{{ $email ?? '' }} {{ old('email') }}"></br>
                @error('email')
                    <i>{{ $message }}</i>
                @enderror
                <br/>
                <label for="comentario">Comentario</label><br/>
                <textarea name="comentario" id="comentario" class="datos" cols="30" rows="10" placeholder="Escribe aquí tu comentario...">{{ old('comentario') }}</textarea><br/>
                @error('comentario')
                    <i>{{ $message }}</i>
                @enderror
                <br/>
                <!-- <label for="city"><select name="ciudad" id="city" class="datos">
                    <option value="Guadalajara" id="municipio">Guadalajara</option>
                    <option value="Zapopan" id="municipio">Zapopan</option>
                    <option value="Tonala" id="municipio">Tonalá</option>
                    <option value="Tlajomulco" id="municipio">Tlajomulco</option>
                </select>Ciudad</label><br/>
                <label for="cont"><input type="checkbox" id="cont" name="contacto">Me interesa contratarte</label><br/> -->
                <button type="submit">Enviar</button>
            </form>
        </div>
    </body>
</html>