<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ApiService;

class ApiController extends Controller
{
    protected $apiService;

    public function __construct(ApiService $apiService)
    {
        $this->apiService = $apiService;
    }

    public function products() {
        $products = $this->apiService->getProducts();
        return view('api.products', compact('products'));
    }

    public function categories() {
        $categories = $this->apiService->getCategories();
        return view('api.categories', compact('categories'));
    }

    public function users() {
        $users = $this->apiService->getUsers();
        return view('api.users', compact('users'));
    }
}
