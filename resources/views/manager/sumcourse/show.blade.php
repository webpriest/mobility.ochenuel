<x-app-layout title="SUMCourse">
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
                                <h4 class="card-title">Theme: {{ $sumcourse->theme }}</h4>
                                <a href="{{ route('manager.sumcourse.index') }}" class="btn btn-primary"><i class="icofont-reply"></i> Back</a>
                            </div>

                            <div class="row">
                                <div class="col-lg-5">
                                    <img src="{{ $sumcourse->badge() }}" alt="{{ $sumcourse->title }}" width="100%">
                                    <div class="mt-4">
                                        <a href="{{ route('manager.sumcourse.edit', $sumcourse) }}" class="btn btn-outline-warning btn-sm"><i class="icofont-edit" title="Edit"></i> Edit</a>
                                        <form class="delete-form" method="POST" action="{{ route('manager.sumcourse.destroy', $sumcourse)}}">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" onclick="return confirm('Are you sure you want to delete this record?')" class="btn btn-outline-danger btn-sm"><i class="icofont-delete"></i> Delete</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="mt-4 mt-xl-3">
                                        <i class="icofont-tag"></i> Sub Theme: <strong>{{ $sumcourse->sub_theme }}</strong>
                                    </div>
                                    <div class="mt-4 mt-xl-3">
                                        <i class="icofont-location-pin"></i> Venue: <strong>{{ $sumcourse->address }}</strong>
                                    </div>
                                    <div class="mt-4 mt-xl-3">
                                        <i class="icofont-location-pin"></i> City: <strong>{{ $sumcourse->city }}</strong>
                                    </div>
                                    <div class="mt-4 mt-xl-3">
                                        <i class="icofont-map"></i> Country: <strong>{{ $sumcourse->country->country }}</strong>
                                    </div>
                                    <div class="mt-4 mt-xl-3">
                                        <i class="icofont-calendar"></i> Event Date: <strong>{{ $sumcourse->event_date->format('F d, Y') }}</strong>
                                    </div>
                                    <div class="mt-4 mt-xl-3">
                                        <i class="icofont-clock-time"></i> Event Time: <strong>{{ $sumcourse->event_time->format('H:i A') }}</strong>
                                    </div>
                                    <div class="mt-4 mt-xl-3">
                                        <i class="icofont-clock-time"></i> Number of Days: <strong>{{ $sumcourse->days }}</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
            <!-- end row -->

            <livewire:main.sumcourse.gallery :sumcourse="$sumcourse" />

        </div> <!-- container-fluid -->
    </div>
</x-app-layout>