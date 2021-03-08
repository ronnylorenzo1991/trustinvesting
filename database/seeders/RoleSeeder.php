<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create(['name' => 'administrator']);
        $bloger = Role::create(['name' => 'blogger']);

        Permission::create(['name' => 'admin.dashboard'])->syncRoles([$admin]);

        Permission::create(['name' => 'admin.categories.list'])->syncRoles([$admin, $bloger]);
        Permission::create(['name' => 'admin.categories.create'])->syncRoles([$admin, $bloger]);
        Permission::create(['name' => 'admin.categories.edit'])->syncRoles([$admin, $bloger]);
        Permission::create(['name' => 'admin.categories.show'])->syncRoles([$admin, $bloger]);
        Permission::create(['name' => 'admin.categories.delete'])->syncRoles([$admin, $bloger]);

        Permission::create(['name' => 'admin.tags.list'])->syncRoles([$admin, $bloger]);
        Permission::create(['name' => 'admin.tags.create'])->syncRoles([$admin, $bloger]);
        Permission::create(['name' => 'admin.tags.edit'])->syncRoles([$admin, $bloger]);
        Permission::create(['name' => 'admin.tags.show'])->syncRoles([$admin, $bloger]);
        Permission::create(['name' => 'admin.tags.delete'])->syncRoles([$admin, $bloger]);

        Permission::create(['name' => 'admin.posts.list'])->syncRoles([$admin, $bloger]);
        Permission::create(['name' => 'admin.posts.create'])->syncRoles([$admin, $bloger]);
        Permission::create(['name' => 'admin.posts.edit'])->syncRoles([$admin, $bloger]);
        Permission::create(['name' => 'admin.posts.show'])->syncRoles([$admin, $bloger]);
        Permission::create(['name' => 'admin.posts.delete'])->syncRoles([$admin, $bloger]);

        Permission::create(['name' => 'admin.users.list'])->syncRoles([$admin]);
        Permission::create(['name' => 'admin.users.create'])->syncRoles([$admin]);
        Permission::create(['name' => 'admin.users.edit'])->syncRoles([$admin]);
        Permission::create(['name' => 'admin.users.show'])->syncRoles([$admin]);
        Permission::create(['name' => 'admin.users.delete'])->syncRoles([$admin]);

        Permission::create(['name' => 'admin.roles.list'])->syncRoles([$admin]);
        Permission::create(['name' => 'admin.roles.create'])->syncRoles([$admin]);
        Permission::create(['name' => 'admin.roles.edit'])->syncRoles([$admin]);
        Permission::create(['name' => 'admin.roles.show'])->syncRoles([$admin]);
        Permission::create(['name' => 'admin.roles.delete'])->syncRoles([$admin]);

        Permission::create(['name' => 'admin.landings.list'])->syncRoles([$admin]);
        Permission::create(['name' => 'admin.landings.create'])->syncRoles([$admin]);
        Permission::create(['name' => 'admin.landings.edit'])->syncRoles([$admin]);
        Permission::create(['name' => 'admin.landings.show'])->syncRoles([$admin]);
        Permission::create(['name' => 'admin.landings.delete'])->syncRoles([$admin]);
    }
}
