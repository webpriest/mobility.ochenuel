<x-app-layout title="SUMCourse Lecture">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">{{ $lecture->sc_event->theme }} Lectures</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">SUMCourse</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-8">
                                <h4 class="card-title">{{ $lecture->topic }}</h4>
                                <a href="{{ route('manager.sumcourse.lecture.index') }}" class="btn btn-primary"><i class="icofont-reply"></i> Back to Lectures</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <livewire:main.sumcourse.lecturedoc.lecture-docs :lecture="$lecture" />
        </div>
    </div>

    @push('scripts')
        
    @endpush
</x-app-layout>