<?php

use Illuminate\Database\Migrations\Migration;

class AddEnumToField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("ALTER TABLE table_name DROP CONSTRAINT costraint_name;");
        DB::statement("ALTER TABLE table_name ADD CONSTRAINT costraint_name CHECK (field_name in ('value1','value2'));");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("ALTER TABLE table_name DROP CONSTRAINT costraint_name;");
        DB::statement("ALTER TABLE table_name ADD CONSTRAINT costraint_name CHECK (field_name in ('value1'));");
    }
}
