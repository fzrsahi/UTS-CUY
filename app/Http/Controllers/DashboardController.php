<?php

namespace App\Http\Controllers;

use App\Models\history;
use App\Models\product;
use App\Models\supplier;
use App\Models\user;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function showDashboard()
    {
        $totalDrinks = product::where('kategori', 'minuman')->count();
        $totalFoods = product::where('kategori', 'makanan')->count();
        $totalAdmins = user::where('role', 'admin')->count();
        $totalEmployees = user::where('role', 'karyawan')->count();
        $productLessThan3 = product::where('qty', '<', 3)->get();
        $totalProducts = product::count();
        $totalUsers = user::count();
        $totalSuppliers = supplier::count();

        $histories = history::join('users', 'histories.user_id', '=', 'users.id')
            ->join('products', 'histories.product_id', '=', 'products.id')
            ->join('suppliers', 'histories.supplier_id', '=', 'suppliers.id')
            ->select('histories.*', 'users.name as user_name', 'products.nama as product_name', 'suppliers.nama as supplier_name')
            ->get();
        return view("dashboard", [
            "histories" => $histories,
            "totalProducts" => $totalProducts,
            "totalUsers" => $totalUsers,
            "totalSuppliers" => $totalSuppliers,
            "productLessThan3" => $productLessThan3,
            "totalDrinks" => $totalDrinks,
            "totalFoods" => $totalFoods,
            "totalAdmins" => $totalAdmins,
            "totalEmployees" => $totalEmployees,
        ]);
    }
}
