<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\NominationController;
use App\Http\Controllers\VoteController;

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/election-results', [HomeController::class, 'electionresults'])->name('electionresults');
Route::get('/election-started', [HomeController::class, 'startelection'])->name('startelection');
Route::get('/election-ended', [HomeController::class, 'endelection'])->name('endelection');
Route::get('/election-reset', [HomeController::class, 'reset'])->name('reset');


Route::post('/confirm-member', [MemberController::class, 'checkmember'])->name('check.member');
#Route::post('/confirm-member', [MemberController::class, 'checkmember'])->name('check.member');
Route::resource('members', MemberController::class);

Route::get('/nomination/form', [NominationController::class, 'form'])->name('nomination.form');
Route::get('/candidates/list', [NominationController::class, 'list'])->name('candidates.list');
Route::resource('nomination', NominationController::class)->only(['index', 'store']);
#Route::resource('votes', VoteController::class)->only(['index', 'store']);

Route::get('accreditation', [VoteController::class, 'accreditation'])->name('accreditation');
Route::post('accreditate', [VoteController::class, 'accreditate'])->name('accreditate');
Route::get('ballotcard', [VoteController::class, 'ballotcard'])->name('ballotcard');
Route::post('votes', [VoteController::class, 'store'])->name('vote.store');
Route::get('vote/results', [VoteController::class, 'voteresult'])->name('vote.result');
Route::get('statistics', [VoteController::class, 'statistics'])->name('statistics');
