<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTriggerAutoSubs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE TRIGGER tr_Auto_Sub_For_Organizer AFTER INSERT ON `campaigns` FOR EACH ROW
            BEGIN
                INSERT INTO campaign_subs (`user_id`, `campaign_id`, `created_at`, `updated_at`) 
                VALUES (NEW.organizer_id, NEW.id, NEW.created_at, NEW.created_at);
            END
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `tr_Auto_Sub_For_Organizer`');
    }
}
