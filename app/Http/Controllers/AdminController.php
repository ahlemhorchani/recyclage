<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:admin')
            ->except(["showAdminLoginForm", "adminLogin"]);
    }

    public function index()
    {
        return view("admin.index")->with([
            "products" => Product::all(),
            "orders" => Cart::all(),
            "categories" => Category::all(),
            "users" => User::all()
        ]);
    }

    public function showAdminLoginForm()
    {
        return view("admin.auth.login");
    }

    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]);

        if (auth()->guard("admin")->attempt([
            'email' => $request->email,
            'password' => $request->password
        ], $request->get("remember"))) {
            return redirect("/admin");
        } else {
            return redirect()->route("admin.login");
        }
    }

    public function adminLogout()
    {
        auth()->guard("admin")->logout();
        return redirect()->route("admin.login");
    }

    public function getProducts()
    {
        return view("admin.products.index")->with([
            "products" => Product::latest()->paginate(5)
        ]);
    }

    public function getOrders()
    {
        return view("admin.orders.index")->with([
            "orders" => Cart::latest()->paginate(5)
        ]);
    }
    public function getUsers()
    {     $users = User::latest()->paginate(5);

        return view("admin.users.index")->with([
            "users" => $users
        
        ]);
    }
    public function getCategories()
    {      return view("admin.categories.index")->with([
        "categories" => Category::latest()->paginate(5)
    ]);
    }
    public function votreAction()
    {
        

        if (Auth::check()) {
            $usertype = Auth::user()->usertype;
        } else {
            $usertype = null; // Définissez une valeur par défaut si l'utilisateur n'est pas connecté.
        }

        return view('votre_vue')->with('usertype', $usertype);
    }
    
}
