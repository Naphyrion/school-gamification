<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([


            //user

            [
                'name'          =>  'view any user',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'view user',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'create user',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'update user',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'delete user',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'restore user',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'force delete user',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],

            //school

            [
                'name'          =>  'view any school',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'view school',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'create school',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'update school',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'delete school',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'restore school',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'force delete school',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],

            //Grade
            [
                'name'          =>  'view any grade',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'view grade',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'create grade',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'update grade',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'delete grade',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'restore grade',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'force delete grade',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],

            //Classroom
            [
                'name'          =>  'view any classroom',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'view classroom',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'create classroom',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'update classroom',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'delete classroom',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'restore classroom',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'force delete classroom',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],

            //Subject
            [
                'name'          =>  'view any subject',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'view subject',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'create subject',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'update subject',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'delete subject',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'restore subject',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'force delete subject',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],

            [
                'name'          =>  'attach any subject',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],

            [
                'name'          =>  'attach subject',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],

            [
                'name'          =>  'detach subject',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],

            //Student

            [
                'name'          =>  'view any student',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'view student',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'create student',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'update student',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'delete student',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'restore student',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'force delete student',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],

            //Teacher

            [
                'name'          =>  'view any teacher',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'view teacher',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'create teacher',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'update teacher',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'delete teacher',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'restore teacher',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'force delete teacher',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],

            //Role

            [
                'name'          =>  'view any role',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'view role',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'create role',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'update role',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'delete role',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'restore role',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'force delete role',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],

            //Permission

            [
                'name'          =>  'view any permission',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'view permission',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'create permission',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'update permission',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'delete permission',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'     =>  Carbon::now(),
            ],
            [
                'name'          =>  'restore permission',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'    =>  Carbon::now(),
            ],
            [
                'name'          =>  'force delete permission',
                'guard_name'    =>  'web',
                'created_at'    =>  Carbon::now(),
                'updated_at'    =>  Carbon::now(),
            ],
        ]);
    }
}
