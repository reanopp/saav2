<?php

namespace App\Http\Controllers\Frontend;

use Log;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use App\Repositories\PirepRepository;
use App\Repositories\UserRepository;

class DashboardController extends Controller
{
    private $pirepRepo, $userRepo;

    public function __construct(
        PirepRepository $pirepRepo,
        UserRepository $userRepo
    ) {
        $this->pirepRepo = $pirepRepo;
        $this->userRepo = $userRepo;
    }

    /**
     * Show the application dashboard.
     */
    public function index()
    {
        $last_pirep = null;
        $user = Auth::user();

        try {
            $last_pirep = $this->pirepRepo->find($user->last_pirep_id);
        } catch(\Exception $e) { }

        return $this->view('dashboard.index', [
            'user'       => $user,
            'last_pirep' => $last_pirep,
        ]);
    }
}
