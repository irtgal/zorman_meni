use App\Models\Category;
use App\Models\Item;

// Create categories with prices
$category1 = Category::create([
    'name' => 'Category 1',
    'price' => 10.50,
]);

$category2 = Category::create([
    'name' => 'Category 2',
    'price' => 15.75,
]);

$category3 = Category::create([
    'name' => 'Category 3',
    'price' => 20.25,
]);

$category4 = Category::create([
    'name' => 'Category 4',
    'price' => 25.00,
]);

// Create items belonging to each category
$categories = [$category1, $category2, $category3, $category4];
for ($i = 1; $i <= 20; $i++) {
    $category = $categories[($i - 1) % 4];
    $item = Item::create([
        'name' => "Item $i",
        'description' => "This is item $i",
        'active' => true,
        'category_id' => $category->id,
    ]);
    echo "Item '{$item->name}' created for category '{$category->name}' with price '{$category->price}'.\n";
}
