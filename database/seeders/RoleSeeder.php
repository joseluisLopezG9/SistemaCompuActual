<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $role1 =Role::create(['name' => 'admin']);
        $role2 =Role::create(['name' => 'tecnico']);
        $role3 =Role::create(['name' => 'cliente']);

        
        Permission::create(['name' => 'home'])->syncRoles([$role1, $role2, $role3]);

        Permission::create(['name' => 'register'])->syncRoles([$role1, $role2, $role3]);

        Permission::create(['name' => 'admin.recepcione.index'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'admin.recepcione.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.recepcione.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.recepcione.destroy'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.recepcione.show'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'admin.diagnostico.index'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'admin.diagnostico.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.diagnostico.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.diagnostico.destroy'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.diagnostico.show'])->syncRoles([$role1, $role2]);

    }
}
