<?php

namespace App\Observers;

use App\Models\Question;
use App\Notifications\DataChangeEmailNotification;
use Illuminate\Support\Facades\Notification;

class QuestionActionObserver
{
    public function created(Question $model)
    {
        $data  = ['action' => 'created', 'model_name' => 'Question'];
        $users = \App\Models\User::whereHas('roles', function ($q) { return $q->where('title', 'Admin'); })->get();
        Notification::send($users, new DataChangeEmailNotification($data));
    }
}
