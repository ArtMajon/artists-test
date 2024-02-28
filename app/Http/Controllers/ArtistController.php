<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\JsonResponse;
use Spatie\QueryBuilder\QueryBuilder;

class ArtistController extends Controller
{
    public function index(): JsonResponse
    {
        $artists = QueryBuilder::for(Artist::class)
            ->allowedFilters('active','email')
            ->get();

        return response()->json($artists);
    }

    public function filterByStatus(string $status): JsonResponse
    {
        $status = $status == 'active' ? 1 : 0;
        $artists = QueryBuilder::for(Artist::class)
            ->where('active', $status)
            ->get();

        return response()->json($artists);
    }

    public function filterByEmail(string $email): JsonResponse
    {
        $artist = QueryBuilder::for(Artist::class)
            ->where('email', $email)
            ->first();

        if (!$artist) {
            return response()->json(['error' => 'Artist not found'], 404);
        }

        return response()->json($artist);
    }
}
