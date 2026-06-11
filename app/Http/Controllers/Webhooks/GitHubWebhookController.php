<?php

namespace App\Http\Controllers\Webhooks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\WebsiteUpdatedNotification;

class GitHubWebhookController extends Controller
{
    public function __invoke(Request $request)
    {
        $secret = config('services.github.webhook_secret');

        $signature = 'sha256=' . hash_hmac(
            'sha256',
            $request->getContent(),
            $secret
        );

        abort_unless(hash_equals($signature, $request->header('X-Hub-Signature-256', '')), 403);

        \Log::info('GitHub webhook received', $request->all());

        if ($request->header('X-GitHub-Event') !== 'push') {
            return response()->json(['ignored' => true]);
        }

        $payload = $request->all();

        $branch = str($payload['ref'] ?? '')->afterLast('/')->toString();

        $message = $payload['head_commit']['message'] ?? 'Website code was updated.';
        $author = $payload['head_commit']['author']['name'] ?? 'GitHub';

        $admins = User::permission('access.admin.panel')->get();

        foreach ($admins as $admin) {
            $admin->notify(new WebsiteUpdatedNotification(
                title: 'Website update pushed',
                message: $author . ' pushed to ' . $branch . ': ' . $message,
                url: route('admin.dashboard')
            ));
        }

        return response()->json(['received' => true]);
    }
}
