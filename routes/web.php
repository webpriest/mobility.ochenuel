<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SpeakerController;
use App\Http\Controllers\BikeshareController;
use App\Http\Controllers\ExpertiseController;
use App\Http\Controllers\SumCourseController;
use App\Http\Controllers\OpenstreetController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\OpenstreetEventController;
use App\Http\Controllers\Manager\DashboardController;
use App\Http\Controllers\Manager\NewsAdminController;
use App\Http\Controllers\Manager\NewsGalleryController;
use App\Http\Controllers\Manager\ContactAdminController;
use App\Http\Controllers\Manager\PartnerAdminController;
use App\Http\Controllers\Manager\SpeakerAdminController;
use App\Http\Controllers\Manager\BikeshareAdminController;
use App\Http\Controllers\Manager\ExpertiseAdminController;
use App\Http\Controllers\Manager\SumCourseAdminController;
use App\Http\Controllers\Manager\SumCourseFlyerController;
use App\Http\Controllers\Manager\OpenstreetAdminController;
use App\Http\Controllers\Manager\SumCourseReportController;
use App\Http\Controllers\Manager\BikeshareGalleryController;
use App\Http\Controllers\Manager\SumCourseGalleryController;
use App\Http\Controllers\Manager\SumCourseLectureController;
use App\Http\Controllers\Manager\OpenstreetGalleryController;
use App\Http\Controllers\Manager\RegistrationAdminController;
use App\Http\Controllers\Manager\SumCourseLectureDocController;
use App\Http\Controllers\SumCourseReportController as SCReport;
use App\Http\Controllers\Manager\OpenstreetEventAdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class)->name('home');
Route::group(['prefix'=>'about'], function(){
    Route::get('/who-we-are', [AboutController::class, 'index'])->name('about.index');
    Route::get('/vision-and-mission', [AboutController::class, 'vision'])->name('about.vision');
    Route::get('/administrative-structure', [AboutController::class, 'administration'])->name('about.administration');
});

Route::group(['prefix'=>'sumcourse'], function(){
    Route::get('/', [SumCourseController::class, 'index'])->name('sumcourse.index');
    Route::get('/{sumcourse}', [SumCourseController::class, 'show'])->name('sumcourse.show');
    Route::get('/flyer/{flyer}', [SumCourseController::class, 'flyer'])->name('sumcourse.flyer');
    Route::get('/flyer/download/{flyer}', [SumCourseController::class, 'download'])->name('sumcourse.flyer.download');
});

Route::group(['prefix'=>'sumcourse/report'], function(){
    Route::get('/{sumcourse}', [SCReport::class, 'index'])->name('sumcourse.report.index');
    Route::get('/show/{report}', [SCReport::class, 'show'])->name('sumcourse.report.show');
    Route::get('/download/{report}', [SCReport::class, 'download'])->name('sumcourse.report.download');
});

Route::get('/gallery', GalleryController::class)->name('gallery.index');

Route::get('/bikeshare', BikeshareController::class)->name('bikeshare.index');
Route::get('/openstreet', OpenstreetController::class)->name('openstreet.index');

Route::get('/openstreet/event', [OpenstreetEventController::class, 'index'])->name('openstreet.event.index');
Route::get('/openstreet/event/{openstreetevent}', [OpenstreetEventController::class, 'show'])->name('openstreet.event.show');
Route::get('/openstreet/event/flyer/{flyer}', [OpenstreetEventController::class, 'flyer'])->name('openstreet.event.flyer');

Route::get('/speakers', [SpeakerController::class, 'index'])->name('speaker.index');
Route::get('/speakers/{speaker}', [SpeakerController::class, 'show'])->name('speaker.show');

Route::get('/expertise/{expertise}', ExpertiseController::class)->name('expertise.show');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');

Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{post}', [NewsController::class, 'show'])->name('news.show');

Route::get('/registration', RegistrationController::class)->name('registration.index');

// ADMIN
Route::group(['prefix'=>'main', 'middleware'=>['auth']], function(){
    Route::get('/', DashboardController::class)->name('dashboard');

    // SUMCourse
    Route::group(['prefix'=>'sumcourse'], function(){
        Route::get('/', [SumCourseAdminController::class, 'index'])->name('manager.sumcourse.index');
        Route::get('/create', [SumCourseAdminController::class, 'create'])->name('manager.sumcourse.create');
        Route::get('/{sumcourse}', [SumCourseAdminController::class, 'show'])->name('manager.sumcourse.show');
        Route::post('/create', [SumCourseAdminController::class, 'store'])->name('manager.sumcourse.store');
        Route::get('/{sumcourse}/edit', [SumCourseAdminController::class, 'edit'])->name('manager.sumcourse.edit');
        Route::patch('/{sumcourse}', [SumCourseAdminController::class, 'update'])->name('manager.sumcourse.update');
        Route::delete('/{sumcourse}', [SumCourseAdminController::class, 'destroy'])->name('manager.sumcourse.destroy');
    });

    // SUMCourse Gallery
    Route::group(['prefix'=>'sumcourse/gallery'], function(){
        Route::get('/{sumcourse}', [SumCourseGalleryController::class, 'index'])->name('manager.sumcourse.gallery.index');
    });

    // SUMCourse Flyer
    Route::group(['prefix'=>'sumcourse/flyer'], function(){
        Route::get('/{sumcourse}', [SumCourseFlyerController::class, 'index'])->name('manager.sumcourse.flyer.index');
    });

    // SUMCourse Lecture
    Route::group(['prefix'=>'sumcourse/event/lecture'], function(){
        Route::get('/', [SumCourseLectureController::class, 'index'])->name('manager.sumcourse.lecture.index');
        Route::get('/create/{sumcourse}/lecture', [SumCourseLectureController::class, 'create'])->name('manager.sumcourse.lecture.create');
        Route::get('/{sumcourse}', [SumCourseLectureController::class, 'lectures'])->name('manager.sumcourse.lecture.lectures');
        Route::get('/presentation/{lecture}', [SumCourseLectureController::class, 'show'])->name('manager.sumcourse.lecture.show');
    });

    // SUMCourse Lecture Document
    Route::group(['prefix'=>'sumcourse/event/lecture/document'], function(){
        Route::get('/{doc}', SumCourseLectureDocController::class)->name('manager.sumcourse.lecturedoc.preview');
    });

    // SUMCourse Report
    Route::group(['prefix'=>'sumcourse/event/report'], function(){
        Route::get('/', [SumCourseReportController::class, 'index'])->name('manager.sumcourse.report.index');
        Route::get('/{report}', [SumCourseReportController::class, 'show'])->name('manager.sumcourse.report.show');
        Route::get('/cover-image/{report}', [SumCourseReportController::class, 'image'])->name('manager.sumcourse.report.image');
    });

    // Partners
    Route::group(['prefix'=>'partner'], function(){
        Route::get('/', PartnerAdminController::class)->name('manager.partner.index');
    });

    // Bike Share
    Route::group(['prefix'=>'bikeshare'], function(){
        Route::get('/', [BikeshareAdminController::class, 'index'])->name('manager.bikeshare.index');
        Route::get('/create', [BikeshareAdminController::class, 'create'])->name('manager.bikeshare.create');
        Route::get('/{bikeshare}', [BikeshareAdminController::class, 'show'])->name('manager.bikeshare.show');
        Route::post('/create', [BikeshareAdminController::class, 'store'])->name('manager.bikeshare.store');
        Route::get('/{bikeshare}/edit', [BikeshareAdminController::class, 'edit'])->name('manager.bikeshare.edit');
        Route::patch('/{bikeshare}', [BikeshareAdminController::class, 'update'])->name('manager.bikeshare.update');
        Route::delete('/{bikeshare}', [BikeshareAdminController::class, 'destroy'])->name('manager.bikeshare.destroy');
    });
    
    // Bike Share Gallery
    Route::group(['prefix'=>'bikeshare/gallery'], function(){
        Route::get('/{bikeshare}', [BikeshareGalleryController::class, 'index'])->name('manager.bikeshare.gallery.index');
        Route::post('/new', [BikeshareGalleryController::class, 'store'])->name('manager.bikeshare.gallery.store');
        Route::delete('/{gallery}', [BikeshareGalleryController::class, 'destroy'])->name('manager.bikeshare.gallery.destroy');
    });

    // Bike Share
    Route::group(['prefix'=>'expertise'], function(){
        Route::get('/', [ExpertiseAdminController::class, 'index'])->name('manager.expertise.index');
        Route::get('/create', [ExpertiseAdminController::class, 'create'])->name('manager.expertise.create');
        Route::get('/{expertise}', [ExpertiseAdminController::class, 'show'])->name('manager.expertise.show');
        Route::post('/create', [ExpertiseAdminController::class, 'store'])->name('manager.expertise.store');
        Route::get('/{expertise}/edit', [ExpertiseAdminController::class, 'edit'])->name('manager.expertise.edit');
        Route::patch('/{expertise}', [ExpertiseAdminController::class, 'update'])->name('manager.expertise.update');
        Route::delete('/{expertise}', [ExpertiseAdminController::class, 'destroy'])->name('manager.expertise.destroy');
    });

    // Speakers
    Route::group(['prefix'=>'speaker'], function(){
        Route::get('/', [SpeakerAdminController::class, 'index'])->name('manager.speaker.index');
        Route::get('/create', [SpeakerAdminController::class, 'create'])->name('manager.speaker.create');
        Route::get('/{speaker}', [SpeakerAdminController::class, 'show'])->name('manager.speaker.show');
        Route::post('/create', [SpeakerAdminController::class, 'store'])->name('manager.speaker.store');
        Route::get('/{speaker}/edit', [SpeakerAdminController::class, 'edit'])->name('manager.speaker.edit');
        Route::patch('/{speaker}', [SpeakerAdminController::class, 'update'])->name('manager.speaker.update');
        Route::delete('/{speaker}', [SpeakerAdminController::class, 'destroy'])->name('manager.speaker.destroy');
    });

    // OpenStreets
    Route::group(['prefix'=>'openstreet'], function(){
        Route::get('/', [OpenstreetAdminController::class, 'index'])->name('manager.openstreet.index');
        Route::get('/create', [OpenstreetAdminController::class, 'create'])->name('manager.openstreet.create');
        Route::get('/{openstreet}', [OpenstreetAdminController::class, 'show'])->name('manager.openstreet.show');
        Route::post('/create', [OpenstreetAdminController::class, 'store'])->name('manager.openstreet.store');
        Route::get('/{openstreet}/edit', [OpenstreetAdminController::class, 'edit'])->name('manager.openstreet.edit');
        Route::patch('/{openstreet}', [OpenstreetAdminController::class, 'update'])->name('manager.openstreet.update');
        Route::delete('/{openstreet}', [OpenstreetAdminController::class, 'destroy'])->name('manager.openstreet.destroy');
    });

    // OpenStreet Events
    Route::group(['prefix'=>'event/openstreet'], function(){
        Route::get('/', [OpenstreetEventAdminController::class, 'index'])->name('manager.openstreet.event.index');
        Route::get('/create', [OpenstreetEventAdminController::class, 'create'])->name('manager.openstreet.event.create');
        Route::get('/{openstreetevent}', [OpenstreetEventAdminController::class, 'show'])->name('manager.openstreet.event.show');
        Route::get('/{openstreetevent}/edit', [OpenstreetEventAdminController::class, 'edit'])->name('manager.openstreet.event.edit');
        Route::delete('/{openstreetevent}', [OpenstreetEventAdminController::class, 'destroy'])->name('manager.openstreet.event.destroy');
    });

    // OpenStreet Event Gallery
    Route::group(['prefix'=>'event/openstreet/gallery'], function(){
        Route::get('/{openstreetevent}', [OpenstreetGalleryController::class, 'index'])->name('manager.openstreet.gallery.index');
        Route::delete('/{gallery}', [OpenstreetGalleryController::class, 'destroy'])->name('manager.openstreet.gallery.destroy');
    });

    // News
    Route::group(['prefix'=>'news'], function(){
        Route::get('/', [NewsAdminController::class, 'index'])->name('manager.news.index');
        Route::get('/create', [NewsAdminController::class, 'create'])->name('manager.news.create');
        Route::get('/{post}', [NewsAdminController::class, 'show'])->name('manager.news.show');
        Route::post('/create', [NewsAdminController::class, 'store'])->name('manager.news.store');
        Route::get('/{post}/edit', [NewsAdminController::class, 'edit'])->name('manager.news.edit');
        Route::patch('/{post}', [NewsAdminController::class, 'update'])->name('manager.news.update');
        Route::delete('/{post}', [NewsAdminController::class, 'destroy'])->name('manager.news.destroy');
    });

    // News Gallery
    Route::group(['prefix'=>'news/gallery'], function(){
        Route::get('/{post}', [NewsGalleryController::class, 'index'])->name('manager.news.gallery.index');
        Route::delete('/{gallery}', [NewsGalleryController::class, 'destroy'])->name('manager.news.gallery.destroy');
    });

    // Registered SUMCOURSE users
    Route::group(['prefix'=>'registration'], function(){
        Route::get('/', [RegistrationAdminController::class, 'index'])->name('manager.registration.index');
        Route::get('/{registration}', [RegistrationAdminController::class, 'show'])->name('manager.registration.show');
        Route::delete('/{registration}', [RegistrationAdminController::class, 'destroy'])->name('manager.registration.destroy');
    });

    // Contact messages
    Route::group(['prefix'=>'contact'], function(){
        Route::get('/', [ContactAdminController::class, 'index'])->name('manager.contact.index');
        Route::get('/{contact}', [ContactAdminController::class, 'show'])->name('manager.contact.show');
        Route::delete('/{contact}', [ContactAdminController::class, 'destroy'])->name('manager.contact.destroy');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
