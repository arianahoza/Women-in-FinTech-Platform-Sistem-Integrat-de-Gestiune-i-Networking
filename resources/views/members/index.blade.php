<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<h1>Lista Membri Women in Fintech</h1>

<p>
    <a href="{{ route('members.index') }}">Membri</a> | 
    <a href="{{ route('stories.index') }}">Povești de Succes</a> | 
    <a href="{{ route('events.index') }}">Evenimente</a>
</p>

<hr>

<div style="margin-bottom: 20px;">
    <a href="{{ route('members.create') }}"><b>+ Adaugă Membru Nou</b></a> | 
    <a href="{{ route('members.export') }}">Descarcă CSV (Export)</a>
</div>

<form method="GET" action="{{ route('members.index') }}" style="background: #f9f9f9; padding: 10px; border: 1px solid #ddd;">
    
    <input type="text" name="profession" placeholder="Filtrează profesie" value="{{ request('profession') }}">
    
    <input type="text" name="company" placeholder="Filtrează companie" value="{{ request('company') }}">
    
    <select name="status">
        <option value="">-- Status --</option>
        <option value="active" {{ request('status') == 'active' ? 'selected' : '' }}>Active</option>
        <option value="inactive" {{ request('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
    </select>

    <button type="submit">Aplică Filtre</button>
    <a href="{{ route('members.index') }}">Resetează</a>
</form>

<br>

<table class="table table-striped table-hover" border="1" style="width: 100%; border-collapse: collapse;">
    <thead>
        <tr style="background-color: #eee;">
            <th style="padding: 10px;">Nume</th>
            <th style="padding: 10px;">Email</th>
            <th style="padding: 10px;">Profesie</th>
            <th style="padding: 10px;">Companie</th>
            <th style="padding: 10px;">Status</th>
            <th style="padding: 10px;">Acțiuni</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($members as $member)
        <tr>
            <td style="padding: 8px;">{{ $member->name }}</td>
            <td style="padding: 8px;">{{ $member->email }}</td>
            <td style="padding: 8px;">{{ $member->profession }}</td>
            <td style="padding: 8px;">{{ $member->company }}</td>
            <td style="padding: 8px;">{{ $member->status }}</td>
            <td style="padding: 8px;">
                <a href="{{ route('members.edit', $member->id) }}">Edit</a> | 
                
                <form action="{{ route('members.destroy', $member->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Sigur vrei să ștergi acest membru?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div style="margin-top: 15px;">
    {{ $members->appends(request()->query())->links() }}
</div>