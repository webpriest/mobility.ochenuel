<x-app-layout title="News Gallery">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">News Post Photos</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">News</a></li>
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
                                <h4 class="card-title">News Posts</h4>
                                <a href="{{ route('manager.news.index') }}" class="btn btn-primary"><i class="icofont-reply"></i> Back to News</a>
                            </div>

                            <livewire:main.news.gallery :post="$post" />
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
            <!-- end row -->

        </div>
    </div>

    @push('scripts')
        
    @endpush
</x-app-layout>