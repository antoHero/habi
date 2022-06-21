<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\FrontendRepositoryInterface;

class FrontendController extends Controller
{
    private FrontendRepositoryInterface $frontendRepository;

    public function __construct(FrontendRepositoryInterface $frontendRepository)
    {
      $this->frontendRepository = $frontendRepository;
    }
    public function home()
    {
      return view('welcome');
    }

    public function womenArea()
    {
      $category = $this->frontendRepository->womenArea();

      return view('pages.frontend.women.index', [
        'category' => $category
      ]);
    }

    public function menArea()
    {
      $category = $this->frontendRepository->menArea();

      return view('pages.frontend.men.index', [
        'category' => $category
      ]);
    }
}
