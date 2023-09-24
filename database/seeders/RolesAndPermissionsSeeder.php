<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // {
        //     app()[\Spatie\Permission\PermissionRegister::class]->forgetCachedPermissions();
        // $arrayofPermissionNames=[
        //  'book create','book view','book edit','book delete',
        //  'student create','student view','student delete'
        // ];
        // $permissions = collect($arrayofPermissionNames)->map(function($permissions){
        //     return['name'=>$permission, 'guard_name' =>'web'];
        // )};

        //  permission:: insert($permissions->toArray());


        // }
    }
}
