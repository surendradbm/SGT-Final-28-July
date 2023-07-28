<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SmsController;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\MailController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\PropertyOwner\LoginController;
use App\Http\Controllers\PropertyOwner\ShiftController;
use App\Http\Controllers\PropertyOwner\StaffController;
use App\Http\Controllers\PropertyOwner\GuardsController;
use App\Http\Controllers\PropertyOwner\RoutesController;
use App\Http\Controllers\PropertyOwner\ReportsController;
use App\Http\Controllers\PropertyOwner\MessagesController;
use App\Http\Controllers\PropertyOwner\RegisterController;
use App\Http\Controllers\PropertyOwner\CheckpointContoller;
use App\Http\Controllers\PropertyOwner\DashboardController;
use App\Http\Controllers\PropertyOwner\TimesheetController;
use App\Http\Controllers\PropertyOwner\PropertiesController;
use App\Http\Controllers\SubscribtionConfirmationController;

// SIGNUP
Route::get('/sign-up', [RegisterController::class, 'signUp'])->name('property_owner.signUp');
Route::post('/sign-up', [RegisterController::class, 'signUpCheck'])->name('property_owner.signUpCheck');

// LOGIN
Route::get('/', [LoginController::class, 'login'])->name('property_owner.login')->middleware('guest');
Route::post('/login-check', [LoginController::class, 'loginCheck'])->name('property_owner.loginCheck');

//  FORGOT PASSWORD
Route::get('/forgot-password', [LoginController::class, 'forgetPassword'])->name('property_owner.forgetPassword')->middleware('guest');
Route::post('/forgot-password_check', [LoginController::class, 'forgetPasswordCheck'])->name('property_owner.forgetPasswordCheck');

// RESET PASSWORD Mail
Route::get('/password/reset', [LoginController::class, 'showResetForm'])->name('property_owner.showResetForm');
Route::post('/password/reset', [LoginController::class, 'passwordUpdate'])->name('password.update');

// LOGOUT
Route::get('/log-out', [LoginController::class, 'logOut'])->name('property_owner.logOut');

// COUNTRY DROPDOWN
Route::get('dependent-dropdown', [RegisterController::class, 'company_details']);
Route::post('api/fetch-states', [RegisterController::class, 'fetchState']);
Route::post('api/fetch-cities', [RegisterController::class, 'fetchCity']);

// Route::get('/stripe1', function () {
//     return view('strip_old');
// });

// AUTH ROUTES
Route::middleware('auth')->group(function () {
    // Route::middleware(['auth', 'preventPaymentSuccessAccess'])->group(function () {

    // VERIFY EMAIL
    Route::get('verify-email', [RegisterController::class, 'verify_email'])->name('property_owner.verify_email');
    Route::post('verify-email-check', [RegisterController::class, 'verify_email_check'])->name('property_owner.verify_email_check');

    // SEND MAIL
    Route::get('send-mail', [MailController::class, 'index'])->name('property_owner.mail');
    Route::get('forgot-password-mail', [ForgotPasswordController::class, 'index'])->name('property_owner.forgotpassword');
    Route::get('subscription-confromation', [SubscribtionConfirmationController::class, 'index'])->name('property_owner.subscription_confromation');

    // SMS
    Route::get('/send-sms', [SmsController::class, 'sendSms']);

    // RESEND OTP
    Route::post('/resend-otp', [RegisterController::class, 'resend_otp'])->name('property_owner.resend_otp');

    // STRIPE 
    Route::controller(StripePaymentController::class)->group(function () {
        Route::get('stripe', 'stripe')->name('stripe.get');
        Route::post('stripe', 'stripePost')->name('stripe.post');
    });

    // COMPANY DETAILS
    Route::get('company-details', [RegisterController::class, 'company_details'])->name('dashboard.company_details');
    Route::post('company-details-check', [RegisterController::class, 'company_details_check'])->name('dashboard.company_details_check');

    // SUBSCRIPTION PLANS
    Route::get('select-plan', [RegisterController::class, 'select_plan'])->name('property_owner.select_plan');
    Route::post('select-plan-check', [RegisterController::class, 'select_plan_check'])->name('property_owner.select_plan_check');

    // BILLING ADDRESS
    Route::post('billing-address-check', [RegisterController::class, 'billing_address_check'])->name('dashboard.billing_address_check');

    // PAYMENT
    Route::get('payment', [RegisterController::class, 'payment'])->name('property_owner.payment');

    // Success Dashboard
    Route::get('payment-success', [StripePaymentController::class, 'success'])->name('property_owner.success');

    // PROPERTY OWNER PREFIX ROUTES
    Route::group(['prefix' => 'property-owner'], function () {

        Route::get('add-phone', [RegisterController::class, 'add_phone'])->name('dashboard.add_phone');
        Route::get('completed', [RegisterController::class, 'completed'])->name('dashboard.completed');

        // DASHBOARD
        Route::get('dashboard', [DashboardController::class, 'propertyOwnerDashboard'])->name('property-owner.dashboard');
        // Route::get('dashboard', function () {
        //     // Set the session flag indicating the user has visited the dashboard
        //     Session::put('visited_dashboard', true);
        //     return view('pages.dashboards.index');
        // })->name('property-owner.dashboard');

        // GUARD
        Route::prefix('/guards')->group(function () {
            Route::get('all', [GuardsController::class, 'all'])->name('property_owner.guards.all');
            Route::get('add', [GuardsController::class, 'add'])->name('property_owner.guards.add-guard');
            Route::get('edit', [GuardsController::class, 'edit'])->name('property_owner.guards.edit-guard');
        });

        // PROPERTIES
        Route::prefix('/properties')->group(function () {
            Route::get('all', [PropertiesController::class, 'all'])->name('property_owner.properties.all');
            Route::get('create', [PropertiesController::class, 'create'])->name('property_owner.properties.create');
            Route::get('shift', [PropertiesController::class, 'shift'])->name('property_owner.properties.shift');
            Route::get('checkpoints', [PropertiesController::class, 'checkpoints'])->name('property_owner.properties.checkpoints');
            Route::get('morningShift', [PropertiesController::class, 'morningShift'])->name('property_owner.properties.morningShift');
            Route::get('routes', [PropertiesController::class, 'routes'])->name('property_owner.properties.routes');
            Route::get('assignGuards', [PropertiesController::class, 'assignGuards'])->name('property_owner.properties.assignGuards');
        });

        // REPORTS
        Route::prefix('/reports')->group(function () {
            Route::get('all', [ReportsController::class, 'all'])->name('property_owner.reports.all');
            Route::get('delete', [ReportsController::class, 'delete'])->name('property_owner.reports.add-guard');
        });

        // SHIFTS
        Route::prefix('/shift')->group(function () {
            Route::get('all', [ShiftController::class, 'all'])->name('property_owner.shift.all');
            Route::get('edit', [ShiftController::class, 'edit'])->name('property_owner.shift.create-guard');
            Route::get('checkpoint', [ShiftController::class, 'checkpoint'])->name('property_owner.shift.shift-guard');
            Route::get('checkpointEdit', [ShiftController::class, 'checkpointEdit'])->name('property_owner.shift.checkpoints-guard');
            Route::get('assignGuards', [ShiftController::class, 'assignGuards'])->name('property_owner.shift.morningShift-guard');
        });

        Route::group(['prefix' => 'staff'], function () {
            Route::get('/all', [StaffController::class, 'all'])->name('property_owner.staff.all');
            Route::get('/add', [StaffController::class, 'add'])->name('property_owner.staff.add');
            Route::get('/edit', [StaffController::class, 'edit'])->name('property_owner.staff.edit');
        });

        Route::group(['prefix' => 'routes'], function () {
            Route::get('/all', [RoutesController::class, 'all'])->name('property_owner.routes.all');
            Route::get('/add', [RoutesController::class, 'add'])->name('property_owner.routes.add');
            Route::get('/edit', [RoutesController::class, 'edit'])->name('property_owner.routes.edit');
        });

        Route::group(['prefix' => 'checkpoints'], function () {
            Route::get('/', [CheckpointContoller::class, 'index'])->name('property_owner.checkpoints');
            Route::get('/history', [CheckpointContoller::class, 'history'])->name('property_owner.checkpoints.history');
        });

        Route::group(['prefix' => 'messages'], function () {
            Route::get('/', [MessagesController::class, 'index'])->name('property_owner.messages');
        });
        Route::group(['prefix' => 'timesheet'], function () {
            Route::get('/', [TimesheetController::class, 'index'])->name('property_owner.timesheet');
        });

        // Route::group(['prefix' => 'manage-leaves'], function () {
        //     Route::get('requested-leaves', [ManageLeaveController::class, 'requested_leaves'])->name('property_owner.manage_leaves.requested_leaves');
        //     Route::get('approved-leaves', [ManageLeaveController::class, 'approved_leaves'])->name('property_owner.manage_leaves.approved_leaves');
        //     Route::get('rejected-leaves', [ManageLeaveController::class, 'rejected_leaves'])->name('property_owner.manage_leaves.rejected_leaves');
        //     Route::get('leave-policy', [ManageLeaveController::class, 'leave_policy'])->name('property_owner.manage_leaves.leave_policy');
        // });
    });
});
