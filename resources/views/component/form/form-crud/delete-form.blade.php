<form action="{{ route('upload.destroy',$upload) }}" method="post" style="display: contents;">
    @csrf
    @method('DELETE')

    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
</form>
