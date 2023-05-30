<x-app-layout title="Participant">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">SUMCOURSE Participant</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Participant</a></li>
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
                                <h4 class="card-title">{{ $registration->full_name }} ({{ $registration->token }})</h4>
                                <a href="{{ route('manager.registration.index') }}" class="btn btn-primary"><i class="icofont-reply"></i> Back</a>
                            </div>

                            <div class="row">
                                <div class="col-lg-5">
                                    <span>SUMCOURSE:</span> <strong>{{ $registration->sc_event->theme }}</strong>

                                    <div class="mt-4">
                                        <form class="delete-form" method="POST" action="{{ route('manager.registration.destroy', $registration)}}">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" onclick="return confirm('Are you sure you want to delete this record?')" class="btn btn-outline-danger btn-sm"><i class="icofont-delete"></i> Delete</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <span>E-mail:</span> <strong>{{ $registration->email }}</strong>
                                        </div>
                                        <div class="col-md-6">
                                            <span>Phone:</span> <strong>{{ $registration->phone }}</strong>
                                        </div>
                                        <div class="col-md-12">
                                            <span>Address:</span>
                                            <strong>{{ $registration->address }}, {{ $registration->city }}</strong>
                                        </div>
                                        <div class="col-md-4">
                                            <span>Country:</span> <strong>{{ $registration->country->country }}</strong>
                                        </div>
                                        <div class="col-md-8">
                                            <span>Organisation:</span> <strong>{{ $registration->organisation }}</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
</x-app-layout>