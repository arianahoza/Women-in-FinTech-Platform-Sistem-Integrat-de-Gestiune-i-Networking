<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<h1>Povești de Succes</h1>
<p><a href="{{ route('members.index') }}">Înapoi la Membri</a></p>

<form action="{{ route('stories.store') }}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Titlu Poveste" required><br>
    <textarea name="content" placeholder="Povestea ta..." required></textarea><br>
    <input type="email" name="author_email" placeholder="Emailul tău" required><br>
    <button type="submit">Salvează Povestea</button>
</form>

<hr>

@foreach($stories as $story)
    <div style="border-bottom: 1px solid #ccc; margin-bottom: 10px;">
        <h3>{{ $story->title }}</h3>
        <p>{{ $story->content }}</p>
        <small>Autor: {{ $story->author_email }}</small>
    </div>
@endforeach