<x-app-layout title="SUMCourse Lectures">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">SUMCourse Lectures</h4>

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
                                <h4 class="card-title">{{ $sumcourse->theme }} Lectures</h4>
                                <div class="right">
                                    <a href="{{ route('manager.sumcourse.lecture.index') }}" class="btn btn-primary"><i class="icofont-reply"></i> Back to SUMCourses</a>
                                    <a href="{{ route('manager.sumcourse.lecture.create', $sumcourse) }}" class="btn btn-success"><i class="icofont-plus"></i> Add Lecture</a>
                                </div>
                            </div>

                            @if($sumcourse->lectures->isNotEmpty())
                            <div class="row">
                                @foreach($sumcourse->lectures as $lecture)        
                                <div class="col-lg-6">
                                    <div class="card">
                                        <a href="{{ route('manager.sumcourse.lecture.show', $lecture) }}">
                                        <div class="row g-0 align-items-center">
                                                <div class="col-md-4">
                                                    <img class="card-img img-fluid" src="{{ asset('storage/img/pdf-attached.webp') }}" alt="PDF">
                                                </div><!-- end col-->
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{ $lecture->topic }}</h5>
                                                        <p class="card-text">Speaker: <strong>{{ $lecture->speaker->name }}</strong></p>
                                                        <p class="">Day: <strong>{{ $lecture->lecture_day }}</strong></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @endif
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