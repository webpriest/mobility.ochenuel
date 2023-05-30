<x-app-layout title="SUMCourse Report">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">{{ $report->sc_event->theme }}</h4>

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
                                <h4 class="card-title">{{ $report->title }}</h4>
                                <div>
                                    <a href="{{ route('manager.sumcourse.report.image', $report) }}" class="btn btn-warning"><i class="icofont-image"></i> Add Cover Photo</a>
                                    <a href="{{ route('manager.sumcourse.report.index') }}" class="btn btn-primary"><i class="icofont-reply"></i> Back to SUMCourse Reports</a>
                                </div>
                            </div>

                            <div class="pdf-doc">
                                <iframe src="{{ $report->pdf() }}" width="100%" height="100%"></iframe>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>

    @push('scripts')
        
    @endpush
</x-app-layout>