<?php
namespace App\Http\Controllers;

use App\Jobs\ResultsJob;
use App\Models\User;

class MailController extends Controller
{
    public function welcomeEmail()
    {
        $teachers = User::where('user_type', 2)
            ->limit(10)
            ->get();

        foreach ($teachers as $teacher) {
            ResultsJob::dispatch($teacher->email);
        }

        return "Email sent successfully!";
    }
}
