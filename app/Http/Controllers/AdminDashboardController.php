<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $totalArticles = Article::count();
        $totalArticleViews = Article::sum('views_count');
        $totalVisitors = max($totalArticleViews + ($totalUsers * 5), 1);
        $articleReadPercentage = round(($totalArticleViews / $totalVisitors) * 100, 1);

        $recentArticles = Article::latest()->take(5)->get();

        return view('admin.dashboard', [
            'totalUsers' => $totalUsers,
            'totalArticles' => $totalArticles,
            'totalArticleViews' => $totalArticleViews,
            'totalVisitors' => $totalVisitors,
            'articleReadPercentage' => $articleReadPercentage,
            'recentArticles' => $recentArticles,
        ]);
    }
}