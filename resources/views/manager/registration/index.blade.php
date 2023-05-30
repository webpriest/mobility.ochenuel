<x-app-layout title="Participants">
    @push('styles')
    <link href="{{ asset('vault/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    @endpush
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">Registered Participants</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Participants</a></li>
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
                            @include('layouts.partials._notification')

                            @if($users->isNotEmpty())
                            <table id="datatable" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Name</th>
                                    <th>E-mail/Phone</th>
                                    <th>Address</th>
                                    <th>Organisation</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $registration)
                                        <tr>
                                            <td>
                                                {{ $registration->created_at->format('F d, Y') }}
                                            </td>
                                            <td>
                                                <a href="{{ route('manager.registration.show', $registration) }}">
                                                    <strong>{{ $registration->full_name }}</strong><br>
                                                    <small>{{ $registration->token }}</small>
                                                </a>
                                            </td>
                                            <td>
                                                {{ $registration->email }}<br>
                                                {{ $registration->phone }}
                                            </td>
                                            <td>
                                                {{ $registration->address }}<br>
                                                {{ $registration->city }}, {{ $registration->country->country }}
                                            </td>
                                            <td>
                                                {{ $registration->organisation }}
                                            </td>
                                            <td>
                                                <a href="{{ route('manager.registration.show', $registration) }}" class="btn btn-outline-success btn-sm" title="View"><i class="icofont-eye"></i></a>
                                                
                                                <form class="delete-form" method="POST" action="{{ route('manager.registration.destroy', $registration)}}">
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