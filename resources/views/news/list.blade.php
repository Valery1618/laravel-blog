@foreach($news as $newsOne)
    <p><a href="/news/{{ $newsOne->id }}">{{ $newsOne->title }}</a></p>
@endforeach
