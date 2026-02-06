<?php

protected function schedule(Schedule $schedule)
{
    $schedule->command('cms:send-scheduled-emails')->dailyAt('09:00');
}