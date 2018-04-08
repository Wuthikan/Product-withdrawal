<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use DurianSoftware\Role;
use DurianSoftware\Permission;
use DurianSoftware\User;

class EntrustSetupTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        // Create table for storing roles
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('display_name')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });

        // Create table for associating roles to users (Many-to-Many)
        Schema::create('role_user', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('role_id')->unsigned();

            // $table->foreign('user_id')->references('id')->on('dim_users')
            //     ->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('role_id')->references('id')->on('roles')
            //     ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['user_id', 'role_id']);
        });

        // Create table for storing permissions
        Schema::create('permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('display_name')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });

        // Create table for associating permissions to roles (Many-to-Many)
        Schema::create('permission_role', function (Blueprint $table) {
            $table->integer('permission_id')->unsigned();
            $table->integer('role_id')->unsigned();

            $table->foreign('permission_id')->references('id')->on('permissions')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['permission_id', 'role_id']);
        });

        $this->seedRolesAndPermission();
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('permission_role');
        Schema::drop('permissions');
        Schema::drop('role_user');
        Schema::drop('roles');
    }
    /**
        * Run the database seeds.
        *
        * @return void
        */
    private function seedRolesAndPermission()
    {
        
        // Role
        $AdminRole = Role::create(['name' => 'Admin','display_name' => 'ผู้บริหาร','description'=>'Admin']);
        return true;

        $ManageRole = Role::create(['name' => 'Manage','display_name' => 'ผู้จัดการ','description'=>'Manage']);
        $InformationOfficerRole = Role::create([
            'name' => 'InformationOfficer',
            'display_name' => 'พนักงานคีย์ข้อมูล',
            'description'=>'Information Officer'
        ]);
        $ServiceOfficerRole = Role::create([
            'name' => 'ServiceOfficer',
            'display_name' => 'ธุรการ',
            'description'=>'General Service Officer'
        ]);
        $NotUseRole = Role::create(['name' => 'NotUse','display_name' => 'ไม่ใช้','description'=>'NotUse']);

        //Inquire
        $inquireIndexPermission = Permission::create(['name' => 'inquire-index']);
        $inquireCreatePermission = Permission::create(['name' => 'inquire-create']);
        $inquireUpdatePermission = Permission::create(['name' => 'inquire-update']);
        $inquireDeletePermission = Permission::create(['name' => 'inquire-delete']);
        $inquireRestorePermission = Permission::create(['name' => 'inquire-restore']);
        $inquireNotAllowPermission = Permission::create(['name' => 'inquire-not-allow']);
        $inquireUndoPermission = Permission::create(['name' => 'inquire-undo']);
        $inquireApprovePermission = Permission::create(['name' => 'inquire-approve']);
        $inquireXlsPermission = Permission::create(['name' => 'inquire-xls']);
        $inquireReportPermission = Permission::create(['name' => 'inquire-report']);

        //Purchasing-order
        $purchasingOrderIndexPermission = Permission::create(['name' => 'purchasing-order-index']);
        $purchasingOrderCreatePermission = Permission::create(['name' => 'purchasing-order-create']);
        $purchasingOrderUpdatePermission = Permission::create(['name' => 'purchasing-order-update']);
        $purchasingOrderDeletePermission = Permission::create(['name' => 'purchasing-order-delete']);
        $purchasingOrderRestorePermission = Permission::create(['name' => 'purchasing-order-restore']);
        $purchasingOrderNotAllowPermission = Permission::create(['name' => 'purchasing-order-not-allow']);
        $purchasingOrderUndoPermission = Permission::create(['name' => 'purchasing-order-undo']);
        $purchasingOrderApprovePermission = Permission::create(['name' => 'purchasing-order-approve']);
        $urchasingOrderXlsPermission = Permission::create(['name' => 'purchasing-order-xls']);
        $urchasingOrderReportPermission = Permission::create(['name' => 'purchasing-order-report']);
        
        //Pre-order
        $preOrderIndexPermission = Permission::create(['name' => 'pre-order-index']);
        $preOrderCreatePermission = Permission::create(['name' => 'pre-order-create']);
        $preOrderUpdatePermission = Permission::create(['name' => 'pre-order-update']);
        $preOrderDeletePermission = Permission::create(['name' => 'pre-order-delete']);
        $preOrderRestorePermission = Permission::create(['name' => 'pre-order-restore']);
        $preOrderNotAllowPermission = Permission::create(['name' => 'pre-order-not-allow']);
        $preOrderUndoPermission = Permission::create(['name' => 'pre-order-undo']);
        $preOrderApprovePermission = Permission::create(['name' => 'pre-order-approve']);
        $preOrderXlsPermission = Permission::create(['name' => 'pre-order-xls']);
        $preOrderReportPermission = Permission::create(['name' => 'pre-order-report']);

            //Sale-order
        $saleOrderIndexPermission = Permission::create(['name' => 'sale-order-index']);
        $saleOrderCreatePermission = Permission::create(['name' => 'sale-order-create']);
        $saleOrderUpdatePermission = Permission::create(['name' => 'sale-order-update']);
        $saleOrderDeletePermission = Permission::create(['name' => 'sale-order-delete']);
        $saleOrderRestorePermission = Permission::create(['name' => 'sale-order-restore']);
        $saleOrderNotAllowPermission = Permission::create(['name' => 'sale-order-not-allow']);
        $saleOrderUndoPermission = Permission::create(['name' => 'sale-order-undo']);
        $saleOrderApprovePermission = Permission::create(['name' => 'sale-order-approve']);
        $saleOrderXlsPermission = Permission::create(['name' => 'sale-order-xls']);
        $saleOrderReportPermission = Permission::create(['name' => 'sale-order-report']);

        //Logistics-Stocks
        $stocksIndexPermission = Permission::create(['name' => 'logistics-stocks-index']);
        $stocksCreatePermission = Permission::create(['name' => 'logistics-stocks-create']);
        $stocksUpdatePermission = Permission::create(['name' => 'logistics-stocks-update']);
        $stocksDeletePermission = Permission::create(['name' => 'logistics-stocks-delete']);
        $stocksRestorePermission = Permission::create(['name' => 'logistics-stocks-restore']);
        $stocksNotAllowPermission = Permission::create(['name' => 'logistics-stocks-not-allow']);
        $stocksUndoPermission = Permission::create(['name' => 'logistics-stocks-undo']);
        $stocksApprovePermission = Permission::create(['name' => 'logistics-stocks-approve']);
        $stocksXlsPermission = Permission::create(['name' => 'logistics-stocks-xls']);
        $stocksReportPermission = Permission::create(['name' => 'logistics-stocks-report']);

        //Logistics-Product-Receive
        $productReceiveIndexPermission = Permission::create(['name' => 'logistics-product-receive-index']);
        $productReceiveCreatePermission = Permission::create(['name' => 'logistics-product-receive-create']);
        $productReceiveUpdatePermission = Permission::create(['name' => 'logistics-product-receive-update']);
        $productReceiveDeletePermission = Permission::create(['name' => 'logistics-product-receive-delete']);
        $productReceiveRestorePermission = Permission::create(['name' => 'logistics-product-receive-restore']);
        $productReceiveNotAllowPermission = Permission::create(['name' => 'logistics-product-receive-not-allow']);
        $productReceiveUndoPermission = Permission::create(['name' => 'logistics-product-receive-undo']);
        $productReceiveApprovePermission = Permission::create(['name' => 'logistics-product-receive-approve']);
        $productReceiveXlsPermission = Permission::create(['name' => 'logistics-product-receive-xls']);
        $productReceiveReportPermission = Permission::create(['name' => 'logistics-product-receive-report']);

        //Logistics-Shipping
        $shippingIndexPermission = Permission::create(['name' => 'logistics-shipping-index']);
        $shippingCreatePermission = Permission::create(['name' => 'logistics-shipping-create']);
        $shippingUpdatePermission = Permission::create(['name' => 'logistics-shipping-update']);
        $shippingDeletePermission = Permission::create(['name' => 'logistics-shipping-delete']);
        $shippingRestorePermission = Permission::create(['name' => 'logistics-shipping-restore']);
        $shippingNotAllowPermission = Permission::create(['name' => 'logistics-shipping-not-allow']);
        $shippingUndoPermission = Permission::create(['name' => 'logistics-shipping-undo']);
        $shippingApprovePermission = Permission::create(['name' => 'logistics-shipping-approve']);
        $shippingXlsPermission = Permission::create(['name' => 'logistics-shipping-xls']);
        $shippingReportPermission = Permission::create(['name' => 'logistics-shipping-report']);

        //Logistics-Cancel-Note
        $cancelNoteIndexPermission = Permission::create(['name' => 'logistics-cancel-note-index']);
        $cancelNoteCreatePermission = Permission::create(['name' => 'logistics-cancel-note-create']);
        $cancelNoteUpdatePermission = Permission::create(['name' => 'logistics-cancel-note-update']);
        $cancelNoteDeletePermission = Permission::create(['name' => 'logistics-cancel-note-delete']);
        $cancelNoteRestorePermission = Permission::create(['name' => 'logistics-ancel-note-restore']);
        $cancelNoteNotAllowPermission = Permission::create(['name' => 'logistics-cancel-note-not-allow']);
        $cancelNoteUndoPermission = Permission::create(['name' => 'logistics-cancel-note-undo']);
        $cancelNoteApprovePermission = Permission::create(['name' => 'logistics-cancel-note-approve']);
        $cancelNoteXlsPermission = Permission::create(['name' => 'logistics-cancel-note-xls']);
        $cancelNoteReportPermission = Permission::create(['name' => 'logistics-cancel-note-report']);


        //Logistics-Claim
        $claimIndexPermission = Permission::create(['name' => 'logistics-claim-index']);
        $claimCreatePermission = Permission::create(['name' => 'logistics-claim-create']);
        $claimUpdatePermission = Permission::create(['name' => 'logistics-claim-update']);
        $claimDeletePermission = Permission::create(['name' => 'logistics-claim-delete']);
        $claimRestorePermission = Permission::create(['name' => 'logistics-claim-restore']);
        $claimNotAllowPermission = Permission::create(['name' => 'logistics-claim-not-allow']);
        $claimUndoPermission = Permission::create(['name' => 'logistics-claim-undo']);
        $claimApprovePermission = Permission::create(['name' => 'logistics-claim-approve']);
        $claimXlsPermission = Permission::create(['name' => 'logistics-claim-xls']);
        $claimReportPermission = Permission::create(['name' => 'logistics-claim-report']);

        //Logistics-Product Transfer
        $productTransferIndexPermission = Permission::create(['name' => 'logistics-product-transfer-index']);
        $productTransferCreatePermission = Permission::create(['name' => 'logistics-product-transfer-create']);
        $productTransferUpdatePermission = Permission::create(['name' => 'logistics-product-transfer-update']);
        $productTransferDeletePermission = Permission::create(['name' => 'logistics-product-transfer-delete']);
        $productTransferRestorePermission = Permission::create(['name' => 'logistics-product-transfer-restore']);
        $productTransferNotAllowPermission = Permission::create(['name' => 'logistics-product-transfer-not-allow']);
        $productTransferUndoPermission = Permission::create(['name' => 'logistics-product-transfer-undo']);
        $productTransferApprovePermission = Permission::create(['name' => 'logistics-product-transfer-approve']);
        $productTransferXlsPermission = Permission::create(['name' => 'logistics-product-transfer-xls']);
        $productTransferReportPermission = Permission::create(['name' => 'logistics-product-transfer-report']);

        //Marketing-Promotion
        $promotionIndexPermission = Permission::create(['name' => 'marketing-promotion-index']);
        $promotionCreatePermission = Permission::create(['name' => 'marketing-promotion-create']);
        $promotionUpdatePermission = Permission::create(['name' => 'marketing-promotion-update']);
        $promotionDeletePermission = Permission::create(['name' => 'marketing-promotion-delete']);
        $promotionRestorePermission = Permission::create(['name' => 'marketing-promotion-restore']);
        $promotionNotAllowPermission = Permission::create(['name' => 'marketing-promotion-not-allow']);
        $promotionUndoPermission = Permission::create(['name' => 'marketing-promotion-undo']);
        $promotionApprovePermission = Permission::create(['name' => 'marketing-promotion-approve']);
        $promotionXlsPermission = Permission::create(['name' => 'marketing-promotion-xls']);
        $promotionReportPermission = Permission::create(['name' => 'marketing-promotion-report']);
    
        //Marketing-ProductBundled
        $productBundledIndexPermission = Permission::create(['name' => 'marketing-product-bundled-index']);
        $productBundledCreatePermission = Permission::create(['name' => 'marketing-product-bundled-create']);
        $productBundledUpdatePermission = Permission::create(['name' => 'marketing-product-bundled-update']);
        $productBundledDeletePermission = Permission::create(['name' => 'marketing-product-bundled-delete']);
        $productBundledRestorePermission = Permission::create(['name' => 'marketing-product-bundled-restore']);
        $productBundledNotAllowPermission = Permission::create(['name' => 'marketing-product-bundled-not-allow']);
        $productBundledUndoPermission = Permission::create(['name' => 'marketing-product-bundled-undo']);
        $productBundledApprovePermission = Permission::create(['name' => 'marketing-product-bundled-approve']);
        $productBundledXlsPermission = Permission::create(['name' => 'marketing-product-bundled-xls']);
        $productBundledReportPermission = Permission::create(['name' => 'marketing-product-bundled-report']);
        
            //Accounting - Payment
        $paymentIndexPermission = Permission::create(['name' => 'accounting-payment-index']);
        $paymentCreatePermission = Permission::create(['name' => 'accounting-payment-create']);
        $paymentUpdatePermission = Permission::create(['name' => 'accounting-payment-update']);
        $paymentDeletePermission = Permission::create(['name' => 'accounting-payment-delete']);
        $paymentRestorePermission = Permission::create(['name' => 'accounting-payment-restore']);
        $paymentNotAllowPermission = Permission::create(['name' => 'accounting-payment-not-allow']);
        $paymentUndoPermission = Permission::create(['name' => 'accounting-payment-undo']);
        $paymentApprovePermission = Permission::create(['name' => 'accounting-payment-approve']);
        $paymentXlsPermission = Permission::create(['name' => 'accounting-payment-xls']);
        $paymentReportPermission = Permission::create(['name' => 'accounting-payment-report']);

            //Accounting - Shipping Fee
        $shippingFeeIndexPermission = Permission::create(['name' => 'accounting-shipping-fee-index']);
        $shippingFeeCreatePermission = Permission::create(['name' => 'accounting-shipping-fee-create']);
        $shippingFeeUpdatePermission = Permission::create(['name' => 'accounting-shipping-fee-update']);
        $shippingFeeDeletePermission = Permission::create(['name' => 'accounting-shipping-fee-delete']);
        $shippingFeeRestorePermission = Permission::create(['name' => 'accounting-shipping-fee-restore']);
        $shippingFeeNotAllowPermission = Permission::create(['name' => 'accounting-shipping-fee-not-allow']);
        $shippingFeeUndoPermission = Permission::create(['name' => 'accounting-shipping-fee-undo']);
        $shippingFeeApprovePermission = Permission::create(['name' => 'accounting-shipping-fee-approve']);
        $shippingFeeXlsPermission = Permission::create(['name' => 'accounting-shipping-fee-xls']);
        $shippingFeeReportPermission = Permission::create(['name' => 'accounting-shipping-fee-report']);

        //Other - Product Withdrawal
        $productWithdrawalIndexPermission = Permission::create(['name' => 'other-product-withdrawal-index']);
        $productWithdrawalCreatePermission = Permission::create(['name' => 'other-product-withdrawal-create']);
        $productWithdrawalUpdatePermission = Permission::create(['name' => 'other-product-withdrawal-update']);
        $productWithdrawalDeletePermission = Permission::create(['name' => 'other-product-withdrawal-delete']);
        $productWithdrawalRestorePermission = Permission::create(['name' => 'other-product-withdrawal-restore']);
        $productWithdrawalNotAllowPermission = Permission::create(['name' => 'other-product-withdrawal-not-allow']);
        $productWithdrawalUndoPermission = Permission::create(['name' => 'other-product-withdrawal-undo']);
        $productWithdrawalApprovePermission = Permission::create(['name' => 'other-product-withdrawal-approve']);
        $productWithdrawalXlsPermission = Permission::create(['name' => 'other-product-withdrawal-xls']);
        $productWithdrawalReportPermission = Permission::create(['name' => 'other-product-withdrawal-report']);
    
            //Other - Product Borrow
        $productBorrowIndexPermission = Permission::create(['name' => 'other-product-borrow-index']);
        $productBorrowCreatePermission = Permission::create(['name' => 'other-product-borrow-create']);
        $productBorrowUpdatePermission = Permission::create(['name' => 'other-product-borrow-update']);
        $productBorrowDeletePermission = Permission::create(['name' => 'other-product-borrow-delete']);
        $productBorrowRestorePermission = Permission::create(['name' => 'other-product-borrow-restore']);
        $productBorrowNotAllowPermission = Permission::create(['name' => 'other-product-borrow-not-allow']);
        $productBorrowUndoPermission = Permission::create(['name' => 'other-product-borrow-undo']);
        $productBorrowApprovePermission = Permission::create(['name' => 'other-product-borrow-approve']);
        $productBorrowXlsPermission = Permission::create(['name' => 'other-product-borrow-xls']);
        $productBorrowReportPermission = Permission::create(['name' => 'other-product-borrow-report']);

            //Setting - News & Events
        $newAndEventIndexPermission = Permission::create(['name' => 'setting-new-and-event-index']);
        $newAndEventCreatePermission = Permission::create(['name' => 'setting-new-and-event-create']);
        $newAndEventUpdatePermission = Permission::create(['name' => 'setting-new-and-event-update']);
        $newAndEventDeletePermission = Permission::create(['name' => 'setting-new-and-event-delete']);
        $newAndEventRestorePermission = Permission::create(['name' => 'setting-new-and-event-restore']);
        $newAndEventNotAllowPermission = Permission::create(['name' => 'setting-new-and-event-not-allow']);
        $newAndEventUndoPermission = Permission::create(['name' => 'setting-new-and-event-undo']);
        $newAndEventApprovePermission = Permission::create(['name' => 'setting-new-and-event-approve']);
        $newAndEventXlsPermission = Permission::create(['name' => 'setting-new-and-event-xls']);
        $newAndEventReportPermission = Permission::create(['name' => 'setting-new-and-event-report']);


        //Setting - Company
        $companyIndexPermission = Permission::create(['name' => 'setting-company-index']);
        $companyCreatePermission = Permission::create(['name' => 'setting-company-create']);
        $companyUpdatePermission = Permission::create(['name' => 'setting-company-update']);
        $companyDeletePermission = Permission::create(['name' => 'setting-company-delete']);
        $companyRestorePermission = Permission::create(['name' => 'setting-company-restore']);
        $companyNotAllowPermission = Permission::create(['name' => 'setting-company-not-allow']);
        $companyUndoPermission = Permission::create(['name' => 'setting-company-undo']);
        $companyApprovePermission = Permission::create(['name' => 'setting-company-approve']);
        $companyXlsPermission = Permission::create(['name' => 'setting-company-xls']);
        $companyReportPermission = Permission::create(['name' => 'setting-company-report']);

        //Setting - Platform
        $platformIndexPermission = Permission::create(['name' => 'setting-platform-index']);
        $platformCreatePermission = Permission::create(['name' => 'setting-platform-create']);
        $platformUpdatePermission = Permission::create(['name' => 'setting-platform-update']);
        $platformDeletePermission = Permission::create(['name' => 'setting-platform-delete']);
        $platformRestorePermission = Permission::create(['name' => 'setting-platform-restore']);
        $platformNotAllowPermission = Permission::create(['name' => 'setting-platform-not-allow']);
        $platformUndoPermission = Permission::create(['name' => 'setting-platform-undo']);
        $platformApprovePermission = Permission::create(['name' => 'setting-platform-approve']);
        $platformXlsPermission = Permission::create(['name' => 'setting-platform-xls']);
        $platformReportPermission = Permission::create(['name' => 'setting-platform-report']);


            //Setting - Publisher
        $publisherIndexPermission = Permission::create(['name' => 'setting-publisher-index']);
        $publisherCreatePermission = Permission::create(['name' => 'setting-publisher-create']);
        $publisherUpdatePermission = Permission::create(['name' => 'setting-publisher-update']);
        $publisherDeletePermission = Permission::create(['name' => 'setting-publisher-delete']);
        $publisherRestorePermission = Permission::create(['name' => 'setting-publisher-restore']);
        $publisherNotAllowPermission = Permission::create(['name' => 'setting-publisher-not-allow']);
        $publisherUndoPermission = Permission::create(['name' => 'setting-publisher-undo']);
        $publisherApprovePermission = Permission::create(['name' => 'setting-publisher-approve']);
        $publisherXlsPermission = Permission::create(['name' => 'setting-publisher-xls']);
        $publisherReportPermission = Permission::create(['name' => 'setting-publisher-report']);


            //Setting - Warehouse
        $warehousetIndexPermission = Permission::create(['name' => 'setting-warehouset-index']);
        $warehousetCreatePermission = Permission::create(['name' => 'setting-warehouset-create']);
        $warehousetUpdatePermission = Permission::create(['name' => 'setting-warehouset-update']);
        $warehousetDeletePermission = Permission::create(['name' => 'setting-warehouset-delete']);
        $warehousetRestorePermission = Permission::create(['name' => 'setting-warehouset-restore']);
        $warehousetNotAllowPermission = Permission::create(['name' => 'setting-warehouset-not-allow']);
        $warehousetUndoPermission = Permission::create(['name' => 'setting-warehouset-undo']);
        $warehousetApprovePermission = Permission::create(['name' => 'setting-warehouset-approve']);
        $warehousetXlsPermission = Permission::create(['name' => 'setting-warehouset-xls']);
        $warehousetReportPermission = Permission::create(['name' => 'setting-warehouset-report']);


        //Setting - Item Type
        $itemTypeIndexPermission = Permission::create(['name' => 'setting-item-type-index']);
        $itemTypeCreatePermission = Permission::create(['name' => 'setting-item-type-create']);
        $itemTypeUpdatePermission = Permission::create(['name' => 'setting-item-type-update']);
        $itemTypeDeletePermission = Permission::create(['name' => 'setting-item-type-delete']);
        $itemTypeRestorePermission = Permission::create(['name' => 'setting-item-type-restore']);
        $itemTypeNotAllowPermission = Permission::create(['name' => 'setting-item-type-not-allow']);
        $itemTypeUndoPermission = Permission::create(['name' => 'setting-item-type-undo']);
        $itemTypeApprovePermission = Permission::create(['name' => 'setting-item-type-approve']);
        $itemTypeXlsPermission = Permission::create(['name' => 'setting-item-type-xls']);
        $itemTypeReportPermission = Permission::create(['name' => 'setting-item-type-report']);

            //Setting - Product
        $productIndexPermission = Permission::create(['name' => 'setting-product-index']);
        $productCreatePermission = Permission::create(['name' => 'setting-product-create']);
        $productUpdatePermission = Permission::create(['name' => 'setting-product-update']);
        $productDeletePermission = Permission::create(['name' => 'setting-product-delete']);
        $productRestorePermission = Permission::create(['name' => 'setting-product-restore']);
        $productNotAllowPermission = Permission::create(['name' => 'setting-product-not-allow']);
        $productUndoPermission = Permission::create(['name' => 'setting-product-undo']);
        $productApprovePermission = Permission::create(['name' => 'setting-product-approve']);
        $productXlsPermission = Permission::create(['name' => 'setting-product-xls']);
        $productReportPermission = Permission::create(['name' => 'setting-product-report']);

        //Setting - Product-Barcode
        $productBarcodeIndexPermission = Permission::create(['name' => 'setting-product-barcode-index']);
        $productBarcodeCreatePermission = Permission::create(['name' => 'setting-product-barcode-create']);
        $productBarcodeUpdatePermission = Permission::create(['name' => 'setting-product-barcode-update']);
        $productBarcodeDeletePermission = Permission::create(['name' => 'setting-product-barcode-delete']);
        $productBarcodeRestorePermission = Permission::create(['name' => 'setting-product-barcode-restore']);
        $productBarcodeNotAllowPermission = Permission::create(['name' => 'setting-product-barcode-not-allow']);
        $productBarcodeUndoPermission = Permission::create(['name' => 'setting-product-barcode-undo']);
        $productBarcodeApprovePermission = Permission::create(['name' => 'setting-product-barcode-approve']);
        $productBarcodeXlsPermission = Permission::create(['name' => 'setting-product-barcode-xls']);
        $productBarcodeReportPermission = Permission::create(['name' => 'setting-product-barcode-report']);

            //Setting - Product-Nickname
        $productNicknameIndexPermission = Permission::create(['name' => 'setting-product-nickname-index']);
        $productNicknameCreatePermission = Permission::create(['name' => 'setting-product-nickname-create']);
        $productNicknameUpdatePermission = Permission::create(['name' => 'setting-product-nickname-update']);
        $productNicknameDeletePermission = Permission::create(['name' => 'setting-product-nickname-delete']);
        $productNicknameRestorePermission = Permission::create(['name' => 'setting-product-nickname-restore']);
        $productNicknameNotAllowPermission = Permission::create(['name' => 'setting-product-nickname-not-allow']);
        $productNicknameUndoPermission = Permission::create(['name' => 'setting-product-nickname-undo']);
        $productNicknameApprovePermission = Permission::create(['name' => 'setting-product-nickname-approve']);
        $productNicknameXlsPermission = Permission::create(['name' => 'setting-product-nickname-xls']);
        $productNicknameReportPermission = Permission::create(['name' => 'setting-product-nickname-report']);

        //Setting - Product-Price
        $productPriceIndexPermission = Permission::create(['name' => 'setting-product-price-index']);
        $productPriceCreatePermission = Permission::create(['name' => 'setting-product-price-create']);
        $productPriceUpdatePermission = Permission::create(['name' => 'setting-product-price-update']);
        $productPriceDeletePermission = Permission::create(['name' => 'setting-product-price-delete']);
        $productPriceRestorePermission = Permission::create(['name' => 'setting-product-price-restore']);
        $productPriceNotAllowPermission = Permission::create(['name' => 'setting-product-price-not-allow']);
        $productPriceUndoPermission = Permission::create(['name' => 'setting-product-price-undo']);
        $productPriceApprovePermission = Permission::create(['name' => 'setting-product-price-approve']);
        $productPriceXlsPermission = Permission::create(['name' => 'setting-product-price-xls']);
        $productPriceReportPermission = Permission::create(['name' => 'setting-product-price-report']);

        //Setting - Product-Supplier
        $productSupplierIndexPermission = Permission::create(['name' => 'setting-product-supplier-index']);
        $productSupplierCreatePermission = Permission::create(['name' => 'setting-product-supplier-create']);
        $productSupplierUpdatePermission = Permission::create(['name' => 'setting-product-supplier-update']);
        $productSupplierDeletePermission = Permission::create(['name' => 'setting-product-supplier-delete']);
        $productSupplierRestorePermission = Permission::create(['name' => 'setting-product-supplier-restore']);
        $productSupplierNotAllowPermission = Permission::create(['name' => 'setting-product-supplier-not-allow']);
        $productSupplierUndoPermission = Permission::create(['name' => 'setting-product-supplier-undo']);
        $productSupplierApprovePermission = Permission::create(['name' => 'setting-product-supplier-approve']);
        $productSupplierXlsPermission = Permission::create(['name' => 'setting-product-supplier-xls']);
        $productSupplierReportPermission = Permission::create(['name' => 'setting-product-supplier-report']);


            //Setting - Customer Tier
        $customerTierIndexPermission = Permission::create(['name' => 'setting-customer-tier-index']);
        $customerTierCreatePermission = Permission::create(['name' => 'setting-customer-tier-create']);
        $customerTierUpdatePermission = Permission::create(['name' => 'setting-customer-tier-update']);
        $customerTierDeletePermission = Permission::create(['name' => 'setting-customer-tier-delete']);
        $customerTierRestorePermission = Permission::create(['name' => 'setting-customer-tier-restore']);
        $customerTierNotAllowPermission = Permission::create(['name' => 'setting-customer-tier-not-allow']);
        $customerTierUndoPermission = Permission::create(['name' => 'setting-customer-tier-undo']);
        $customerTierApprovePermission = Permission::create(['name' => 'setting-customer-tier-approve']);
        $customerTierXlsPermission = Permission::create(['name' => 'setting-customer-tier-xls']);
        $customerTierReportPermission = Permission::create(['name' => 'setting-customer-tier-report']);


            //Setting - Tag
        $tagIndexPermission = Permission::create(['name' => 'setting-tag-index']);
        $tagCreatePermission = Permission::create(['name' => 'setting-tag-create']);
        $tagUpdatePermission = Permission::create(['name' => 'setting-tag-update']);
        $tagDeletePermission = Permission::create(['name' => 'setting-tag-delete']);
        $tagRestorePermission = Permission::create(['name' => 'setting-tag-restore']);
        $tagNotAllowPermission = Permission::create(['name' => 'setting-tag-not-allow']);
        $tagUndoPermission = Permission::create(['name' => 'setting-tag-undo']);
        $tagApprovePermission = Permission::create(['name' => 'setting-tag-approve']);
        $tagXlsPermission = Permission::create(['name' => 'setting-tag-xls']);
        $tagReportPermission = Permission::create(['name' => 'setting-tag-report']);

            //Setting - User
        $userIndexPermission = Permission::create(['name' => 'setting-user-index']);
        $userCreatePermission = Permission::create(['name' => 'setting-user-create']);
        $userUpdatePermission = Permission::create(['name' => 'setting-user-update']);
        $userDeletePermission = Permission::create(['name' => 'setting-user-delete']);
        $userRestorePermission = Permission::create(['name' => 'setting-user-restore']);
        $userNotAllowPermission = Permission::create(['name' => 'setting-user-not-allow']);
        $userUndoPermission = Permission::create(['name' => 'setting-user-undo']);
        $userApprovePermission = Permission::create(['name' => 'setting-user-approve']);
        $userXlsPermission = Permission::create(['name' => 'setting-user-xls']);
        $userReportPermission = Permission::create(['name' => 'setting-user-report']);


        
        //AdminRole
        //Inquire
        $AdminRole->attachPermission($inquireIndexPermission);
        $AdminRole->attachPermission($inquireCreatePermission);
        $AdminRole->attachPermission($inquireUpdatePermission);
        $AdminRole->attachPermission($inquireDeletePermission);
        $AdminRole->attachPermission($inquireRestorePermission);
        $AdminRole->attachPermission($inquireUndoPermission);
        $AdminRole->attachPermission($inquireApprovePermission);
        $AdminRole->attachPermission($inquireXlsPermission);
        $AdminRole->attachPermission($inquireReportPermission);

            //Purchasing-order
        $AdminRole->attachPermission($purchasingOrderIndexPermission);
        $AdminRole->attachPermission($purchasingOrderCreatePermission);
        $AdminRole->attachPermission($purchasingOrderUpdatePermission);
        $AdminRole->attachPermission($purchasingOrderDeletePermission);
        $AdminRole->attachPermission($purchasingOrderRestorePermission);
        $AdminRole->attachPermission($purchasingOrderUndoPermission);
        $AdminRole->attachPermission($purchasingOrderApprovePermission);
        $AdminRole->attachPermission($urchasingOrderXlsPermission);
        $AdminRole->attachPermission($urchasingOrderReportPermission);


            //Pre-order
        $AdminRole->attachPermission($preOrderIndexPermission);
        $AdminRole->attachPermission($preOrderCreatePermission);
        $AdminRole->attachPermission($preOrderUpdatePermission);
        $AdminRole->attachPermission($preOrderDeletePermission);
        $AdminRole->attachPermission($preOrderRestorePermission);
        $AdminRole->attachPermission($preOrderUndoPermission);
        $AdminRole->attachPermission($preOrderApprovePermission);
        $AdminRole->attachPermission($preOrderXlsPermission);
        $AdminRole->attachPermission($preOrderReportPermission);

            //Sale-order
        $AdminRole->attachPermission($saleOrderIndexPermission);
        $AdminRole->attachPermission($saleOrderCreatePermission);
        $AdminRole->attachPermission($saleOrderUpdatePermission);
        $AdminRole->attachPermission($saleOrderDeletePermission);
        $AdminRole->attachPermission($saleOrderRestorePermission);
        $AdminRole->attachPermission($saleOrderUndoPermission);
        $AdminRole->attachPermission($saleOrderApprovePermission);
        $AdminRole->attachPermission($saleOrderXlsPermission);
        $AdminRole->attachPermission($saleOrderReportPermission);
        
        //Logistics-Stocks
        $AdminRole->attachPermission($stocksIndexPermission);
        $AdminRole->attachPermission($stocksCreatePermission);
        $AdminRole->attachPermission($stocksUpdatePermission);
        $AdminRole->attachPermission($stocksDeletePermission);
        $AdminRole->attachPermission($stocksRestorePermission);
        $AdminRole->attachPermission($stocksUndoPermission);
        $AdminRole->attachPermission($stocksApprovePermission);
        $AdminRole->attachPermission($stocksXlsPermission);
        $AdminRole->attachPermission($stocksReportPermission);
        
        //Logistics-Product-Receive
        $AdminRole->attachPermission($productReceiveIndexPermission);
        $AdminRole->attachPermission($productReceiveCreatePermission);
        $AdminRole->attachPermission($productReceiveUpdatePermission);
        $AdminRole->attachPermission($productReceiveDeletePermission);
        $AdminRole->attachPermission($productReceiveRestorePermission);
        $AdminRole->attachPermission($productReceiveUndoPermission);
        $AdminRole->attachPermission($productReceiveApprovePermission);
        $AdminRole->attachPermission($productReceiveXlsPermission);
        $AdminRole->attachPermission($productReceiveReportPermission);
        

        //Logistics-Shipping
        $AdminRole->attachPermission($shippingIndexPermission);
        $AdminRole->attachPermission($shippingCreatePermission);
        $AdminRole->attachPermission($shippingUpdatePermission);
        $AdminRole->attachPermission($shippingDeletePermission);
        $AdminRole->attachPermission($shippingRestorePermission);
        $AdminRole->attachPermission($shippingUndoPermission);
        $AdminRole->attachPermission($shippingApprovePermission);
        $AdminRole->attachPermission($shippingXlsPermission);
        $AdminRole->attachPermission($shippingReportPermission);
    

        //Logistics-Cancel-Note
        $AdminRole->attachPermission($cancelNoteIndexPermission);
        $AdminRole->attachPermission($cancelNoteCreatePermission);
        $AdminRole->attachPermission($cancelNoteUpdatePermission);
        $AdminRole->attachPermission($cancelNoteDeletePermission);
        $AdminRole->attachPermission($cancelNoteRestorePermission);
        $AdminRole->attachPermission($cancelNoteUndoPermission);
        $AdminRole->attachPermission($cancelNoteApprovePermission);
        $AdminRole->attachPermission($cancelNoteXlsPermission);
        $AdminRole->attachPermission($cancelNoteReportPermission);
        

        //Logistics-Claim
        $AdminRole->attachPermission($claimIndexPermission);
        $AdminRole->attachPermission($claimCreatePermission);
        $AdminRole->attachPermission($claimUpdatePermission);
        $AdminRole->attachPermission($claimDeletePermission);
        $AdminRole->attachPermission($claimRestorePermission);
        $AdminRole->attachPermission($claimUndoPermission);
        $AdminRole->attachPermission($claimApprovePermission);
        $AdminRole->attachPermission($claimXlsPermission);
        $AdminRole->attachPermission($claimReportPermission);
        

        //Logistics-Product Transfer
        $AdminRole->attachPermission($productTransferIndexPermission);
        $AdminRole->attachPermission($productTransferCreatePermission);
        $AdminRole->attachPermission($productTransferUpdatePermission);
        $AdminRole->attachPermission($productTransferDeletePermission);
        $AdminRole->attachPermission($productTransferRestorePermission);
        $AdminRole->attachPermission($productTransferUndoPermission);
        $AdminRole->attachPermission($productTransferApprovePermission);
        $AdminRole->attachPermission($productTransferXlsPermission);
        $AdminRole->attachPermission($productTransferReportPermission);
        

        //Marketing-Promotion
        $AdminRole->attachPermission($promotionIndexPermission);
        $AdminRole->attachPermission($promotionCreatePermission);
        $AdminRole->attachPermission($promotionUpdatePermission);
        $AdminRole->attachPermission($promotionDeletePermission);
        $AdminRole->attachPermission($promotionRestorePermission);
        $AdminRole->attachPermission($promotionUndoPermission);
        $AdminRole->attachPermission($promotionApprovePermission);
        $AdminRole->attachPermission($promotionXlsPermission);
        $AdminRole->attachPermission($promotionReportPermission);
        
    
        //Marketing-ProductBundled
        $AdminRole->attachPermission($productBundledIndexPermission);
        $AdminRole->attachPermission($productBundledCreatePermission);
        $AdminRole->attachPermission($productBundledUpdatePermission);
        $AdminRole->attachPermission($productBundledDeletePermission);
        $AdminRole->attachPermission($productBundledRestorePermission);
        $AdminRole->attachPermission($productBundledUndoPermission);
        $AdminRole->attachPermission($productBundledApprovePermission);
        $AdminRole->attachPermission($productBundledXlsPermission);
        $AdminRole->attachPermission($productBundledReportPermission);
        
        
            //Accounting - Payment
        $AdminRole->attachPermission($paymentIndexPermission);
        $AdminRole->attachPermission($paymentCreatePermission);
        $AdminRole->attachPermission($paymentUpdatePermission);
        $AdminRole->attachPermission($paymentDeletePermission);
        $AdminRole->attachPermission($paymentRestorePermission);
        $AdminRole->attachPermission($paymentUndoPermission);
        $AdminRole->attachPermission($paymentApprovePermission);
        $AdminRole->attachPermission($paymentXlsPermission);
        $AdminRole->attachPermission($paymentReportPermission);
        

            //Accounting - Shipping Fee
        $AdminRole->attachPermission($shippingFeeIndexPermission);
        $AdminRole->attachPermission($shippingFeeCreatePermission);
        $AdminRole->attachPermission($shippingFeeUpdatePermission);
        $AdminRole->attachPermission($shippingFeeDeletePermission);
        $AdminRole->attachPermission($shippingFeeRestorePermission);
        $AdminRole->attachPermission($shippingFeeUndoPermission);
        $AdminRole->attachPermission($shippingFeeApprovePermission);
        $AdminRole->attachPermission($shippingFeeXlsPermission);
        $AdminRole->attachPermission($shippingFeeReportPermission);
        

        //Other - Product Withdrawal
        $AdminRole->attachPermission($productWithdrawalIndexPermission);
        $AdminRole->attachPermission($productWithdrawalCreatePermission);
        $AdminRole->attachPermission($productWithdrawalUpdatePermission);
        $AdminRole->attachPermission($productWithdrawalDeletePermission);
        $AdminRole->attachPermission($productWithdrawalRestorePermission);
        $AdminRole->attachPermission($productWithdrawalUndoPermission);
        $AdminRole->attachPermission($productWithdrawalApprovePermission);
        $AdminRole->attachPermission($productWithdrawalXlsPermission);
        $AdminRole->attachPermission($productWithdrawalReportPermission);
        
    
            //Other - Product Borrow
        $AdminRole->attachPermission($productBorrowIndexPermission);
        $AdminRole->attachPermission($productBorrowCreatePermission);
        $AdminRole->attachPermission($productBorrowUpdatePermission);
        $AdminRole->attachPermission($productBorrowDeletePermission);
        $AdminRole->attachPermission($productBorrowRestorePermission);
        $AdminRole->attachPermission($productBorrowUndoPermission);
        $AdminRole->attachPermission($productBorrowApprovePermission);
        $AdminRole->attachPermission($productBorrowXlsPermission);
        $AdminRole->attachPermission($productBorrowReportPermission);
        

        //Setting - News & Events
        $AdminRole->attachPermission($newAndEventIndexPermission);
        $AdminRole->attachPermission($newAndEventCreatePermission);
        $AdminRole->attachPermission($newAndEventUpdatePermission);
        $AdminRole->attachPermission($newAndEventDeletePermission);
        $AdminRole->attachPermission($newAndEventRestorePermission);
        $AdminRole->attachPermission($newAndEventUndoPermission);
        $AdminRole->attachPermission($newAndEventApprovePermission);
        $AdminRole->attachPermission($newAndEventXlsPermission);
        $AdminRole->attachPermission($newAndEventReportPermission);
        
        //Setting - Company
        $AdminRole->attachPermission($companyIndexPermission);
        $AdminRole->attachPermission($companyCreatePermission);
        $AdminRole->attachPermission($companyUpdatePermission);
        $AdminRole->attachPermission($companyDeletePermission);
        $AdminRole->attachPermission($companyRestorePermission);
        $AdminRole->attachPermission($companyUndoPermission);
        $AdminRole->attachPermission($companyApprovePermission);
        $AdminRole->attachPermission($companyXlsPermission);
        $AdminRole->attachPermission($companyReportPermission);
        
        //Setting - Platform
        $AdminRole->attachPermission($platformIndexPermission);
        $AdminRole->attachPermission($platformCreatePermission);
        $AdminRole->attachPermission($platformUpdatePermission);
        $AdminRole->attachPermission($platformDeletePermission);
        $AdminRole->attachPermission($platformRestorePermission);
        $AdminRole->attachPermission($platformUndoPermission);
        $AdminRole->attachPermission($platformApprovePermission);
        $AdminRole->attachPermission($platformXlsPermission);
        $AdminRole->attachPermission($platformReportPermission);

        //Setting - Publisher
        $AdminRole->attachPermission($publisherIndexPermission);
        $AdminRole->attachPermission($publisherCreatePermission);
        $AdminRole->attachPermission($publisherUpdatePermission);
        $AdminRole->attachPermission($publisherDeletePermission);
        $AdminRole->attachPermission($publisherRestorePermission);
        $AdminRole->attachPermission($publisherUndoPermission);
        $AdminRole->attachPermission($publisherApprovePermission);
        $AdminRole->attachPermission($publisherXlsPermission);
        $AdminRole->attachPermission($publisherReportPermission);
        
            //Setting - Warehouse
        $AdminRole->attachPermission($warehousetIndexPermission);
        $AdminRole->attachPermission($warehousetCreatePermission);
        $AdminRole->attachPermission($warehousetUpdatePermission);
        $AdminRole->attachPermission($warehousetDeletePermission);
        $AdminRole->attachPermission($warehousetRestorePermission);
        $AdminRole->attachPermission($warehousetUndoPermission);
        $AdminRole->attachPermission($warehousetApprovePermission);
        $AdminRole->attachPermission($warehousetXlsPermission);
        $AdminRole->attachPermission($warehousetReportPermission);
    
        //Setting - Item Type
        $AdminRole->attachPermission($itemTypeIndexPermission);
        $AdminRole->attachPermission($itemTypeCreatePermission);
        $AdminRole->attachPermission($itemTypeUpdatePermission);
        $AdminRole->attachPermission($itemTypeDeletePermission);
        $AdminRole->attachPermission($itemTypeRestorePermission);
        $AdminRole->attachPermission($itemTypeUndoPermission);
        $AdminRole->attachPermission($itemTypeApprovePermission);
        $AdminRole->attachPermission($itemTypeXlsPermission);
        $AdminRole->attachPermission($itemTypeReportPermission);
        
            //Setting - Product
        $AdminRole->attachPermission($productIndexPermission);
        $AdminRole->attachPermission($productCreatePermission);
        $AdminRole->attachPermission($productUpdatePermission);
        $AdminRole->attachPermission($productDeletePermission);
        $AdminRole->attachPermission($productRestorePermission);
        $AdminRole->attachPermission($productUndoPermission);
        $AdminRole->attachPermission($productApprovePermission);
        $AdminRole->attachPermission($productXlsPermission);
        $AdminRole->attachPermission($productReportPermission);
        

        //Setting - Product-Barcode
            $AdminRole->attachPermission($productBarcodeIndexPermission);
        $AdminRole->attachPermission($productBarcodeCreatePermission);
        $AdminRole->attachPermission($productBarcodeUpdatePermission);
        $AdminRole->attachPermission($productBarcodeDeletePermission);
        $AdminRole->attachPermission($productBarcodeRestorePermission);
        $AdminRole->attachPermission($productBarcodeUndoPermission);
        $AdminRole->attachPermission($productBarcodeApprovePermission);
        $AdminRole->attachPermission($productBarcodeXlsPermission);
        $AdminRole->attachPermission($productBarcodeReportPermission);
    

            //Setting - Product-Nickname
        $AdminRole->attachPermission($productNicknameIndexPermission);
        $AdminRole->attachPermission($productNicknameCreatePermission);
        $AdminRole->attachPermission($productNicknameUpdatePermission);
        $AdminRole->attachPermission($productNicknameDeletePermission);
        $AdminRole->attachPermission($productNicknameRestorePermission);
        $AdminRole->attachPermission($productNicknameUndoPermission);
        $AdminRole->attachPermission($productNicknameApprovePermission);
        $AdminRole->attachPermission($productNicknameXlsPermission);
        $AdminRole->attachPermission($productNicknameReportPermission);
        

        //Setting - Product-Price
        $AdminRole->attachPermission($productPriceIndexPermission);
        $AdminRole->attachPermission($productPriceCreatePermission);
        $AdminRole->attachPermission($productPriceUpdatePermission);
        $AdminRole->attachPermission($productPriceDeletePermission);
        $AdminRole->attachPermission($productPriceRestorePermission);
        $AdminRole->attachPermission($productPriceUndoPermission);
        $AdminRole->attachPermission($productPriceApprovePermission);
        $AdminRole->attachPermission($productPriceXlsPermission);
        $AdminRole->attachPermission($productPriceReportPermission);
        

        //Setting - Product-Supplier
        $AdminRole->attachPermission($productSupplierIndexPermission);
        $AdminRole->attachPermission($productSupplierCreatePermission);
        $AdminRole->attachPermission($productSupplierUpdatePermission);
        $AdminRole->attachPermission($productSupplierDeletePermission);
        $AdminRole->attachPermission($productSupplierRestorePermission);
        $AdminRole->attachPermission($productSupplierUndoPermission);
        $AdminRole->attachPermission($productSupplierApprovePermission);
        $AdminRole->attachPermission($productSupplierXlsPermission);
        $AdminRole->attachPermission($productSupplierReportPermission);
        

            //Setting - Customer Tier
        $AdminRole->attachPermission($customerTierIndexPermission);
        $AdminRole->attachPermission($customerTierCreatePermission);
        $AdminRole->attachPermission($customerTierUpdatePermission);
        $AdminRole->attachPermission($customerTierDeletePermission);
        $AdminRole->attachPermission($customerTierRestorePermission);
        $AdminRole->attachPermission($customerTierUndoPermission);
        $AdminRole->attachPermission($customerTierApprovePermission);
        $AdminRole->attachPermission($customerTierXlsPermission);
        $AdminRole->attachPermission($customerTierReportPermission);
        

            //Setting - Tag
        $AdminRole->attachPermission($tagIndexPermission);
        $AdminRole->attachPermission($tagCreatePermission);
        $AdminRole->attachPermission($tagUpdatePermission);
        $AdminRole->attachPermission($tagDeletePermission);
        $AdminRole->attachPermission($tagRestorePermission);
        $AdminRole->attachPermission($tagUndoPermission);
        $AdminRole->attachPermission($tagApprovePermission);
        $AdminRole->attachPermission($tagXlsPermission);
        $AdminRole->attachPermission($tagReportPermission);
    
            //Setting - User
        $AdminRole->attachPermission($userIndexPermission);
        $AdminRole->attachPermission($userCreatePermission);
        $AdminRole->attachPermission($userUpdatePermission);
        $AdminRole->attachPermission($userDeletePermission);
        $AdminRole->attachPermission($userRestorePermission);
        $AdminRole->attachPermission($userUndoPermission);
        $AdminRole->attachPermission($userApprovePermission);
        $AdminRole->attachPermission($userXlsPermission);
        $AdminRole->attachPermission($userReportPermission);


        //ManageRole
        //Inquire
        $ManageRole->attachPermission($inquireIndexPermission);
        $ManageRole->attachPermission($inquireCreatePermission);
        $ManageRole->attachPermission($inquireUpdatePermission);
        $ManageRole->attachPermission($inquireDeletePermission);
        $ManageRole->attachPermission($inquireRestorePermission);
        $ManageRole->attachPermission($inquireUndoPermission);
        $ManageRole->attachPermission($inquireApprovePermission);
        $ManageRole->attachPermission($inquireXlsPermission);
        $ManageRole->attachPermission($inquireReportPermission);

            //Purchasing-order
        $ManageRole->attachPermission($purchasingOrderIndexPermission);
        $ManageRole->attachPermission($purchasingOrderCreatePermission);
        $ManageRole->attachPermission($purchasingOrderUpdatePermission);
        $ManageRole->attachPermission($purchasingOrderDeletePermission);
        $ManageRole->attachPermission($purchasingOrderRestorePermission);
        $ManageRole->attachPermission($purchasingOrderUndoPermission);
        $ManageRole->attachPermission($purchasingOrderApprovePermission);
        $ManageRole->attachPermission($urchasingOrderXlsPermission);
        $ManageRole->attachPermission($urchasingOrderReportPermission);


            //Pre-order
        $ManageRole->attachPermission($preOrderIndexPermission);
        $ManageRole->attachPermission($preOrderCreatePermission);
        $ManageRole->attachPermission($preOrderUpdatePermission);
        $ManageRole->attachPermission($preOrderDeletePermission);
        $ManageRole->attachPermission($preOrderRestorePermission);
        $ManageRole->attachPermission($preOrderUndoPermission);
        $ManageRole->attachPermission($preOrderApprovePermission);
        $ManageRole->attachPermission($preOrderXlsPermission);
        $ManageRole->attachPermission($preOrderReportPermission);

            //Sale-order
        $ManageRole->attachPermission($saleOrderIndexPermission);
        $ManageRole->attachPermission($saleOrderCreatePermission);
        $ManageRole->attachPermission($saleOrderUpdatePermission);
        $ManageRole->attachPermission($saleOrderDeletePermission);
        $ManageRole->attachPermission($saleOrderRestorePermission);
        $ManageRole->attachPermission($saleOrderUndoPermission);
        $ManageRole->attachPermission($saleOrderApprovePermission);
        $ManageRole->attachPermission($saleOrderXlsPermission);
        $ManageRole->attachPermission($saleOrderReportPermission);
        
        //Logistics-Stocks
        $ManageRole->attachPermission($stocksIndexPermission);
        $ManageRole->attachPermission($stocksCreatePermission);
        $ManageRole->attachPermission($stocksUpdatePermission);
        $ManageRole->attachPermission($stocksDeletePermission);
        $ManageRole->attachPermission($stocksRestorePermission);
        $ManageRole->attachPermission($stocksUndoPermission);
        $ManageRole->attachPermission($stocksApprovePermission);
        $ManageRole->attachPermission($stocksXlsPermission);
        $ManageRole->attachPermission($stocksReportPermission);
        
        //Logistics-Product-Receive
        $ManageRole->attachPermission($productReceiveIndexPermission);
        $ManageRole->attachPermission($productReceiveCreatePermission);
        $ManageRole->attachPermission($productReceiveUpdatePermission);
        $ManageRole->attachPermission($productReceiveDeletePermission);
        $ManageRole->attachPermission($productReceiveRestorePermission);
        $ManageRole->attachPermission($productReceiveUndoPermission);
        $ManageRole->attachPermission($productReceiveApprovePermission);
        $ManageRole->attachPermission($productReceiveXlsPermission);
        $ManageRole->attachPermission($productReceiveReportPermission);
        

        //Logistics-Shipping
        $ManageRole->attachPermission($shippingIndexPermission);
        $ManageRole->attachPermission($shippingCreatePermission);
        $ManageRole->attachPermission($shippingUpdatePermission);
        $ManageRole->attachPermission($shippingDeletePermission);
        $ManageRole->attachPermission($shippingRestorePermission);
        $ManageRole->attachPermission($shippingUndoPermission);
        $ManageRole->attachPermission($shippingApprovePermission);
        $ManageRole->attachPermission($shippingXlsPermission);
        $ManageRole->attachPermission($shippingReportPermission);
    

        //Logistics-Cancel-Note
        $ManageRole->attachPermission($cancelNoteIndexPermission);
        $ManageRole->attachPermission($cancelNoteCreatePermission);
        $ManageRole->attachPermission($cancelNoteUpdatePermission);
        $ManageRole->attachPermission($cancelNoteDeletePermission);
        $ManageRole->attachPermission($cancelNoteRestorePermission);
        $ManageRole->attachPermission($cancelNoteUndoPermission);
        $ManageRole->attachPermission($cancelNoteApprovePermission);
        $ManageRole->attachPermission($cancelNoteXlsPermission);
        $ManageRole->attachPermission($cancelNoteReportPermission);
        

        //Logistics-Claim
        $ManageRole->attachPermission($claimIndexPermission);
        $ManageRole->attachPermission($claimCreatePermission);
        $ManageRole->attachPermission($claimUpdatePermission);
        $ManageRole->attachPermission($claimDeletePermission);
        $ManageRole->attachPermission($claimRestorePermission);
        $ManageRole->attachPermission($claimUndoPermission);
        $ManageRole->attachPermission($claimApprovePermission);
        $ManageRole->attachPermission($claimXlsPermission);
        $ManageRole->attachPermission($claimReportPermission);
        

        //Logistics-Product Transfer
        $ManageRole->attachPermission($productTransferIndexPermission);
        $ManageRole->attachPermission($productTransferCreatePermission);
        $ManageRole->attachPermission($productTransferUpdatePermission);
        $ManageRole->attachPermission($productTransferDeletePermission);
        $ManageRole->attachPermission($productTransferRestorePermission);
        $ManageRole->attachPermission($productTransferUndoPermission);
        $ManageRole->attachPermission($productTransferApprovePermission);
        $ManageRole->attachPermission($productTransferXlsPermission);
        $ManageRole->attachPermission($productTransferReportPermission);
        

        //Marketing-Promotion
        $ManageRole->attachPermission($promotionIndexPermission);
        $ManageRole->attachPermission($promotionCreatePermission);
        $ManageRole->attachPermission($promotionUpdatePermission);
        $ManageRole->attachPermission($promotionDeletePermission);
        $ManageRole->attachPermission($promotionRestorePermission);
        $ManageRole->attachPermission($promotionUndoPermission);
        $ManageRole->attachPermission($promotionApprovePermission);
        $ManageRole->attachPermission($promotionXlsPermission);
        $ManageRole->attachPermission($promotionReportPermission);
        
    
        //Marketing-ProductBundled
        $ManageRole->attachPermission($productBundledIndexPermission);
        $ManageRole->attachPermission($productBundledCreatePermission);
        $ManageRole->attachPermission($productBundledUpdatePermission);
        $ManageRole->attachPermission($productBundledDeletePermission);
        $ManageRole->attachPermission($productBundledRestorePermission);
        $ManageRole->attachPermission($productBundledUndoPermission);
        $ManageRole->attachPermission($productBundledApprovePermission);
        $ManageRole->attachPermission($productBundledXlsPermission);
        $ManageRole->attachPermission($productBundledReportPermission);
        
        
            //Accounting - Payment
        $ManageRole->attachPermission($paymentIndexPermission);
        $ManageRole->attachPermission($paymentCreatePermission);
        $ManageRole->attachPermission($paymentUpdatePermission);
        $ManageRole->attachPermission($paymentDeletePermission);
        $ManageRole->attachPermission($paymentRestorePermission);
        $ManageRole->attachPermission($paymentUndoPermission);
        $ManageRole->attachPermission($paymentApprovePermission);
        $ManageRole->attachPermission($paymentXlsPermission);
        $ManageRole->attachPermission($paymentReportPermission);
        

            //Accounting - Shipping Fee
        $ManageRole->attachPermission($shippingFeeIndexPermission);
        $ManageRole->attachPermission($shippingFeeCreatePermission);
        $ManageRole->attachPermission($shippingFeeUpdatePermission);
        $ManageRole->attachPermission($shippingFeeDeletePermission);
        $ManageRole->attachPermission($shippingFeeRestorePermission);
        $ManageRole->attachPermission($shippingFeeUndoPermission);
        $ManageRole->attachPermission($shippingFeeApprovePermission);
        $ManageRole->attachPermission($shippingFeeXlsPermission);
        $ManageRole->attachPermission($shippingFeeReportPermission);
        

        //Other - Product Withdrawal
        $ManageRole->attachPermission($productWithdrawalIndexPermission);
        $ManageRole->attachPermission($productWithdrawalCreatePermission);
        $ManageRole->attachPermission($productWithdrawalUpdatePermission);
        $ManageRole->attachPermission($productWithdrawalDeletePermission);
        $ManageRole->attachPermission($productWithdrawalRestorePermission);
        $ManageRole->attachPermission($productWithdrawalUndoPermission);
        $ManageRole->attachPermission($productWithdrawalApprovePermission);
        $ManageRole->attachPermission($productWithdrawalXlsPermission);
        $ManageRole->attachPermission($productWithdrawalReportPermission);
        
    
            //Other - Product Borrow
        $ManageRole->attachPermission($productBorrowIndexPermission);
        $ManageRole->attachPermission($productBorrowCreatePermission);
        $ManageRole->attachPermission($productBorrowUpdatePermission);
        $ManageRole->attachPermission($productBorrowDeletePermission);
        $ManageRole->attachPermission($productBorrowRestorePermission);
        $ManageRole->attachPermission($productBorrowUndoPermission);
        $ManageRole->attachPermission($productBorrowApprovePermission);
        $ManageRole->attachPermission($productBorrowXlsPermission);
        $ManageRole->attachPermission($productBorrowReportPermission);
        

        //Setting - News & Events
        $ManageRole->attachPermission($newAndEventIndexPermission);
        $ManageRole->attachPermission($newAndEventCreatePermission);
        $ManageRole->attachPermission($newAndEventUpdatePermission);
        $ManageRole->attachPermission($newAndEventDeletePermission);
        $ManageRole->attachPermission($newAndEventRestorePermission);
        $ManageRole->attachPermission($newAndEventUndoPermission);
        $ManageRole->attachPermission($newAndEventApprovePermission);
        $ManageRole->attachPermission($newAndEventXlsPermission);
        $ManageRole->attachPermission($newAndEventReportPermission);
        


        //Setting - Company
        $ManageRole->attachPermission($companyIndexPermission);
        $ManageRole->attachPermission($companyCreatePermission);
        $ManageRole->attachPermission($companyUpdatePermission);
        $ManageRole->attachPermission($companyDeletePermission);
        $ManageRole->attachPermission($companyRestorePermission);
        $ManageRole->attachPermission($companyUndoPermission);
        $ManageRole->attachPermission($companyApprovePermission);
        $ManageRole->attachPermission($companyXlsPermission);
        $ManageRole->attachPermission($companyReportPermission);
        
        //Setting - Platform
        $ManageRole->attachPermission($platformIndexPermission);
        $ManageRole->attachPermission($platformCreatePermission);
        $ManageRole->attachPermission($platformUpdatePermission);
        $ManageRole->attachPermission($platformDeletePermission);
        $ManageRole->attachPermission($platformRestorePermission);
        $ManageRole->attachPermission($platformUndoPermission);
        $ManageRole->attachPermission($platformApprovePermission);
        $ManageRole->attachPermission($platformXlsPermission);
        $ManageRole->attachPermission($platformReportPermission);

        //Setting - Publisher
        $ManageRole->attachPermission($publisherIndexPermission);
        $ManageRole->attachPermission($publisherCreatePermission);
        $ManageRole->attachPermission($publisherUpdatePermission);
        $ManageRole->attachPermission($publisherDeletePermission);
        $ManageRole->attachPermission($publisherRestorePermission);
        $ManageRole->attachPermission($publisherUndoPermission);
        $ManageRole->attachPermission($publisherApprovePermission);
        $ManageRole->attachPermission($publisherXlsPermission);
        $ManageRole->attachPermission($publisherReportPermission);
        

            //Setting - Warehouse
        $ManageRole->attachPermission($warehousetIndexPermission);
        $ManageRole->attachPermission($warehousetCreatePermission);
        $ManageRole->attachPermission($warehousetUpdatePermission);
        $ManageRole->attachPermission($warehousetDeletePermission);
        $ManageRole->attachPermission($warehousetRestorePermission);
        $ManageRole->attachPermission($warehousetUndoPermission);
        $ManageRole->attachPermission($warehousetApprovePermission);
        $ManageRole->attachPermission($warehousetXlsPermission);
        $ManageRole->attachPermission($warehousetReportPermission);
    

        //Setting - Item Type
        $ManageRole->attachPermission($itemTypeIndexPermission);
        $ManageRole->attachPermission($itemTypeCreatePermission);
        $ManageRole->attachPermission($itemTypeUpdatePermission);
        $ManageRole->attachPermission($itemTypeDeletePermission);
        $ManageRole->attachPermission($itemTypeRestorePermission);
        $ManageRole->attachPermission($itemTypeUndoPermission);
        $ManageRole->attachPermission($itemTypeApprovePermission);
        $ManageRole->attachPermission($itemTypeXlsPermission);
        $ManageRole->attachPermission($itemTypeReportPermission);
        

            //Setting - Product
        $ManageRole->attachPermission($productIndexPermission);
        $ManageRole->attachPermission($productCreatePermission);
        $ManageRole->attachPermission($productUpdatePermission);
        $ManageRole->attachPermission($productDeletePermission);
        $ManageRole->attachPermission($productRestorePermission);
        $ManageRole->attachPermission($productUndoPermission);
        $ManageRole->attachPermission($productApprovePermission);
        $ManageRole->attachPermission($productXlsPermission);
        $ManageRole->attachPermission($productReportPermission);
        

        //Setting - Product-Barcode
            $ManageRole->attachPermission($productBarcodeIndexPermission);
        $ManageRole->attachPermission($productBarcodeCreatePermission);
        $ManageRole->attachPermission($productBarcodeUpdatePermission);
        $ManageRole->attachPermission($productBarcodeDeletePermission);
        $ManageRole->attachPermission($productBarcodeRestorePermission);
        $ManageRole->attachPermission($productBarcodeUndoPermission);
        $ManageRole->attachPermission($productBarcodeApprovePermission);
        $ManageRole->attachPermission($productBarcodeXlsPermission);
        $ManageRole->attachPermission($productBarcodeReportPermission);
    

            //Setting - Product-Nickname
        $ManageRole->attachPermission($productNicknameIndexPermission);
        $ManageRole->attachPermission($productNicknameCreatePermission);
        $ManageRole->attachPermission($productNicknameUpdatePermission);
        $ManageRole->attachPermission($productNicknameDeletePermission);
        $ManageRole->attachPermission($productNicknameRestorePermission);
        $ManageRole->attachPermission($productNicknameUndoPermission);
        $ManageRole->attachPermission($productNicknameApprovePermission);
        $ManageRole->attachPermission($productNicknameXlsPermission);
        $ManageRole->attachPermission($productNicknameReportPermission);
        

        //Setting - Product-Price
        $ManageRole->attachPermission($productPriceIndexPermission);
        $ManageRole->attachPermission($productPriceCreatePermission);
        $ManageRole->attachPermission($productPriceUpdatePermission);
        $ManageRole->attachPermission($productPriceDeletePermission);
        $ManageRole->attachPermission($productPriceRestorePermission);
        $ManageRole->attachPermission($productPriceUndoPermission);
        $ManageRole->attachPermission($productPriceApprovePermission);
        $ManageRole->attachPermission($productPriceXlsPermission);
        $ManageRole->attachPermission($productPriceReportPermission);
        

        //Setting - Product-Supplier
            $ManageRole->attachPermission($productSupplierIndexPermission);
        $ManageRole->attachPermission($productSupplierCreatePermission);
        $ManageRole->attachPermission($productSupplierUpdatePermission);
        $ManageRole->attachPermission($productSupplierDeletePermission);
        $ManageRole->attachPermission($productSupplierRestorePermission);
        $ManageRole->attachPermission($productSupplierUndoPermission);
        $ManageRole->attachPermission($productSupplierApprovePermission);
        $ManageRole->attachPermission($productSupplierXlsPermission);
        $ManageRole->attachPermission($productSupplierReportPermission);
        

            //Setting - Customer Tier
        $ManageRole->attachPermission($customerTierIndexPermission);
        $ManageRole->attachPermission($customerTierCreatePermission);
        $ManageRole->attachPermission($customerTierUpdatePermission);
        $ManageRole->attachPermission($customerTierDeletePermission);
        $ManageRole->attachPermission($customerTierRestorePermission);
        $ManageRole->attachPermission($customerTierUndoPermission);
        $ManageRole->attachPermission($customerTierApprovePermission);
        $ManageRole->attachPermission($customerTierXlsPermission);
        $ManageRole->attachPermission($customerTierReportPermission);
        


            //Setting - Tag
        $ManageRole->attachPermission($tagIndexPermission);
        $ManageRole->attachPermission($tagCreatePermission);
        $ManageRole->attachPermission($tagUpdatePermission);
        $ManageRole->attachPermission($tagDeletePermission);
        $ManageRole->attachPermission($tagRestorePermission);
        $ManageRole->attachPermission($tagUndoPermission);
        $ManageRole->attachPermission($tagApprovePermission);
        $ManageRole->attachPermission($tagXlsPermission);
        $ManageRole->attachPermission($tagReportPermission);
    
            //Setting - User
        $ManageRole->attachPermission($userIndexPermission);
        $ManageRole->attachPermission($userCreatePermission);
        $ManageRole->attachPermission($userUpdatePermission);
        $ManageRole->attachPermission($userDeletePermission);
        $ManageRole->attachPermission($userRestorePermission);
        $ManageRole->attachPermission($userUndoPermission);
        $ManageRole->attachPermission($userApprovePermission);
        $ManageRole->attachPermission($userXlsPermission);
        $ManageRole->attachPermission($userReportPermission);
        
        
            //InformationOfficerRole
        //Inquire
        $InformationOfficerRole->attachPermission($inquireIndexPermission);
        $InformationOfficerRole->attachPermission($inquireCreatePermission);
        $InformationOfficerRole->attachPermission($inquireUpdatePermission);
        

            //Purchasing-order
        $InformationOfficerRole->attachPermission($purchasingOrderIndexPermission);
        $InformationOfficerRole->attachPermission($purchasingOrderCreatePermission);
        $InformationOfficerRole->attachPermission($purchasingOrderUpdatePermission);
        


            //Pre-order
        $InformationOfficerRole->attachPermission($preOrderIndexPermission);
        $InformationOfficerRole->attachPermission($preOrderCreatePermission);
        $InformationOfficerRole->attachPermission($preOrderUpdatePermission);


            //Sale-order
        $InformationOfficerRole->attachPermission($saleOrderIndexPermission);
        $InformationOfficerRole->attachPermission($saleOrderCreatePermission);
        $InformationOfficerRole->attachPermission($saleOrderUpdatePermission);

        
        //Logistics-Stocks
        $InformationOfficerRole->attachPermission($stocksIndexPermission);
        $InformationOfficerRole->attachPermission($stocksCreatePermission);
        $InformationOfficerRole->attachPermission($stocksUpdatePermission);
    
        
        //Logistics-Product-Receive
        $InformationOfficerRole->attachPermission($productReceiveIndexPermission);
        $InformationOfficerRole->attachPermission($productReceiveCreatePermission);
        $InformationOfficerRole->attachPermission($productReceiveUpdatePermission);

        

        //Logistics-Shipping
        $InformationOfficerRole->attachPermission($shippingIndexPermission);
        $InformationOfficerRole->attachPermission($shippingCreatePermission);
        $InformationOfficerRole->attachPermission($shippingUpdatePermission);


        //Logistics-Cancel-Note
        $InformationOfficerRole->attachPermission($cancelNoteIndexPermission);
        $InformationOfficerRole->attachPermission($cancelNoteCreatePermission);
        $InformationOfficerRole->attachPermission($cancelNoteUpdatePermission);

        

        //Logistics-Claim
        $InformationOfficerRole->attachPermission($claimIndexPermission);
        $InformationOfficerRole->attachPermission($claimCreatePermission);
        $InformationOfficerRole->attachPermission($claimUpdatePermission);
    
        

        //Logistics-Product Transfer
        $InformationOfficerRole->attachPermission($productTransferIndexPermission);
        $InformationOfficerRole->attachPermission($productTransferCreatePermission);
        $InformationOfficerRole->attachPermission($productTransferUpdatePermission);

        

        //Marketing-Promotion
        $InformationOfficerRole->attachPermission($promotionIndexPermission);
        $InformationOfficerRole->attachPermission($promotionCreatePermission);
        $InformationOfficerRole->attachPermission($promotionUpdatePermission);
        
        
    
        //Marketing-ProductBundled
        $InformationOfficerRole->attachPermission($productBundledIndexPermission);
        $InformationOfficerRole->attachPermission($productBundledCreatePermission);
        $InformationOfficerRole->attachPermission($productBundledUpdatePermission);
    
        
        
            //Accounting - Payment
        $InformationOfficerRole->attachPermission($paymentIndexPermission);
        $InformationOfficerRole->attachPermission($paymentCreatePermission);
        $InformationOfficerRole->attachPermission($paymentUpdatePermission);
    
        

            //Accounting - Shipping Fee
        $InformationOfficerRole->attachPermission($shippingFeeIndexPermission);
        $InformationOfficerRole->attachPermission($shippingFeeCreatePermission);
        $InformationOfficerRole->attachPermission($shippingFeeUpdatePermission);
    
        

        //Other - Product Withdrawal
        $InformationOfficerRole->attachPermission($productWithdrawalIndexPermission);
        $InformationOfficerRole->attachPermission($productWithdrawalCreatePermission);
        $InformationOfficerRole->attachPermission($productWithdrawalUpdatePermission);
        
        
    
            //Other - Product Borrow
        $InformationOfficerRole->attachPermission($productBorrowIndexPermission);
        $InformationOfficerRole->attachPermission($productBorrowCreatePermission);
        $InformationOfficerRole->attachPermission($productBorrowUpdatePermission);

        

        //Setting - News & Events
        $InformationOfficerRole->attachPermission($newAndEventIndexPermission);
        $InformationOfficerRole->attachPermission($newAndEventCreatePermission);
        $InformationOfficerRole->attachPermission($newAndEventUpdatePermission);

        


        //Setting - Company
        $InformationOfficerRole->attachPermission($companyIndexPermission);
        $InformationOfficerRole->attachPermission($companyCreatePermission);
        $InformationOfficerRole->attachPermission($companyUpdatePermission);

        
        //Setting - Platform
        $InformationOfficerRole->attachPermission($platformIndexPermission);
        $InformationOfficerRole->attachPermission($platformCreatePermission);
        $InformationOfficerRole->attachPermission($platformUpdatePermission);
        

        //Setting - Publisher
        $InformationOfficerRole->attachPermission($publisherIndexPermission);
        $InformationOfficerRole->attachPermission($publisherCreatePermission);
        $InformationOfficerRole->attachPermission($publisherUpdatePermission);
    
        

            //Setting - Warehouse
        $InformationOfficerRole->attachPermission($warehousetIndexPermission);
        $InformationOfficerRole->attachPermission($warehousetCreatePermission);
        $InformationOfficerRole->attachPermission($warehousetUpdatePermission);
    
        //Setting - Item Type
        $InformationOfficerRole->attachPermission($itemTypeIndexPermission);
        $InformationOfficerRole->attachPermission($itemTypeCreatePermission);
        $InformationOfficerRole->attachPermission($itemTypeUpdatePermission);
        


            //Setting - Product
        $InformationOfficerRole->attachPermission($productIndexPermission);
        $InformationOfficerRole->attachPermission($productCreatePermission);
        $InformationOfficerRole->attachPermission($productUpdatePermission);
        


        //Setting - Product-Barcode
        $InformationOfficerRole->attachPermission($productBarcodeIndexPermission);
        $InformationOfficerRole->attachPermission($productBarcodeCreatePermission);
        $InformationOfficerRole->attachPermission($productBarcodeUpdatePermission);
        
    

            //Setting - Product-Nickname
        $InformationOfficerRole->attachPermission($productNicknameIndexPermission);
        $InformationOfficerRole->attachPermission($productNicknameCreatePermission);
        $InformationOfficerRole->attachPermission($productNicknameUpdatePermission);
    
        

        //Setting - Product-Price
        $InformationOfficerRole->attachPermission($productPriceIndexPermission);
        $InformationOfficerRole->attachPermission($productPriceCreatePermission);
        $InformationOfficerRole->attachPermission($productPriceUpdatePermission);

        

        //Setting - Product-Supplier
            $InformationOfficerRole->attachPermission($productSupplierIndexPermission);
        $InformationOfficerRole->attachPermission($productSupplierCreatePermission);
        $InformationOfficerRole->attachPermission($productSupplierUpdatePermission);

        

            //Setting - Customer Tier
        $InformationOfficerRole->attachPermission($customerTierIndexPermission);
        $InformationOfficerRole->attachPermission($customerTierCreatePermission);
        $InformationOfficerRole->attachPermission($customerTierUpdatePermission);
    
        


            //Setting - Tag
        $InformationOfficerRole->attachPermission($tagIndexPermission);
        $InformationOfficerRole->attachPermission($tagCreatePermission);
        $InformationOfficerRole->attachPermission($tagUpdatePermission);

    
            //Setting - User
        $InformationOfficerRole->attachPermission($userIndexPermission);
        $InformationOfficerRole->attachPermission($userCreatePermission);
        $InformationOfficerRole->attachPermission($userUpdatePermission);


        //ServiceOfficerRole
        //Inquire
        $ServiceOfficerRole->attachPermission($inquireIndexPermission);

            //Purchasing-order
        $ServiceOfficerRole->attachPermission($purchasingOrderIndexPermission);

            //Pre-order
        $ServiceOfficerRole->attachPermission($preOrderIndexPermission);

            //Sale-order
        $ServiceOfficerRole->attachPermission($saleOrderIndexPermission);

        //Logistics-Stocks
        $ServiceOfficerRole->attachPermission($stocksIndexPermission);

        //Logistics-Product-Receive
        $ServiceOfficerRole->attachPermission($productReceiveIndexPermission);

        //Logistics-Shipping
        $ServiceOfficerRole->attachPermission($shippingIndexPermission);

        //Logistics-Cancel-Note
        $ServiceOfficerRole->attachPermission($cancelNoteIndexPermission);

        //Logistics-Claim
        $ServiceOfficerRole->attachPermission($claimIndexPermission);

        //Logistics-Product Transfer
        $ServiceOfficerRole->attachPermission($productTransferIndexPermission);

        //Marketing-Promotion
        $ServiceOfficerRole->attachPermission($promotionIndexPermission);

        //Marketing-ProductBundled
        $ServiceOfficerRole->attachPermission($productBundledIndexPermission);

            //Accounting - Payment
        $ServiceOfficerRole->attachPermission($paymentIndexPermission);

            //Accounting - Shipping Fee
        $ServiceOfficerRole->attachPermission($shippingFeeIndexPermission);

        //Other - Product Withdrawal
        $ServiceOfficerRole->attachPermission($productWithdrawalIndexPermission);

            //Other - Product Borrow
        $ServiceOfficerRole->attachPermission($productBorrowIndexPermission);

        //Setting - News & Events
        $ServiceOfficerRole->attachPermission($newAndEventIndexPermission);

        //Setting - Company
        $ServiceOfficerRole->attachPermission($companyIndexPermission);
    
        //Setting - Platform
        $ServiceOfficerRole->attachPermission($platformIndexPermission);

        //Setting - Publisher
        $ServiceOfficerRole->attachPermission($publisherIndexPermission);
    
            //Setting - Warehouse
        $ServiceOfficerRole->attachPermission($warehousetIndexPermission);
        
        //Setting - Item Type
        $ServiceOfficerRole->attachPermission($itemTypeIndexPermission);
        
            //Setting - Product
        $ServiceOfficerRole->attachPermission($productIndexPermission);

        //Setting - Product-Barcode
        $ServiceOfficerRole->attachPermission($productBarcodeIndexPermission);

            //Setting - Product-Nickname
        $ServiceOfficerRole->attachPermission($productNicknameIndexPermission);

        //Setting - Product-Price
        $ServiceOfficerRole->attachPermission($productPriceIndexPermission);

        //Setting - Product-Supplier
            $ServiceOfficerRole->attachPermission($productSupplierIndexPermission);

            //Setting - Customer Tier
        $ServiceOfficerRole->attachPermission($customerTierIndexPermission);

            //Setting - Tag
        $ServiceOfficerRole->attachPermission($tagIndexPermission);
    
            //Setting - User
        $ServiceOfficerRole->attachPermission($userIndexPermission);

            //NotUseRole
        //Inquire
        $NotUseRole->attachPermission($inquireNotAllowPermission);
        
            //Purchasing-order
        $NotUseRole->attachPermission($purchasingOrderNotAllowPermission);
    
            //Pre-order
        $NotUseRole->attachPermission($preOrderNotAllowPermission);

            //Sale-order
        $NotUseRole->attachPermission($saleOrderNotAllowPermission);
        
        //Logistics-Stocks
        $NotUseRole->attachPermission($stocksNotAllowPermission);
        
        //Logistics-Product-Receive
        $NotUseRole->attachPermission($productReceiveNotAllowPermission);
        
        //Logistics-Shipping
        $NotUseRole->attachPermission($shippingNotAllowPermission);
    
        //Logistics-Cancel-Note
        $NotUseRole->attachPermission($cancelNoteNotAllowPermission);
        
        //Logistics-Claim
        $NotUseRole->attachPermission($claimNotAllowPermission);
        
        //Logistics-Product Transfer
        $NotUseRole->attachPermission($productTransferNotAllowPermission);
        
        //Marketing-Promotion
        $NotUseRole->attachPermission($promotionNotAllowPermission);
        
        //Marketing-ProductBundled
        $NotUseRole->attachPermission($productBundledNotAllowPermission);
            
            //Accounting - Payment
        $NotUseRole->attachPermission($paymentNotAllowPermission);
        
            //Accounting - Shipping Fee
        $NotUseRole->attachPermission($shippingFeeNotAllowPermission);
        
        //Other - Product Withdrawal
        $NotUseRole->attachPermission($productWithdrawalNotAllowPermission);
    
            //Other - Product Borrow
        $NotUseRole->attachPermission($productBorrowNotAllowPermission);
        
        //Setting - News & Events
        $NotUseRole->attachPermission($newAndEventNotAllowPermission);
        
        //Setting - Company
        $NotUseRole->attachPermission($companyNotAllowPermission);

        //Setting - Platform
        $NotUseRole->attachPermission($platformNotAllowPermission);

        //Setting - Publisher
        $NotUseRole->attachPermission($publisherNotAllowPermission);

            //Setting - Warehouse
        $NotUseRole->attachPermission($warehousetNotAllowPermission);
    
        //Setting - Item Type
        $NotUseRole->attachPermission($itemTypeNotAllowPermission);

            //Setting - Product
        $NotUseRole->attachPermission($productNotAllowPermission);
        
        //Setting - Product-Barcode
        $NotUseRole->attachPermission($productBarcodeNotAllowPermission);
    
            //Setting - Product-Nickname
        $NotUseRole->attachPermission($productNicknameNotAllowPermission);
        
        //Setting - Product-Price
        $NotUseRole->attachPermission($productPriceNotAllowPermission);
        
        //Setting - Product-Supplier
        $NotUseRole->attachPermission($productSupplierNotAllowPermission);
        
            //Setting - Customer Tier
        $NotUseRole->attachPermission($customerTierNotAllowPermission);
        
            //Setting - Tag
        $NotUseRole->attachPermission($tagNotAllowPermission);

            //Setting - User
        $NotUseRole->attachPermission($userNotAllowPermission);
    }
}
