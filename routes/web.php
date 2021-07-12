<?php

use App\Http\Controllers\BusinessController;
use App\Http\Controllers\ChatsController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\InvestmentController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DrafterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TermsOfUseController;
use App\Http\Controllers\UseTheServiceController;
use App\Http\Controllers\RecoverPasswordController;
use App\Http\Controllers\ConfirmPhoneController;
use App\Http\Controllers\LoginInSuccessfullyController;


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

Route::get('/landing', function () {
    return view('home');
});

Route::get('verify_password_email/token={token}&user={user}', [RecoverPasswordController::class, 'verify_password_email'])->name('verify_password.email');
Route::get('/', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/filter{}', [ProjectController::class, 'filter'])->name('projects.filter');
Route::get('/login', [LoginController::class, 'index'])->name('login2');
Route::get('/signup', [SignupController::class, 'index'])->name('register_index');
Route::get('/signup-step2', [SignupController::class, 'signup_step2']);
Route::post('/send_online_review', [ConfirmPhoneController::class, 'confirmPhoneRepeat'])->name('send_online_review');
Route::get('confirm_phone', [ConfirmPhoneController::class, 'confirmPhone'])->name('confirm_phone');
Route::get('/beck_to_signup', [SignupController::class, 'beck_to_signup'])->name('beck_to_signup');

Route::get('/recover-password-link-invalid', [RecoverPasswordController::class, 'recover_password_link_invalid'])->name('recover_password_link_invalid');
Route::post('/left-time-password-resets-email2', [RecoverPasswordController::class, 'left_time_password_resets_email2'])->name('left_time_password_resets_email2');
Route::post('/resend_reset_password_email_code', [RecoverPasswordController::class, 'resend_reset_password_email_code'])->name('resend_reset_password_email_code');

Route::get('/editpass', [ProfileController::class, 'editPassword'])->name('editpass');
Route::post('/updatepass', [ProfileController::class, 'updatePassword'])->name('updatepass');

Route::post('/updatepass', [ProfileController::class, 'updatePassword'])->name('updatepass');


Route::get('/api/auth={auth}', [\App\Http\Controllers\Api\V1\LoginController::class, 'login_use_soc'])->name('login_use_soc');
Route::get('/auth={auth}', [\App\Http\Controllers\LoginController::class, 'login_use_soc'])->name('login_use_soc');
Route::get('/recover-password', [RecoverPasswordController::class, 'index'])->name('recover_password');
Route::get('/recover-password-step1', [RecoverPasswordController::class, 'recover_password_step1_'])->name('recover_password_step1_');
Route::get('/register-successfully', [SignupController::class, 'register_successfully'])->name('register_successfully');
Route::get('/confirmation-register', [SignupController::class, 'confirmation_register'])->name('confirmation_register');
Route::get('/confirmation-recover_password', [RecoverPasswordController::class, 'confirmation_recover_password'])->name('confirmation_recover_password');
Route::get('/change_number_for_recover_password', [RecoverPasswordController::class, 'change_number_for_recover_password'])->name('change_number_for_recover_password');
Route::post('/signup', [SignupController::class, 'signup'])->name('signup');
Route::post('/check_signup_confirmation_code', [SignupController::class, 'check_signup_confirmation_code'])->name('check_signup_confirmation_code');
Route::get('/use-the-service', [SignupController::class, 'use_the_service'])->name('use_the_service');
Route::post('/guest', [SignupController::class, 'login_as_guest_after_reg'])->name('login_as_guest_after_reg');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/change_role_to_investor', [SignupController::class, 'change_role_to_investor'])->name('change_role_to_investor');


Route::post('/left_time_for_verify_email', [ProfileController::class, 'left_time_for_verify_email'])->name('left_time_for_verify_email');
Route::post('/send_email_again', [ProfileController::class, 'send_email_again'])->name('send_email_again');

Route::post('/left_time_for_confirmation_register_time', [SignupController::class, 'left_time_for_confirmation_register_time'])->name('left_time_for_confirmation_register_time');


Route::post('/left_time_password_resets_phone', [RecoverPasswordController::class, 'left_time_password_resets_phone'])->name('left_time_password_resets_phone');

Route::post('/resend_reset_password_phone_code', [RecoverPasswordController::class, 'resend_reset_password_phone_code'])->name('resend_reset_password_phone_code');

Route::post('/left_time_password_resets_email', [RecoverPasswordController::class, 'left_time_password_resets_email'])->name('left_time_password_resets_email');




Route::get('/verify_email_after_register/token={token}&email={email}', [SignupController::class, 'verify_email_after_register'])->name('verify_email_after_register');
Route::get('/email_verify_success', [SignupController::class, 'email_verify_success'])->name('email_verify_success');

Route::post('/change_role_to_busines', [SignupController::class, 'change_role_to_busines'])->name('change_role_to_busines');
Route::post('/recover_password_step1', [RecoverPasswordController::class, 'recover_password_step1'])->name('recover_password_step1');
Route::post('/get_password_confirmation_code', [RecoverPasswordController::class, 'get_password_confirmation_code'])->name('get_password_confirmation_code');
Route::post('/check_password_confirmation_code', [RecoverPasswordController::class, 'check_password_confirmation_code'])->name('check_password_confirmation_code');

Route::get('/terms-of-use', [TermsOfUseController::class, 'index'])->name('terms_of_use');
Route::get('/terms-of-use-last', [TermsOfUseController::class, 'terms_of_use_last'])->name('terms_of_use_last');
Route::get('news', [NewsController::class, 'index'])->name('news.index');
Route::get('news/1', [NewsController::class, 'show'])->name('news.show');

Route::get("/search",[SearchController::class,'search'])->name('search');
Route::get("/cat_search",[SearchController::class,'cat_search'])->name('cat_search');


Route::group(['prefix' => 'ajax'], function () {
    Route::post('/add-to-bookmarks', [ProjectController::class, 'addToBookmarks'])->middleware('auth');
    Route::post('/remove_bookmarks', [ProjectController::class, 'remove_bookmark'])->middleware('auth');
    Route::post('/upload_comp_docs', [CompanyController::class, 'upload_comp_docs'])->name('company.docs');
});

Route::group(['prefix' => 'add'], function () {
    Route::group(['middleware' => 'auth'], function () {
        Route::get('business/survey',[BusinessController::class,'showSurvey'])->name('survey.show'); //{id}
        Route::post('/create-survey',[BusinessController::class,'createSurvey'])->name('create_survey');

        Route::get('choose-type', [Projectcontroller::class, 'chooseType'])->name('add.chooseType');
        Route::get('{add}/create', [ProjectController::class, 'create'])->name('add.create');
        Route::post('investment/store', [InvestmentController::class, 'store'])->name('investment.store');
        Route::get('investment/{id}/preview', [InvestmentController::class, 'preview'])->name('investment.preview');
        Route::get('investment/{id}/change_status/', [InvestmentController::class, 'change_status'])->name('investment.status');
        Route::post('business/store', [BusinessController::class, 'store'])->name('business.store');
        Route::get('business/{id}/preview', [BusinessController::class, 'preview'])->name('business.preview');
        Route::get('business/{id}/change_status/', [BusinessController::class, 'change_status'])->name('business.status');
        Route::get('investors/{id}', [ProjectController::class, 'showInvestors'])->name('investors.show');
    });
    Route::get('/{name}/{id}', [ProjectController::class, 'single'])->name('business.single');
    Route::get('/filter/{cat_id}', [ProjectController::class, 'filter'])->name('add.filter');
});

Route::group(['middleware' => 'auth'], function () {
        Route::get('business/sentence/{id}', [BusinessController::class, 'sentence'])->name('business.sentence');
    Route::get('business/purchase/{id}', [BusinessController::class, 'purchase'])->name('business.purchase');
    Route::post('/create-company', [CompanyController::class, 'store'])->name('company.store');
    Route::post('invest', [InvestmentController::class, 'invest'])->name('invest.store');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::post('/update', [ProfileController::class, 'update'])->name('profile-update');
    Route::post('/update-role', [ProfileController::class, 'updateRole'])->name('update-role.store');
    Route::get('my-projects', [ProjectController::class, 'myProjectsShow'])->name('my_projects.show');
    Route::group(['prefix' => 'messages'], function () {
        Route::get('/', [ChatsController::class, 'index'])->name('messages.show');
    });
    Route::post('getFriends', [ChatsController::class, 'getFriends']);
    Route::post('/session/create', [ChatsController::class, 'create']);
    Route::post('/session/{session}/chats', [ChatsController::class, 'chats']);
    Route::post('/session/{session}/read', [ChatsController::class, 'read']);
    Route::post('/session/{session}/clear', [ChatsController::class, 'clear']);
    Route::post('/session/{session}/block', [ChatsController::class, 'block']);
    Route::post('/session/{session}/unblock', [ChatsController::class, 'unblock']);
    Route::post('/send/{session}', [ChatsController::class, 'send']);
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::post('/last_visit/{id}', [ChatsController::class, 'last_visit']);
});



