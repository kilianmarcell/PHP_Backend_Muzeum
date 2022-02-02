<form method="POST" action="{{ route('statues.destroy', $statue->id) }}">
    @csrf
    @method('DELETE')
    <button class="btn btn-dark" type="submit">Törlés</button>
</form>
