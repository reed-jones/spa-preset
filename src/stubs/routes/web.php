<?php

Route::get('404', function() {
    abort(404);
});

Route::get('{all}', function () {
    return view('index');
})->where(['all' => '.*']);
