<div>
    @if($os_events->isNotEmpty())
    <table id="datatable" class="table table-striped table-bordered" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
        <thead>
        <tr>
            <th></th>
            <th>Title</th>
            <th>Venue</th>
            <th>Date</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
            @foreach($os_events as $event)
                <tr>
                    <td>
                        <img src="{{ $event->photo() }}" width="80" alt="{{ $event->title }}">
                    </td>
                    <td>
                        <strong>{{ $event->title }}</strong><br>
                        <small>{{ $event->sub_title }}</small>
                    </td>
                    <td>
                        {{ $event->location }}<br>
                        <small>
                            <i class="icofont-clock-time"></i> {{ $event->os_time->format('H:i A') }}
                        </small>
                    </td>
                    <td>
                        {{ $event->os_date->format('F d, Y') }}<br>
                        {{ $event->days > 1 ? $event->days.' days' : $event->days.' day' }}
                    </td>
                    <td width="100">
                        <a href="{{ route('manager.openstreet.event.show', $event) }}" class="btn btn-outline-success btn-sm" title="View"><i class="icofont-eye"></i></a>
                        {{-- <a href="{{ route('manager.openstreet.gallery.index', $event) }}" class="btn btn-outline-info btn-sm" title="Gallery"><i class="icofont-camera"></i></a>
                        <a href="{{ route('manager.openstreet.flyer.index', $event) }}" class="btn btn-outline-success btn-sm" title="Flyer"><i class="icofont-ui-image"></i></a> --}}
                        <a href="{{ route('manager.openstreet.event.edit', $event) }}" class="btn btn-outline-warning btn-sm"><i class="icofont-edit" title="Edit"></i></a>
                        <form class="delete-form" method="POST" action="{{ route('manager.openstreet.event.destroy', $event)}}">
                            @method('delete')
                            @csrf
                            <button type="submit" title="Delete" onclick="return confirm('Are you sure you want to delete this record?')" class="btn btn-outline-danger btn-sm"><i class="icofont-delete"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @else
        <p class="alert alert-warning">No record</p>
    @endif
</div>
