<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'last_login_at' => 'Last login',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',

            //Belongs to many relations
            'roles' => 'Roles',

        ],
    ],



    'technology' => [
        'title' => 'Technology',

        'actions' => [
            'index' => 'Technology',
            'create' => 'New Technology',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'en_title' => '[EN] Title',
            'en_description' => '[EN] Description',
            'jp_title' => '[JP] Title',
            'jp_description' => '[JP] Description',

        ],
    ],

    'product' => [
        'title' => 'Products',

        'actions' => [
            'index' => 'Products',
            'create' => 'New Product',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'en_name' => '[EN] Name',
            'en_description' => '[EN] Description',
            'jp_name' => '[JP] Name',
            'jp_description' => '[JP] Description',

        ],
    ],


    'banner' => [
        'title' => 'Banners',

        'actions' => [
            'index' => 'Banners',
            'create' => 'New Banner',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'en_title' => '[EN] Title',
            'en_subtitle' => 'En subtitle',
            'jp_title' => '[JP] Title',
            'jp_subtitle' => 'Jp subtitle',

        ],
    ],




    'product-application' => [
        'title' => 'Product Applications',

        'actions' => [
            'index' => 'Product Applications',
            'create' => 'New Product Application',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'en_title' => '[EN] Title',
            'en_description' => '[EN] Description',
            'jp_title' => '[JP] Title',
            'jp_description' => '[JP] Description',

        ],
    ],

    'product' => [
        'title' => 'Products',

        'actions' => [
            'index' => 'Products',
            'create' => 'New Product',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'en_name' => '[EN] Name',
            'en_description' => '[EN] Description',
            'jp_name' => '[JP] Name',
            'jp_description' => '[JP] Description',

        ],
    ],

    'company-profile' => [
        'title' => 'Company Profile',

        'actions' => [
            'index' => 'Company Profile',
            'create' => 'New Company Profile',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'company_name' => 'Company name',
            'date_established' => 'Date established',
            'capital' => 'Capital',
            'company_address' => 'Company address',
            'factory_address' => 'Factory address',
            'sales_address' => 'Sales address',
            'email_company' => 'Email company',
            'email_hr' => 'Email hr',
            'email_sales' => 'Email sales',
            'en_production_line' => '[EN] Production Line',
            'jp_production_line' => '[JP] Production Line',

        ],
    ],





    'banner' => [
        'title' => 'Banners',

        'actions' => [
            'index' => 'Banners',
            'create' => 'New Banner',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',

        ],
    ],




    'product-application' => [
        'title' => 'Product Applications',

        'actions' => [
            'index' => 'Product Applications',
            'create' => 'New Product Application',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'en_title' => '[EN] Title',
            'en_description' => '[EN] Description',
            'jp_title' => '[JP] Title',
            'jp_description' => '[JP] Description',

        ],
    ],

    'company-profile' => [
        'title' => 'Company Profile',

        'actions' => [
            'index' => 'Company Profile',
            'create' => 'New Company Profile',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',

        ],
    ],

    'banner' => [
        'title' => 'Banners',

        'actions' => [
            'index' => 'Banners',
            'create' => 'New Banner',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'en_title' => '[EN] Title',
            'en_subtitle' => 'En subtitle',
            'jp_title' => '[JP] Title',
            'jp_subtitle' => 'Jp subtitle',

        ],
    ],


    'banner' => [
        'title' => 'Banners',

        'actions' => [
            'index' => 'Banners',
            'create' => 'New Banner',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',

        ],
    ],


    'product-application' => [
        'title' => 'Product Applications',

        'actions' => [
            'index' => 'Product Applications',
            'create' => 'New Product Application',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'en_title' => '[EN] Title',
            'en_description' => '[EN] Description',
            'jp_title' => '[JP] Title',
            'jp_description' => '[JP] Description',

        ],
    ],

    'product' => [
        'title' => 'Products',

        'actions' => [
            'index' => 'Products',
            'create' => 'New Product',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'en_name' => '[EN] Name',
            'en_description' => '[EN] Description',
            'jp_name' => '[JP] Name',
            'jp_description' => '[JP] Description',
            'product_application_id' => 'Product application',

        ],
    ],

    'banner' => [
        'title' => 'Banners',

        'actions' => [
            'index' => 'Banners',
            'create' => 'New Banner',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',

        ],
    ],

    'company-history' => [
        'title' => 'Company History',

        'actions' => [
            'index' => 'Company History',
            'create' => 'New Company History',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'year_date' => 'Year date',
            'en_description' => '[EN] Description',
            'jp_description' => '[JP] Description',

        ],
    ],



    'product-application' => [
        'title' => 'Product Applications',

        'actions' => [
            'index' => 'Product Applications',
            'create' => 'New Product Application',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'en_title' => '[EN] Title',
            'en_description' => '[EN] Description',
            'jp_title' => '[JP] Title',
            'jp_description' => '[JP] Description',

        ],
    ],

    'product' => [
        'title' => 'Products',

        'actions' => [
            'index' => 'Products',
            'create' => 'New Product',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'en_name' => '[EN] Name',
            'en_description' => '[EN] Description',
            'jp_name' => '[JP] Name',
            'jp_description' => '[JP] Description',
            'product_application_id' => 'Product application',

        ],
    ],

    'company-profile' => [
        'title' => 'Company Profile',

        'actions' => [
            'index' => 'Company Profile',
            'create' => 'New Company Profile',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'company_name' => 'Company name',
            'date_established' => 'Date established',
            'capital' => 'Capital',
            'company_address' => 'Company address',
            'factory_address' => 'Factory address',
            'sales_address' => 'Sales address',
            'email_company' => 'Email company',
            'email_hr' => 'Email hr',
            'email_sales' => 'Email sales',
            'en_production_line' => '[EN] Production Line',
            'jp_production_line' => '[JP] Production Line',

        ],
    ],

    'president-message' => [
        'title' => 'President Message',

        'actions' => [
            'index' => 'President Message',
            'create' => 'New President Message',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'en_name' => '[EN] President Name',
            'jp_name' => '[JP] President Name',
            'en_message' => '[EN] President Message',
            'jp_message' => '[JP] President Message',

        ],
    ],


    'recruitment' => [
        'title' => 'Recruitment',

        'actions' => [
            'index' => 'Recruitment',
            'create' => 'New Recruitment',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'en_header' => '[EN] Header',
            'jp_header' => '[JP] Header',
            'en_details' => '[EN] Details',
            'jp_details' => '[JP] Details',
            'en_vision' => '[EN] Vision',
            'jp_vision' => '[JP] Vision',
            'en_mission' => '[EN] Mission',
            'jp_mission' => '[JP] Mission',

        ],
    ],

    'visitor' => [
        'title' => 'Visitors',

        'actions' => [
            'index' => 'Visitors',
            'create' => 'New Visitor',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'country_code' => 'Country code',
            'count' => 'Count',

        ],
    ],

    'banner' => [
        'title' => 'Banners',

        'actions' => [
            'index' => 'Banners',
            'create' => 'New Banner',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'en_title' => '[EN] Title',
            'en_subtitle' => '[EN] Subtitle',
            'jp_title' => '[JP] Title',
            'jp_subtitle' => '[JP] Subtitle',

        ],
    ],

    'certification-policy' => [
        'title' => 'Certification Policy',

        'actions' => [
            'index' => 'Certification Policy',
            'create' => 'New Certification Policy',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'en_ims' => '[EN] IMS Policy',
            'jp_ims' => '[JP] IMS Policy',
            'en_iso' => '[EN] ISO Certificate',
            'jp_iso' => '[JP] ISO Certificate',

        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];
