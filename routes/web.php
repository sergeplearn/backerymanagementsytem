<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\TestController;
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





Route::resource('message', MessageController::class)
  ->only(['index', 'store', 'edit', 'update', 'destroy']);




Route::resource('housetype', HousetypeController::class)
  ->only(['index', 'store', 'edit', 'update', 'destroy']);





/*Route::resource('rentpayment', RentpaymentController::class)
->only(['index', 'store', 'edit', 'update'])
->middleware(['auth', 'verified']);
Route::get('/registers', 'BreadController@createuser');
Route::post(' /registration/storeuser', 'BreadController@storeuser');
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




Route::get('/error', 'ErrorController@index');



Route::get('/', function () {
  return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {

  //paysupplies
  Route::resource('paysupplie', PaysuppliesController::class)
    ->only(['show', 'store', 'edit', 'update']);


  //supply route
  Route::resource('supply', SupplyController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy']);


  //expenditure
  Route::resource('expenditure', ExpenditureController::class)
    ->only(['index', 'store', 'edit', 'update', 'update']);


  Route::resource('houseworker', HouseworkerController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy'])->middleware('CheckRole:admin');

  //commands for the day

  Route::resource('command', CommandController::class)
    ->only(['show', 'store', 'edit', 'update']);


  //advance salary

  Route::resource('advance', AdvanceController::class)
    ->only(['show', 'store', 'edit', 'update', 'destroy'])->middleware('CheckRole:admin');


  //daily collection of money from workers
  Route::resource('money', MoneyController::class)
    ->only(['show', 'store', 'edit', 'update', 'destroy']);

  //collection of bread
  Route::resource('bread', BreadController::class)
    ->only(['show', 'store', 'edit', 'update']);

  //itemsupplied
  Route::resource('itemsupplied', itemsuppliedController::class)
    ->only(['show', 'store', 'edit', 'update', 'destroy'])->middleware('CheckRole:admin');

   
    Route::get('/employees/salary/{employee}', [EmployeeController::class, 'salary'])->name('employee.salary');
    Route::get('/employees/salarylist/{id}', [TestController::class, 'salarylist'])->name('employee.salarylist');
  //employees
  Route::resource('employee', EmployeeController::class)
    ->only(['index','store', 'edit', 'update', 'destroy']);

  //increment house workers salary 
  Route::resource('houseincrement', HouseincrementController::class)
    ->only(['show', 'store', 'edit', 'update', 'destroy'])->middleware('CheckRole:admin');

  //set price for each bread
  Route::resource('priceofbread', PriceofbreadController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy']);













  //still to be corrected

  



  Route::get('/registers', 'BreadController@createuser');
  Route::post(' /registration/storeuser', 'BreadController@storeuser');




  Route::group(['middleware' => 'CheckRole:admin', 'prefix' => 'houseworkers'], function () {
    Route::get('/paydate/{houseworkers}', 'HouseworkersController@paydate')->name('houseworkers.paydate');
    Route::get('/salary', 'SalaryController@houseworkersal')->name('houseworkers.salary');
    Route::get('/salaryrecord/{id}', 'SalaryController@salaryrecord')->name('houseworkers.salaryrecord');

  });


  Route::group(['prefix' => 'report'], function () {

    Route::get('/test', 'MailController@recieved')->name('report.test');
    Route::get('/show', 'MailController@index')->name('report.show');
    Route::get('/sendmail', 'MailController@send')->name('report.sendmail');

  });

  Route::group(['prefix' => 'delete'], function () {

    Route::delete('/Reghousesalary/{id}', 'ReghousesalaryController@destroy');
    Route::delete('/Regemploysal/{id}', 'RegemploysalController@destroy');

  });

  Route::group(['middleware' => 'CheckRole:admin', 'prefix' => 'salaryregistration'], function () {

    Route::post('/store', 'ReghousesalaryController@store');
    Route::post('/employsal', 'RegemploysalController@store');

  });



  Route::get('/result', 'BreadController@show');
  //salary
  Route::get('/conferm', 'SalaryController@index');
  // calculating the salary it self

  //round for command of bread
  Route::get('/date', 'CommandController@date');
  Route::post('/now', 'UseditemController@store');


  Route::get('/test', 'LeftitemController@show');








});














Auth::routes([
  // 'register' => false
]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');