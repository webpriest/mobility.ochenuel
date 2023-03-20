<x-app-layout title="Contact message">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">Contact message</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Contact message</a></li>
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
                                <h4 class="card-title">{{ $contact->name }}</h4>
                                <a href="{{ route('manager.contact.index') }}" class="btn btn-primary"><i class="icofont-reply"></i> Back</a>
                            </div>

                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="">
                                        <span>E-mail: <strong>{{ $contact->email }}</strong></span>
                                    </div>
                                    <div class="mt-4">
                                        <form class="delete-form" method="POST" action="{{ route('manager.contact.destroy', $contact)}}">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" onclick="return confirm('Are you sure you want to delete this record?')" class="btn btn-outline-danger btn-sm"><i class="icofont-delete"></i> Delete</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="">
                                        Subject: <strong>{{ $contact->subject }}</strong>
                                    </div>
                                    <div class="mt-4 mt-xl-3">
                                        {!! $contact->message !!}
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