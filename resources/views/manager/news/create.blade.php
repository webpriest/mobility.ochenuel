<x-app-layout title="Add News">
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
                        <h4 class="mb-0">News</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">New News</a></li>
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
                                <h4 class="card-title">Add News Post</h4>
                                <a href="{{ route('manager.news.index') }}" class="btn btn-primary"><i class="icofont-reply"></i> Back</a>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mt-4">
                                        <form action="{{ route('manager.news.store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <label class="form-label" for="title">Title</label>
                                                <input type="text" name="title" class="form-control" id="title" placeholder="News post title">
                                                @error('title')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            
                                            <div class="mb-3">
                                                <label class="form-label" for="sub_title">Sub Title</label>
                                                <input type="text" name="sub_title" class="form-control" id="sub_title" placeholder="Sub title (if any)">
                                                @error('sub_title')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            
                                            <div class="mb-3">
                                                <label class="form-label" for="classic-editor">Content</label>
                                                <textarea name="content" class="form-control" id="classic-editor" placeholder="Content here"></textarea>
                                                @error('content')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="news_date">Date of event</label>
                                                                <input type="text" name="news_date" class="form-control" id="news_date" placeholder="Date" autocomplete="off">
                                                                @error('news_date')
                                                                    <span class="error">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="author">Author</label>
                                                                <input type="text" name="author" class="form-control" id="author" placeholder="News author">
                                                                @error('author')
                                                                    <span class="error">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="">
                                                        <label class="form-label" for="photo">Upload event photo</label>
                                                        <input type="file" name="photo" class="dropify" data-allowed-file-extensions="jpeg jpg png webp" />
                                                        @error('photo')
                                                            <span class="error">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                        
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.0/pikaday.min.js"></script>
        <script src="{{ asset('vault/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}"></script>

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
                field: document.getElementById('news_date'),
                format: 'YYYY-MM-DD',
                toString(date, format) {
                    const day = date.getDate();
                    const month = date.getMonth() + 1;
                    const year = date.getFullYear();
                    return `${year}-${month}-${day}`;
                }
            });

            ClassicEditor
            .create( document.querySelector('#classic-editor') )
            .catch( error => {
                console.error( error );
            } );
        </script>
    @endpush
</x-app-layout>