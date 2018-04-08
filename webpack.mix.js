let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
// Configurations
    .options({
    processCssUrls: false,
})

// Vendor
.copy('node_modules/font-awesome/fonts/*', 'public/fonts')


// Global Scripts
.copyDirectory('resources/assets/fonts', 'public/fonts')
    .copyDirectory('resources/assets/images', 'public/images')
    .copyDirectory('resources/assets/js/back-office/templates', 'public/js/back-office/templates')
    .copyDirectory('resources/assets/sass/back-office/templates', 'public/css/back-office/templates')
    .copyDirectory('resources/assets/fonts/backOffice/template/bootstrap-sass', 'public/css/~bootstrap-sass/assets/fonts/bootstrap')
    .js('resources/assets/js/app.js', 'public/js')
    .js('resources/assets/js/back-office/templates/script.js', 'public/js/back-office/templates')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .sass('resources/assets/sass/style.scss', 'public/css')

// Auth
.js('resources/assets/js/auth/login.js', 'public/js/auth')
    .js('resources/assets/js/auth/register.js', 'public/js/auth')
    .js('resources/assets/js/auth/forget-password.js', 'public/js/auth')
    .sass('resources/assets/sass/auth/login.scss', 'public/css/auth')
    .sass('resources/assets/sass/auth/register.scss', 'public/css/auth')
    .sass('resources/assets/sass/auth/forget-password.scss', 'public/css/auth')

// UI-Kit
// Home
.js('resources/assets/js/back-office/home/create.js', 'public/js/back-office/home')
    .js('resources/assets/js/back-office/home/index.js', 'public/js/back-office/home')
    // .js('resources/assets/js/back-office/home/pdf.js', 'public/js/back-office/home')
    .js('resources/assets/js/back-office/home/show.js', 'public/js/back-office/home')
    // .js('resources/assets/js/back-office/home/update.js', 'public/js/back-office/home')
    .sass('resources/assets/sass/back-office/home/create.scss', 'public/css/back-office/home')
    .sass('resources/assets/sass/back-office/home/index.scss', 'public/css/back-office/home')
    // .sass('resources/assets/sass/back-office/home/pdf.scss', 'public/css/back-office/home')
    .sass('resources/assets/sass/back-office/home/show.scss', 'public/css/back-office/home')
    // .sass('resources/assets/sass/back-office/home/update.scss', 'public/css/back-office/home')

// Back Office
// Inquiry
.js('resources/assets/js/back-office/inquiry/create.js', 'public/js/back-office/inquiry')
    .js('resources/assets/js/back-office/inquiry/index.js', 'public/js/back-office/inquiry')
    // .js('resources/assets/js/back-office/inquiry/pdf.js', 'public/js/back-office/inquiry')
    .js('resources/assets/js/back-office/inquiry/show.js', 'public/js/back-office/inquiry')
    .js('resources/assets/js/back-office/inquiry/update.js', 'public/js/back-office/inquiry')
    .sass('resources/assets/sass/back-office/inquiry/create.scss', 'public/css/back-office/inquiry')
    .sass('resources/assets/sass/back-office/inquiry/index.scss', 'public/css/back-office/inquiry')
    // .sass('resources/assets/sass/back-office/inquiry/pdf.scss', 'public/css/back-office/inquiry')
    .sass('resources/assets/sass/back-office/inquiry/show.scss', 'public/css/back-office/inquiry')
    .sass('resources/assets/sass/back-office/inquiry/update.scss', 'public/css/back-office/inquiry')

// Purchasing Order
.js('resources/assets/js/back-office/purchasing-order/create.js', 'public/js/back-office/purchasing-order')
    .js('resources/assets/js/back-office/purchasing-order/createForInquiry.js', 'public/js/back-office/purchasing-order')
    .js('resources/assets/js/back-office/purchasing-order/index.js', 'public/js/back-office/purchasing-order')
    // .js('resources/assets/js/back-office/purchasing-order/pdf.js', 'public/js/back-office/purchasing-order')
    .js('resources/assets/js/back-office/purchasing-order/show.js', 'public/js/back-office/purchasing-order')
    // .js('resources/assets/js/back-office/purchasing-order/update.js', 'public/js/back-office/purchasing-order')
    .sass('resources/assets/sass/back-office/purchasing-order/create.scss', 'public/css/back-office/purchasing-order')
    .sass('resources/assets/sass/back-office/purchasing-order/createForInquiry.scss', 'public/css/back-office/purchasing-order')
    .sass('resources/assets/sass/back-office/purchasing-order/index.scss', 'public/css/back-office/purchasing-order')
    // .sass('resources/assets/sass/back-office/purchasing-order/pdf.scss', 'public/css/back-office/purchasing-order')
    .sass('resources/assets/sass/back-office/purchasing-order/show.scss', 'public/css/back-office/purchasing-order')
    // .sass('resources/assets/sass/back-office/purchasing-order/update.scss', 'public/css/back-office/purchasing-order')

// Non Esential Purchasing Order
.js('resources/assets/js/back-office/non-essential-purchasing-order/create.js', 'public/js/back-office/non-essential-purchasing-order')
    .js('resources/assets/js/back-office/non-essential-purchasing-order/index.js', 'public/js/back-office/non-essential-purchasing-order')
    // .js('resources/assets/js/back-office/non-essential-purchasing-order/pdf.js', 'public/js/back-office/non-essential-purchasing-order')
    .js('resources/assets/js/back-office/non-essential-purchasing-order/show.js', 'public/js/back-office/non-essential-purchasing-order')
    // .js('resources/assets/js/back-office/non-essential-purchasing-order/update.js', 'public/js/back-office/non-essential-purchasing-order')
    .sass('resources/assets/sass/back-office/non-essential-purchasing-order/create.scss', 'public/css/back-office/non-essential-purchasing-order')
    .sass('resources/assets/sass/back-office/non-essential-purchasing-order/index.scss', 'public/css/back-office/non-essential-purchasing-order')
    // .sass('resources/assets/sass/back-office/non-essential-purchasing-order/pdf.scss', 'public/css/back-office/non-essential-purchasing-order')
    .sass('resources/assets/sass/back-office/non-essential-purchasing-order/show.scss', 'public/css/back-office/non-essential-purchasing-order')
    // .sass('resources/assets/sass/back-office/non-essential-purchasing-order/update.scss', 'public/css/back-office/non-essential-purchasing-order')

// Sales Order
.js('resources/assets/js/back-office/sales-order/create.js', 'public/js/back-office/sales-order')
    .js('resources/assets/js/back-office/sales-order/index.js', 'public/js/back-office/sales-order')
    // .js('resources/assets/js/back-office/sales-order/pdf.js', 'public/js/back-office/sales-order')
    .js('resources/assets/js/back-office/sales-order/show.js', 'public/js/back-office/sales-order')
    // .js('resources/assets/js/back-office/sales-order/update.js', 'public/js/back-office/sales-order')
    .sass('resources/assets/sass/back-office/sales-order/create.scss', 'public/css/back-office/sales-order')
    .sass('resources/assets/sass/back-office/sales-order/index.scss', 'public/css/back-office/sales-order')
    // .sass('resources/assets/sass/back-office/sales-order/pdf.scss', 'public/css/back-office/sales-order')
    .sass('resources/assets/sass/back-office/sales-order/show.scss', 'public/css/back-office/sales-order')
    // .sass('resources/assets/sass/back-office/sales-order/update.scss', 'public/css/back-office/sales-order')

// Pre Order
.js('resources/assets/js/back-office/pre-order/create.js', 'public/js/back-office/pre-order')
    .js('resources/assets/js/back-office/pre-order/createBeforeInitial.js', 'public/js/back-office/pre-order')
    .js('resources/assets/js/back-office/pre-order/createAfterInitial.js', 'public/js/back-office/pre-order')
    .js('resources/assets/js/back-office/pre-order/index.js', 'public/js/back-office/pre-order')
    // .js('resources/assets/js/back-office/pre-order/pdf.js', 'public/js/back-office/pre-order')
    .js('resources/assets/js/back-office/pre-order/show.js', 'public/js/back-office/pre-order')
    .js('resources/assets/js/back-office/pre-order/update.js', 'public/js/back-office/pre-order')
    .sass('resources/assets/sass/back-office/pre-order/create.scss', 'public/css/back-office/pre-order')
    .sass('resources/assets/sass/back-office/pre-order/createBeforeInitial.scss', 'public/css/back-office/pre-order')
    .sass('resources/assets/sass/back-office/pre-order/createAfterInitial.scss', 'public/css/back-office/pre-order')
    .sass('resources/assets/sass/back-office/pre-order/index.scss', 'public/css/back-office/pre-order')
    // .sass('resources/assets/sass/back-office/pre-order/pdf.scss', 'public/css/back-office/pre-order')
    .sass('resources/assets/sass/back-office/pre-order/show.scss', 'public/css/back-office/pre-order')
    .sass('resources/assets/sass/back-office/pre-order/update.scss', 'public/css/back-office/pre-order')

// CustomerReturnOrder
.js('resources/assets/js/back-office/customer-return-order/create.js', 'public/js/back-office/customer-return-order')
    .js('resources/assets/js/back-office/customer-return-order/createFromCustomer.js', 'public/js/back-office/customer-return-order')
    .js('resources/assets/js/back-office/customer-return-order/createFromTaxInvoice.js', 'public/js/back-office/customer-return-order')
    .js('resources/assets/js/back-office/customer-return-order/index.js', 'public/js/back-office/customer-return-order')
    // .js('resources/assets/js/back-office/customer-return-order/pdf.js', 'public/js/back-office/customer-return-order')
    .js('resources/assets/js/back-office/customer-return-order/show.js', 'public/js/back-office/customer-return-order')
    // .js('resources/assets/js/back-office/customer-return-order/update.js', 'public/js/back-office/customer-return-order')
    .sass('resources/assets/sass/back-office/customer-return-order/create.scss', 'public/css/back-office/customer-return-order')
    .sass('resources/assets/sass/back-office/customer-return-order/createFromCustomer.scss', 'public/css/back-office/customer-return-order')
    .sass('resources/assets/sass/back-office/customer-return-order/createFromTaxInvoice.scss', 'public/css/back-office/customer-return-order')
    .sass('resources/assets/sass/back-office/customer-return-order/index.scss', 'public/css/back-office/customer-return-order')
    // .sass('resources/assets/sass/back-office/customer-return-order/pdf.scss', 'public/css/back-office/customer-return-order')
    .sass('resources/assets/sass/back-office/customer-return-order/show.scss', 'public/css/back-office/customer-return-order')
    // .sass('resources/assets/sass/back-office/customer-return-order/update.scss', 'public/css/back-office/customer-return-order')

// Quota
.js('resources/assets/js/back-office/quota/create.js', 'public/js/back-office/quota')
    .js('resources/assets/js/back-office/quota/index.js', 'public/js/back-office/quota')
    // .js('resources/assets/js/back-office/quota/pdf.js', 'public/js/back-office/quota')
    .js('resources/assets/js/back-office/quota/show.js', 'public/js/back-office/quota')
    .js('resources/assets/js/back-office/quota/update.js', 'public/js/back-office/quota')
    .sass('resources/assets/sass/back-office/quota/create.scss', 'public/css/back-office/quota')
    .sass('resources/assets/sass/back-office/quota/index.scss', 'public/css/back-office/quota')
    // .sass('resources/assets/sass/back-office/quota/pdf.scss', 'public/css/back-office/quota')
    .sass('resources/assets/sass/back-office/quota/show.scss', 'public/css/back-office/quota')
    .sass('resources/assets/sass/back-office/quota/update.scss', 'public/css/back-office/quota')

// ImportDutyExpenditure
.js('resources/assets/js/back-office/purchasing/import-duty-expenditure-requisition/create.js', 'public/js/back-office/purchasing/import-duty-expenditure-requisition')
    .sass('resources/assets/sass/back-office/purchasing/import-duty-expenditure-requisition/index.scss', 'public/css/back-office/purchasing/import-duty-expenditure-requisition')
    .sass('resources/assets/sass/back-office/purchasing/import-duty-expenditure-requisition/create.scss', 'public/css/back-office/purchasing/import-duty-expenditure-requisition')
// Accounting

// BillingNote
.sass('resources/assets/sass/back-office/accounting/billing-note/index.scss', 'public/css/back-office/accounting/billing-note')
    .sass('resources/assets/sass/back-office/accounting/billing-note/create.scss', 'public/css/back-office/accounting/billing-note')
    .js('resources/assets/js/back-office/accounting/billing-note/create.js', 'public/js/back-office/accounting/billing-note')

// CreditNote
.sass('resources/assets/sass/back-office/accounting/credit-note/index.scss', 'public/css/back-office/accounting/credit-note')
    .sass('resources/assets/sass/back-office/accounting/credit-note/create.scss', 'public/css/back-office/accounting/credit-note')
    .js('resources/assets/js/back-office/accounting/credit-note/create.js', 'public/js/back-office/accounting/credit-note')

// CreditNoteFromCustomerReturnOrder
.js('resources/assets/js/back-office/accounting/credit-note-from-customer-return-order/create.js', 'public/js/back-office/accounting/credit-note-from-customer-return-order')
    .js('resources/assets/js/back-office/accounting/credit-note-from-customer-return-order/index.js', 'public/js/back-office/accounting/credit-note-from-customer-return-order')
    // .js('resources/assets/js/back-office/accounting/credit-note-from-customer-return-order/pdf.js', 'public/js/back-office/accounting/credit-note-from-customer-return-order')
    .js('resources/assets/js/back-office/accounting/credit-note-from-customer-return-order/show.js', 'public/js/back-office/accounting/credit-note-from-customer-return-order')
    // .js('resources/assets/js/back-office/accounting/credit-note-from-customer-return-order/update.js', 'public/js/back-office/accounting/credit-note-from-customer-return-order')
    .sass('resources/assets/sass/back-office/accounting/credit-note-from-customer-return-order/create.scss', 'public/css/back-office/accounting/credit-note-from-customer-return-order')
    .sass('resources/assets/sass/back-office/accounting/credit-note-from-customer-return-order/index.scss', 'public/css/back-office/accounting/credit-note-from-customer-return-order')
    // .sass('resources/assets/sass/back-office/accounting/credit-note-from-customer-return-order/pdf.scss', 'public/css/back-office/accounting/credit-note-from-customer-return-order')
    .sass('resources/assets/sass/back-office/accounting/credit-note-from-customer-return-order/show.scss', 'public/css/back-office/accounting/credit-note-from-customer-return-order')
    // .sass('resources/assets/sass/back-office/accounting/credit-note-from-customer-return-order/update.scss', 'public/css/back-office/accounting/credit-note-from-customer-return-order')

// CreditNoteFromSupplier
.js('resources/assets/js/back-office/accounting/credit-note-from-supplier/create.js', 'public/js/back-office/accounting/credit-note-from-supplier')
    .js('resources/assets/js/back-office/accounting/credit-note-from-supplier/index.js', 'public/js/back-office/accounting/credit-note-from-supplier')
    // .js('resources/assets/js/back-office/accounting/credit-note-from-supplier/pdf.js', 'public/js/back-office/accounting/credit-note-from-supplier')
    .js('resources/assets/js/back-office/accounting/credit-note-from-supplier/show.js', 'public/js/back-office/accounting/credit-note-from-supplier')
    // .js('resources/assets/js/back-office/accounting/credit-note-from-supplier/update.js', 'public/js/back-office/accounting/credit-note-from-supplier')
    .sass('resources/assets/sass/back-office/accounting/credit-note-from-supplier/create.scss', 'public/css/back-office/accounting/credit-note-from-supplier')
    .sass('resources/assets/sass/back-office/accounting/credit-note-from-supplier/index.scss', 'public/css/back-office/accounting/credit-note-from-supplier')
    // .sass('resources/assets/sass/back-office/accounting/credit-note-from-supplier/pdf.scss', 'public/css/back-office/accounting/credit-note-from-supplier')
    .sass('resources/assets/sass/back-office/accounting/credit-note-from-supplier/show.scss', 'public/css/back-office/accounting/credit-note-from-supplier')
    // .sass('resources/assets/sass/back-office/accounting/credit-note-from-supplier/update.scss', 'public/css/back-office/accounting/credit-note-from-supplier')

// CreditNoteToCustomer
.js('resources/assets/js/back-office/accounting/credit-note-to-customer/create.js', 'public/js/back-office/accounting/credit-note-to-customer')
    .js('resources/assets/js/back-office/accounting/credit-note-to-customer/index.js', 'public/js/back-office/accounting/credit-note-to-customer')
    // .js('resources/assets/js/back-office/accounting/credit-note-to-customer/pdf.js', 'public/js/back-office/accounting/credit-note-to-customer')
    .js('resources/assets/js/back-office/accounting/credit-note-to-customer/show.js', 'public/js/back-office/accounting/credit-note-to-customer')
    // .js('resources/assets/js/back-office/accounting/credit-note-to-customer/update.js', 'public/js/back-office/accounting/credit-note-to-customer')
    .sass('resources/assets/sass/back-office/accounting/credit-note-to-customer/create.scss', 'public/css/back-office/accounting/credit-note-to-customer')
    .sass('resources/assets/sass/back-office/accounting/credit-note-to-customer/index.scss', 'public/css/back-office/accounting/credit-note-to-customer')
    // .sass('resources/assets/sass/back-office/accounting/credit-note-to-customer/pdf.scss', 'public/css/back-office/accounting/credit-note-to-customer')
    .sass('resources/assets/sass/back-office/accounting/credit-note-to-customer/show.scss', 'public/css/back-office/accounting/credit-note-to-customer')
    // .sass('resources/assets/sass/back-office/accounting/credit-note-to-customer/update.scss', 'public/css/back-office/accounting/credit-note-to-customer')

// Payment
.js('resources/assets/js/back-office/accounting/payment/create.js', 'public/js/back-office/accounting/payment')
    .js('resources/assets/js/back-office/accounting/payment/index.js', 'public/js/back-office/accounting/payment')
    // .js('resources/assets/js/back-office/accounting/payment/pdf.js', 'public/js/back-office/accounting/payment')
    .js('resources/assets/js/back-office/accounting/payment/show.js', 'public/js/back-office/accounting/payment')
    // .js('resources/assets/js/back-office/accounting/payment/update.js', 'public/js/back-office/accounting/payment')
    .sass('resources/assets/sass/back-office/accounting/payment/create.scss', 'public/css/back-office/accounting/payment')
    .sass('resources/assets/sass/back-office/accounting/payment/index.scss', 'public/css/back-office/accounting/payment')
    // .sass('resources/assets/sass/back-office/accounting/payment/pdf.scss', 'public/css/back-office/accounting/payment')
    .sass('resources/assets/sass/back-office/accounting/payment/show.scss', 'public/css/back-office/accounting/payment')
    // .sass('resources/assets/sass/back-office/accounting/payment/update.scss', 'public/css/back-office/accounting/payment')

.js('resources/assets/js/back-office/accounting/payment-pr/create.js', 'public/js/back-office/accounting/payment-pr')
    .js('resources/assets/js/back-office/accounting/payment-pr/index.js', 'public/js/back-office/accounting/payment-pr')
    // .js('resources/assets/js/back-office/accounting/payment-pr/pdf.js', 'public/js/back-office/accounting/payment-pr')
    .js('resources/assets/js/back-office/accounting/payment-pr/show.js', 'public/js/back-office/accounting/payment-pr')
    // .js('resources/assets/js/back-office/accounting/payment-pr/update.js', 'public/js/back-office/accounting/payment-pr')
    .sass('resources/assets/sass/back-office/accounting/payment-pr/create.scss', 'public/css/back-office/accounting/payment-pr')
    .sass('resources/assets/sass/back-office/accounting/payment-pr/index.scss', 'public/css/back-office/accounting/payment-pr')
    // .sass('resources/assets/sass/back-office/accounting/payment-pr/pdf.scss', 'public/css/back-office/accounting/payment-pr')
    .sass('resources/assets/sass/back-office/accounting/payment-pr/show.scss', 'public/css/back-office/accounting/payment-pr')
    // .sass('resources/assets/sass/back-office/accounting/payment-pr/update.scss', 'public/css/back-office/accounting/payment-pr')

.js('resources/assets/js/back-office/accounting/payment-so/create.js', 'public/js/back-office/accounting/payment-so')
    .js('resources/assets/js/back-office/accounting/payment-so/index.js', 'public/js/back-office/accounting/payment-so')
    // .js('resources/assets/js/back-office/accounting/payment/pdf.js', 'public/js/back-office/accounting/payment-so')
    .js('resources/assets/js/back-office/accounting/payment-so/show.js', 'public/js/back-office/accounting/payment-so')
    // .js('resources/assets/js/back-office/accounting/payment-so/update.js', 'public/js/back-office/accounting/payment-so')
    .sass('resources/assets/sass/back-office/accounting/payment-so/create.scss', 'public/css/back-office/accounting/payment-so')
    .sass('resources/assets/sass/back-office/accounting/payment-so/index.scss', 'public/css/back-office/accounting/payment-so')
    // .sass('resources/assets/sass/back-office/accounting/payment-so/pdf.scss', 'public/css/back-office/accounting/payment-so')
    .sass('resources/assets/sass/back-office/accounting/payment-so/show.scss', 'public/css/back-office/accounting/payment-so')
    // .sass('resources/assets/sass/back-office/accounting/payment-so/update.scss', 'public/css/back-office/accounting/payment-so')

.js('resources/assets/js/back-office/accounting/payment-av/create.js', 'public/js/back-office/accounting/payment-av')
    .js('resources/assets/js/back-office/accounting/payment-av/index.js', 'public/js/back-office/accounting/payment-av')
    // .js('resources/assets/js/back-office/accounting/payment/pdf.js', 'public/js/back-office/accounting/payment-so')
    .js('resources/assets/js/back-office/accounting/payment-av/show.js', 'public/js/back-office/accounting/payment-av')
    // .js('resources/assets/js/back-office/accounting/payment-so/update.js', 'public/js/back-office/accounting/payment-so')
    .sass('resources/assets/sass/back-office/accounting/payment-av/create.scss', 'public/css/back-office/accounting/payment-av')
    .sass('resources/assets/sass/back-office/accounting/payment-av/index.scss', 'public/css/back-office/accounting/payment-av')
    // .sass('resources/assets/sass/back-office/accounting/payment-so/pdf.scss', 'public/css/back-office/accounting/payment-so')
    .sass('resources/assets/sass/back-office/accounting/payment-av/show.scss', 'public/css/back-office/accounting/payment-av')
    // .sass('resources/assets/sass/back-office/accounting/payment-so/update.scss', 'public/css/back-office/accounting/payment-so')

// ShippingFee
.js('resources/assets/js/back-office/purchasing/shipping-fee-expenditure-requisition/create.js', 'public/js/back-office/purchasing/shipping-fee-expenditure-requisition')
    .js('resources/assets/js/back-office/purchasing/shipping-fee-expenditure-requisition/index.js', 'public/js/back-office/purchasing/shipping-fee-expenditure-requisition')
    // .js('resources/assets/js/back-office/purchasing/shipping-fee-expenditure-requisition/pdf.js', 'public/js/back-office/purchasing/shipping-fee-expenditure-requisition')
    .js('resources/assets/js/back-office/purchasing/shipping-fee-expenditure-requisition/show.js', 'public/js/back-office/purchasing/shipping-fee-expenditure-requisition')
    // .js('resources/assets/js/back-office/purchasing/shipping-fee-expenditure-requisition/update.js', 'public/js/back-office/purchasing/shipping-fee-expenditure-requisition')
    .sass('resources/assets/sass/back-office/purchasing/shipping-fee-expenditure-requisition/create.scss', 'public/css/back-office/purchasing/shipping-fee-expenditure-requisition')
    .sass('resources/assets/sass/back-office/purchasing/shipping-fee-expenditure-requisition/index.scss', 'public/css/back-office/purchasing/shipping-fee-expenditure-requisition')
    // .sass('resources/assets/sass/back-office/purchasing/shipping-fee-expenditure-requisition/pdf.scss', 'public/css/back-office/purchasing/shipping-fee-expenditure-requisition')
    .sass('resources/assets/sass/back-office/purchasing/shipping-fee-expenditure-requisition/show.scss', 'public/css/back-office/purchasing/shipping-fee-expenditure-requisition')
    // .sass('resources/assets/sass/back-office/purchasing/shipping-fee-expenditure-requisition/update.scss', 'public/css/back-office/purchasing/shipping-fee-expenditure-requisition')

// Refund from wallet
.js('resources/assets/js/back-office/accounting/refund-from-wallet/create.js', 'public/js/back-office/accounting/refund-from-wallet')
    .js('resources/assets/js/back-office/accounting/refund-from-wallet/index.js', 'public/js/back-office/accounting/refund-from-wallet')
    // .js('resources/assets/js/back-office/accounting/refund-from-wallet/pdf.js', 'public/js/back-office/accounting/refund-from-wallet')
    .js('resources/assets/js/back-office/accounting/refund-from-wallet/show.js', 'public/js/back-office/accounting/refund-from-wallet')
    // .js('resources/assets/js/back-office/accounting/refund-from-wallet/update.js', 'public/js/back-office/accounting/refund-from-wallet')
    .sass('resources/assets/sass/back-office/accounting/refund-from-wallet/create.scss', 'public/css/back-office/accounting/refund-from-wallet')
    .sass('resources/assets/sass/back-office/accounting/refund-from-wallet/index.scss', 'public/css/back-office/accounting/refund-from-wallet')
    // .sass('resources/assets/sass/back-office/accounting/refund-from-wallet/pdf.scss', 'public/css/back-office/accounting/refund-from-wallet')
    .sass('resources/assets/sass/back-office/accounting/refund-from-wallet/show.scss', 'public/css/back-office/accounting/refund-from-wallet')
    // .sass('resources/assets/sass/back-office/accounting/refund-from-wallet/update.scss', 'public/css/back-office/accounting/refund-from-wallet')
// expense-requisition
.js('resources/assets/js/back-office/accounting/expense-requisition/create.js', 'public/js/back-office/accounting/expense-requisition')
    .js('resources/assets/js/back-office/accounting/expense-requisition/index.js', 'public/js/back-office/accounting/expense-requisition')
    // .js('resources/assets/js/back-office/accounting/expense-requisition/pdf.js', 'public/js/back-office/accounting/expense-requisition')
    .js('resources/assets/js/back-office/accounting/expense-requisition/show.js', 'public/js/back-office/accounting/expense-requisition')
    // .js('resources/assets/js/back-office/accounting/expense-requisition/update.js', 'public/js/back-office/accounting/expense-requisition')
    .sass('resources/assets/sass/back-office/accounting/expense-requisition/create.scss', 'public/css/back-office/accounting/expense-requisition')
    .sass('resources/assets/sass/back-office/accounting/expense-requisition/index.scss', 'public/css/back-office/accounting/expense-requisition')
    // .sass('resources/assets/sass/back-office/accounting/expense-requisition/pdf.scss', 'public/css/back-office/accounting/expense-requisition')
    .sass('resources/assets/sass/back-office/accounting/expense-requisition/show.scss', 'public/css/back-office/accounting/expense-requisition')
    // .sass('resources/assets/sass/back-office/accounting/expense-requisition/update.scss', 'public/css/back-office/accounting/expense-requisition')

// expenditure-requisition
.js('resources/assets/js/back-office/accounting/expenditure-requisition/create.js', 'public/js/back-office/accounting/expenditure-requisition')
    .js('resources/assets/js/back-office/accounting/expenditure-requisition/index.js', 'public/js/back-office/accounting/expenditure-requisition')
    // .js('resources/assets/js/back-office/accounting/expenditure-requisition/pdf.js', 'public/js/back-office/accounting/expenditure-requisition')
    .js('resources/assets/js/back-office/accounting/expenditure-requisition/show.js', 'public/js/back-office/accounting/expenditure-requisition')
    // .js('resources/assets/js/back-office/accounting/expenditure-requisition/update.js', 'public/js/back-office/accounting/expenditure-requisition')
    .sass('resources/assets/sass/back-office/accounting/expenditure-requisition/create.scss', 'public/css/back-office/accounting/expenditure-requisition')
    .sass('resources/assets/sass/back-office/accounting/expenditure-requisition/index.scss', 'public/css/back-office/accounting/expenditure-requisition')
    // .sass('resources/assets/sass/back-office/accounting/expenditure-requisition/pdf.scss', 'public/css/back-office/accounting/expenditure-requisition')
    .sass('resources/assets/sass/back-office/accounting/expenditure-requisition/show.scss', 'public/css/back-office/accounting/expenditure-requisition')
    .sass('resources/assets/sass/back-office/accounting/expenditure-requisition/update.scss', 'public/css/back-office/accounting/expenditure-requisition')

// Logistic
// Cancel Note
.js('resources/assets/js/back-office/logistic/cancel-note/create.js', 'public/js/back-office/logistic/cancel-note')
    .js('resources/assets/js/back-office/logistic/cancel-note/index.js', 'public/js/back-office/logistic/cancel-note')
    // .js('resources/assets/js/back-office/logistic/cancel-note/pdf.js', 'public/js/back-office/logistic/cancel-note')
    .js('resources/assets/js/back-office/logistic/cancel-note/show.js', 'public/js/back-office/logistic/cancel-note')
    // .js('resources/assets/js/back-office/logistic/cancel-note/update.js', 'public/js/back-office/logistic/cancel-note')
    .sass('resources/assets/sass/back-office/logistic/cancel-note/create.scss', 'public/css/back-office/logistic/cancel-note')
    .sass('resources/assets/sass/back-office/logistic/cancel-note/index.scss', 'public/css/back-office/logistic/cancel-note')
    // .sass('resources/assets/sass/back-office/logistic/cancel-note/pdf.scss', 'public/css/back-office/logistic/cancel-note')
    .sass('resources/assets/sass/back-office/logistic/cancel-note/show.scss', 'public/css/back-office/logistic/cancel-note')
    // .sass('resources/assets/sass/back-office/logistic/cancel-note/update.scss', 'public/css/back-office/logistic/cancel-note')

// Claim
.js('resources/assets/js/back-office/logistic/claim/create.js', 'public/js/back-office/logistic/claim')
    .js('resources/assets/js/back-office/logistic/claim/index.js', 'public/js/back-office/logistic/claim')
    // .js('resources/assets/js/back-office/logistic/claim/pdf.js', 'public/js/back-office/logistic/claim')
    .js('resources/assets/js/back-office/logistic/claim/show.js', 'public/js/back-office/logistic/claim')
    // .js('resources/assets/js/back-office/logistic/claim/update.js', 'public/js/back-office/logistic/claim')
    .sass('resources/assets/sass/back-office/logistic/claim/create.scss', 'public/css/back-office/logistic/claim')
    .sass('resources/assets/sass/back-office/logistic/claim/index.scss', 'public/css/back-office/logistic/claim')
    // .sass('resources/assets/sass/back-office/logistic/claim/pdf.scss', 'public/css/back-office/logistic/claim')
    .sass('resources/assets/sass/back-office/logistic/claim/show.scss', 'public/css/back-office/logistic/claim')
    // .sass('resources/assets/sass/back-office/logistic/claim/update.scss', 'public/css/back-office/logistic/claim')

// Inventory
.js('resources/assets/js/back-office/logistic/inventory/create.js', 'public/js/back-office/logistic/inventory')
    .js('resources/assets/js/back-office/logistic/inventory/index.js', 'public/js/back-office/logistic/inventory')
    // .js('resources/assets/js/back-office/logistic/inventory/pdf.js', 'public/js/back-office/logistic/inventory')
    .js('resources/assets/js/back-office/logistic/inventory/show.js', 'public/js/back-office/logistic/inventory')
    .js('resources/assets/js/back-office/logistic/inventory/update.js', 'public/js/back-office/logistic/inventory')
    .sass('resources/assets/sass/back-office/logistic/inventory/create.scss', 'public/css/back-office/logistic/inventory')
    .sass('resources/assets/sass/back-office/logistic/inventory/index.scss', 'public/css/back-office/logistic/inventory')
    // .sass('resources/assets/sass/back-office/logistic/inventory/pdf.scss', 'public/css/back-office/logistic/inventory')
    .sass('resources/assets/sass/back-office/logistic/inventory/show.scss', 'public/css/back-office/logistic/inventory')
    .sass('resources/assets/sass/back-office/logistic/inventory/update.scss', 'public/css/back-office/logistic/inventory')

// ProductReceive
.js('resources/assets/js/back-office/logistic/product-receive/create.js', 'public/js/back-office/logistic/product-receive')
    .js('resources/assets/js/back-office/logistic/product-receive/index.js', 'public/js/back-office/logistic/product-receive')
    // .js('resources/assets/js/back-office/logistic/product-receive/pdf.js', 'public/js/back-office/logistic/product-receive')
    .js('resources/assets/js/back-office/logistic/product-receive/show.js', 'public/js/back-office/logistic/product-receive')
    // .js('resources/assets/js/back-office/logistic/product-receive/update.js', 'public/js/back-office/logistic/product-receive')
    .sass('resources/assets/sass/back-office/logistic/product-receive/create.scss', 'public/css/back-office/logistic/product-receive')
    .sass('resources/assets/sass/back-office/logistic/product-receive/index.scss', 'public/css/back-office/logistic/product-receive')
    // .sass('resources/assets/sass/back-office/logistic/product-receive/pdf.scss', 'public/css/back-office/logistic/product-receive')
    .sass('resources/assets/sass/back-office/logistic/product-receive/show.scss', 'public/css/back-office/logistic/product-receive')
    // .sass('resources/assets/sass/back-office/logistic/product-receive/update.scss', 'public/css/back-office/logistic/product-receive')

// ProductTransfer
.js('resources/assets/js/back-office/logistic/product-transfer/create.js', 'public/js/back-office/logistic/product-transfer')
    .js('resources/assets/js/back-office/logistic/product-transfer/index.js', 'public/js/back-office/logistic/product-transfer')
    // .js('resources/assets/js/back-office/logistic/product-transfer/pdf.js', 'public/js/back-office/logistic/product-transfer')
    .js('resources/assets/js/back-office/logistic/product-transfer/show.js', 'public/js/back-office/logistic/product-transfer')
    // .js('resources/assets/js/back-office/logistic/product-transfer/update.js', 'public/js/back-office/logistic/product-transfer')
    .sass('resources/assets/sass/back-office/logistic/product-transfer/create.scss', 'public/css/back-office/logistic/product-transfer')
    .sass('resources/assets/sass/back-office/logistic/product-transfer/index.scss', 'public/css/back-office/logistic/product-transfer')
    // .sass('resources/assets/sass/back-office/logistic/product-transfer/pdf.scss', 'public/css/back-office/logistic/product-transfer')
    .sass('resources/assets/sass/back-office/logistic/product-transfer/show.scss', 'public/css/back-office/logistic/product-transfer')
    // .sass('resources/assets/sass/back-office/logistic/product-transfer/update.scss', 'public/css/back-office/logistic/product-transfer')

// ProductTransfer
.js('resources/assets/js/back-office/logistic/shipping/create.js', 'public/js/back-office/logistic/shipping')
    .js('resources/assets/js/back-office/logistic/shipping/index.js', 'public/js/back-office/logistic/shipping')
    // .js('resources/assets/js/back-office/logistic/shipping/pdf.js', 'public/js/back-office/logistic/shipping')
    .js('resources/assets/js/back-office/logistic/shipping/show.js', 'public/js/back-office/logistic/shipping')
    // .js('resources/assets/js/back-office/logistic/shipping/update.js', 'public/js/back-office/logistic/shipping')
    .sass('resources/assets/sass/back-office/logistic/shipping/create.scss', 'public/css/back-office/logistic/shipping')
    .sass('resources/assets/sass/back-office/logistic/shipping/index.scss', 'public/css/back-office/logistic/shipping')
    // .sass('resources/assets/sass/back-office/logistic/shipping/pdf.scss', 'public/css/back-office/logistic/shipping')
    .sass('resources/assets/sass/back-office/logistic/shipping/show.scss', 'public/css/back-office/logistic/shipping')
    // .sass('resources/assets/sass/back-office/logistic/shipping/update.scss', 'public/css/back-office/logistic/shipping')

// Marketing
// Bundled Product
.js('resources/assets/js/back-office/marketing/bundled-product/create.js', 'public/js/back-office/marketing/bundled-product')
    .js('resources/assets/js/back-office/marketing/bundled-product/index.js', 'public/js/back-office/marketing/bundled-product')
    // .js('resources/assets/js/back-office/marketing/bundled-product/pdf.js', 'public/js/back-office/marketing/bundled-product')
    .js('resources/assets/js/back-office/marketing/bundled-product/show.js', 'public/js/back-office/marketing/bundled-product')
    // .js('resources/assets/js/back-office/marketing/bundled-product/update.js', 'public/js/back-office/marketing/bundled-product')
    .sass('resources/assets/sass/back-office/marketing/bundled-product/create.scss', 'public/css/back-office/marketing/bundled-product')
    .sass('resources/assets/sass/back-office/marketing/bundled-product/index.scss', 'public/css/back-office/marketing/bundled-product')
    // .sass('resources/assets/sass/back-office/marketing/bundled-product/pdf.scss', 'public/css/back-office/marketing/bundled-product')
    .sass('resources/assets/sass/back-office/marketing/bundled-product/show.scss', 'public/css/back-office/marketing/bundled-product')
    // .sass('resources/assets/sass/back-office/marketing/bundled-product/update.scss', 'public/css/back-office/marketing/bundled-product')

// Promotion
.js('resources/assets/js/back-office/marketing/promotion/create.js', 'public/js/back-office/marketing/promotion')
    .js('resources/assets/js/back-office/marketing/promotion/index.js', 'public/js/back-office/marketing/promotion')
    // .js('resources/assets/js/back-office/marketing/promotion/pdf.js', 'public/js/back-office/marketing/promotion')
    .js('resources/assets/js/back-office/marketing/promotion/show.js', 'public/js/back-office/marketing/promotion')
    // .js('resources/assets/js/back-office/marketing/promotion/update.js', 'public/js/back-office/marketing/promotion')
    .sass('resources/assets/sass/back-office/marketing/promotion/create.scss', 'public/css/back-office/marketing/promotion')
    .sass('resources/assets/sass/back-office/marketing/promotion/index.scss', 'public/css/back-office/marketing/promotion')
    // .sass('resources/assets/sass/back-office/marketing/promotion/pdf.scss', 'public/css/back-office/marketing/promotion')
    .sass('resources/assets/sass/back-office/marketing/promotion/show.scss', 'public/css/back-office/marketing/promotion')
    // .sass('resources/assets/sass/back-office/marketing/promotion/update.scss', 'public/css/back-office/marketing/promotion')

// Condition Group
.js('resources/assets/js/back-office/marketing/promotion/condition-group/create.js', 'public/js/back-office/marketing/promotion/condition-group')
    .js('resources/assets/js/back-office/marketing/promotion/condition-group/index.js', 'public/js/back-office/marketing/promotion/condition-group')
    // .js('resources/assets/js/back-office/marketing/promotion/condition-group/pdf.js', 'public/js/back-office/marketing/promotion/condition-group')
    .js('resources/assets/js/back-office/marketing/promotion/condition-group/show.js', 'public/js/back-office/marketing/promotion/condition-group')
    // .js('resources/assets/js/back-office/marketing/promotion/condition-group/update.js', 'public/js/back-office/marketing/promotion/condition-group')
    .sass('resources/assets/sass/back-office/marketing/promotion/condition-group/create.scss', 'public/css/back-office/marketing/promotion/condition-group')
    .sass('resources/assets/sass/back-office/marketing/promotion/condition-group/index.scss', 'public/css/back-office/marketing/promotion/condition-group')
    // .sass('resources/assets/sass/back-office/marketing/promotion/condition-group/pdf.scss', 'public/css/back-office/marketing/promotion/condition-group')
    .sass('resources/assets/sass/back-office/marketing/promotion/condition-group/show.scss', 'public/css/back-office/marketing/promotion/condition-group')
    // .sass('resources/assets/sass/back-office/marketing/promotion/condition-group/update.scss', 'public/css/back-office/marketing/promotion/condition-group')

// Other
// Product Borrow
.js('resources/assets/js/back-office/other/product-borrow/create.js', 'public/js/back-office/other/product-borrow')
    .js('resources/assets/js/back-office/other/product-borrow/index.js', 'public/js/back-office/other/product-borrow')
    // .js('resources/assets/js/back-office/other/product-borrow/pdf.js', 'public/js/back-office/other/product-borrow')
    .js('resources/assets/js/back-office/other/product-borrow/show.js', 'public/js/back-office/other/product-borrow')
    // .js('resources/assets/js/back-office/other/product-borrow/update.js', 'public/js/back-office/other/product-borrow')
    .sass('resources/assets/sass/back-office/other/product-borrow/create.scss', 'public/css/back-office/other/product-borrow')
    .sass('resources/assets/sass/back-office/other/product-borrow/index.scss', 'public/css/back-office/other/product-borrow')
    // .sass('resources/assets/sass/back-office/other/product-borrow/pdf.scss', 'public/css/back-office/other/product-borrow')
    .sass('resources/assets/sass/back-office/other/product-borrow/show.scss', 'public/css/back-office/other/product-borrow')
    // .sass('resources/assets/sass/back-office/other/product-borrow/update.scss', 'public/css/back-office/other/product-borrow')

// Product Withdrawal
.js('resources/assets/js/back-office/other/product-withdrawal/create.js', 'public/js/back-office/other/product-withdrawal')
    .js('resources/assets/js/back-office/other/product-withdrawal/index.js', 'public/js/back-office/other/product-withdrawal')
    // .js('resources/assets/js/back-office/other/product-withdrawal/pdf.js', 'public/js/back-office/other/product-withdrawal')
    .js('resources/assets/js/back-office/other/product-withdrawal/show.js', 'public/js/back-office/other/product-withdrawal')
    // .js('resources/assets/js/back-office/other/product-withdrawal/update.js', 'public/js/back-office/other/product-withdrawal')
    .sass('resources/assets/sass/back-office/other/product-withdrawal/create.scss', 'public/css/back-office/other/product-withdrawal')
    .sass('resources/assets/sass/back-office/other/product-withdrawal/index.scss', 'public/css/back-office/other/product-withdrawal')
    // .sass('resources/assets/sass/back-office/other/product-withdrawal/pdf.scss', 'public/css/back-office/other/product-withdrawal')
    .sass('resources/assets/sass/back-office/other/product-withdrawal/show.scss', 'public/css/back-office/other/product-withdrawal')
    // .sass('resources/assets/sass/back-office/other/product-withdrawal/update.scss', 'public/css/back-office/other/product-withdrawal')

// Expense Requisition
.js('resources/assets/js/back-office/other/expense-requisition/create.js', 'public/js/back-office/other/expense-requisition')
    .js('resources/assets/js/back-office/other/expense-requisition/index.js', 'public/js/back-office/other/expense-requisition')
    // .js('resources/assets/js/back-office/other/expense-requisition/pdf.js', 'public/js/back-office/other/expense-requisition')
    // .js('resources/assets/js/back-office/other/expense-requisition/show.js', 'public/js/back-office/other/expense-requisition')
    // .js('resources/assets/js/back-office/other/expense-requisition/update.js', 'public/js/back-office/other/expense-requisition')
    .sass('resources/assets/sass/back-office/other/expense-requisition/create.scss', 'public/css/back-office/other/expense-requisition')
    .sass('resources/assets/sass/back-office/other/expense-requisition/index.scss', 'public/css/back-office/other/expense-requisition')
    // .sass('resources/assets/sass/back-office/other/expense-requisition/pdf.scss', 'public/css/back-office/other/expense-requisition')
    // .sass('resources/assets/sass/back-office/other/expense-requisition/show.scss', 'public/css/back-office/other/expense-requisition')
    // .sass('resources/assets/sass/back-office/other/expense-requisition/update.scss', 'public/css/back-office/other/expense-requisition')

// Setting
// General
.js('resources/assets/js/back-office/setting/general/create.js', 'public/js/back-office/setting/general')
    .sass('resources/assets/sass/back-office/setting/general/create.scss', 'public/css/back-office/setting/general')

// Company
.js('resources/assets/js/back-office/setting/company/create.js', 'public/js/back-office/setting/company')
    .js('resources/assets/js/back-office/setting/company/index.js', 'public/js/back-office/setting/company')
    // .js('resources/assets/js/back-office/setting/company/pdf.js', 'public/js/back-office/setting/company')
    .js('resources/assets/js/back-office/setting/company/show.js', 'public/js/back-office/setting/company')
    // .js('resources/assets/js/back-office/setting/company/update.js', 'public/js/back-office/setting/company')
    .sass('resources/assets/sass/back-office/setting/company/create.scss', 'public/css/back-office/setting/company')
    .sass('resources/assets/sass/back-office/setting/company/index.scss', 'public/css/back-office/setting/company')
    // .sass('resources/assets/sass/back-office/setting/company/pdf.scss', 'public/css/back-office/setting/company')
    .sass('resources/assets/sass/back-office/setting/company/show.scss', 'public/css/back-office/setting/company')
    // .sass('resources/assets/sass/back-office/setting/company/update.scss', 'public/css/back-office/setting/company')

// Country
.js('resources/assets/js/back-office/setting/country/create.js', 'public/js/back-office/setting/country')
    .js('resources/assets/js/back-office/setting/country/index.js', 'public/js/back-office/setting/country')
    // .js('resources/assets/js/back-office/setting/country/pdf.js', 'public/js/back-office/setting/country')
    .js('resources/assets/js/back-office/setting/country/show.js', 'public/js/back-office/setting/country')
    // .js('resources/assets/js/back-office/setting/country/update.js', 'public/js/back-office/setting/country')
    .sass('resources/assets/sass/back-office/setting/country/create.scss', 'public/css/back-office/setting/country')
    .sass('resources/assets/sass/back-office/setting/country/index.scss', 'public/css/back-office/setting/country')
    // .sass('resources/assets/sass/back-office/setting/country/pdf.scss', 'public/css/back-office/setting/country')
    .sass('resources/assets/sass/back-office/setting/country/show.scss', 'public/css/back-office/setting/country')
    // .sass('resources/assets/sass/back-office/setting/country/update.scss', 'public/css/back-office/setting/country')

// Bank
.js('resources/assets/js/back-office/setting/company/bank/create.js', 'public/js/back-office/setting/company/bank')
    .js('resources/assets/js/back-office/setting/company/bank/index.js', 'public/js/back-office/setting/company/bank')
    // .js('resources/assets/js/back-office/setting/company/bank/pdf.js', 'public/js/back-office/setting/company/bank')
    .js('resources/assets/js/back-office/setting/company/bank/show.js', 'public/js/back-office/setting/company/bank')
    // .js('resources/assets/js/back-office/setting/company/bank/update.js', 'public/js/back-office/setting/company/bank')
    .sass('resources/assets/sass/back-office/setting/company/bank/create.scss', 'public/css/back-office/setting/company/bank')
    .sass('resources/assets/sass/back-office/setting/company/bank/index.scss', 'public/css/back-office/setting/company/bank')
    // .sass('resources/assets/sass/back-office/setting/company/bank/pdf.scss', 'public/css/back-office/setting/company/bank')
    .sass('resources/assets/sass/back-office/setting/company/bank/show.scss', 'public/css/back-office/setting/company/bank')
    // .sass('resources/assets/sass/back-office/setting/company/bank/update.scss', 'public/css/back-office/setting/company/bank')

// Branch
.js('resources/assets/js/back-office/setting/company/branch/create.js', 'public/js/back-office/setting/company/branch')
    .js('resources/assets/js/back-office/setting/company/branch/index.js', 'public/js/back-office/setting/company/branch')
    // .js('resources/assets/js/back-office/setting/company/branch/pdf.js', 'public/js/back-office/setting/company/branch')
    .js('resources/assets/js/back-office/setting/company/branch/show.js', 'public/js/back-office/setting/company/branch')
    // .js('resources/assets/js/back-office/setting/company/branch/update.js', 'public/js/back-office/setting/company/branch')
    .sass('resources/assets/sass/back-office/setting/company/branch/create.scss', 'public/css/back-office/setting/company/branch')
    .sass('resources/assets/sass/back-office/setting/company/branch/index.scss', 'public/css/back-office/setting/company/branch')
    // .sass('resources/assets/sass/back-office/setting/company/branch/pdf.scss', 'public/css/back-office/setting/company/branch')
    .sass('resources/assets/sass/back-office/setting/company/branch/show.scss', 'public/css/back-office/setting/company/branch')
    // .sass('resources/assets/sass/back-office/setting/company/branch/update.scss', 'public/css/back-office/setting/company/branch')

// Company Group
.js('resources/assets/js/back-office/setting/company-group/create.js', 'public/js/back-office/setting/company-group')
    .js('resources/assets/js/back-office/setting/company-group/index.js', 'public/js/back-office/setting/company-group')
    // .js('resources/assets/js/back-office/setting/company-group/pdf.js', 'public/js/back-office/setting/company-group')
    .js('resources/assets/js/back-office/setting/company-group/show.js', 'public/js/back-office/setting/company-group')
    // .js('resources/assets/js/back-office/setting/company-group/update.js', 'public/js/back-office/setting/company-group')
    .sass('resources/assets/sass/back-office/setting/company-group/create.scss', 'public/css/back-office/setting/company-group')
    .sass('resources/assets/sass/back-office/setting/company-group/index.scss', 'public/css/back-office/setting/company-group')
    // .sass('resources/assets/sass/back-office/setting/company-group/pdf.scss', 'public/css/back-office/setting/company-group')
    .sass('resources/assets/sass/back-office/setting/company-group/show.scss', 'public/css/back-office/setting/company-group')
    // .sass('resources/assets/sass/back-office/setting/company-group/update.scss', 'public/css/back-office/setting/company-group')

// Credit Term
.js('resources/assets/js/back-office/setting/company/credit-term/create.js', 'public/js/back-office/setting/company/credit-term')
    .js('resources/assets/js/back-office/setting/company/credit-term/index.js', 'public/js/back-office/setting/company/credit-term')
    // .js('resources/assets/js/back-office/setting/company/credit-term/pdf.js', 'public/js/back-office/setting/company/credit-term')
    .js('resources/assets/js/back-office/setting/company/credit-term/show.js', 'public/js/back-office/setting/company/credit-term')
    // .js('resources/assets/js/back-office/setting/company/credit-term/update.js', 'public/js/back-office/setting/company/credit-term')
    .sass('resources/assets/sass/back-office/setting/company/credit-term/create.scss', 'public/css/back-office/setting/company/credit-term')
    .sass('resources/assets/sass/back-office/setting/company/credit-term/index.scss', 'public/css/back-office/setting/company/credit-term')
    // .sass('resources/assets/sass/back-office/setting/company/credit-term/pdf.scss', 'public/css/back-office/setting/company/credit-term')
    .sass('resources/assets/sass/back-office/setting/company/credit-term/show.scss', 'public/css/back-office/setting/company/credit-term')
    // .sass('resources/assets/sass/back-office/setting/company/credit-term/update.scss', 'public/css/back-office/setting/company/credit-term')

// Customer Tier
.js('resources/assets/js/back-office/setting/customer-tier/create.js', 'public/js/back-office/setting/customer-tier')
    .js('resources/assets/js/back-office/setting/customer-tier/index.js', 'public/js/back-office/setting/customer-tier')
    // .js('resources/assets/js/back-office/setting/customer-tier/pdf.js', 'public/js/back-office/setting/customer-tier')
    .js('resources/assets/js/back-office/setting/customer-tier/show.js', 'public/js/back-office/setting/customer-tier')
    // .js('resources/assets/js/back-office/setting/customer-tier/update.js', 'public/js/back-office/setting/customer-tier')
    .sass('resources/assets/sass/back-office/setting/customer-tier/create.scss', 'public/css/back-office/setting/customer-tier')
    .sass('resources/assets/sass/back-office/setting/customer-tier/index.scss', 'public/css/back-office/setting/customer-tier')
    // .sass('resources/assets/sass/back-office/setting/customer-tier/pdf.scss', 'public/css/back-office/setting/customer-tier')
    .sass('resources/assets/sass/back-office/setting/customer-tier/show.scss', 'public/css/back-office/setting/customer-tier')
    // .sass('resources/assets/sass/back-office/setting/customer-tier/update.scss', 'public/css/back-office/setting/customer-tier')

// Item Type
.js('resources/assets/js/back-office/setting/item-type/create.js', 'public/js/back-office/setting/item-type')
    .js('resources/assets/js/back-office/setting/item-type/index.js', 'public/js/back-office/setting/item-type')
    // .js('resources/assets/js/back-office/setting/item-type/pdf.js', 'public/js/back-office/setting/item-type')
    .js('resources/assets/js/back-office/setting/item-type/show.js', 'public/js/back-office/setting/item-type')
    // .js('resources/assets/js/back-office/setting/item-type/update.js', 'public/js/back-office/setting/item-type')
    .sass('resources/assets/sass/back-office/setting/item-type/create.scss', 'public/css/back-office/setting/item-type')
    .sass('resources/assets/sass/back-office/setting/item-type/index.scss', 'public/css/back-office/setting/item-type')
    // .sass('resources/assets/sass/back-office/setting/item-type/pdf.scss', 'public/css/back-office/setting/item-type')
    .sass('resources/assets/sass/back-office/setting/item-type/show.scss', 'public/css/back-office/setting/item-type')
    .sass('resources/assets/sass/back-office/setting/item-type/update.scss', 'public/css/back-office/setting/item-type')

// News And Event
.js('resources/assets/js/back-office/setting/news-and-event/create.js', 'public/js/back-office/setting/news-and-event')
    .js('resources/assets/js/back-office/setting/news-and-event/index.js', 'public/js/back-office/setting/news-and-event')
    // .js('resources/assets/js/back-office/setting/news-and-event/pdf.js', 'public/js/back-office/setting/news-and-event')
    .js('resources/assets/js/back-office/setting/news-and-event/show.js', 'public/js/back-office/setting/news-and-event')
    // .js('resources/assets/js/back-office/setting/news-and-event/update.js', 'public/js/back-office/setting/news-and-event')
    .sass('resources/assets/sass/back-office/setting/news-and-event/create.scss', 'public/css/back-office/setting/news-and-event')
    .sass('resources/assets/sass/back-office/setting/news-and-event/index.scss', 'public/css/back-office/setting/news-and-event')
    // .sass('resources/assets/sass/back-office/setting/news-and-event/pdf.scss', 'public/css/back-office/setting/news-and-event')
    .sass('resources/assets/sass/back-office/setting/news-and-event/show.scss', 'public/css/back-office/setting/news-and-event')
    // .sass('resources/assets/sass/back-office/setting/news-and-event/update.scss', 'public/css/back-office/setting/news-and-event')

// Platform
.js('resources/assets/js/back-office/setting/platform/create.js', 'public/js/back-office/setting/platform')
    .js('resources/assets/js/back-office/setting/platform/index.js', 'public/js/back-office/setting/platform')
    // .js('resources/assets/js/back-office/setting/platform/pdf.js', 'public/js/back-office/setting/platform')
    .js('resources/assets/js/back-office/setting/platform/show.js', 'public/js/back-office/setting/platform')
    // .js('resources/assets/js/back-office/setting/platform/update.js', 'public/js/back-office/setting/platform')
    .sass('resources/assets/sass/back-office/setting/platform/create.scss', 'public/css/back-office/setting/platform')
    .sass('resources/assets/sass/back-office/setting/platform/index.scss', 'public/css/back-office/setting/platform')
    // .sass('resources/assets/sass/back-office/setting/platform/pdf.scss', 'public/css/back-office/setting/platform')
    .sass('resources/assets/sass/back-office/setting/platform/show.scss', 'public/css/back-office/setting/platform')
    .sass('resources/assets/sass/back-office/setting/platform/update.scss', 'public/css/back-office/setting/platform')

// Product
.js('resources/assets/js/back-office/setting/product/create.js', 'public/js/back-office/setting/product')
    .js('resources/assets/js/back-office/setting/product/index.js', 'public/js/back-office/setting/product')
    // .js('resources/assets/js/back-office/setting/product/pdf.js', 'public/js/back-office/setting/product')
    .js('resources/assets/js/back-office/setting/product/show.js', 'public/js/back-office/setting/product')
    // .js('resources/assets/js/back-office/setting/product/update.js', 'public/js/back-office/setting/product')
    .sass('resources/assets/sass/back-office/setting/product/create.scss', 'public/css/back-office/setting/product')
    .sass('resources/assets/sass/back-office/setting/product/index.scss', 'public/css/back-office/setting/product')
    // .sass('resources/assets/sass/back-office/setting/product/pdf.scss', 'public/css/back-office/setting/product')
    .sass('resources/assets/sass/back-office/setting/product/show.scss', 'public/css/back-office/setting/product')
    .sass('resources/assets/sass/back-office/setting/product/update.scss', 'public/css/back-office/setting/product')

// Barcode
.js('resources/assets/js/back-office/setting/product/barcode/create.js', 'public/js/back-office/setting/product/barcode')
    .js('resources/assets/js/back-office/setting/product/barcode/index.js', 'public/js/back-office/setting/product/barcode')
    // .js('resources/assets/js/back-office/setting/product/barcode/pdf.js', 'public/js/back-office/setting/product/barcode')
    .js('resources/assets/js/back-office/setting/product/barcode/show.js', 'public/js/back-office/setting/product/barcode')
    // .js('resources/assets/js/back-office/setting/product/barcode/update.js', 'public/js/back-office/setting/product/barcode')
    .sass('resources/assets/sass/back-office/setting/product/barcode/create.scss', 'public/css/back-office/setting/product/barcode')
    .sass('resources/assets/sass/back-office/setting/product/barcode/index.scss', 'public/css/back-office/setting/product/barcode')
    // .sass('resources/assets/sass/back-office/setting/product/barcode/pdf.scss', 'public/css/back-office/setting/product/barcode')
    .sass('resources/assets/sass/back-office/setting/product/barcode/show.scss', 'public/css/back-office/setting/product/barcode')
    // .sass('resources/assets/sass/back-office/setting/product/barcode/update.scss', 'public/css/back-office/setting/product/barcode')

// Nickname
.js('resources/assets/js/back-office/setting/product/nick-name/create.js', 'public/js/back-office/setting/product/nick-name')
    .js('resources/assets/js/back-office/setting/product/nick-name/index.js', 'public/js/back-office/setting/product/nick-name')
    // .js('resources/assets/js/back-office/setting/product/nick-name/pdf.js', 'public/js/back-office/setting/product/nick-name')
    .js('resources/assets/js/back-office/setting/product/nick-name/show.js', 'public/js/back-office/setting/product/nick-name')
    // .js('resources/assets/js/back-office/setting/product/nick-name/update.js', 'public/js/back-office/setting/product/nick-name')
    .sass('resources/assets/sass/back-office/setting/product/nick-name/create.scss', 'public/css/back-office/setting/product/nick-name')
    .sass('resources/assets/sass/back-office/setting/product/nick-name/index.scss', 'public/css/back-office/setting/product/nick-name')
    // .sass('resources/assets/sass/back-office/setting/product/nick-name/pdf.scss', 'public/css/back-office/setting/product/nick-name')
    .sass('resources/assets/sass/back-office/setting/product/nick-name/show.scss', 'public/css/back-office/setting/product/nick-name')
    // .sass('resources/assets/sass/back-office/setting/product/nick-name/update.scss', 'public/css/back-office/setting/product/nick-name')

// Supplier
.js('resources/assets/js/back-office/setting/product/supplier/create.js', 'public/js/back-office/setting/product/supplier')
    .js('resources/assets/js/back-office/setting/product/supplier/index.js', 'public/js/back-office/setting/product/supplier')
    // .js('resources/assets/js/back-office/setting/product/supplier/pdf.js', 'public/js/back-office/setting/product/supplier')
    .js('resources/assets/js/back-office/setting/product/supplier/show.js', 'public/js/back-office/setting/product/supplier')
    // .js('resources/assets/js/back-office/setting/product/supplier/update.js', 'public/js/back-office/setting/product/supplier')
    .sass('resources/assets/sass/back-office/setting/product/supplier/create.scss', 'public/css/back-office/setting/product/supplier')
    .sass('resources/assets/sass/back-office/setting/product/supplier/index.scss', 'public/css/back-office/setting/product/supplier')
    // .sass('resources/assets/sass/back-office/setting/product/supplier/pdf.scss', 'public/css/back-office/setting/product/supplier')
    .sass('resources/assets/sass/back-office/setting/product/supplier/show.scss', 'public/css/back-office/setting/product/supplier')
    // .sass('resources/assets/sass/back-office/setting/product/supplier/update.scss', 'public/css/back-office/setting/product/supplier')

// Unit
.js('resources/assets/js/back-office/setting/product/unit/create.js', 'public/js/back-office/setting/product/unit')
    .js('resources/assets/js/back-office/setting/product/unit/index.js', 'public/js/back-office/setting/product/unit')
    // .js('resources/assets/js/back-office/setting/product/unit/pdf.js', 'public/js/back-office/setting/product/unit')
    .js('resources/assets/js/back-office/setting/product/unit/show.js', 'public/js/back-office/setting/product/unit')
    // .js('resources/assets/js/back-office/setting/product/unit/update.js', 'public/js/back-office/setting/product/unit')
    .sass('resources/assets/sass/back-office/setting/product/unit/create.scss', 'public/css/back-office/setting/product/unit')
    .sass('resources/assets/sass/back-office/setting/product/unit/index.scss', 'public/css/back-office/setting/product/unit')
    // .sass('resources/assets/sass/back-office/setting/product/unit/pdf.scss', 'public/css/back-office/setting/product/unit')
    .sass('resources/assets/sass/back-office/setting/product/unit/show.scss', 'public/css/back-office/setting/product/unit')
    // .sass('resources/assets/sass/back-office/setting/product/unit/update.scss', 'public/css/back-office/setting/product/unit')

// Price
.js('resources/assets/js/back-office/setting/product/unit/customer-tier/price/create.js', 'public/js/back-office/setting/product/unit/customer-tier/price')
    .js('resources/assets/js/back-office/setting/product/unit/customer-tier/price/index.js', 'public/js/back-office/setting/product/unit/customer-tier/price')
    // .js('resources/assets/js/back-office/setting/product/unit/customer-tier/price/pdf.js', 'public/js/back-office/setting/product/unit/customer-tier/price')
    .js('resources/assets/js/back-office/setting/product/unit/customer-tier/price/show.js', 'public/js/back-office/setting/product/unit/customer-tier/price')
    // .js('resources/assets/js/back-office/setting/product/unit/customer-tier/price/update.js', 'public/js/back-office/setting/product/unit/customer-tier/price')
    .sass('resources/assets/sass/back-office/setting/product/unit/customer-tier/price/create.scss', 'public/css/back-office/setting/product/unit/customer-tier/price')
    .sass('resources/assets/sass/back-office/setting/product/unit/customer-tier/price/index.scss', 'public/css/back-office/setting/product/unit/customer-tier/price')
    // .sass('resources/assets/sass/back-office/setting/product/unit/customer-tier/price/pdf.scss', 'public/css/back-office/setting/product/unit/customer-tier/price')
    .sass('resources/assets/sass/back-office/setting/product/unit/customer-tier/price/show.scss', 'public/css/back-office/setting/product/unit/customer-tier/price')
    // .sass('resources/assets/sass/back-office/setting/product/unit/customer-tier/price/update.scss', 'public/css/back-office/setting/product/unit/customer-tier/price')

// Publisher
.js('resources/assets/js/back-office/setting/publisher/create.js', 'public/js/back-office/setting/publisher')
    .js('resources/assets/js/back-office/setting/publisher/index.js', 'public/js/back-office/setting/publisher')
    // .js('resources/assets/js/back-office/setting/publisher/pdf.js', 'public/js/back-office/setting/publisher')
    .js('resources/assets/js/back-office/setting/publisher/show.js', 'public/js/back-office/setting/publisher')
    // .js('resources/assets/js/back-office/setting/publisher/update.js', 'public/js/back-office/setting/publisher')
    .sass('resources/assets/sass/back-office/setting/publisher/create.scss', 'public/css/back-office/setting/publisher')
    .sass('resources/assets/sass/back-office/setting/publisher/index.scss', 'public/css/back-office/setting/publisher')
    // .sass('resources/assets/sass/back-office/setting/publisher/pdf.scss', 'public/css/back-office/setting/publisher')
    .sass('resources/assets/sass/back-office/setting/publisher/show.scss', 'public/css/back-office/setting/publisher')
    .sass('resources/assets/sass/back-office/setting/publisher/update.scss', 'public/css/back-office/setting/publisher')

// Tag
.js('resources/assets/js/back-office/setting/tag/create.js', 'public/js/back-office/setting/tag')
    .js('resources/assets/js/back-office/setting/tag/index.js', 'public/js/back-office/setting/tag')
    // .js('resources/assets/js/back-office/setting/tag/pdf.js', 'public/js/back-office/setting/tag')
    .js('resources/assets/js/back-office/setting/tag/show.js', 'public/js/back-office/setting/tag')
    // .js('resources/assets/js/back-office/setting/tag/update.js', 'public/js/back-office/setting/tag')
    .sass('resources/assets/sass/back-office/setting/tag/create.scss', 'public/css/back-office/setting/tag')
    .sass('resources/assets/sass/back-office/setting/tag/index.scss', 'public/css/back-office/setting/tag')
    // .sass('resources/assets/sass/back-office/setting/tag/pdf.scss', 'public/css/back-office/setting/tag')
    .sass('resources/assets/sass/back-office/setting/tag/show.scss', 'public/css/back-office/setting/tag')
    // .sass('resources/assets/sass/back-office/setting/tag/update.scss', 'public/css/back-office/setting/tag')

// User
.js('resources/assets/js/back-office/setting/user/create.js', 'public/js/back-office/setting/user')
    .js('resources/assets/js/back-office/setting/user/index.js', 'public/js/back-office/setting/user')
    // .js('resources/assets/js/back-office/setting/user/pdf.js', 'public/js/back-office/setting/user')
    .js('resources/assets/js/back-office/setting/user/show.js', 'public/js/back-office/setting/user')
    .js('resources/assets/js/back-office/setting/user/update.js', 'public/js/back-office/setting/user')
    .sass('resources/assets/sass/back-office/setting/user/create.scss', 'public/css/back-office/setting/user')
    .sass('resources/assets/sass/back-office/setting/user/index.scss', 'public/css/back-office/setting/user')
    // .sass('resources/assets/sass/back-office/setting/user/pdf.scss', 'public/css/back-office/setting/user')
    .sass('resources/assets/sass/back-office/setting/user/show.scss', 'public/css/back-office/setting/user')
    .sass('resources/assets/sass/back-office/setting/user/update.scss', 'public/css/back-office/setting/user')

// Warehouse
.js('resources/assets/js/back-office/setting/warehouse/create.js', 'public/js/back-office/setting/warehouse')
    .js('resources/assets/js/back-office/setting/warehouse/index.js', 'public/js/back-office/setting/warehouse')
    // .js('resources/assets/js/back-office/setting/warehouse/pdf.js', 'public/js/back-office/setting/warehouse')
    .js('resources/assets/js/back-office/setting/warehouse/show.js', 'public/js/back-office/setting/warehouse')
    // .js('resources/assets/js/back-office/setting/warehouse/update.js', 'public/js/back-office/setting/warehouse')
    .sass('resources/assets/sass/back-office/setting/warehouse/create.scss', 'public/css/back-office/setting/warehouse')
    .sass('resources/assets/sass/back-office/setting/warehouse/index.scss', 'public/css/back-office/setting/warehouse')
    // .sass('resources/assets/sass/back-office/setting/warehouse/pdf.scss', 'public/css/back-office/setting/warehouse')
    .sass('resources/assets/sass/back-office/setting/warehouse/show.scss', 'public/css/back-office/setting/warehouse')
    // .sass('resources/assets/sass/back-office/setting/warehouse/update.scss', 'public/css/back-office/setting/warehouse');

// Wallet
.js('resources/assets/js/back-office/setting/company/wallet/create.js', 'public/js/back-office/setting/company/wallet')
    .js('resources/assets/js/back-office/setting/company/wallet/index.js', 'public/js/back-office/setting/company/wallet')
    // .js('resources/assets/js/back-office/setting/company/wallet/pdf.js', 'public/js/back-office/setting/company/wallet')
    .js('resources/assets/js/back-office/setting/company/wallet/show.js', 'public/js/back-office/setting/company/wallet')
    // .js('resources/assets/js/back-office/setting/company/wallet/update.js', 'public/js/back-office/setting/company/wallet')
    .sass('resources/assets/sass/back-office/setting/company/wallet/create.scss', 'public/css/back-office/setting/company/wallet')
    .sass('resources/assets/sass/back-office/setting/company/wallet/index.scss', 'public/css/back-office/setting/company/wallet')
    // .sass('resources/assets/sass/back-office/setting/company/wallet/pdf.scss', 'public/css/back-office/setting/company/wallet')
    .sass('resources/assets/sass/back-office/setting/company/wallet/show.scss', 'public/css/back-office/setting/company/wallet')
    // .sass('resources/assets/sass/back-office/setting/company/wallet/update.scss', 'public/css/back-office/setting/company/wallet');

.version();
