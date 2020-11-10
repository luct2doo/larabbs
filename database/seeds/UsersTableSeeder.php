<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 生成数据集合
        $users = factory(User::class)->times(10)->create();

        // 单独处理第一个用户的数据
        $user = User::find(1);
        $user->name = 'Test';
        $user->email = 'test@test.com';
        $user->avatar = 'http://larabbs.test/uploads/images/avatars/202011/10/1_1605003313_PlMaVwSIrz.jpg';
        $user->save();

        $user = User::find(2);
        $user->name = 'Monkey';
        $user->email = 'monkey@test.com';
        $user->avatar = 'https://cdn.learnku.com/uploads/images/201710/14/1/ZqM7iaP4CR.png';
        $user->save();
    }
}
