<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Webhooks\GitHubWebhookController;

Route::post('/webhooks/github', GitHubWebhookController::class)
  ->name('webhooks.github');
