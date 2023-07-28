<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperAdmin\GuardController;
use App\Http\Controllers\SuperAdmin\LoginController;
use App\Http\Controllers\SuperAdmin\ShiftController;
use App\Http\Controllers\SuperAdmin\StaffController;
use App\Http\Controllers\SuperAdmin\CouponController;
use App\Http\Controllers\SuperAdmin\ReportsController;
use App\Http\Controllers\SuperAdmin\SettingController;
use App\Http\Controllers\SuperAdmin\CustomerController;
use App\Http\Controllers\SuperAdmin\FeedbackController;
use App\Http\Controllers\SuperAdmin\LanguageController;
use App\Http\Controllers\SuperAdmin\DashboardController;
use App\Http\Controllers\SuperAdmin\PropertiesController;
use App\Http\Controllers\SuperAdmin\RecycleBinController;
use App\Http\Controllers\SuperAdmin\RouteCacheController;
use App\Http\Controllers\SuperAdmin\NotificationController;
use App\Http\Controllers\SuperAdmin\SubscriptionController;
use App\Http\Controllers\SuperAdmin\PasswordResetLinkController;
use App\Http\Controllers\SuperAdmin\RolesAndPermissionsController;
use App\Http\Controllers\SuperAdmin\TransactionAndInvoiceController;

Route::get('/clear', [RouteCacheController::class, 'clearRoute']);

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);

Route::group(['prefix' => 'superadmin'], function () {
    Route::get('login', [LoginController::class, 'index'])->name('superadmin.login');
    Route::post('login', [LoginController::class, 'store'])->name('superadmin.login.check');
    Route::get('/logout', [LoginController::class, 'logOut'])->name('superadmin.logOut');
    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])->name('superadmin.password_request');
    Route::post('/forgot-password_check', [PasswordResetLinkController::class, 'forgetPasswordCheck'])->name('superadmin.forgetPasswordCheck');
});

Route::group(['middleware' => ['auth', 'custom-auth']], function () {

    Route::group(['prefix' => 'superadmin'], function () {

        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

        Route::prefix('/properties')->group(function () {
            Route::get('index', [PropertiesController::class, 'index'])->name('superadmin.properties.index');
            Route::get('create', [PropertiesController::class, 'create'])->name('superadmin.properties.create');
            Route::get('shift', [PropertiesController::class, 'shift'])->name('superadmin.properties.shift');
            Route::get('checkpoints', [PropertiesController::class, 'checkpoints'])->name('superadmin.properties.checkpoints');
            Route::get('morningShift', [PropertiesController::class, 'morningShift'])->name('superadmin.properties.morningShift');
            Route::get('routes', [PropertiesController::class, 'routes'])->name('superadmin.properties.routes');
            Route::get('assignGuards', [PropertiesController::class, 'assignGuards'])->name('superadmin.properties.assignGuards');
        });

        Route::group(['prefix' => 'guard'], function () {
            Route::get('all', [GuardController::class, 'all'])->name('superadmin.guard.all');
            Route::get('add', [GuardController::class, 'add'])->name('superadmin.guard.add');
            Route::get('edit', [GuardController::class, 'edit'])->name('superadmin.guard.edit');
        });

        Route::group(['prefix' => 'coupon'], function () {
            Route::get('all', [CouponController::class, 'all'])->name('superadmin.coupon.all');
            Route::get('add', [CouponController::class, 'add'])->name('superadmin.coupon.add');
            Route::get('edit', [CouponController::class, 'edit'])->name('superadmin.coupon.edit');
        });

        Route::group(['prefix' => 'subscription'], function () {
            Route::get('all', [SubscriptionController::class, 'all'])->name('superadmin.subscription.all');
            Route::post('get-list', [SubscriptionController::class, 'get_list'])->name('superadmin.subscription.get_list');
            Route::get('add', [SubscriptionController::class, 'add'])->name('superadmin.subscription.add');
            Route::post('store', [SubscriptionController::class, 'store'])->name('superadmin.subscription.store');
            Route::get('edit/{id}', [SubscriptionController::class, 'edit'])->name('superadmin.subscription.edit');
            Route::post('update/{id}', [SubscriptionController::class,'update'])->name('superadmin.subscription.update');
            Route::post('delete', [SubscriptionController::class,'delete'])->name('superadmin.subscription.delete');
            Route::post('status', [SubscriptionController::class,'status'])->name('superadmin.subscription.status');
        });

        Route::group(['prefix' => 'report'], function () {
            Route::get('/all', [ReportsController::class, 'all'])->name('superadmin.report.all');
        });

        Route::group(['prefix' => 'roles-and-permissions'], function () {
            Route::get('/add', [RolesAndPermissionsController::class, 'add'])->name('superadmin.roles_and_permissions.add');
            Route::get('/manage', [RolesAndPermissionsController::class, 'manage'])->name('superadmin.roles_and_permissions.manage');
        });

        Route::group(['prefix' => 'recycle-bin'], function () {
            Route::get('/', [RecycleBinController::class, 'index'])->name('superadmin.recycle_bin');
        });

        Route::group(['prefix' => 'setting'], function () {
            Route::group(['prefix' => 'general'], function () {
                Route::get('/company_details', [SettingController::class, 'company_details'])->name('superadmin.setting.general.company_details');
                Route::get('/notification', [SettingController::class, 'notification'])->name('superadmin.setting.general.notification');
                Route::get('/payment', [SettingController::class, 'payment'])->name('superadmin.setting.general.payment');
                Route::get('/support', [SettingController::class, 'support'])->name('superadmin.setting.general.support');
            });
            Route::get('/config', [SettingController::class, 'config'])->name('superadmin.setting.config');
            Route::get('/backup', [SettingController::class, 'backup'])->name('superadmin.setting.backup');
        });

        Route::group(['prefix' => 'notification'], function () {
            Route::get('/', [NotificationController::class, 'index'])->name('superadmin.notification');
            Route::group(['prefix' => 'guard-app'], function () {
                Route::get('/logins', [NotificationController::class, 'guard_logins'])->name('notification.guard_app.logins');
                Route::get('/shift', [NotificationController::class, 'guard_shift'])->name('notification.guard_app.shift');
                Route::get('/checkpoint', [NotificationController::class, 'guard_checkpoint'])->name('notification.guard_app.checkpoint');
                Route::get('/reports', [NotificationController::class, 'guard_reports'])->name('notification.guard_app.reports');
                Route::get('/messenger', [NotificationController::class, 'guard_messenger'])->name('notification.guard_app.messenger');
                Route::get('/settings', [NotificationController::class, 'guard_settings'])->name('notification.guard_app.settings');
                Route::get('/leave-management', [NotificationController::class, 'guard_leave_management'])->name('notification.guard_app.leave_management');
                Route::get('/account-settings', [NotificationController::class, 'guard_account_settings'])->name('notification.guard_app.account_settings');
            });
            Route::group(['prefix' => 'property-owner'], function () {
                Route::get('/logins', [NotificationController::class, 'owner_logins'])->name('notification.property_owner.logins');
                Route::get('/subscription', [NotificationController::class, 'owner_subscription'])->name('notification.property_owner.subscription');
                Route::get('/customers', [NotificationController::class, 'owner_customers'])->name('notification.property_owner.customers');
                Route::get('/shift', [NotificationController::class, 'owner_shift'])->name('notification.property_owner.shift');
                Route::get('/checkpoints', [NotificationController::class, 'owner_checkpoints'])->name('notification.property_owner.checkpoints');
                Route::get('/routes', [NotificationController::class, 'owner_routes'])->name('notification.property_owner.routes');
                Route::get('/guard', [NotificationController::class, 'owner_guard'])->name('notification.property_owner.guard');
                Route::get('/reports', [NotificationController::class, 'owner_reports'])->name('notification.property_owner.reports');
                Route::get('/roles-and-permissions', [NotificationController::class, 'owner_roles_and_permissions'])->name('notification.property_owner.roles_and_permissions');
                Route::get('/staff', [NotificationController::class, 'owner_staff'])->name('notification.property_owner.staff');
                Route::get('/time-sheet', [NotificationController::class, 'owner_time_sheet'])->name('notification.property_owner.time_sheet');
                Route::get('/leave-management', [NotificationController::class, 'owner_leave_management'])->name('notification.property_owner.leave_management');
                Route::get('/guard-attendance', [NotificationController::class, 'owner_guard_attendance'])->name('notification.property_owner.guard_attendance');
                Route::get('/activity-log', [NotificationController::class, 'owner_activity_log'])->name('notification.property_owner.activity_log');
                Route::get('/subscription/details', [NotificationController::class, 'details'])->name('property_owner.subscription.details');
            });
        });

        Route::group(['prefix' => 'language-manager'], function () {
            Route::get('/', [LanguageController::class, 'all'])->name('superadmin.language.all');
            Route::get('/translation', [LanguageController::class, 'translation'])->name('superadmin.language.translation');
            Route::get('/translation/keywords', [LanguageController::class, 'keywords'])->name('superadmin.language.keywords');
        });

        Route::group(['prefix' => 'staff'], function () {
            Route::get('/all', [StaffController::class, 'all'])->name('superadmin.staff.all');
            Route::get('/add', [StaffController::class, 'add'])->name('superadmin.staff.add');
            Route::get('/edit', [StaffController::class, 'edit'])->name('superadmin.staff.edit');
        });

        Route::group(['prefix' => 'customer'], function () {
            Route::get('/all', [CustomerController::class, 'all'])->name('superadmin.customer.all');
            Route::get('/add', [CustomerController::class, 'add'])->name('superadmin.customer.add');
            Route::get('/edit', [CustomerController::class, 'edit'])->name('superadmin.customer.edit');
        });

        Route::group(['prefix' => 'transaction-and-invoice'], function () {
            Route::get('/', [TransactionAndInvoiceController::class, 'index'])->name('superadmin.transaction_and_invoice');
            Route::get('/view-details', [TransactionAndInvoiceController::class, 'view_details'])->name('superadmin.transaction_and_invoice.view_details');
            Route::get('/view-invoice', [TransactionAndInvoiceController::class, 'view_invoice'])->name('superadmin.transaction_and_invoice.view_invoice');
        });

        Route::group(['prefix' => 'feedback'], function () {
            Route::get('/', [FeedbackController::class, 'all'])->name('superadmin.feedback.all');
        });

        Route::group(['prefix' => 'shift'], function () {
            Route::get('all', [ShiftController::class, 'all'])->name('superadmin.shift.all');
            Route::get('add-shift', [ShiftController::class, 'add_shift'])->name('superadmin.shift.add_shift');
            Route::get('add-checkpoints', [ShiftController::class, 'add_checkpoint'])->name('superadmin.shift.add_checkpoint');
            Route::get('edit-checkpoints', [ShiftController::class, 'edit_checkpoint'])->name('superadmin.shift.edit_checkpoint');
            Route::get('add-routes', [ShiftController::class, 'add_route'])->name('superadmin.shift.add_route');
            Route::get('assign-guards', [ShiftController::class, 'assign_guard'])->name('superadmin.shift.assign_guard');
        });
    });
});
