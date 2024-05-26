<?php

namespace App\Http\Controllers;

use App\Models\AboutMe;
use App\Models\Education;
use App\Models\Skill;
use App\Models\PortfolioDetails;
use App\Models\Services;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $aboutme = AboutMe::first();
        $educations = Education::paginate(10);
        $skills = Skill::paginate(10);
        $portfolios = PortfolioDetails::paginate(10);
        $services = Services::paginate(10);

        return view('portfolio.index', compact('aboutme', 'educations', 'skills', 'portfolios', 'services'));
    }
    
}
