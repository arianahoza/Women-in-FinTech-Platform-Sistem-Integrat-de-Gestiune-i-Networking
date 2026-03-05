<h1>Editare Profil Membru</h1>

<form action="{{ route('members.update', $member->id) }}" method="POST">
    @csrf
    @method('PUT') <label>Nume:</label><br>
    <input type="text" name="name" value="{{ $member->name }}" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" value="{{ $member->email }}" required><br>

    <label>Profesie:</label><br>
    <input type="text" name="profession" value="{{ $member->profession }}" required><br>

    <label>Companie:</label><br>
    <input type="text" name="company" value="{{ $member->company }}"><br>

    <label>Status:</label><br>
    <select name="status">
        <option value="active" {{ $member->status == 'active' ? 'selected' : '' }}>Active</option>
        <option value="inactive" {{ $member->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
    </select><br><br>

    <button type="submit">Salvează Modificările</button>
    <a href="{{ route('members.index') }}">Anulează</a>
</form>