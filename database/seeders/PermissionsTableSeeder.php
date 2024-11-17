<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    public function run(): void
    {
        //permission untuk posts
        Permission::create(['name' => 'posts.index', 'guard_name' => 'api']);
        Permission::create(['name' => 'posts.create', 'guard_name' => 'api']);
        Permission::create(['name' => 'posts.edit', 'guard_name' => 'api']);
        Permission::create(['name' => 'posts.delete', 'guard_name' => 'api']);

        //permission untuk categories
        Permission::create(['name' => 'categories.index', 'guard_name' => 'api']);
        Permission::create(['name' => 'categories.create', 'guard_name' => 'api']);
        Permission::create(['name' => 'categories.edit', 'guard_name' => 'api']);
        Permission::create(['name' => 'categories.delete', 'guard_name' => 'api']);

        //permission untuk sliders
        Permission::create(['name' => 'sliders.index', 'guard_name' => 'api']);
        Permission::create(['name' => 'sliders.create', 'guard_name' => 'api']);
        Permission::create(['name' => 'sliders.delete', 'guard_name' => 'api']);

        //permission untuk roles
        Permission::create(['name' => 'roles.index', 'guard_name' => 'api']);
        Permission::create(['name' => 'roles.create', 'guard_name' => 'api']);
        Permission::create(['name' => 'roles.edit', 'guard_name' => 'api']);
        Permission::create(['name' => 'roles.delete', 'guard_name' => 'api']);

        //permission untuk permissions
        Permission::create(['name' => 'permissions.index', 'guard_name' => 'api']);

        //permission untuk users
        Permission::create(['name' => 'users.index', 'guard_name' => 'api']);
        Permission::create(['name' => 'users.create', 'guard_name' => 'api']);
        Permission::create(['name' => 'users.edit', 'guard_name' => 'api']);
        Permission::create(['name' => 'users.delete', 'guard_name' => 'api']);

        //permission untuk products
        Permission::create(['name' => 'products.index', 'guard_name' => 'api']);
        Permission::create(['name' => 'products.create', 'guard_name' => 'api']);
        Permission::create(['name' => 'products.edit', 'guard_name' => 'api']);
        Permission::create(['name' => 'products.delete', 'guard_name' => 'api']);

        //permission untuk pages
        Permission::create(['name' => 'pages.index', 'guard_name' => 'api']);
        Permission::create(['name' => 'pages.create', 'guard_name' => 'api']);
        Permission::create(['name' => 'pages.edit', 'guard_name' => 'api']);
        Permission::create(['name' => 'pages.delete', 'guard_name' => 'api']);

        //permission untuk photos
        Permission::create(['name' => 'photos.index', 'guard_name' => 'api']);
        Permission::create(['name' => 'photos.create', 'guard_name' => 'api']);
        Permission::create(['name' => 'photos.delete', 'guard_name' => 'api']);

        //permission untuk aparaturs
        Permission::create(['name' => 'aparaturs.index', 'guard_name' => 'api']);
        Permission::create(['name' => 'aparaturs.create', 'guard_name' => 'api']);
        Permission::create(['name' => 'aparaturs.edit', 'guard_name' => 'api']);
        Permission::create(['name' => 'aparaturs.delete', 'guard_name' => 'api']);
    }
}
