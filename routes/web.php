<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeeSalary;
use App\Http\Controllers\HouseSalary;
use App\Http\Controllers\HouseworkerController;
use App\Http\Controllers\RegemploysalController;
use App\Http\Controllers\Todayrecord;
use App\Http\Controllers\TodaysreportInvoice;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/error', 'ErrorController@index');

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {

    //paysupplies
    Route::resource('paysupplie', PaysuppliesController::class)
        ->except(['index', 'destroy']);

    //supply route
    Route::resource('supply', SupplyController::class)
        ->except(['show']);

    //expenditure
    Route::resource('expenditure', ExpenditureController::class)
        ->except(['show', 'destroy']);

    //houseworker controller
    Route::get('houseworkers/paydate/{id}', [HouseworkerController::class, 'paydate'])
        ->name('houseworker.paydate')
        ->middleware('CheckRole:admin');

    Route::get('houseworkers/salary', HouseSalary::class)
        ->name('houseworkers.salary')
        ->middleware('CheckRole:admin');

    Route::resource('houseworker', HouseworkerController::class)
        ->except(['show']);

    //commands for the day

    Route::resource('command', CommandController::class)
        ->except(['index', 'destroy']);

    //advance salary

    Route::resource('advance', AdvanceController::class)
        ->except(['index'])
        ->middleware('CheckRole:admin');

    //daily collection of money from workers
    Route::resource('money', MoneyController::class)
        ->except(['index']);

    //collection of bread
    Route::resource('bread', BreadController::class)
        ->except(['index', 'destroy']);

    //itemsupplied
    Route::resource('itemsupplied', itemsuppliedController::class)
        ->except(['index'])
        ->middleware('CheckRole:admin');

    //employees
    Route::get('/employees/salary', EmployeeSalary::class);
    Route::get('/employees/paydate/{employee}', [EmployeeController::class, 'salary'])
        ->name('employee.paydate');

    Route::resource('employee', EmployeeController::class)
        ->except(['show']);

    //increment house workers salary
    Route::resource('houseincrement', HouseincrementController::class)
        ->except(['index'])
        ->middleware('CheckRole:admin');

    //set price for each bread
    Route::resource('priceofbread', PriceofbreadController::class)
        ->only(['edit', 'update']);

    //register employees salary controllers
    Route::resource('regemploysal', RegemploysalController::class)
        ->except(['index', 'update']);

    //register house worker salary controller
    Route::delete('/Reghousesalary/{id}', 'ReghousesalaryController@destroy');

    Route::resource('reghousesalary', ReghousesalaryController::class)
        ->except(['update']);

    Route::resource('User', AdduserController::class)->except(['update']);

    Route::get('/today', Todayrecord::class);
    Route::get('/server', TodaysreportInvoice::class);

    //still to be corrected

    Route::group(['prefix' => 'report'], function () {
        Route::get('/test', 'MailController@recieved')->name('report.test');
        Route::get('/show', 'MailController@index')->name('report.show');
        Route::get('/sendmail', 'MailController@send')->name('report.sendmail');

    });

    //round for command of bread
    Route::get('/date', 'CommandController@date');
    Route::post('/now', 'UseditemController@store');
    Route::get('/test', 'LeftitemController@show');

});

//house rent sytem
Route::resource('housetype', HousetypeController::class)
    ->except(['show']);

/*Route::resource('rentpayment', RentpaymentController::class)
->only(['index', 'store', 'edit', 'update'])
->middleware(['auth', 'verified']);
Route::group(['middleware' => 'name', 'prefix' => 'houserent'], function () {
Route::get('/serge', 'HouserentController@index')->name('houserent.create');
Route::post('/serge', 'HouserentController@store');
Route::get('/edit/{id}', 'HouserentController@edit');
Route::patch('/update/{id}', 'HouserentController@update');
Route::get('/rent/{id}', 'HousetypeController@rent');
Route::get('/payment/{id}', 'HouserentController@payment');
});
Route::group(['prefix' => 'housetype'], function () {
Route::get('/', 'HousetypeController@index');
Route::post('/store', 'HousetypeController@store');
});
*/

Auth::routes([
    // 'register' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
