<?php

use Illuminate\Support\Facades\Route;
use App\Models\Student;
use App\Models\Product;
use App\http\Controllers\StudentController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function() {
//     return view('welcome');
// });

// Route::get('/tampilan', function() {
//     return view('tampilan');
// });

// Route::get('/tampilan/{nilai1}-{nilai2}', function($nilai1,$nilai2) {
//     return view('tampilan', [
//         'nilai1'=> $nilai1,
//         'nilai2'=> $nilai2
//     ]);
// });

// Route::get('/test/{nama}/{asal_daerah}/{prodi}/{angkatan}', function($nama,$asal_daerah,$prodi,$angkatan) {
//     return view('test', [
//         'nama'=> $nama,
//         'asal_daerah'=> $asal_daerah,
//         'prodi' => $prodi,
//         'angkatan' => $angkatan
//     ]);
// });


// //Section Baru

// Route::get('/dashboard', function() {
//     return view('latihan2.dashboard ');
// })->name('dashboard');

// Route::get('/daftar', function() {
//     return view('latihan2.daftar ');
// })->name('daftar');


// //ujian
// Route::get('/my/home', function() {
//     return view('ujian.home ');
// })->name('my.home');

// Route::get('/my/nama', function(){
//     return view('ujian.nama');
// })->name('nama');

// Route::get('/my/asal_daerah', function(){
//     return view('ujian.asal_daerah');
// })->name('asal_daerah');

// Route::get('/my/prodi', function(){
//     return view('ujian.prodi');
// })->name('prodi');

// Route::get('/my/angkatan', function(){
//     return view('ujian.angkatan');
// })->name('angkatan');

// Route::get("/students", function(){
//     $students = Student::all();
//     return view("ujian.student", ["students" => $students]);
// });

// Route::get("/students/create", function(){
//     Student::create([
//         "nim" => "123",
//         "name" => "Putry Maharani",
//         "prodi" => "IF",
//         "angkatan" => 2024,
//         "alamat" => "Bandung"
//     ]);
// });

// Route::get("/students/update/{id}", function ($id){
//     Student::find($id)->update([
//         "nim" => "123456",
//         "name" => "Sabrina Maharani",
//         "prodi" => "IF",
//         "angkatan" => 2024,
//         "alamat" => "Bandung"
//     ]);
//     echo "Data dengan id $id berhasil diupdate";
// });

// Route::get("/students/delete/{id}", function ($id){
//     Student::find($id)->delete();
//     echo "Data dengan is $id berhasil dihapus";
// });

// Route::get("/products", function(){
//     $products = Product::all();
//     return view("ujian.product", ["products" => $products]);
// });

// Route::get("/products/create", function(){
//     Student::create([
//         "code" => 1,
//         "name" => "Putry Maharani",
//         "description" => "Mahasiswa",
//         "qty" => 1,
//         "price" => 2000
//     ]);
// });

// Route::get("/products/update/{id}", function ($id){
//     Student::find($id)->update([
//         "code" => 1,
//         "name" => "Putry Maharani",
//         "description" => "Mahasiswa",
//         "qty" => 1,
//         "price" => 2000
//     ]);
//     echo "D ata dengan id $id berhasil diupdate";
// });

Route::resource("/student", StudentController::class);