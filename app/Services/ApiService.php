<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ApiService
{
    protected $baseUrl;

    public function __construct() {
        $this->baseUrl = env('API_BASE_URL');
    }

    public function getProducts() {
        $response = Http::get("{$this->baseUrl}/products");
        return $response->successful() ? $response->json() : null;
    }

    public function getCategories() {
        $response = Http::get("{$this->baseUrl}/categories");
        return $response->successful() ? $response->json() : null;
    }

    public function getUsers() {
        $response = Http::get("{$this->baseUrl}/users");
        return $response->successful() ? $response->json() : null;
    }
}

