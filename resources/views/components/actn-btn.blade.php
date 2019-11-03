<a class="btn shadow btn-success" href="{{route($lnk .'.edit', $item->id)}}" ><i class="fas fa-pencil-alt mr-2"></i>Edit</a>
<form method="POST" action="{{route($lnk .'.destroy', $item->id)}}" class="d-inline-block">
    @csrf
    @method("DELETE")
    <button onclick="return confirm('Are you sure you want to delete this data?')" type="submit"
        class="btn shadow btn-danger"><i class="fas fa-trash-alt mr-2"></i>Remove</button>
</form>