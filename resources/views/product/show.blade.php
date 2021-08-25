<form action="{{ route('product.remove', $pro->id) }}" method="post">
    @csrf
    @method('delete')
        <a type="submit" name="submit" type="submit" class="btn btn-outline-danger"  onclick="return confirm('¿Estas seguro que quieres Eliminar el Registro?')"><i class="fa fa-trash"></i><br> Remove</a>
</form>
