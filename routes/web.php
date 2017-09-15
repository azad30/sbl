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

Auth::routes();
Route::group(['middleware' => ['web', 'auth']], function () {

    Route::get('/', 'HomeController@index');
    Route::get('/home', 'HomeController@index');

                // CRUD section starts Here

	Route::resource('companies/company-info', 'Company\\CompanyInfoController');
	Route::resource('branches/branch-info', 'Branch\\BranchInfoController');


	Route::resource('itemunits/item-unit', 'ItemUnit\\ItemUnitController');
	Route::resource('itemcategories/item-category', 'ItemCategory\\ItemCategoryController');
	Route::resource('iteminfos/item-infos', 'ItemInfo\\ItemInfosController');


    Route::resource('costomers/customer-info', 'Customer\\CustomerInfoController');
    Route::resource('item-categories/item-category', 'ItemCategory\\ItemCategoryController');
    // Route::resource('item-items/item-info', 'ItemInfo\\ItemInfoController');


    // Route with sales 
    Route::resource('salesmasters/sales-master', 'SalesMaster\\SalesMasterController');

    // Sales Invoice 
    Route::get('salesinvoice/sales-invoice', 'SalesInvoiceController@index');

    // Ajax Calling section
    Route::get('/customer-sales','SalesInvoice\\SalesInvoiceAjaxController@customerInformation');
    Route::get('/item-cost','SalesInvoice\\ItemCostAjaxCalculateController@itemCostCalculation');


    // Route for Debit vouchar
    Route::get('debitvouchar/debit-vouchar', 'DebitVoucher\\DebitVoucharController@index');

    // Route for Payment Received
    Route::get('paymentreceived/paymentreceived', 'PaymentReceived\\PaymentReceivedController@index');

});





