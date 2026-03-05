<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<h1>Evenimente Viitoare</h1>
<p><a href="{{ route('members.index') }}">Înapoi la Membri</a></p>

<form action="{{ route('events.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nume Eveniment" required><br>
    <input type="text" name="date" placeholder="Data (ex: 15 Iunie)" required><br>
    <input type="text" name="location" placeholder="Locație" required><br>
    <button type="submit">Adaugă Eveniment</button>
</form>

<hr>

<table class="table table-striped table-hover">
    <tr><th>Nume</th><th>Data</th><th>Locație</th></tr>
    @foreach($events as $event)
    <tr>
        <td>{{ $event->name }}</td>
        <td>{{ $event->date }}</td>
        <td>{{ $event->location }}</td>
    </tr>
    @endforeach
</table>