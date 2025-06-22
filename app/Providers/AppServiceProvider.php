<?php
namespace App\Providers;

use App\Models\Teacher;
use App\Models\User;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // // Teacher Edit
        // Gate::define('edit-teacher', function (User $user, Teacher $teacher) {
        //     return $user->id === $teacher->user_id;
        // });

        // // Teacher Delete
        // Gate::define('teachers', function (User $user) {
        //     return $user->user_type === 'teacher';
        // });

        VerifyEmail::toMailUsing(function($notifable, $url){
            return (new MailMessage)
            ->subject('Verify Email Address')
            ->view('emails.verify-email', compact('url'));
        });
    }
}
