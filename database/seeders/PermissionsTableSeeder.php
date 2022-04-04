<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'speaker_create',
            ],
            [
                'id'    => 18,
                'title' => 'speaker_edit',
            ],
            [
                'id'    => 19,
                'title' => 'speaker_show',
            ],
            [
                'id'    => 20,
                'title' => 'speaker_delete',
            ],
            [
                'id'    => 21,
                'title' => 'speaker_access',
            ],
            [
                'id'    => 22,
                'title' => 'question_create',
            ],
            [
                'id'    => 23,
                'title' => 'question_edit',
            ],
            [
                'id'    => 24,
                'title' => 'question_show',
            ],
            [
                'id'    => 25,
                'title' => 'question_delete',
            ],
            [
                'id'    => 26,
                'title' => 'question_access',
            ],
            [
                'id'    => 27,
                'title' => 'video_list_create',
            ],
            [
                'id'    => 28,
                'title' => 'video_list_edit',
            ],
            [
                'id'    => 29,
                'title' => 'video_list_show',
            ],
            [
                'id'    => 30,
                'title' => 'video_list_delete',
            ],
            [
                'id'    => 31,
                'title' => 'video_list_access',
            ],
            [
                'id'    => 32,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}