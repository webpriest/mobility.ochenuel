<x-app-layout title="SUMCourse Lecture">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">SUMCourse Lecture</h4>

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
                                <h4 class="card-title">Recent SUMCourse Lectures</h4>
                                <a href="{{ route('manager.sumcourse.index') }}" class="btn btn-primary"><i class="icofont-reply"></i> Back to SUMCourse</a>
                            </div>

                            @if($sumcourses->isNotEmpty())
                            <div class="row">
                                @foreach($sumcourses as $sumcourse)        
                                    <div class="col-lg-4">
                                        <div class="card">
                                            <div class="card-header">
                                                SUMCourse
                                            </div><!-- end cardheader --> 
                                            <div class="card-body">
                                                <h4 class="card-title">{{ $sumcourse->theme }}</h4>
                                                <p class="card-text">{{ $sumcourse->date_range() }}</p>
                                                <a href="{{ route('manager.sumcourse.lecture.lectures', $sumcourse) }}" class="btn btn-primary waves-effect waves-light">See Lectures</a>
                                            </div><!-- end cardbody -->
                                            <div class="card-footer text-muted">
                                                {{ $sumcourse->lectures->count() }} Lectures
                                            </div><!-- end cardfooter -->
                                        </div><!-- end card -->
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