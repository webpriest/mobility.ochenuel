<x-app-layout title="Edit SUMCourse">
    @push('styles')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.0/css/pikaday.css">
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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Update SUMCourse</a></li>
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
                                <h4 class="card-title">Edit {{ $sumcourse->theme }}</h4>
                                <a href="{{ route('manager.sumcourse.index') }}" class="btn btn-primary"><i class="icofont-reply"></i> Back</a>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mt-4">
                                        <livewire:main.sumcourse.edit-sumcourse :sumcourse="$sumcourse" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @push('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.0/pikaday.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
        <script src="{{ asset('vault/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}"></script>

        <!-- form mask init -->
        <script src="{{ asset('vault/js/pages/form-mask.init.js') }}"></script>

        <!-- init js -->
        <script src="{{ asset('vault/js/pages/form-advanced.init.js') }}"></script>
        <script>
            $('.dropify').dropify({
                messages: {
                'default': 'Browse',
                'remove':  'Remove',
                'error':   'Sorry, file could not be loaded.'
                }
            });

            new Pikaday({
                field: document.getElementById('event_date'),
                format: 'YYYY-MM-DD',
                toString(date, format) {
                    const day = date.getDate();
                    const month = date.getMonth() + 1;
                    const year = date.getFullYear();
                    return `${year}-${month}-${day}`;
                }
            });
        </script>
    @endpush
</x-app-layout>