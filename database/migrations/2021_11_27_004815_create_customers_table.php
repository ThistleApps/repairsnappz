<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();

            $table->char('cr_customer', 6)->unique();
            $table->Integer('cr_job_number')->nullable();
            $table->char('cr_sort_name_type',1)->nullable();
            $table->char('cr_sort_name',10)->nullable();
            $table->char('cr_bill_to_customer',6)->nullable();
            $table->char('cr_zip',5)->nullable();
            $table->char('cr_zip_plus_four',4)->nullable();
            $table->char('cr_name',30)->nullable();
            $table->char('cr_street_1',30)->nullable();
            $table->char('cr_street_2',30)->nullable();
            $table->char('cr_city',30)->nullable();
            $table->char('cr_state',2)->nullable();
            $table->char('cr_country',3)->nullable();
            $table->char('cr_contact',30)->nullable();
            $table->char('cr_area_code',3)->nullable();
            $table->char('cr_phone',7)->nullable();
            $table->decimal('cr_net_sales_running_bal',11,2)->nullable();
            $table->decimal('cr_bal_current',11,2)->nullable();
            $table->decimal('cr_bal_aged1',11,2)->nullable();
            $table->decimal('cr_bal_aged2',11,2)->nullable();
            $table->decimal('cr_bal_aged3',11,2)->nullable();
            $table->decimal('cr_bal_aged4',11,2)->nullable();
            $table->decimal('cr_bal_subj_to_finance_charge',11,2)->nullable();
            $table->decimal('cr_sales_period_to_date',11,2)->nullable();
            $table->decimal('cr_sales_year_to_date',11,2)->nullable();
            $table->decimal('cr_sales_last_yr',11,2)->nullable();
            $table->decimal('cr_cost_period_to_date',11,2)->nullable();
            $table->decimal('cr_cost_year_to_date',11,2)->nullable();
            $table->decimal('cr_cost_last_yr',11,2)->nullable();
            $table->decimal('cr_account_highest_bal',11,2)->nullable();
            $table->decimal('cr_credit_limit',12,2)->nullable();
            $table->decimal('cr_ptd_terms_discount',9,2)->nullable();
            $table->decimal('cr_stmt_terms_discount',9,2)->nullable();
            $table->decimal('cr_finance_charges_ytd',11,2)->nullable();
            $table->decimal('cr_last_payment_amt',11,2)->nullable();
            $table->decimal('cr_dollar_returns_ytd',11,2)->nullable();
            $table->unsignedInteger('cr_num_sales_credits_ytd')->nullable();
            $table->char('cr_balance_method',1)->nullable();
            $table->date('cr_date_account_opened')->nullable();
            $table->date('cr_last_purchase_date')->nullable();
            $table->date('cr_last_payment_date')->nullable();
            $table->date('cr_rev_chrg_date_min_is_due')->nullable();
            $table->char('cr_salesman_no',2)->nullable();
            $table->char('cr_terms_code',1)->nullable();
            $table->char('cr_tax_code',3)->nullable();
            $table->char('cr_user_code_1',1)->nullable();
            $table->char('cr_user_code_2',1)->nullable();
            $table->char('cr_user_code_3',1)->nullable();
            $table->char('cr_user_code_4',1)->nullable();
            $table->char('cr_store',1)->nullable();
            $table->decimal('cr_trade_discount',5,3)->nullable();
            $table->char('cr_finance_charge',1)->nullable();
            $table->decimal('cr_late_charge_pct',6,4)->nullable();
            $table->char('cr_standard_selling_price',1)->nullable();
            $table->char('cr_category_plan',10)->nullable();
            $table->char('cr_job_stmt_flag',1)->nullable();
            $table->char('cr_check_payment',1)->nullable();
            $table->char('cr_charge_payment',1)->nullable();
            $table->char('cr_credit_ar_only',1)->nullable();
            $table->char('cr_po_required_on_charge',1)->nullable();
            $table->char('cr_taxable',1)->nullable();
            $table->char('cr_department_sales_history',1)->nullable();
            $table->char('cr_print_statements',1)->nullable();
            $table->char('cr_statements_with_dunning',1)->nullable();
            $table->char('cr_print_price_on_pick_ticket',1)->nullable();
            $table->char('cr_jobs_active',1)->nullable();
            $table->char('cr_has_had_jobs',1)->nullable();
            $table->char('cr_open_quote_allowed',1)->nullable();
            $table->char('cr_payment_allowed',1)->nullable();
            $table->char('cr_unused_flag1',1)->nullable();
            $table->char('cr_unused_flag2',1)->nullable();
            $table->char('cr_unused_flag3',1)->nullable();
            $table->char('cr_resale_number',19)->nullable();
            $table->char('cr_credit_msg_1',32)->nullable();
            $table->char('cr_credit_msg_2',32)->nullable();
            $table->decimal('cr_stmt_balance',11,2)->nullable();
            $table->decimal('cr_monthly_payment_amt',7,2)->nullable();
            $table->char('cr_transfer_store',1)->nullable();
            $table->date('cr_last_activity_date')->nullable();
            $table->char('cr_lumber_units_to_print',1)->nullable();
            $table->char('cr_pricing_um',1)->nullable();
            $table->integer('cr_quick_recall_days')->nullable();
            $table->char('cr_suspended_customer_account',1)->nullable();
            $table->char('cr_rental_price_indicator',1)->nullable();
            $table->char('cr_social_security_no',9)->nullable();
            $table->char('cr_birth_date_mo',2)->nullable();
            $table->char('cr_birth_date_da',2)->nullable();
            $table->char('cr_birth_date_cen',2)->nullable();
            $table->char('cr_birth_date_yr',2)->nullable();
            $table->char('cr_fax_area_code',3)->nullable();
            $table->char('cr_fax_phone',7)->nullable();
            $table->char('cr_member_type',1)->nullable();
            $table->integer('cr_times_current')->nullable();
            $table->integer('cr_times_1_30')->nullable();
            $table->integer('cr_times_31_60')->nullable();
            $table->integer('cr_times_61_90')->nullable();
            $table->integer('cr_times_over_90')->nullable();
            $table->integer('cr_times_no_activity')->nullable();
            $table->date('cr_last_date_current')->nullable();
            $table->date('cr_last_date_1_30')->nullable();
            $table->date('cr_last_date_31_60')->nullable();
            $table->date('cr_last_date_61_90')->nullable();
            $table->date('cr_last_date_over_90')->nullable();
            $table->date('cr_last_date_no_activity')->nullable();
            $table->unsignedInteger('cr_january')->nullable();
            $table->unsignedInteger('cr_february')->nullable();
            $table->unsignedInteger('cr_march')->nullable();
            $table->unsignedInteger('cr_april')->nullable();
            $table->unsignedInteger('cr_may')->nullable();
            $table->unsignedInteger('cr_june')->nullable();
            $table->unsignedInteger('cr_july')->nullable();
            $table->unsignedInteger('cr_august')->nullable();
            $table->unsignedInteger('cr_september')->nullable();
            $table->unsignedInteger('cr_october')->nullable();
            $table->unsignedInteger('cr_november')->nullable();
            $table->unsignedInteger('cr_december')->nullable();
            $table->char('cr_pst_registration',15)->nullable();
            $table->char('cr_gst_registration',15)->nullable();
            $table->char('cr_prompt_for_cust_info',1)->nullable();
            $table->decimal('cr_cash_prompt_threshold',8,2)->nullable();
            $table->decimal('cr_open_order_balance',11,2)->nullable();
            $table->char('cr_declining_credit_limit_fg',1)->nullable();
            $table->char('cr_use_ord_bal_in_crd_avail_fg',1)->nullable();
            $table->char('cr_main_job_global_crdlm_ck_fg',1)->nullable();
            $table->decimal('cr_finance_charges_last_yr',11,2)->nullable();
            $table->char('cr_pesticide_license',10)->nullable();
            $table->date('cr_pesticide_expiration_date')->nullable();
            $table->char('cr_auto_fax_flag',1)->nullable();
            $table->char('cr_default_po_number',30)->nullable();
            $table->decimal('cr_freight_factor',6,2)->nullable();
            $table->char('cr_print_invoice_flag',1)->nullable();
            $table->char('cr_loyalty_id',14)->nullable();
            $table->char('cr_ignore_past_due_warning_fg',1)->nullable();
            $table->char('cr_alt_intl_phone',15)->nullable();
            $table->char('cr_alt_intl_fax',15)->nullable();
            $table->char('cr_treat_like_cash_cust',1)->nullable();
            $table->char('cr_email_statement',1)->nullable();
            $table->char('cr_email_invoice',1)->nullable();
            $table->char('cr_email_format',1)->nullable();
            $table->char('cr_open_quote_doc',6)->nullable();
            $table->char('cr_open_quote_store',6)->nullable();
            $table->unsignedInteger('cr_ptd_trip_points_not_use')->nullable();
            $table->unsignedInteger('cr_ytd_trip_points_not_use')->nullable();
            $table->char('cr_email_order',1)->nullable();
            $table->char('cr_fax_invoice',1)->nullable();
            $table->char('cr_fax_order',1)->nullable();
            $table->char('cr_ship_method',1)->nullable();
            $table->char('cr_route_number',8)->nullable();
            $table->char('cr_route_day',3)->nullable();
            $table->char('cr_route_stop',3)->nullable();
            $table->char('cr_charge_freight_flag',1)->nullable();
            $table->char('cr_substitutesallowedfg',1)->nullable();
            $table->char('cr_backordersallowedfg',1)->nullable();
            $table->char('cr_backorder_complete_flag',1)->nullable();
            $table->char('cr_duplicate_po_allowed_flag',1)->nullable();
            $table->char('cr_customer_priority_flag',1)->nullable();
            $table->date('cr_po_expiration_date')->nullable();
            $table->decimal('cr_restock_fee_percent',8,3)->nullable();
            $table->char('cr_rebate_plan_id',5)->nullable();
            $table->char('cr_tax_plan_id',5)->nullable();
            $table->char('cr_pesticide_plan_id',5)->nullable();
            $table->char('cr_pesticide_applicator_id',10)->nullable();
            $table->date('cr_pesticide_app_exp_date')->nullable();
            $table->char('cr_pesticide_restrict_id',10)->nullable();
            $table->date('cr_pesticide_restrict_exp_date')->nullable();
            $table->char('cr_ag_account_flag',1)->nullable();
            $table->char('cr_dual_use_flag',1)->nullable();
            $table->char('cr_fax_statement',1)->nullable();
            $table->char('cr_inet_customer_flag',1)->nullable();
            $table->char('cr_core_selling_price',1)->nullable();
            $table->char('cr_auto_suspend_when_over_cl',1)->nullable();
            $table->char('cr_chrg_not_allw_no_warning',1)->nullable();
            $table->char('cr_alt_items_to_excl_in_pos',10)->nullable();
            $table->char('cr_auto_mcl_id',10)->nullable();
            $table->integer('cr_credit_hold_after_days')->nullable();
            $table->date('cr_high_balance_date')->nullable();
            $table->char('cr_part_disqualified_flag',1)->nullable();
            $table->char('cr_statement_format',1)->nullable();
            $table->char('cr_stop_ship_flag',1)->nullable();
            $table->decimal('cr_special_charge_1',11,2)->nullable();
            $table->decimal('cr_special_charge_2',11,2)->nullable();
            $table->decimal('cr_special_charge_3',11,2)->nullable();
            $table->integer('cr_cust_last_crdt_sort_no')->nullable();
            $table->integer('cr_cust_last_crdt_posted')->nullable();
            $table->decimal('cr_service_charge',6,4)->nullable();
            $table->char('cr_movement_code_disc_flag',1)->nullable();
            $table->char('cr_allow_regular_promo_price',1)->nullable();
            $table->decimal('cr_adis_unapplied_cash',11,2)->nullable();
            $table->decimal('cr_adis_total_owing',11,2)->nullable();
            $table->integer('cr_ar_last_crdt_sort_no')->nullable();
            $table->integer('cr_ar_last_crdt_posted')->nullable();
            $table->char('cr_allow_special_promo_price_1',1)->nullable();
            $table->char('cr_allow_special_promo_price_2',1)->nullable();
            $table->char('cr_dated_billing_allowed_flag',1)->nullable();
            $table->char('cr_unusual_usage_flag',1)->nullable();
            $table->char('cr_lost_sale_flag',1)->nullable();
            $table->char('cr_printing_plan',12)->nullable();
            $table->char('cr_store_group_id',3)->nullable();
            $table->char('cr_oem_part_xref_line',3)->nullable();
            $table->char('cr_core_bank',1)->nullable();
            $table->char('cr_ace_rewards_cust_profile',1)->nullable();
            $table->char('cr_exempt_check_verification',1)->nullable();
            $table->char('cr_pos_price_rnding',1)->nullable();
            $table->char('cr_csbp_group_number',3)->nullable();
            $table->char('cr_csbp_store_name',15)->nullable();
            $table->char('cr_central_order_desk_store',1)->nullable();
            $table->char('cr_job_auth_name_flag',1)->nullable();
            $table->char('cr_job_email_address_flag',1)->nullable();
            $table->char('cr_job_pos_message_flag',1)->nullable();
            $table->char('cr_display_past_due_warning',1)->nullable();
            $table->integer('cr_ptd_trip_points')->nullable();
            $table->integer('cr_ytd_trip_points')->nullable();
            $table->char('cr_subtotal_on_invoice',1)->nullable();
            $table->char('cr_delivery_point',2)->nullable();
            $table->char('cr_post_pos_adder_flag',1)->nullable();
            $table->char('cr_post_adder_sku_1',14)->nullable();
            $table->char('cr_post_adder_sku_2',14)->nullable();
            $table->char('cr_post_adder_sku_3',14)->nullable();
            $table->char('cr_job_pos_adder_flag',1)->nullable();
            $table->date('cr_resale_expiration_date')->nullable();
            $table->char('cr_add_names_pos_allowed_flag',1)->nullable();
            $table->char('cr_chrg_req_on_sale_credit',1)->nullable();
            $table->char('cr_prospect',1)->nullable();
            $table->integer('cr_num_sales_credits_lyr')->nullable();
            $table->integer('cr_birth_month')->nullable();
            $table->char('cr_tv_loyalty_attribute_1',1)->nullable();
            $table->char('cr_tv_loyalty_attribute_2',1)->nullable();
            $table->char('cr_tv_loyalty_attribute_3',1)->nullable();
            $table->char('cr_tv_loyalty_attribute_4',1)->nullable();
            $table->char('cr_transmit_einvoices_flag',1)->nullable();
            $table->char('cr_address_type_flag',1)->nullable();
            $table->integer('cr_freight_alw_min_pur_grd')->nullable();
            $table->integer('cr_freight_alw_min_pur_truck')->nullable();
            $table->char('cr_sales_rep',10)->nullable();
            $table->char('cr_sign_req_note_id',8)->nullable();
            $table->integer('cr_sign_req_threshold')->nullable();
            $table->char('cr_cod_flag',1)->nullable();
            $table->char('cr_loyalty_level',2)->nullable();
            $table->char('cr_segment_type',1)->nullable();
            $table->char('cr_status_flag',1)->nullable();
            $table->char('cr_loyalty_subscription_flag',1)->nullable();
            $table->char('cr_loyalty_subscription_item',14)->nullable();
            $table->char('cr_customer_ffl',1)->nullable();
            $table->date('cr_date_1_for_compass')->nullable();
            $table->date('cr_date_2_for_compass')->nullable();
            $table->date('cr_date_3_for_compass')->nullable();
            $table->date('cr_date_4_for_compass')->nullable();
            $table->date('cr_date_5_for_compass')->nullable();
            $table->date('cr_date_6_for_compass')->nullable();
            $table->char('cr_ffl_city_long',25)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}