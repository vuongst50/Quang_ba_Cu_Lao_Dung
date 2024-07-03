<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
     public function up()
    {
        // Sử dụng DB::statement để thực hiện câu lệnh SQL tùy chỉnh
        \DB::statement('ALTER TABLE posts CHANGE child_type description6 VARCHAR(255)');
    }

    public function down()
    {
        // Nếu cần rollback, bạn có thể sử dụng phương thức change lại
        \DB::statement('ALTER TABLE posts CHANGE description6 child_type VARCHAR(255)');
    }
};
