<?php

use App\Http\Controllers\ResumeController;

Route::get('/resume/{id}', [ResumeController::class, 'show'])->name('resume.show');

});
