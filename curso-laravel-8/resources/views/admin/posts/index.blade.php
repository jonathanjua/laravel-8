<h1>Posts</h1>
<a href="{{ route('posts.create') }} ">Criar Post</a>
<hr>
@foreach ($posts as $item)
  {{ $item->title }} <br>
  {{ $item->content }}<br>
  <a href="{{ route('posts.show',['id' =>$item->id])}}">Ver</a>
<hr>
@endforeach
