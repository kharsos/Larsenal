<?php
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch the attribute for scales ('Échelle') and its values
        $scales = DB::table('attribute_values')
            ->join('attributes', 'attribute_values.attribute_id', '=', 'attributes.id')
            ->where('attributes.name', '=', 'Échelle')
            ->select('attribute_values.id as value_id', 'attribute_values.value as scale')
            ->get();

        // Array to hold scales with their respective categories and subcategories
        $categories_with_products = [];

        foreach ($scales as $scale) {
            // Fetch main categories and their subcategories based on the scale
            $categories = Category::where('parent_id', null)
                ->with(['children' => function ($query) use ($scale) {
                    $query->whereHas('products', function ($productQuery) use ($scale) {
                        $productQuery->whereHas('attributes', function ($attrQuery) use ($scale) {
                            $attrQuery->where('attribute_value_id', $scale->value_id);
                        });
                    });
                }])
                ->get();

            // Add the scale and its associated categories to the array
            $categories_with_products[] = [
                'scale' => $scale->scale,
                'categories' => $categories
            ];
        }

        // Fetch only the main categories for the sidebar
        $main_categories= Category::where('parent_id', null)->get();
        // Fetch new products (you can adjust the query based on your needs)
        $newProducts = Product::orderBy('created_at', 'desc')->take(10)->get(); 

        // Pass data to the view
        return view('client.home', compact('categories_with_products', 'main_categories','newProducts'));
    }
}
