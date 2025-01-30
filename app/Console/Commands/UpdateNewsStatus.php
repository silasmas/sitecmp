<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\actualites;
use Illuminate\Console\Command;

class UpdateNewsStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'actualites:update-status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Met à jour automatiquement l’état des actualités en fonction de la date';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $now = Carbon::now();

        // Activer les actualités programmées pour aujourd'hui
        actualites::where('publish_at', '<=', $now)
            ->where('is_active', false)
            ->update(['is_active' => true]);
        // Désactiver les actualités expirées
        actualites::where('expire_at', '<=', $now)
            ->where('is_active', true)
            ->update(['is_active' => false]);

        $this->info('Mise à jour des actualités effectuée avec succès.');
    }
}
