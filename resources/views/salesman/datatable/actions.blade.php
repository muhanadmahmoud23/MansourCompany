<div class="actions">


    <form action="{{ route('salesMan.destroy', $id) }}" method="POST">
        <a href="{{ route('salesMan.edit', $id) }}" class="btn btn-info text-white ml-3">Edit</a>

        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger" onclick="return confirm('Sure Want Delete?')">Delete</button>
    </form>

</div>
