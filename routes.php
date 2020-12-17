<?php

Route::get('/harita',function (){
    return renderModuleView('Harita','index');
})->name('fetch_domain_groups')->middleware('admin');
