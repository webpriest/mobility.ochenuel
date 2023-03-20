<x-app-layout title="Edit Expertise">
    @push('styles')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css">
    @endpush
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">Expertise</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Update Expertise</a></li>
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
                                <h4 class="card-title">New Expertise</h4>
                                <a href="{{ route('manager.expertise.index') }}" class="btn btn-primary"><i class="icofont-reply"></i> Back</a>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mt-4">
                                        <form action="{{ route('manager.expertise.update', $expertise) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PATCH')
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="title">Title</label>
                                                        <input type="text" name="title" class="form-control" id="title" 
                                                        value="{{ old('title', $expertise->title) }}" placeholder="Expertise title">
                                                        @error('title')
                                                            <span class="error">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="icon">Icon</label>
                                                        <input type="text" name="icon" class="form-control" id="icon" value="{{ old('icon', $expertise->icon) }}" placeholder="icofont-">
                                                        @error('icon')
                                                            <span class="error">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="content">Content</label>
                                                <textarea name="content" class="form-control" id="classic-editor" placeholder="Content here">{{ old('content', $expertise->content) }}</textarea>
                                                @error('content')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <input type="file" name="photo" class="dropify" data-allowed-file-extensions="jpeg jpg png webp"
                                                    @if($expertise->photo)
                                                        data-default-file="{{ $expertise->photo() }}"
                                                    @endif
                                                    >
                                                    @error('photo')
                                                        <span class="error">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="d-flex flex-wrap gap-3 mt-3">
                                                        <button type="submit" class="btn btn-primary  waves-effect waves-light">Update <i class="uil uil-arrow-right ms-2"></i></button>
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