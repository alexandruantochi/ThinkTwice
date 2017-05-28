<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTriggerAutoApproveCampaign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE TRIGGER tr_Auto_Approve_Campaign AFTER UPDATE ON `campaigns_pending` FOR EACH ROW
            BEGIN
                IF (NEW.number_of_power_user_approves = 5)
                    THEN
                       INSERT INTO campaigns (`name`, `description`, `category`, `organizer_id`, `created_at`, `updated_at`) 
                       VALUES (OLD.name, OLD.description, OLD.category, OLD.organizer_id, OLD.created_at, OLD.updated_at);
                END IF;
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
        DB::unprepared('DROP TRIGGER `tr_Auto_Approve_Campaign`');
    }
}
