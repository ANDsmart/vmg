<?php

return [

    'top' => [
        'sales' => 'Sales',
        'hr' => 'MTU',
        'taxes' => 'Taxes',
        'reports' => 'Reports',
        'banking' => 'Banking',
        'setting_management' => 'Setting',
        'alert_monitor' => 'Alert Monitor',
        'support_center' => 'Support Center',
        'accounting' => 'Accounting',
        'product_service' => 'Product & Services',

        'child' => [
            /*Hr*/
            'payroll' => 'Payroll',
            'employee' => 'Employees',

            /*sales*/
            'sales_transactions' => 'Sales Transactions',
            'clients' => 'Clients',
            'pos' => 'Point Of Sale (POS)',
            'calendar_sale' => 'Calendar of Sales',

            /*Expenses*/
            'expense_transactions' => 'Expense Transactions',
            'suppliers' => 'Suppliers',
            /*Taxes*/
            'tax_rates' => 'Tax Rates',
            'tax_returns' => 'Tax Returns',

            /*Banking*/
            'banking_overview' => 'Banking Overview',

        ],

    ],

    'language-picker' =>[
        'langs' => [
            'en' => 'En',
            'sw' => 'Sw',
            'ch' => 'Ch',
        ]
    ],


    'employee'=>[

        'index' => 'Employee Management',
        'mgt' => 'Employee Mgt',
        'add_employee' => 'Add Employee',
        'add_employee_helper' => 'Add new employee details, Sync employee with system user.',
        'view_employees' => 'View All Employees',
        'view_employees_helper' => 'Manage employees and view all added employees.',


        'allowance' =>[
            'index' => 'Allowance Management',
            'add' => 'Add Allowance',
            'add_helper' => 'Add new allowance to employee',
            'view' => 'View All Allowances',
            'view_helper' => 'View all registered allowances for employees',
            'manage' => 'Manage Allowance',
            'manage_helper' => 'Manage, add, edit employee allowances and allowance types',
            'manage_type' => 'Manage Allowance Types',
            'manage_type_helper' => 'Manage, add new, edit employee allowance types',
        ],


        'deduction' =>[
            'index' => 'Deduction Management',
            'add' => 'Add Deduction',
            'add_helper' => 'Add new deduction to employee',
            'view' => 'View All Deductions',
            'view_helper' => 'View all registered deductions for employees',
            'manage' => 'Manage Deduction',
            'manage_helper' => 'Manage, add, edit employee deductions and deduction types',
            'manage_type' => 'Manage Deduction Types',
            'manage_type_helper' => 'Manage, add new, edit employee deduction types',
        ],


        'loan' =>[
            'index' => 'Employee Loan Management',
            'add' => 'Add Loan',
            'add_helper' => 'Add new loan to employee',
            'view' => 'View All Employee Loans',
            'view_helper' => 'View all registered loan for employees',
            'manage' => 'Manage Employee Loan',
            'manage_helper' => 'Manage, add, edit employee loans and loan types',
            'manage_type' => 'Manage Employee Loan Types',
            'manage_type_helper' => 'Manage, add new, edit employee loan types',
        ],



    ],

    'payroll'=>[
        'index' => 'Payroll Management',
        'add_payroll' => 'Run Payroll',
        'add_payroll_helper' => 'Run monthly payroll for all active staff',
        'view_payrolls' => 'View All Payrolls',
        'view_payrolls_helper' => 'Manage all payroll run on the system.',
        'mid_month_payrolls' => 'Mid Month Payrolls',
        'mid_month_payrolls_helper' => 'Manage all mid month payrolls',
        'payroll_accountings' => 'Payroll Accounting Settings',
        'payroll_accountings_helper' => 'Manage Payroll Accounting Settings',

        'view_all_banks' => 'View all Banks',
        'manage_bank' => 'Manage Bank',
        'view_all_banks_helper' => 'Manage all banks registered on the system',
        'paye' =>[
            'index' => 'Manage PAYE',
            'manage' => 'Manage PAYE',
            'manage_helper' => 'Manage PAYE range and settings i.e. calculation parameters',
        ],

        'health_insurance' => [
            'manage_range' => 'Manage Health Insurance',
            'manage_range_helper' => 'Manage Health Insurance and its settings i.e. calculation parameters',
        ],

        'compliance' =>[
            'index' => 'Manage Payroll Compliance',
            'manage' => 'Manage Payroll Compliance',
            'manage_helper' => 'Manage payroll compliance settings i.e. SDL, WCF, Social Funds',
        ],


        'return' =>[
            'index' => 'Manage Payroll Returns',
            'manage_helper' => 'Manage and File Payroll Returns i.e. WCF, NSSF, NHIF, SDL, PAYE, BANK returns',
            'manage_return_types' => 'Manage Return Types',
            'manage_return_types_helper' => 'View and Manage all payroll return types',
            'file_return' => 'File Return',
            'file_return_helper' => 'File return to their respective authority/entity before due date'
        ]




    ],


    'accounting' => [
        'index' => 'Accounting Management',
        'accounting_mgt' => 'Accounting Mgt',
        'chart_of_accounts' => 'Chart of Accounts (COA)',
        'chart_of_accounts_helper' => 'Manage chart of accounts',

        'manage_journal' => 'Manage Journal',
        'manage_journal_helper' => 'Manage journal transactions',

        'accounting_setting' => 'Accounting Setting',
        'account_classes_groups' => 'Account Classes & Groups',
        'account_classes_groups_helper' => 'Manage Account grouping i.e. account types, classes and groups',

        'manage_journal_trans_types' => 'Manage Journal Transaction Types',
        'manage_journal_trans_types_helper' => 'Manage journal transactions types i.e. default accounts',
    ],



    'client'=>[
        'index' => 'Client Management',
        'add_client' => 'Add Client',
        'add_client_helper' => 'Add new client details.',
        'view_clients' => 'View All Clients',
        'view_clients_helper' => 'Manage clients and view all added clients.',
        'view_station_clients_helper' => 'Manage clients and view all added clients at this station.',

        'loan_repayment' => 'Loan Repayments',
        'loan_repayment_helper' => 'Manage Client Loan Repayments i.e general and paid on shift',



    ],


    'supplier'=>[
        'index' => 'Supplier Management',
        'supplier' => 'Supplier',
        'add_supplier' => 'Add Supplier',
        'add_supplier_helper' => 'Add new supplier details.',
        'view_suppliers' => 'View All Suppliers',
        'view_suppliers_helper' => 'Manage suppliers and view all added suppliers.'

    ],


    'vehicle'=>[
        'index' => 'Vehicle Management',
        'vehicle' => 'Vehicle',
        'add_vehicle' => 'Add Vehicle',
        'add_vehicle_helper' => 'Add new vehicle details.',
        'view_vehicles' => 'View All Vehicles',
        'view_vehicles_helper' => 'Manage vehicles and view all added vehicles.'

    ],

    'station'=>[
        'index' => 'Multiple Stations Management',
        'stations' => 'Stations',
        'add_station' => 'Add Station',
        'add_station_helper' => 'Add new station details.',
        'view_stations' => 'View All Stations',
        'view_stations_helper' => 'Manage stations and view all added stations.',
        'profile' => 'Station Profile',
        'profile_helper' => 'Manage station profile',

    ],


    'expense'=>[
        'index' => 'Expense Management',
        'expense' => 'Expense',
        'add' => 'Add Expense',
        'add_helper' => 'Add new expense for station.',
        'view' => 'View All Expenses',
        'view_helper' => 'Manage expenses and view all added expenses.',

        'type' => [
            'manage' => 'Manage Expense Types',
            'manage_helper' => 'Manage, add, edit and view all expense types',
        ]

    ],


    'sales'=>[
        'index' => 'Sales Management',

        'shift' => [
            'add' => 'Add Shift',

            'add_helper' => 'Add new shift for station.',
            'view' => 'View All Shifts',
            'view_helper' => 'Manage shifts and view all added shifts.',
            'edit' => 'Edit Shift',
        ],
        'discount' =>[
            'add' => 'Add Discount',
            'add_helper' => 'Add new Discount.',
            'view' => 'View All Discount',
            'view_helper' => 'Manage Discount and view all added Discount.',
            'edit' => 'Edit Discount',
        ],

        'direct_sale' => [
            'manage' => 'Manage Direct Sales',
            'manage_helper' => 'Manage direct sales, add, edit and view all existing sales.'
        ],

        'quotation' => [
            'manage' => 'Manage Quotations',
            'manage_helper' => 'Manage quotations, add, edit and view all existing quotations.'
        ],

        'adjustment' => [
            'manage_stock_adjustment' => 'Manage Stock Adjustment',
            'manage_stock_adjust_helper' => 'Manage Stock Adjustment based on the date period for all stations',
        ],

    ],

    'stock' => [
        'index' => 'Stock Management',
        'stock' => 'Stock',
        'manage_stock_station' => 'Manage Stock Per Station',
        'manage_stock_station_helper' => 'Manage all products in each station for Stores and Godowns.',
        'product' => [
            'index' => 'View all products',
            'index_helper' =>'Manage ,add and edit product',
            'add' => 'Add product',
            'add_helper' => 'Add new product in stock',
            'mange' => 'Manage Product'

        ],
        'product_type' => [
            'manage' => 'Manage product type',
            'manage_helper' => 'Manage,add and edit product type',

        ],
        'product_store' =>[
            'manage' => 'Manage product store',
            'manage_helper' => 'Manage, add and edit product store'
        ],
        'product_godown' => [
            'manage' => 'Manage product godown',
            'manage_helper' => 'Manage , add and edit product godown',
        ],
        'product_distribution' =>[
            'manage' => 'Manage product distribution',
            'manage_helper' => 'Manage , add and edit product distribution',
        ],
        'product_damage' =>[
            'manage' => 'Manage product damage',
            'manage_helper' => 'Manage , add and edit product damage',
        ],

    ],

    'purchase' =>[
        'index' => 'Purchase Management',

        'order' => [
            'view' => 'View All Purchase Orders',
            'view_helper' => 'View all registered purchase orders.',
            'add' => 'Add new PO',
            'add_helper' => 'Add new purchase order.',
            'repayment' =>[
                'manage' => 'Manage Purchase Order Repayment',
                'manage_helper' =>'Manage,add ,view and edit Purchase Order Repayment',

                'notification_po_due_pay_date' => 'Notifications on Due Pay date - Loan',
                'notification_po_due_pay_date_helper' => 'Manage notifications on PO by loan which are already or approaching due date',
            ],

        ],



    ],

    'notification_center' => [
        'notification_center' => 'Notification Center',
        'template' => 'Notification Template (Business Reminders)',
        'template_helper' => 'Manage templates for business automated notification',
        'broadcast' => 'Notification Broadcast & Reminders',
        'broadcast_helper' => 'Manage broadcast notifications and reminders to clients, suppliers and employees',
        'reminder' => 'Notification Reminder',
        'reminder_helper' => 'Manage reminder notifications e.g. to do list, meeting',
    ],

    'setting' => [
        'manage_organization' => 'Manage Organization',
        'manage_organization_helper' => 'Manage ,view and edit organization'
    ]


];
