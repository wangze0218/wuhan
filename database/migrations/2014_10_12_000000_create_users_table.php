<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        /**
        DROP TABLE IF EXISTS `data_user`;
        CREATE TABLE `data_user` (
        `user_id` int(11) NOT NULL,
        `user_name` varchar(255) NOT NULL,
        `user_password` varchar(255) NOT NULL,
        `user_admin` tinyint(4) NOT NULL DEFAULT '0' COMMENT '用户管理员 0 不是 1是',
        `created_at` int(11) NOT NULL,
        `updated_at` int(11) NOT NULL,
        `deleted_at` int(11) NOT NULL,
        PRIMARY KEY (`user_id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
        SET FOREIGN_KEY_CHECKS=1;
         **/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
