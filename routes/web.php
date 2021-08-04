<?php


use App\Http\Controllers\Accessors36Controller;
use App\Http\Controllers\AddMember22;
use App\Http\Controllers\AggregrateMethod31;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Users;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\BladeController;
use App\Http\BreakingChangeController60;
use App\Http\Controllers\DeletedataController28;
use App\Http\Controllers\Joins32;
use App\Http\Controllers\Members30;
use App\Http\Controllers\MultipleDBController45;
use App\Http\Controllers\MutatorController37;
use App\Http\Controllers\OneToManyRelationController;
use App\Http\Controllers\RouteModelBindingController42;
use App\Http\Controllers\SavedataController27;
use App\Http\Controllers\UploadController23;
use App\Http\Controllers\UserAuth21;
use App\Http\Controllers\UsersFormSubmit;
use App\Http\Controllers\UserController17;
use App\Http\Controllers\UserController18;
use App\Http\Controllers\UserController19;
use App\Http\Controllers\UserControllerLogin20;
use App\Http\Controllers\ViewMembers25;
use App\Http\Controllers\ViewPagination26;
use Illuminate\Support\Str;
use App\Mail\SampleMail;


//use App\Http\Controllers\UserAuth21;

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
//View Route
Route::get('/', function () {
    //return view('welcome');
    //return redirect('about');
    //Markdown Mail template
    return new SampleMail();

});  

Route::get('/myuser/{name}', function ($name) {
    return view('myuser',['myname'=>$name]);
});  

/*
Route::get('/{name}', function ($name) {
    return view('welcome',['name'=>$name]);
}); */

/*
Route::get('/', function () {
    return redirect('about');
}); */

/*
Route::get('/about', function () {
    return view('about');
}); */

Route::view("about",'about');
Route::view("contact",'contact');
Route::view("userheader",'userheader');
Route::view("userform",'userform');



Route::view("usermiddleware",'usermiddleware');
Route::view("home",'homemiddleware');
Route::view("noaccess",'noaccessmiddleware');

Route::view("home15",'home15');
Route::view("noaccess15",'noaccess15');
Route::group(['middleware'=>['protectedpage']],function(){
    Route::view("user15",'user15');
    
});

Route::view("user16",'user16')-> middleware('protectedPage');
Route::view("home16",'home16');
Route::view("noaccess16",'noaccess16');


Route::view("login20",'login20');

//Route::view("login21",'login21');
Route::get('/login21', function () {
    if(session()->has('user21')){
        return redirect('profile');
    }
    return view('login21');
});  
Route::view("profile",'profile');
Route::get('/logout', function () {
    if(session()->has('user21')){
        session()->pull('user21');
    }
    return redirect('login21');
});  

Route::view("add",'add22');

Route::view("upload","upload23");


Route::get('/locale24/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('locale24');
});  

Route::view("adddata27","savedata27");


//Fluent Strings


/*
$data = Str::ucfirst($data);
$data = Str::replaceFirst("Hi","Hello",$data);
$data = Str::camel($data);  */

/*
$data = "hi..lets learn laravel";
$data = Str::of($data)
    ->ucfirst($data)
    ->replaceFirst("Hi","Hello",$data)
    ->camel($data);
echo $data;  */




//Controller route
//Route::get("users/{user}",[Users::class,'index']);

Route::get("user/{user}",[UsersController::class,'loadView']);

Route::get("userblade",[BladeController::class,'viewLoad']);

Route::post("userlogin",[UsersFormSubmit::class,'formsubmit']);

Route::get("user17",[UserController17::class,'index']);

Route::get("user18",[UserController18::class,'getdata']);

Route::get("user19",[UserController19::class,'index']);

Route::delete("user20",[UserControllerLogin20::class,'getRequest']);

Route::post("user21",[UserAuth21::class,'userLogin']);

Route::post("add22",[AddMember22::class,'add']);

Route::post("fileupload",[UploadController23::class,'uploadfile']);

Route::get("list",[ViewMembers25::class,'show']);

Route::get("paginationlist",[ViewPagination26::class,'view']);

Route::post("save",[SavedataController27::class,'save']);

Route::get("display",[DeletedataController28::class,'showdata']);
Route::get("delete/{id}",[DeletedataController28::class,'delete']);
Route::get("edit/{id}",[DeletedataController28::class,'displaydata']);
Route::post("edit",[DeletedataController28::class,'update']);

Route::get("list30",[Members30::class,'dboperation']);

Route::get("list31",[AggregrateMethod31::class,'operation']);

Route::get("join32",[Joins32::class,'joining']);

Route::get("accessor",[Accessors36Controller::class,'index']);

Route::get("mutator",[MutatorController37::class,'index']);

Route::get("onetomany",[OneToManyRelationController::class,'index']);

Route::get("binding/{key:name}",[RouteModelBindingController42::class,'index']);

Route::get("multipleDB",[MultipleDBController45::class,'list']);

Route::get("users",[BreakingChangeController60::class,'index']);
