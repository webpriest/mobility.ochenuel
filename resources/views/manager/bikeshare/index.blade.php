<x-app-layout title="Bike Share">
    @push('styles')
    <link href="{{ asset('vault/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    @endpush
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">Bike Share</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Bike Share</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-8">
                                <h4 class="card-title">Bike Share Events</h4>
                                <a href="{{ route('manager.bikeshare.create') }}" class="btn btn-primary"><i class="icofont-plus"></i> Add</a>
                            </div>

                            @include('layouts.partials._notification')

                            @if($bikeshares->isNotEmpty())
                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Title</th>
                                    <th>Excerpt</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($bikeshares as $bikeshare)
                                        <tr>
                                            <td>
                                                <img src="{{ $bikeshare->photo() }}" width="80" alt="{{ $bikeshare->title }}">
                                            </td>
                                            <td>
                                                <strong>{{ $bikeshare->title }}</strong><br>
                                                <small>{{ $bikeshare->created_at->format('F d, Y') }}</small>
                                            </td>
                                            <td>{!! Str::limit($bikeshare->content, 100, '...') !!}</td>
                                            <td>
                                                <a href="{{ route('manager.bikeshare.show', $bikeshare) }}" class="btn btn-outline-success btn-sm" title="View"><i class="icofont-eye"></i></a>
                                                <a href="{{ route('manager.bikeshare.edit', $bikeshare) }}" class="btn btn-outline-warning btn-sm"><i class="icofont-edit" title="Edit"></i></a>
                                                <form class="delete-form" method="POST" action="{{ route('manager.bikeshare.destroy', $bikeshare)}}">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" onclick="return confirm('Are you sure you want to delete this record?')" class="btn btn-outline-danger btn-sm"><i class="icofont-delete"></i></button>
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
                    </div>
                </div> <!-- end col -->
            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>

    @push('scripts')
        <!-- Datatable init js -->
        <script src="{{ asset('vault/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('vault/js/pages/datatables.init.js') }}"></script>
    @endpush
</x-app-layout>