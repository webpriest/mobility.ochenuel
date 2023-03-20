<x-app-layout title="Contact Messages">
    @push('styles')
    <link href="{{ asset('vault/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    @endpush
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">Contact Messages</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Contact Messages</a></li>
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
                                <h4 class="card-title">Recent Contacts</h4>
                            </div>

                            @include('layouts.partials._notification')

                            @if($contacts->isNotEmpty())
                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Date</th>
                                    <th>Name</th>
                                    <th>Message</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($contacts as $contact)
                                        <tr class="{{ $contact->read_at ? '' : 'bold' }}">
                                            <td></td>
                                            <td>
                                                {{ $contact->created_at->format('F d, Y') }}
                                            </td>
                                            <td>
                                                <a href="{{ route('manager.contact.show', $contact) }}" title="View">
                                                {{ $contact->name }}
                                                </a>
                                            </td>
                                            <td>{{ Str::limit($contact->message, 100, '...') }}</td>
                                            <td>
                                                <a href="{{ route('manager.contact.show', $contact) }}" class="btn btn-outline-success btn-sm" title="View"><i class="icofont-eye"></i></a>
                                                
                                                <form class="delete-form" method="POST" action="{{ route('manager.contact.destroy', $contact)}}">
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