<?php

namespace App\Controllers;

use App\Models\TaskModel;
use App\Models\UserModel;
use DateTimeImmutable;
use DateTimeZone;

class Pages extends BaseController
{
    public function index()
    {
        $today = (new DateTimeImmutable('now', new DateTimeZone('Asia/Manila')))
            ->format('Y-m-d');

        $taskModel = new TaskModel();

        return view('pages/welcome', [
            'tasks' => $taskModel
                ->where('task_date', $today)
                ->findAll(),
        ]);
    }

    public function tasks()
    {
        $taskModel = new TaskModel();

        return view('pages/tasks', [
            'tasks' => $taskModel
                ->orderBy('task_date', 'ASC')
                ->orderBy('id', 'ASC')
                ->findAll(),
        ]);
    }

    public function profile()
    {
        $userModel = new UserModel();

        return view('pages/profile', [
            'user' => $userModel->first(),
        ]);
    }

    public function about()
    {
        return view('pages/about');
    }
}