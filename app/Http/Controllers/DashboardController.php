<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function showDashboard()
    {
        $totalDrinks = Product::where('kategori', 'minuman')->count();
        $totalFoods = Product::where('kategori', 'makanan')->count();
        $othersCategory = Product::whereNotIn('kategori', ['makanan', 'minuman'])->count();
        $totalAdmins = User::where('role', 'admin')->count();
        $totalEmployees = User::where('role', 'karyawan')->count();
        $productLessThan3 = Product::where('qty', '<', 4)->get();
        $totalProducts = Product::count();
        $totalUsers = User::count();
        $totalSuppliers = Supplier::count();

        $histories = History::join('users', 'histories.user_id', '=', 'users.id')
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
            "othersCategory" => $othersCategory
        ]);
    }
}
