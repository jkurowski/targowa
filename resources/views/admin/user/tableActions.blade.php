<div class="btn-group">
    <a href="{{route('admin.log.show', $row->id)}}" class="btn action-button me-1" data-bs-toggle="tooltip" data-placement="top" data-bs-title="Pokaż aktywność"><i class="fe-activity"></i></a>
    <a href="{{route('admin.user.edit', $row->id)}}" class="btn action-button me-1" data-bs-toggle="tooltip" data-placement="top" data-bs-title="Edytuj"><i class="fe-edit"></i></a>
    <form method="POST" action="{{route('admin.user.destroy', $row->id)}}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button type="submit" class="btn action-button confirm" data-bs-toggle="tooltip" data-placement="top" data-bs-title="Usuń" data-id="{{ $row->id }}"><i class="fe-trash-2"></i></button>
    </form>
</div>