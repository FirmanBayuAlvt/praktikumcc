<?php

use App\Http\Controllers\AchievementController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\AssistanceController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CooperationController;
use App\Http\Controllers\DemographyController;
use App\Http\Controllers\GovernmentController;
use App\Http\Controllers\GrowthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfographicController;
use App\Http\Controllers\InnovationController;
use App\Http\Controllers\MonographyController;
use App\Http\Controllers\OpdController;
use App\Http\Controllers\PkkController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\RegulationController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/getBaseApiData', [ApiController::class, 'getBaseApiData'])->name('getBaseApiData');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/beranda/getApiData', [HomeController::class, 'getApiData'])->name('home.getApiData');

Route::get('/profil-sejarah', [ProfileController::class, 'index'])->name('profile');
Route::get('/profil-sejarah/getApiData', [ProfileController::class, 'getApiData'])->name('profile.getApiData');

Route::get('/pariwisata', [TourController::class, 'index'])->name('tour');
Route::get('/pariwisata/getApiData', [TourController::class, 'getApiData'])->name('tour.getApiData');

Route::get('/pemerintahan', [GovernmentController::class, 'index'])->name('government');
Route::get('/pemerintahan/getApiData', [GovernmentController::class, 'getApiData'])->name('government.getApiData');

Route::get('/demografi', [DemographyController::class, 'index'])->name('demography');
Route::get('/demografi/getApiData', [DemographyController::class, 'getApiData'])->name('demography.getApiData');

Route::get('/pemerintahan', [GovernmentController::class, 'index'])->name('government');
Route::get('/pemerintahan/getApiData', [GovernmentController::class, 'getApiData'])->name('government.getApiData');

Route::get('/kewilayahan', [RegionController::class, 'index'])->name('region');
Route::get('/kewilayahan/getApiData', [RegionController::class, 'getApiData'])->name('region.getApiData');

Route::get('/kemasyarakatan', [CommunityController::class, 'index'])->name('community');
Route::get('/kemasyarakatan/getApiData', [CommunityController::class, 'getApiData'])->name('community.getApiData');

Route::get('/pkk', [PkkController::class, 'index'])->name('pkk');
Route::get('/pkk/getApiData', [PkkController::class, 'getApiData'])->name('pkk.getApiData');

Route::get('/regulasi', [RegulationController::class, 'index'])->name('regulation');
Route::get('/regulasi/getApiData', [RegulationController::class, 'getApiData'])->name('regulation.getApiData');

Route::get('/perencanaan', [PlanController::class, 'index'])->name('plan');
Route::get('/perencanaan/getApiData', [PlanController::class, 'getApiData'])->name('plan.getApiData');

Route::get('/pembangunan', [GrowthController::class, 'index'])->name('growth');
Route::get('/pembangunan/getApiData', [GrowthController::class, 'getApiData'])->name('growth.getApiData');

Route::get('/inovasi', [InnovationController::class, 'index'])->name('innovation');
Route::get('/inovasi/getApiData', [InnovationController::class, 'getApiData'])->name('innovation.getApiData');

Route::get('/prestasi', [AchievementController::class, 'index'])->name('achievement');
Route::get('/prestasi/getApiData', [AchievementController::class, 'getApiData'])->name('achievement.getApiData');

Route::get('/kerjasama', [CooperationController::class, 'index'])->name('cooperation');
Route::get('/kerjasama/getApiData', [CooperationController::class, 'getApiData'])->name('cooperation.getApiData');

Route::get('/bantuan', [AssistanceController::class, 'index'])->name('assistance');
Route::get('/bantuan/getApiData', [AssistanceController::class, 'getApiData'])->name('assistance.getApiData');

Route::get('/hubungi-kami', [ContactUsController::class, 'index'])->name('contactUs');
Route::get('/hubungi-kami/getApiData', [ContactUsController::class, 'getApiData'])->name('contactUs.getApiData');

Route::get('/opd', [OpdController::class, 'index'])->name('opd');
Route::get('/opd/getApiData', [OpdController::class, 'getApiData'])->name('opd.getApiData');

Route::get('/pengaduan', [ComplaintController::class, 'index'])->name('complaint');
Route::get('/pengaduan/getApiData', [ComplaintController::class, 'getApiData'])->name('complaint.getApiData');
Route::post('/pengaduan/submit', [ComplaintController::class, 'submit'])->name('complaint.submit');

Route::get('/video-kegiatan', [VideoController::class, 'index'])->name('video');
Route::get('/video-kegiatan/getApiData', [VideoController::class, 'getApiData'])->name('video.getApiData');

Route::get('/kelurahan-dalam-angka', [MonographyController::class, 'index'])->name('monography');
Route::get('/kelurahan-dalam-angka/getApiData', [MonographyController::class, 'getApiData'])->name('monography.getApiData');

Route::get('/infografis', [InfographicController::class, 'index'])->name('infographic');
Route::get('/infografis/getApiData', [InfographicController::class, 'getApiData'])->name('infographic.getApiData');
