<?php

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


Route::prefix('/yonnee')->controller(App\Http\Controllers\AuthController::class)->group(function(){ 
    Route::get('/connexion/','connexion')->name('auth.connexion');
    Route::delete('/deconnexion/','logout')->name('auth.deconnexion');
    Route::post('/connexion/','seconnect')->name('auth.post.connexion');
    Route::get('/dashboard/','dashboard')->name('auth.dashboard')->middleware('auth');
    
    Route::get('/403', function () {
        return response()->view('erreurs.403', [], 403);
    })->name('403');
    
});


Route::middleware(['auth','role:PERSONNEL'])->group(function () {
    Route::prefix('/personnel')->controller(App\Http\Controllers\Personnel::class)->group(function(){
        Route::prefix('/besoin')->controller(App\Http\Controllers\Personnel::class)->group(function(){

            Route::get('/','besoinpersonnel')->name('besoin.personnel.personnel');
            Route::get('/{$id}', 'voirbesoinpersonnel')->name('voir.besoin.personnel');
            Route::get('/modifier/{$id}','modifierbesoinpersonnel')->name('modifier.besoin.personnel');
            Route::put('/modifier/{$id}','postmodifierbesoinpersonnel')->name('post.modifier.besoin.personnel');
            Route::get('/exprimer','exprimerbesoinpersonnel')->name('exprimer.besoin.personnel');
            Route::post('/exprimer','postexprimerbesoinpersonnel')->name('post.exprimer.besoin.personnel');
            Route::delete('/supprimer/{$id}','supprimerbesoinpersonnel')->name('supprimer.besoin.personnel');
            Route::prefix('/suivi')->controller(App\Http\Controllers\Personnel::class)->group(function(){
                Route::get('/','suivibesoinpersonnel')->name('suivi.besoin.personnel'); 
                Route::get('/{$id}','voirsuivibesoinpersonnel')->name('voir.suivi.besoin.personnel'); 
            });
        });
        // Route::prefix('/compte')->controller(App\Http\Controllers\Personnel::class)->group(function(){
            
        // });
            
    });
});

Route::middleware(['auth','role:CHEF_SERVICE,CHEF_CENTRE,CHEF_BUREAU,CHEF_DEPARTEMENT'])->group(function () {
    Route::prefix('/responsable')->controller(App\Http\Controllers\Responsable::class)->group(function(){
        Route::prefix('/suo')->controller(App\Http\Controllers\Responsable::class)->group(function(){
            Route::prefix('/besoin')->controller(App\Http\Controllers\Responsable::class)->group(function(){

                Route::get('/','besoinsuoresponsable')->name('besoin.suo.responsable');
                Route::get('/{$id}','voirbesoinsuoresponsable')->name('voir.besoin.suo.responsable');
                Route::prefix('/validation')->controller(App\Http\Controllers\Responsable::class)->group(function(){
                    Route::get('/{$id}','validerbesoinsuoresponsable')->name('valider.besoin.suo.responsable');
                    Route::post('/','postvaliderbesoinsuoresponsable')->name('post.valider.besoin.suo.responsable');
                });
                Route::prefix('/suivi')->controller(App\Http\Controllers\Responsable::class)->group(function(){
                    Route::get('/','suivibesoinsuoresponsable')->name('suivi.besoin.suo.responsable'); 
                    Route::get('/{$id}','voirsuivibesoinsuoresponsable')->name('voir.suivi.besoin.suo.responsable'); 
                });
                    
            });
            Route::prefix('/personnel')->controller(App\Http\Controllers\Responsable::class)->group(function(){
                    
            });    
        });

    });
});

        // Route::prefix('/direction')->controller(App\Http\Controllers\Direction::class)->group(function(){
        //     Route::prefix('/suo')->controller(App\Http\Controllers\Direction::class)->group(function(){
        //         Route::prefix('/besoin')->controller(App\Http\Controllers\Direction::class)->group(function(){
        //             Route::get('/','besoinsuodirection')->name('besoin.suo.direction');
        //             Route::get('/{$id}','voirbesoinsuodirection')->name('voir.besoin.suo.direction');
        //         });
        //         Route::prefix('/validation')->controller(App\Http\Controllers\Direction::class)->group(function(){
        //             Route::get('/{$id}','validerbesoinsuodirection')->name('valider.besoin.suo.direction');
        //             Route::post('/','postvaliderbesoinsuodirection')->name('post.valider.besoin.suo.direction');
        //         });
        //         Route::prefix('/suivi')->controller(App\Http\Controllers\Direction::class)->group(function(){
        //             Route::get('/','suivibesoinsuodirection')->name('suivi.besoin.suo.direction'); 
        //             Route::get('/{$id}','voirsuivibesoinsuodirection')->name('voir.suivi.besoin.suo.direction'); 
        //         });
        //         Route::prefix('/personnel')->controller(App\Http\Controllers\Responsable::class)->group(function(){
                    
        //         });
        // });
        

        // Route::prefix('/rectorat')->controller(App\Http\Controllers\Rectorat::class)->group(function(){
        //     Route::prefix('/besoin')->controller(App\Http\Controllers\Rectorat::class)->group(function(){
        //         Route::get('/','besoin')->name('besoin');
        //     });

        // });

        // Route::prefix('/admintech')->controller(App\Http\Controllers\Admintech::class)->group(function(){
        //     Route::prefix('/besoin')->controller(App\Http\Controllers\Admintech::class)->group(function(){
        //         Route::get('/','besoin')->name('besoin');
        //     });

        // });

