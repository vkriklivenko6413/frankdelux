<?php

use App\Http\Controllers\Admin\Card\CardController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Seo\SeoController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Front\FormController;
use App\Http\Controllers\Front\LadingController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/lang/{lang}', [LanguageController::class, 'index'])->name('lang');


Route::group(['prefix' => \App\Http\Middleware\SetLanguage::getLocale()], function () {
    Route::get('/', [LadingController::class, 'index'])->name('index');
    Route::get('/product/{id}', [LadingController::class, 'show'])->name('front.product.show');
    Route::post('/send/card', [FormController::class, 'sendFormCard'])->name('send.card');
    Route::post('/callback', [FormController::class, 'callback'])->name('send.callback');
    Route::get('/success', [FormController::class, 'popupSuccess'])->name('front.success');
    Route::get('/success-callback', [FormController::class, 'popupSuccessCallback'])->name('front.success-callback');
    Route::get('/contact', [LadingController::class, 'contact'])->name('front.contact');

});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/', [DashboardController::class, 'index'])->name('admin.dashboard.index');
    Route::get('/admin/list', [CardController::class, 'list'])->name('admin.card.list');
    Route::get('/admin/create', [CardController::class, 'create'])->name('admin.card.create');
    Route::get('/admin/edit/{id}', [CardController::class, 'edit'])->name('admin.card.edit');
    Route::post('/admin/change/{card}', [CardController::class, 'change'])->name('admin.card.change');
    Route::get('/admin/copy/{card}', [CardController::class, 'copy'])->name('admin.card.copy');
    Route::post('/admin/card/reorder', [CardController::class, 'reorder'])->name('admin.card.reorder');
    Route::get('/admin/card/move-up/{id}', [CardController::class, 'moveUp'])->name('admin.card.moveUp');
    Route::get('/admin/card/move-down/{id}', [CardController::class, 'moveDown'])->name('admin.card.moveDown');
    Route::get('/admin/delete/{id}', [CardController::class, 'delete'])->name('admin.card.delete');
    Route::post('/admin/store', [CardController::class, 'store'])->name('admin.card.store');
    Route::get('/admin/card/active/{id}', [CardController::class, 'cardActiveStatus'])->name('admin.card.active');
    Route::get('/admin/card/disable/{id}', [CardController::class, 'cardDisableStatus'])->name('admin.card.disable');


    Route::get('/admin/review/list', [\App\Http\Controllers\Admin\Review\ReviewController::class, 'list'])->name('admin.review.list');
    Route::get('/admin/review/add', [\App\Http\Controllers\Admin\Review\ReviewController::class, 'add'])->name('admin.review.add');
    Route::post('/admin/review/store', [\App\Http\Controllers\Admin\Review\ReviewController::class, 'store'])->name('admin.review.store');
    Route::get('/admin/review/edit/{id}', [\App\Http\Controllers\Admin\Review\ReviewController::class, 'edit'])->name('admin.review.edit');
    Route::get('/admin/review/delete/{id}', [\App\Http\Controllers\Admin\Review\ReviewController::class, 'delete'])->name('admin.review.delete');
    Route::post('/admin/review/change/{id}', [\App\Http\Controllers\Admin\Review\ReviewController::class, 'change'])->name('admin.review.change');


    Route::get('/admin/seo/lading', [SeoController::class, 'seoIndex'])->name('admin.seo.lading');
    Route::get('/admin/seo/contact', [SeoController::class, 'seoContact'])->name('admin.seo.contact');
    Route::post('/admin/seo/lading/update/{id}', [SeoController::class, 'updateSeoIndex'])->name('admin.seo.lading.update');
    Route::post('/admin/seo/contact/update/{id}', [SeoController::class, 'updateSeoContact'])->name('admin.seo.contact.update');


    Route::get('/admin/setting', [SettingsController::class, 'setting'])->name('admin.setting.list');
    Route::post('/admin/setting/{id}', [SettingsController::class, 'update'])->name('admin.setting.update');


    Route::get('/admin/menu', [SettingsController::class, 'menu'])->name('admin.menu');
    Route::post('/admin/menu/{id}', [SettingsController::class, 'updateMenu'])->name('admin.menu.update');


    Route::get('/admin/block/blockone/', [\App\Http\Controllers\Admin\Block\BlockController::class, 'blockOne'])->name('admin.block.blockOne');
    Route::post('/admin/block/blockone/update/{id}', [\App\Http\Controllers\Admin\Block\BlockController::class, 'updateBlockOne'])->name('admin.block.update.blockOne');


    Route::get('/admin/block/blocktwo/', [\App\Http\Controllers\Admin\Block\BlockController::class, 'blockTwo'])->name('admin.block.blockTwo');
    Route::post('/admin/block/blocktwo/update/{id}', [\App\Http\Controllers\Admin\Block\BlockController::class, 'updateBlockTwo'])->name('admin.block.update.blockTwo');

    Route::get('/admin/block/blockthree/', [\App\Http\Controllers\Admin\Block\BlockController::class, 'blockThree'])->name('admin.block.blockThree');
    Route::post('/admin/block/blockthree/update/{id}', [\App\Http\Controllers\Admin\Block\BlockController::class, 'updateBlockThree'])->name('admin.block.update.blockThree');

    Route::get('/admin/block/blockfour/', [\App\Http\Controllers\Admin\Block\BlockController::class, 'blockFour'])->name('admin.block.blockFour');
    Route::post('/admin/block/blockfour/update/{id}', [\App\Http\Controllers\Admin\Block\BlockController::class, 'updateBlockFour'])->name('admin.block.update.blockFour');



});

require __DIR__ . '/auth.php';
