<x-app-layout title="SUMCourse">
    @push('styles')
    <link href="{{ asset('vault/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    @endpush
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">SUMCourse</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">SUMCourse</a></li>
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
                                <h4 class="card-title">SUMCourse Events</h4>
                                <a href="{{ route('manager.sumcourse.create') }}" class="btn btn-primary"><i class="icofont-plus"></i> Add</a>
                            </div>

                            @include('layouts.partials._notification')

                            @if($sumcourses->isNotEmpty())
                            <table id="datatable" class="table table-striped table-bordered" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Theme</th>
                                    <th>Venue</th>
                                    <th>Date</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($sumcourses as $sumcourse)
                                        <tr>
                                            <td>
                                                <img src="{{ $sumcourse->badge() }}" width="80" alt="{{ $sumcourse->theme }}">
                                            </td>
                                            <td>
                                                <strong>{{ $sumcourse->theme }}</strong><br>
                                                <small>{{ $sumcourse->sub_theme }}</small>
                                            </td>
                                            <td>
                                                {{ $sumcourse->address }}<br>
                                                <small>
                                                    <i class="icofont-clock-time"></i> {{ $sumcourse->event_time->format('H:i A') }}
                                                </small>
                                            </td>
                                            <td>
                                                {{ $sumcourse->event_date->format('F d, Y') }}<br>
                                                {{ $sumcourse->days > 1 ? $sumcourse->days.' days' : $sumcourse->days.' day' }}
                                            </td>
                                            <td width="100">
                                                <a href="{{ route('manager.sumcourse.show', $sumcourse) }}" class="btn btn-outline-success btn-sm" title="View"><i class="icofont-eye"></i></a>
                                                <a href="{{ route('manager.sumcourse.gallery.index', $sumcourse) }}" class="btn btn-outline-info btn-sm" title="Gallery"><i class="icofont-camera"></i></a>
                                                <a href="{{ route('manager.sumcourse.flyer.index', $sumcourse) }}" class="btn btn-outline-success btn-sm" title="Flyer"><i class="icofont-ui-image"></i></a>
                                                <a href="{{ route('manager.sumcourse.edit', $sumcourse) }}" class="btn btn-outline-warning btn-sm"><i class="icofont-edit" title="Edit"></i></a>
                                                <form class="delete-form" method="POST" action="{{ route('manager.sumcourse.destroy', $sumcourse)}}">
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