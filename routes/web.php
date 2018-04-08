<?php

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

// Authentication Routes...
// Auth::routes();
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

// Google OAuth
// Route::get('login', 'Auth\LoginController@redirectToProvider');
Route::get('callback', 'Auth\LoginController@handleProviderCallback');
Route::get('privacy-policy', 'PrivacyPolicyController@index');
Route::get('terms-of-use', 'TermsOfUseController@index');
Route::any('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

Route::get('/', function () {
    return redirect()->route('login');
});

// UI-Kit
Route::get('home', function () {
    return redirect()->action('BackOffice\HomeController@index');
});
Route::get('home2', function () {
    return redirect()->action('BackOffice\HomeController@template2');
});
Route::get('home3', function () {
    return redirect()->action('BackOffice\HomeController@template3');
});
Route::group(['prefix' => 'back-office', 'as' => 'backOffice.'], function () {
    Route::resource('home', 'BackOffice\HomeController');
    Route::get('home2', ['as' => 'index.home2', 'uses' => 'BackOffice\HomeController@template2']);
    Route::get('home3', ['as' => 'index.home3', 'uses' => 'BackOffice\HomeController@template3']);
});

// BackOffice
// Route::group(['middleware' => ['auth']], function () {
    Route::group(['prefix' => 'back-office', 'as' => 'backOffice.'], function () {
        Route::group(['prefix' => 'purchasing', 'as' => 'purchasing.'], function () {
            Route::resource('claim', 'BackOffice\Logistic\ClaimController');
            Route::match(['put', 'patch'], 'back-office/purchasing/claim/{id}/restore', ['as' => 'claim.restore', 'uses' => 'BackOffice\Logistic\ClaimController@restore']);

            Route::resource('shipping-fee', 'BackOffice\Purchasing\ShippingFeeExpenditureRequisitionController');
            Route::match(['put', 'patch'], 'back-office/purchasing/shipping-fee/{id}/restore', ['as' => 'shipping-fee.restore', 'uses' => 'BackOffice\Purchasing\ShippingFeeExpenditureRequisitionController@restore']);
            //Route::match(['put', 'patch'], 'back-office/purchasing/ShippingFeeExpenditureRequisition/{id}/restore', ['as' => 'ShippingFeeExpenditureRequisition.restore', 'uses' => 'BackOffice\Purchasing\ShippingFeeExpenditureRequisitionController@restore']);

            Route::resource('import-duty', 'BackOffice\Purchasing\ImportDutyExpenditureRequisitionController');
            Route::match(['put', 'patch'], 'back-office/purchasing/import-duty/{id}/restore', ['as' => 'import-duty.restore', 'uses' => 'BackOffice\Purchasing\ImportDutyExpenditureRequisitionController@restore']);

            Route::resource('non-essential-purchasing-order', 'BackOffice\NonEssentialPurchasingOrderController');
            Route::match(['put', 'patch'], 'back-office/purchasing/non-essential-purchasing-order/{id}/restore', ['as' => 'non-essential-purchasing-order.restore', 'uses' => 'BackOffice\NonEssentialPurchasingOrderController@restore']);
        });

        Route::resource('inquiry', 'BackOffice\InquiryController');
        Route::match(['put', 'patch'], 'back-office/inquiry/{id}/restore', ['as' => 'inquiry.restore', 'uses' => 'BackOffice\InquiryController@restore']);

        Route::group(['prefix' => 'purchasing-order', 'as' => 'purchasing-order.'], function () {
            Route::get('create-for-inquiry', ['as' => 'purchasing-order.create-for-inquiry', 'uses' => 'BackOffice\PurchasingOrderController@createForInquiry']);
        });
        Route::resource('purchasing-order', 'BackOffice\PurchasingOrderController');
        Route::match(['put', 'patch'], 'back-office/purchasing-order/{id}/restore', ['as' => 'purchasing-order.restore', 'uses' => 'BackOffice\PurchasingOrderController@restore']);

        Route::resource('quota', 'BackOffice\QuotaController');
        Route::match(['put', 'patch'], 'back-office/quota/{id}/restore', ['as' => 'quota.restore', 'uses' => 'BackOffice\QuotaController@restore']);

        Route::group(['prefix' => 'pre-order', 'as' => 'pre-order.'], function () {
            Route::get('create-before-initial', ['as' => 'pre-order.create-before-initial', 'uses' => 'BackOffice\PreOrderController@createBeforeInitial']);
            Route::get('create-after-initial', ['as' => 'pre-order.create-after-initial', 'uses' => 'BackOffice\PreOrderController@createAfterInitial']);
        });
        Route::resource('pre-order', 'BackOffice\PreOrderController');
        Route::match(['put', 'patch'], 'back-office/pre-order/{id}/restore', ['as' => 'pre-order.restore', 'uses' => 'BackOffice\PreOrderController@restore']);

        Route::resource('sales-order', 'BackOffice\SalesOrderController');
        Route::match(['put', 'patch'], 'back-office/sales-order/{id}/restore', ['as' => 'sales-order.restore', 'uses' => 'BackOffice\SalesOrderController@restore']);

        Route::group(['prefix' => 'customer-return-order', 'as' => 'customer-return-order.'], function () {
            Route::get('create-from-customer', ['as' => 'customer-return-order.create-from-customer', 'uses' => 'BackOffice\CustomerReturnOrderController@createFromCustomer']);
            Route::get('create-from-tax-invoice', ['as' => 'customer-return-order.create-from-tax-invoice', 'uses' => 'BackOffice\CustomerReturnOrderController@createFromTaxInvoice']);
        });
        Route::resource('customer-return-order', 'BackOffice\CustomerReturnOrderController');
        Route::match(['put', 'patch'], 'back-office/customer-return-order/{id}/restore', ['as' => 'customer-return-order.restore', 'uses' => 'BackOffice\CustomerReturnOrderController@restore']);

        Route::group(['prefix' => 'accounting', 'as' => 'accounting.'], function () {
            Route::resource('billing-note', 'BackOffice\Accounting\BillingNoteController');
            Route::match(['put', 'patch'], 'back-office/accounting/billing-note/{id}/restore', ['as' => 'billing-note.restore', 'uses' => 'BackOffice\Accounting\BillingNoteController@restore']);

            Route::resource('credit-note', 'BackOffice\Accounting\CreditNoteController');
            Route::match(['put', 'patch'], 'back-office/accounting/credit-note/{id}/restore', ['as' => 'credit-note.restore', 'uses' => 'BackOffice\Accounting\CreditNoteController@restore']);

            Route::resource('credit-note-from-cro', 'BackOffice\Accounting\CreditNoteFromCustomerReturnOrderController');
            Route::match(['put', 'patch'], 'back-office/accounting/credit-note-from-cro/{id}/restore', ['as' => 'credit-note-cro.restore', 'uses' => 'BackOffice\Accounting\CreditNoteFromCustomerReturnOrderController@restore']);

            Route::resource('credit-note-from-supplier', 'BackOffice\Accounting\CreditNoteFromSupplierController');
            Route::match(['put', 'patch'], 'back-office/accounting/credit-note-from-supplier/{id}/restore', ['as' => 'credit-note-from-supplier.restore', 'uses' => 'BackOffice\Accounting\CreditNoteFromSupplierController@restore']);

            Route::resource('credit-note-to-customer', 'BackOffice\Accounting\CreditNoteToCustomerController');
            Route::match(['put', 'patch'], 'back-office/accounting/credit-note-to-customer/{id}/restore', ['as' => 'credit-note-to-customer.restore', 'uses' => 'BackOffice\Accounting\CreditNoteToCustomerController@restore']);

            Route::resource('expenditure-requisition', 'BackOffice\Accounting\ExpenditureRequisitionController');
            Route::match(['put', 'patch'], 'back-office/accounting/expenditure-requisition/{id}/restore', ['as' => 'expenditure-requisition.restore', 'uses' => 'BackOffice\Accounting\ExpenditureRequisitionController@restore']);

            Route::resource('expense-requisition', 'BackOffice\Accounting\ExpenseRequisitionController');
            Route::match(['put', 'patch'], 'back-office/accounting/expense-requisition/{id}/restore', ['as' => 'expense-requisition.restore', 'uses' => 'BackOffice\Accounting\ExpenseRequisitionController@restore']);

            Route::resource('inventory', 'BackOffice\Accounting\InventoryController');
            Route::match(['put', 'patch'], 'back-office/accounting/inventory/{id}/restore', ['as' => 'inventory.restore', 'uses' => 'BackOffice\Accounting\InventoryController@restore']);

            Route::resource('payment-advance', 'BackOffice\Accounting\PaymentAdvanceController');
            Route::match(['put', 'patch'], 'back-office/accounting/payment-advance/{id}/restore', ['as' => 'payment-advance.restore', 'uses' => 'BackOffice\Accounting\PaymentAdvanceController@restore']);

            Route::resource('payment', 'BackOffice\Accounting\PaymentController');
            Route::match(['put', 'patch'], 'back-office/accounting/payment/{id}/restore', ['as' => 'payment.restore', 'uses' => 'BackOffice\Accounting\PaymentController@restore']);

            Route::resource('payment-pr', 'BackOffice\Accounting\PaymentPRController');
            Route::match(['put', 'patch'], 'back-office/accounting/payment-pr/{id}/restore', ['as' => 'payment-pr.restore', 'uses' => 'BackOffice\Accounting\PaymentPRController@restore']);

            Route::resource('payment-so', 'BackOffice\Accounting\PaymentSOController');
            Route::match(['put', 'patch'], 'back-office/accounting/payment-so/{id}/restore', ['as' => 'payment-so.restore', 'uses' => 'BackOffice\Accounting\PaymentSOController@restore']);

            Route::resource('refund-from-wallet', 'BackOffice\Accounting\RefundFromWalletController');
            Route::match(['put', 'patch'], 'back-office/accounting/refund-from-wallet/{id}/restore', ['as' => 'refund-from-wallet.restore', 'uses' => 'BackOffice\Accounting\RefundFromWalletController@restore']);
        });

        Route::group(['prefix' => 'logistic', 'as' => 'logistic.'], function () {
            Route::resource('cancel-note', 'BackOffice\Logistic\CancelNoteController');
            Route::match(['put', 'patch'], 'back-office/logistic/cancel-note/{id}/restore', ['as' => 'cancel-note.restore', 'uses' => 'BackOffice\Logistic\CancelNoteController@restore']);

            Route::resource('claim', 'BackOffice\Logistic\ClaimController');
            Route::match(['put', 'patch'], 'back-office/logistic/claim/{id}/restore', ['as' => 'claim.restore', 'uses' => 'BackOffice\Logistic\ClaimController@restore']);

            Route::resource('inventory', 'BackOffice\Logistic\InventoryController');
            Route::match(['put', 'patch'], 'back-office/logistic/inventory/{id}/restore', ['as' => 'inventory.restore', 'uses' => 'BackOffice\Logistic\InventoryController@restore']);



            Route::resource('product-receive', 'BackOffice\Logistic\ProductReceiveController');
            Route::match(['put', 'patch'], 'back-office/logistic/product-receive/{id}/restore', ['as' => 'product-receive.restore', 'uses' => 'BackOffice\Logistic\ProductReceiveController@restore']);

            Route::resource('product-transfer', 'BackOffice\Logistic\ProductTransferController');
            Route::match(['put', 'patch'], 'back-office/logistic/product-transfer/{id}/restore', ['as' => 'product-transfer.restore', 'uses' => 'BackOffice\Logistic\ProductTransferController@restore']);

            Route::resource('shipping', 'BackOffice\Logistic\ShippingController');
            Route::match(['put', 'patch'], 'back-office/logistic/shipping/{id}/restore', ['as' => 'shipping.restore', 'uses' => 'BackOffice\Logistic\ShippingController@restore']);
        });

        Route::group(['prefix' => 'marketing', 'as' => 'marketing.'], function () {
            Route::resource('bundled-product', 'BackOffice\Marketing\BundledProductController');
            Route::match(['put', 'patch'], 'back-office/marketing/bundled-product/{id}/restore', ['as' => 'bundled-product.restore', 'uses' => 'BackOffice\Marketing\BundledProductController@restore']);

            Route::resource('promotion', 'BackOffice\Marketing\PromotionController');
            Route::match(['put', 'patch'], 'back-office/marketing/promotion/{id}/restore', ['as' => 'promotion.restore', 'uses' => 'BackOffice\Marketing\PromotionController@restore']);

            Route::resource('promotion.condition-group', 'BackOffice\Marketing\Promotion\ConditionGroupController');
            Route::match(['put', 'patch'], 'back-office/marketing/promotion/{id}/restore', ['as' => 'promotion.condition-group.restore', 'uses' => 'BackOffice\Marketing\Promotion\ConditionGroupController@restore']);

            Route::resource('promotion.condition-group.condition', 'BackOffice\Marketing\Promotion\ConditionGroup\ConditionController');
            Route::match(['put', 'patch'], 'back-office/marketing/promotion/{id}/restore', ['as' => 'promotion.condition-group.condition.restore', 'uses' => 'BackOffice\Marketing\Promotion\ConditionGroup\ConditionController@restore']);
        });

        Route::group(['prefix' => 'other', 'as' => 'other.'], function () {
            Route::resource('product-borrow', 'BackOffice\Other\ProductBorrowController');
            Route::match(['put', 'patch'], 'back-office/other/product-borrow/{id}/restore', ['as' => 'product-borrow.restore', 'uses' => 'BackOffice\Other\ProductBorrowController@restore']);

            Route::resource('product-withdrawal', 'BackOffice\Other\ProductWithdrawalController');
            Route::match(['put', 'patch'], 'back-office/other/product-withdrawal/{id}/restore', ['as' => 'product-withdrawal.restore', 'uses' => 'BackOffice\Other\ProductWithdrawalController@restore']);

            Route::resource('expense-requisition', 'BackOffice\Other\ExpenseRequisitionController');
            Route::match(['put', 'patch'], 'back-office/other/expense-requisition/{id}/restore', ['as' => 'expense-requisition.restore', 'uses' => 'BackOffice\Other\ExpenseRequisitionController@restore']);
        });

         Route::group(['prefix' => 'news-and-event', 'as' => 'news-and-event.'], function () {
            Route::match(['put', 'patch'], 'approve-many', ['as' => 'approve-many', 'uses' => 'BackOffice\NewsAndEvent\NewsAndEventController@approveMany']);
            Route::match(['delete'], 'destroy-many', ['as' => 'destroy-many', 'uses' => 'BackOffice\NewsAndEvent\NewsAndEventController@destroyMany']);
            Route::match(['get'], '{id}/duplicate', ['as' => 'duplicate', 'uses' => 'BackOffice\NewsAndEvent\NewsAndEventController@duplicate']);
            Route::match(['patch'], '{id}/patch-status', ['as' => 'patch-status', 'uses' => 'BackOffice\NewsAndEvent\NewsAndEventController@patchStatus']);
            Route::match(['post'], 'store-duplicate', ['as' => 'store-duplicate', 'uses' => 'BackOffice\NewsAndEvent\NewsAndEventController@storeDuplicate']);

            Route::match(['get'], 'excel', ['as' => 'excel', 'uses' => 'BackOffice\NewsAndEvent\NewsAndEventController@excel']);
           
            Route::match(['put', 'patch'], '{id}/restore', ['as' => 'restore', 'uses' => 'BackOffice\NewsAndEvent\NewsAndEventController@restore']);
        });
        Route::resource('news-and-event', 'BackOffice\NewsAndEvent\NewsAndEventController');

        


        Route::group(['prefix' => 'setting', 'as' => 'setting.'], function () {
            Route::resource('country', 'BackOffice\Setting\CountryController');
            Route::match(['put', 'patch'], 'back-office/setting/country/{id}/restore', ['as' => 'country.restore', 'uses' => 'BackOffice\Setting\CountryController@restore']);

            Route::resource('company', 'BackOffice\Setting\GeneralController');
            Route::match(['put', 'patch'], 'back-office/setting/general/{id}/restore', ['as' => 'general.restore', 'uses' => 'BackOffice\Setting\GeneralController@restore']);

            Route::resource('company', 'BackOffice\Setting\CompanyController');
            Route::match(['put', 'patch'], 'back-office/setting/company/{id}/restore', ['as' => 'company.restore', 'uses' => 'BackOffice\Setting\CompanyController@restore']);

            Route::resource('company.bank', 'BackOffice\Setting\Company\BankController');
            Route::match(['put', 'patch'], 'back-office/setting/company/{company_id}/bank/{bank_id}/restore', ['as' => 'company.bank.restore', 'uses' => 'BackOffice\Setting\Company\BankController@restore']);

            Route::resource('company.branch', 'BackOffice\Setting\Company\BranchController');
            Route::match(['put', 'patch'], 'back-office/setting/company/{company_id}/branch/{branch_id}/restore', ['as' => 'company.branch.restore', 'uses' => 'BackOffice\Setting\Company\BranchController@restore']);

            Route::resource('company.credit-term', 'BackOffice\Setting\Company\CreditTermController');
            Route::match(['put', 'patch'], 'back-office/setting/company/{company_id}/credit-term/{credit_term_id}/restore', ['as' => 'company.credit-term.restore', 'uses' => 'BackOffice\Setting\Company\CreditTermController@restore']);

            Route::resource('company.wallet', 'BackOffice\Setting\Company\WalletController');
            Route::match(['put', 'patch'], 'back-office/setting/company/{company_id}/wallet/{credit_term_id}/restore', ['as' => 'company.wallet.restore', 'uses' => 'BackOffice\Setting\Company\WalletController@restore']);

            Route::resource('company-group', 'BackOffice\Setting\CompanyGroupController');
            Route::match(['put', 'patch'], 'back-office/setting/company-group/{id}/restore', ['as' => 'company-group.restore', 'uses' => 'BackOffice\Setting\CompanyGroupController@restore']);

            Route::resource('customer-tier', 'BackOffice\Setting\CustomerTierController');
            Route::match(['put', 'patch'], 'back-office/setting/customer-tier/{id}/restore', ['as' => 'customer-tier.restore', 'uses' => 'BackOffice\Setting\CustomerTierController@restore']);
            Route::match(['get'], 'excel', ['as' => 'customer-tier.excel', 'uses' => 'BackOffice\Setting\CustomerTierController@excel']);
            Route::match(['post'], 'customer-tier/delete-all', ['as' => 'customer-tier.delete-all', 'uses' => 'BackOffice\Setting\CustomerTierController@destroyAll']);

            Route::resource('item-type', 'BackOffice\Setting\CategoryController');
            Route::match(['post'], 'item-type/excel', ['as' => 'item-type.excel', 'uses' => 'BackOffice\Setting\CategoryController@excel']);
            Route::match(['get'], 'item-type/{id}/duplicate', ['as' => 'item-type.duplicate', 'uses' => 'BackOffice\Setting\CategoryController@duplicate']);
            Route::match(['post'], 'item-type/store-duplicate', ['as' => 'item-type.store-duplicate', 'uses' => 'BackOffice\Setting\CategoryController@storeDuplicate']);
            Route::match(['post'], 'item-type/delete-all', ['as' => 'item-type.delete-all', 'uses' => 'BackOffice\Setting\CategoryController@deleteAll']);
            Route::match(['put', 'patch'], 'back-office/setting/item-type/{id}/restore', ['as' => 'item-type.restore', 'uses' => 'BackOffice\Setting\CategoryController@restore']);


            

            Route::resource('platform', 'BackOffice\Setting\PlatformController');
            Route::match(['post'], 'platform/excel', ['as' => 'platform.excel', 'uses' => 'BackOffice\Setting\PlatformController@excel']);
            Route::match(['get'], 'platform/{id}/duplicate', ['as' => 'platform.duplicate', 'uses' => 'BackOffice\Setting\PlatformController@duplicate']);
            Route::match(['post'], 'platform/store-duplicate', ['as' => 'platform.store-duplicate', 'uses' => 'BackOffice\Setting\PlatformController@storeDuplicate']);
            Route::match(['post'], 'platform/delete-all', ['as' => 'platform.delete-all', 'uses' => 'BackOffice\Setting\PlatformController@deleteAll']);
            Route::match(['put', 'patch'], 'platform/{id}/restore', ['as' => 'platform.restore', 'uses' => 'BackOffice\Setting\PlatformController@restore']);

            Route::resource('product', 'BackOffice\Setting\Product\ProductController');
            Route::match(['put', 'patch'], 'back-office/setting/product/{id}/restore', ['as' => 'product.restore', 'uses' => 'BackOffice\Setting\Product\ProductController@restore']);

            Route::resource('product.barcode', 'BackOffice\Setting\Product\BarcodeController');
            Route::match(['put', 'patch'], 'back-office/setting/product/{product_id}/barcode/{barcode_id}/restore', ['as' => 'product.restore', 'uses' => 'BackOffice\Setting\Product\BarcodeController@restore']);

            Route::resource('product.nickname', 'BackOffice\Setting\Product\NicknameController');
            Route::match(['put', 'patch'], 'back-office/setting/product/{product_id}/nickname/{nickname_id}/restore', ['as' => 'product.restore', 'uses' => 'BackOffice\Setting\Product\NicknameController@restore']);

            Route::resource('product.supplier', 'BackOffice\Setting\Product\SupplierController');
            Route::match(['put', 'patch'], 'back-office/setting/product/{product_id}/supplier/{supplier_id}/restore', ['as' => 'product.restore', 'uses' => 'BackOffice\Setting\Product\SupplierController@restore']);

            Route::resource('product.unit.customer-tier.price', 'BackOffice\Setting\Product\Unit\CustomerTier\PriceController');
            Route::match(['put', 'patch'], 'back-office/setting/product/{product_id}/unit/{unit_id}/customer-tier/{customer_tier_id}/price/{price_id}/restore', ['as' => 'product.restore', 'uses' => 'BackOffice\Setting\Product\Unit\CustomerTier\PriceController@restore']);

            Route::resource('publisher', 'BackOffice\Setting\PublisherController');
            Route::match(['post'], 'publisher/excel', ['as' => 'publisher.excel', 'uses' => 'BackOffice\Setting\PublisherController@excel']);
            Route::match(['get'], 'publisher/{id}/duplicate', ['as' => 'publisher.duplicate', 'uses' => 'BackOffice\Setting\PublisherController@duplicate']);
            Route::match(['post'], 'publisher/store-duplicate', ['as' => 'publisher.store-duplicate', 'uses' => 'BackOffice\Setting\PublisherController@storeDuplicate']);
            Route::match(['post'], 'publisher/delete-all', ['as' => 'publisher.delete-all', 'uses' => 'BackOffice\Setting\PublisherController@deleteAll']);
            Route::match(['put', 'patch'], 'back-office/setting/publisher/{id}/restore', ['as' => 'publisher.restore', 'uses' => 'BackOffice\Setting\PublisherController@restore']);

            Route::match(['delete'], 'tag/destroy-many', ['as' => 'tag.destroy-many', 'uses' => 'BackOffice\Setting\TagController@destroyMany']);
            Route::match(['patch'], 'tag/{id}/patch-name', ['as' => 'tag.patch-name', 'uses' => 'BackOffice\Setting\TagController@patchName']);
            Route::match(['get'], 'tag/{id}/duplicate', ['as' => 'tag.duplicate', 'uses' => 'BackOffice\Setting\TagController@duplicate']);
            Route::match(['post'], 'tag/store-duplicate', ['as' => 'tag.store-duplicate', 'uses' => 'BackOffice\Setting\TagController@storeDuplicate']);
            Route::match(['get'], 'tag/{id}/check-status', ['as' => 'tag.check-status', 'uses' => 'BackOffice\Setting\TagController@checkStatus']);
            Route::resource('tag', 'BackOffice\Setting\TagController');
            Route::match(['put', 'patch'], 'tag/{id}/restore', ['as' => 'tag.restore', 'uses' => 'BackOffice\Setting\TagController@restore']);

            Route::resource('user', 'BackOffice\Setting\UserController');
            Route::match(['put', 'patch'], 'user/{id}/restore', ['as' => 'user.restore', 'uses' => 'BackOffice\Setting\UserController@restore']);
            
            //warehouse
            Route::match(['post'], 'warehouse/excel', ['as' => 'warehouse.excel', 'uses' => 'BackOffice\Setting\WarehouseController@excel']);
            Route::resource('warehouse', 'BackOffice\Setting\WarehouseController');
            Route::match(['put', 'patch'], 'warehouse/{id}/restore', ['as' => 'warehouse.restore', 'uses' => 'BackOffice\Setting\WarehouseController@restore']);
            Route::match(['get'], 'warehouse/{id}/duplicate', ['as' => 'warehouse.duplicate', 'uses' => 'BackOffice\Setting\WarehouseController@duplicate']);
            Route::match(['post'], 'warehouse/delete-all', ['as' => 'warehouse.delete-all', 'uses' => 'BackOffice\Setting\WarehouseController@deleteAll']);
            
            
            //general
            Route::resource('general', 'BackOffice\Setting\GeneralController');


            // Route::match(['delete'], 'news-and-events/destroy-many', ['as' => 'news-and-events.destroy-many', 'uses' => 'BackOffice\NewsAndEvent\NewsAndEventController@destroyMany']);
            // Route::match(['get'], 'news-and-events/{id}/duplicate', ['as' => 'news-and-events.duplicate', 'uses' => 'BackOffice\NewsAndEvent\NewsAndEventController@duplicate']);
            // Route::match(['patch'], 'news-and-events/{id}/patch-status', ['as' => 'news-and-events.patch-status', 'uses' => 'BackOffice\NewsAndEvent\NewsAndEventController@patchStatus']);
            // Route::match(['post'], 'news-and-events/store-duplicate', ['as' => 'news-and-events.store-duplicate', 'uses' => 'BackOffice\NewsAndEvent\NewsAndEventController@storeDuplicate']);
            // Route::match(['get'], 'news-and-events/check-status', ['as' => 'news-and-events.check-status', 'uses' => 'BackOffice\NewsAndEvent\NewsAndEventController@checkStatus']);
            // Route::get('news-and-events/get-image', ['as' => 'news-and-events.get-image', 'uses' => 'BackOffice\NewsAndEvent\NewsAndEventController@getImage']);
                
            // Route::resource('news-and-events', 'BackOffice\NewsAndEvent\NewsAndEventController');
            // Route::match(['put', 'patch'], 'news-and-events/{id}/restore', ['as' => 'news-and-events.restore', 'uses' => 'BackOffice\NewsAndEvent\NewsAndEventController@restore']);

        });
    });
// });

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');
