<h1>Cadastrar o Post</h1>

@if ($errors->any)
 <div>
     @foreach ($errors->all() as $item)
        <li>{{$item}}</li>
     @endforeach
 </div>
@endif

<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <input type="text" name="title" id="title"  placeholder="Titulo" value="{{old('title')}}">
    <input type="text" name="content" id="content" placeholder="Conteudo" value="{{old('content')}}">
    <input type="submit" value="enviar">
</form>
