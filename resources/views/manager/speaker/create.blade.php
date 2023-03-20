<x-app-layout title="Add Speaker">
    @push('styles')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css">
        <link href="{{ asset('vault/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    @endpush
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">Speaker</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">New Speaker</a></li>
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
                                <h4 class="card-title">New Speaker</h4>
                                <a href="{{ route('manager.speaker.index') }}" class="btn btn-primary"><i class="icofont-reply"></i> Back</a>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mt-4">
                                        <form action="{{ route('manager.speaker.store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="title">Title</label>
                                                        <input type="text" name="title" class="form-control" id="title" placeholder="e.g Dr., Mr.">
                                                        @error('title')
                                                            <span class="error">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="name">Name</label>
                                                        <input type="text" name="name" class="form-control" id="name" placeholder="name of speaker">
                                                        @error('name')
                                                            <span class="error">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="role">Role</label>
                                                        <input type="text" name="role" class="form-control" id="role" placeholder="e.g Guest speaker">
                                                        @error('role')
                                                            <span class="error">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="country_id">Country</label>
                                                        <select name="country_id" class="form-select select2" id="country_id">
                                                            <option value=""></option>
                                                            @foreach($countries as $country)
                                                                <option value="{{ $country->id }}">{{ $country->country }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('country_id')
                                                            <span class="error">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="bio">Biography</label>
                                                <textarea name="bio" class="form-control" id="classic-editor" placeholder="bio here"></textarea>
                                                @error('bio')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <input type="file" name="avatar" class="dropify" data-allowed-file-extensions="jpeg jpg png webp" />
                                                    @error('avatar')
                                                        <span class="error">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="d-flex flex-wrap gap-3 mt-3">
                                                        <button type="submit" class="btn btn-primary  waves-effect waves-light">Submit <i class="uil uil-arrow-right ms-2"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
        <script src="{{ asset('vault/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}"></script>
        <script src="{{ asset('vault/libs/select2/js/select2.min.js') }}"></script><script src="{{ asset('vault/js/pages/form-advanced.init.js') }}"></script>
        <script>
            ClassicEditor
            .create( document.querySelector( '#classic-editor' ) )
            .catch( error => {
                console.error( error );
            } );

            $('.dropify').dropify({
                messages: {
                'default': 'Browse',
                'remove':  'Remove',
                'error':   'Sorry, file could not be loaded.'
                }
            });
        </script>
    @endpush
</x-app-layout>