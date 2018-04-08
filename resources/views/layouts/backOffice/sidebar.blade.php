<?php
    $DimGeneral = \DurianSoftware\Models\DimGeneral::select()->first();
    // $logo= '';
    $logo = $DimGeneral->logo;
    if(!empty($logo)  &&file_exists( storage_path($logo) )){
        $logo = \Image::make(storage_path($logo))->resize(40, 40)->encode('data-url');
    }else{
        
        $logo = asset('images/backOffice/templates/logo-menu.png');
    }
?>

<div class="sidebar-wrapper">
    <div class="sidebar-header">
        <ul class="side-menu">
           <li class="side-menu-item item-title">
               <a href="{{ route('backOffice.home.index') }}">
                    <span class="side-menu-icon">
                        <img src="{{ $logo }}" alt="@lang('app.website_title')"/>
                    </span>
                    <span class="side-menu-text">@if($DimGeneral->alias) {{$DimGeneral->alias}} @endif</span>
                </a>
           </li>
        </ul>
    </div>
    <div class="sidebar-body">
        <ul class="side-menu">
            {{-- start menu PURCHASING --}}
            <li class="side-menu-item dropdown">
               <a href="#collapse-purchase" data-toggle="collapse" >
                    <span class="side-menu-icon">
                        <i class="fa fa-list-alt"></i>
                    </span>
                    <span class="side-menu-text">
                        <span class="caret-icon"><i class="fa fa-chevron-down"></i></span>
                        @lang('app.menu_purchasing')
                    </span>
                </a>
            </li>
                {{-- submenu PURCHASING --}}
                <ul class="side-menu sub-menu collapse" id="collapse-purchase">
                    <li class="side-menu-item">
                        <a href="{{ route('backOffice.inquiry.index') }}">
                            <span class="side-menu-icon">
                                <i class="fa fa fa-bullhorn"></i>
                            </span>
                            <span class="side-menu-text">@lang('app.menu_inquiry')</span>
                        </a>
                    </li>
                    <li class="side-menu-item">
                        <a href="{{ route('backOffice.purchasing-order.index') }}">
                            <span class="side-menu-icon">
                                <i class="fa fa-list-alt"></i>
                            </span>
                            <span class="side-menu-text">@lang('app.menu_purchasing_order')</span>
                        </a>
                    </li>
                    <li class="side-menu-item">
                        <a href="{{ route('backOffice.purchasing.non-essential-purchasing-order.index') }}">
                            <span class="side-menu-icon">
                                <i class="fa fa-list-alt"></i>
                            </span>
                            <span class="side-menu-text">@lang('app.menu_non_essential_purchasing_order')</span>
                        </a>
                    </li>
                    <li class="side-menu-item">
                        <a href="{{ route('backOffice.quota.index') }}">
                            <span class="side-menu-icon">
                                <i class="fa fa-money"></i>
                            </span>
                            <span class="side-menu-text">@lang('app.menu_quota')</span>
                        </a>
                    </li>
                    <li class="side-menu-item">
                        <a href="{{ route('backOffice.purchasing.shipping-fee.index') }}">
                            <span class="side-menu-icon">
                                <i class="fa fa-credit-card"></i>
                            </span>
                            <span class="side-menu-text">@lang('app.menu_purchasing_shipping_fee_expenditure_requisition')</span>
                        </a>
                    </li>
                    <li class="side-menu-item">
                        <a href="{{ route('backOffice.purchasing.claim.index') }}">
                            <span class="side-menu-icon">
                                <i class="fa fa-save"></i>
                            </span>
                            <span class="side-menu-text">@lang('app.menu_logistic_claim')</span>
                        </a>
                    </li>
                    <li class="side-menu-item">
                        <a href="{{ route('backOffice.purchasing.import-duty.index') }}">
                            <span class="side-menu-icon">
                                <i class="fa fa-credit-card"></i>
                            </span>
                            <span class="side-menu-text">@lang('app.menu_import_duty_expenditure_requisition')</span>
                        </a>
                    </li>
                   
                </ul>
                {{-- end submenu PURCHASING --}}

            {{-- start menu SALE --}}
            <li class="side-menu-item dropdown">
               <a href="#collapse-sales" data-toggle="collapse" >
                    <span class="side-menu-icon">
                        <i class="fa fa-money"></i>
                    </span>
                    <span class="side-menu-text">
                        <span class="caret-icon"><i class="fa fa-chevron-down"></i></span>
                        @lang('app.menu_sales')
                    </span>
                </a>
            </li>
                {{-- submenu SALE --}}
                <ul class="side-menu sub-menu collapse" id="collapse-sales">
                    <li class="side-menu-item">
                        <a href="{{ route('backOffice.pre-order.index') }}">
                            <span class="side-menu-icon">
                                <i class="fa fa fa-address-book"></i>
                            </span>
                            <span class="side-menu-text">@lang('app.menu_preorder')</span>
                        </a>
                    </li>
                    <li class="side-menu-item">
                        <a href="{{ route('backOffice.sales-order.index') }}">
                            <span class="side-menu-icon">
                                <i class="fa fa fa-money"></i>
                            </span>
                            <span class="side-menu-text">@lang('app.menu_salesorder')</span>
                        </a>
                    </li>
                    <li class="side-menu-item">
                        <a href="{{ route('backOffice.customer-return-order.index') }}">
                            <span class="side-menu-icon">
                                <i class="fa fa-save"></i>
                            </span>
                            <span class="side-menu-text">@lang('app.menu_customer_return_order')</span>
                        </a>
                    </li>
                </ul>
                {{-- end submenu SALE --}}
            <li class="side-menu-item">
                <a href="#collapse-logistic" data-toggle="collapse">
                    <span class="side-menu-icon">
                        <i class="fa fa-truck"></i>
                    </span>
                    <span class="side-menu-text">
                        <span class="caret-icon"><i class="fa fa-chevron-down"></i></span>
                        @lang('app.menu_logistic')
                    </span>
                </a>
            </li>
                {{-- submenu logistic --}}
                <ul class="side-menu sub-menu collapse" id="collapse-logistic">
                    <li class="side-menu-item">
                        <a href="{{ route('backOffice.logistic.inventory.index') }}">
                            <span class="side-menu-icon">
                                <i class="fa fa fa-repeat"></i>
                            </span>
                            <span class="side-menu-text">@lang('app.menu_logistic_inventory')</span>
                        </a>
                    </li>
                    <li class="side-menu-item">
                        <a href="{{ route('backOffice.logistic.product-receive.index') }}">
                            <span class="side-menu-icon">
                                <i class="fa fa-credit-card"></i>
                            </span>
                            <span class="side-menu-text">@lang('app.menu_logistic_product_receive')</span>
                        </a>
                    </li>
                    <li class="side-menu-item">
                        <a href="{{ route('backOffice.logistic.shipping.index') }}">
                            <span class="side-menu-icon">
                                <i class="fa fa-save"></i>
                            </span>
                            <span class="side-menu-text">@lang('app.menu_logistic_shipping')</span>
                        </a>
                    </li>
                    {{--
                        <li class="side-menu-item">
                            <a href="{{ route('backOffice.logistic.cancel-note.index') }}">
                                <span class="side-menu-icon">
                                    <i class="fa fa-save"></i>
                                </span>
                                <span class="side-menu-text">@lang('app.menu_logistic_cancel_note')</span>
                            </a>
                        </li>
                    --}}
                    <!-- <li class="side-menu-item">
                        <a href="{{ route('backOffice.logistic.claim.index') }}">
                            <span class="side-menu-icon">
                                <i class="fa fa-save"></i>
                            </span>
                            <span class="side-menu-text">@lang('app.menu_logistic_claim')</span>
                        </a>
                    </li> -->
                    <li class="side-menu-item">
                        <a href="{{ route('backOffice.logistic.product-transfer.index') }}">
                            <span class="side-menu-icon">
                                <i class="fa fa-save"></i>
                            </span>
                            <span class="side-menu-text">@lang('app.menu_logistic_product_transfer')</span>
                        </a>
                    </li>
                </ul>
                {{-- end submenu marketing --}}
            <li class="side-menu-item dropdown">
               <a href="#collapse-marketing" data-toggle="collapse" >
                    <span class="side-menu-icon">
                        <i class="fa fa-cart-arrow-down"></i>
                    </span>
                    <span class="side-menu-text">
                        <span class="caret-icon"><i class="fa fa-chevron-down"></i></span>
                        @lang('app.menu_marketing')
                    </span>
                </a>
            </li>
                {{-- submenu marketing --}}
                <ul class="side-menu sub-menu collapse" id="collapse-marketing">
                    <li class="side-menu-item">
                        <a href="{{ route('backOffice.marketing.promotion.index') }}">
                            <span class="side-menu-icon">
                                <i class="fa fa fa-arrow-circle-up"></i>
                            </span>
                            <span class="side-menu-text">@lang('app.menu_marketing_promotion')</span>
                        </a>
                    </li>
                    <li class="side-menu-item">
                        <a href="{{ route('backOffice.marketing.bundled-product.index') }}">
                            <span class="side-menu-icon">
                                <i class="fa fa-credit-card"></i>
                            </span>
                            <span class="side-menu-text">@lang('app.menu_marketing_bundled_product')</span>
                        </a>
                    </li>
                </ul>
                {{-- end submenu marketing --}}

            <li class="side-menu-item dropdown">
               <a href="#collapse-accounting" data-toggle="collapse" >
                    <span class="side-menu-icon">
                        <i class="fa fa-table"></i>
                    </span>
                    <span class="side-menu-text">
                        <span class="caret-icon"><i class="fa fa-chevron-down"></i></span>
                        @lang('app.menu_accounting')
                    </span>
                </a>
            </li>
                {{-- submenu accounting --}}
                <ul class="side-menu sub-menu collapse" id="collapse-accounting">
                    <li class="side-menu-item">
                        <a href="{{ route('backOffice.accounting.billing-note.index') }}">
                            <span class="side-menu-icon">
                                <i class="fa fa fa-arrow-circle-up"></i>
                            </span>
                            <span class="side-menu-text">@lang('app.menu_accounting_billing_note')</span>
                        </a>
                    </li>
                    <li class="side-menu-item">
                        <a href="{{ route('backOffice.accounting.credit-note.index') }}">
                            <span class="side-menu-icon">
                                <i class="fa fa fa-arrow-circle-up"></i>
                            </span>
                            <span class="side-menu-text">@lang('app.menu_accounting_credit_note')</span>
                        </a>
                    </li>
                    <li class="side-menu-item">
                        <a href="{{ route('backOffice.accounting.credit-note-from-cro.index') }}">
                            <span class="side-menu-icon">
                                <i class="fa fa fa-arrow-circle-up"></i>
                            </span>
                            <span class="side-menu-text">@lang('app.menu_accounting_credit_note_from_customer_return_order')</span>
                        </a>
                    </li>
                    <li class="side-menu-item">
                        <a href="{{ route('backOffice.accounting.credit-note-from-supplier.index') }}">
                            <span class="side-menu-icon">
                                <i class="fa fa fa-arrow-circle-up"></i>
                            </span>
                            <span class="side-menu-text">@lang('app.menu_accounting_credit_note_from_supplier')</span>
                        </a>
                    </li>
                    <li class="side-menu-item">
                        <a href="{{ route('backOffice.accounting.credit-note-to-customer.index') }}">
                            <span class="side-menu-icon">
                                <i class="fa fa fa-arrow-circle-up"></i>
                            </span>
                            <span class="side-menu-text">@lang('app.menu_accounting_credit_note_to_customer')</span>
                        </a>
                    </li>
                    <li class="side-menu-item">
                        <a href="{{ route('backOffice.accounting.expenditure-requisition.index') }}">
                            <span class="side-menu-icon">
                                <i class="fa fa fa-arrow-circle-up"></i>
                            </span>
                            <span class="side-menu-text">@lang('app.menu_accounting_expenditure_requisition')</span>
                        </a>
                    </li>
                    <li class="side-menu-item">
                        <a href="{{ route('backOffice.accounting.inventory.index') }}">
                            <span class="side-menu-icon">
                                <i class="fa fa fa-arrow-circle-up"></i>
                            </span>
                            <span class="side-menu-text">@lang('app.menu_accounting_inventory_adjustment')</span>
                        </a>
                    </li>
                    <li class="side-menu-item">
                        <a href="{{ route('backOffice.accounting.payment-advance.index') }}">
                            <span class="side-menu-icon">
                                <i class="fa fa fa-arrow-circle-up"></i>
                            </span>
                            <span class="side-menu-text">@lang('app.menu_accounting_payment_advance')</span>
                        </a>
                    </li>
                    <li class="side-menu-item">
                        <a href="{{ route('backOffice.accounting.payment-pr.index') }}">
                            <span class="side-menu-icon">
                                <i class="fa fa-credit-card"></i>
                            </span>
                            <span class="side-menu-text">@lang('app.menu_accounting_payment_pr')</span>
                        </a>
                    </li>
                    <li class="side-menu-item">
                        <a href="{{ route('backOffice.accounting.payment-so.index') }}">
                            <span class="side-menu-icon">
                                <i class="fa fa-credit-card"></i>
                            </span>
                            <span class="side-menu-text">@lang('app.menu_accounting_payment_so')</span>
                        </a>
                    </li>
                    <li class="side-menu-item">
                        <a href="{{ route('backOffice.accounting.refund-from-wallet.index') }}">
                            <span class="side-menu-icon">
                                <i class="fa fa-credit-card"></i>
                            </span>
                            <span class="side-menu-text">@lang('app.menu_accounting_refund_from_wallet')</span>
                        </a>
                    </li>
                </ul>
                {{-- end submenu accounting --}}

            <li class="side-menu-item dropdown">
               <a href="#collapse-other" data-toggle="collapse" >
                    <span class="side-menu-icon">
                        <i class="fa fa-th"></i>
                    </span>
                    <span class="side-menu-text">
                        <span class="caret-icon"><i class="fa fa-chevron-down"></i></span>
                        @lang('app.menu_other')
                    </span>
                </a>
            </li>
                {{-- submenu other --}}
                <ul class="side-menu sub-menu collapse" id="collapse-other">
                    <li class="side-menu-item">
                        <a href="{{ route('backOffice.other.product-borrow.index') }}">
                            <span class="side-menu-icon">
                                <i class="fa fa fa-arrow-circle-up"></i>
                            </span>
                            <span class="side-menu-text">@lang('app.menu_other_product_borrow')</span>
                        </a>
                    </li>
                    <li class="side-menu-item">
                        <a href="{{ route('backOffice.other.product-withdrawal.index') }}">
                            <span class="side-menu-icon">
                                <i class="fa fa-credit-card"></i>
                            </span>
                            <span class="side-menu-text">@lang('app.menu_other_product_withdrawal')</span>
                        </a>
                    </li>
                    <li class="side-menu-item">
                        <a href="{{ route('backOffice.other.expense-requisition.index') }}">
                            <span class="side-menu-icon">
                                <i class="fa fa-credit-card"></i>
                            </span>
                            <span class="side-menu-text">@lang('app.menu_other_expense_requisition')</span>
                        </a>
                    </li>
                </ul>
                <li class="side-menu-item">
                    <a href="{{ route('backOffice.news-and-event.index') }}">
                        <span class="side-menu-icon">
                            <i class="fa fa-newspaper-o"></i>
                        </span>
                        <span class="side-menu-text">@lang('app.menu_other_news_and_events')</span>
                    </a>
                </li>
                {{-- end submenu other --}}

            <li class="side-menu-item dropdown">
               <a href="#collapse-setting" data-toggle="collapse" >
                    <span class="side-menu-icon">
                        <i class="fa fa-cogs"></i>
                    </span>
                    <span class="side-menu-text">
                        <span class="caret-icon"><i class="fa fa-chevron-down"></i></span>
                        @lang('app.menu_setting')
                    </span>
                </a>
            </li>
                {{-- submenu accounting --}}
                <ul class="side-menu sub-menu collapse" id="collapse-setting">
                    <li class="side-menu-item">
                        <a href="{{ route('backOffice.setting.general.create') }}">
                            <span class="side-menu-icon">
                                <i class="fa fa-newspaper-o"></i>
                            </span>
                            <span class="side-menu-text">@lang('app.menu_setting_general')</span>
                        </a>
                    </li>
                    <li class="side-menu-item">
                        <a href="{{ route('backOffice.setting.country.index') }}">
                            <span class="side-menu-icon">
                                <i class="fa fa-newspaper-o"></i>
                            </span>
                            <span class="side-menu-text">@lang('app.menu_setting_country')</span>
                        </a>
                    </li>
                    <li class="side-menu-item">
                        <a href="{{ route('backOffice.setting.company.index') }}">
                            <span class="side-menu-icon">
                                <i class="fa fa-university"></i>
                            </span>
                            <span class="side-menu-text">@lang('app.menu_setting_company')</span>
                        </a>
                    </li>
                    <li class="side-menu-item">
                        <a href="{{ route('backOffice.setting.company-group.index') }}">
                            <span class="side-menu-icon">
                                <i class="fa fa-university"></i>
                            </span>
                            <span class="side-menu-text">@lang('app.menu_setting_company_group')</span>
                        </a>
                    </li>
                    <li class="side-menu-item">
                        <a href="{{ route('backOffice.setting.platform.index') }}">
                            <span class="side-menu-icon">
                                <i class="fa fa-home"></i>
                            </span>
                            <span class="side-menu-text">@lang('app.menu_setting_platform')</span>
                        </a>
                    </li>
                    <li class="side-menu-item">
                        <a href="{{ route('backOffice.setting.publisher.index') }}">
                            <span class="side-menu-icon">
                                <i class="fa fa-empire"></i>
                            </span>
                            <span class="side-menu-text">@lang('app.menu_setting_publisher')</span>
                        </a>
                    </li>
                    <li class="side-menu-item">
                        <a href="{{ route('backOffice.setting.warehouse.index') }}">
                            <span class="side-menu-icon">
                                <i class="fa fa-file-text-o"></i>
                            </span>
                            <span class="side-menu-text">@lang('app.menu_setting_warehouse')</span>
                        </a>
                    </li>
                    <li class="side-menu-item">
                        <a href="{{ route('backOffice.setting.item-type.index') }}">
                            <span class="side-menu-icon">
                                <i class="fa fa-archive"></i>
                            </span>
                            <span class="side-menu-text">@lang('app.menu_setting_item_type')</span>
                        </a>
                    </li>
                    <li class="side-menu-item">
                        <a href="{{ route('backOffice.setting.product.index') }}">
                            <span class="side-menu-icon">
                                <i class="fa fa-shopping-basket"></i>
                            </span>
                            <span class="side-menu-text">@lang('app.menu_setting_product')</span>
                        </a>
                    </li>
                    <li class="side-menu-item">
                        <a href="{{ route('backOffice.setting.customer-tier.index') }}">
                            <span class="side-menu-icon">
                                <i class="fa fa-universal-access"></i>
                            </span>
                            <span class="side-menu-text">@lang('app.menu_setting_customer_tier')</span>
                        </a>
                    </li>
                    <li class="side-menu-item">
                        <a href="{{ route('backOffice.setting.tag.index') }}">
                            <span class="side-menu-icon">
                                <i class="fa fa-users"></i>
                            </span>
                            <span class="side-menu-text">@lang('app.menu_setting_tag')</span>
                        </a>
                    </li>
                    <li class="side-menu-item">
                        <a href="{{ route('backOffice.setting.user.index') }}">
                            <span class="side-menu-icon">
                                <i class="fa fa-user-secret"></i>
                            </span>
                            <span class="side-menu-text">@lang('app.menu_setting_user')</span>
                        </a>
                    </li>
                </ul>
        </ul>
    </div>
    <div class="sidebar-footer">
         <ul class="side-menu">
            <li class="side-menu-item">
                <a href="{{ route('logout') }}">
                    <span class="side-menu-icon">
                        <i class="fa fa fa-power-off"></i>
                    </span>
                    <span class="side-menu-text">@lang('app.logout')</span>
                </a>
            </li>
            <li class="side-menu-item item-footer">
                <span id="sidebar-footer-sign" class="side-menu-text"></span>
            </li>
        </ul>
    </div>
</div>
