<!-- resources/views/client/components/sidebar.blade.php -->

<!-- Sidebar Component -->

<div class="sidebar bg-dark p-3 vh-100">
    <h5 class="text-light mb-3">Boutique</h5>
    <ul class="list-unstyled">
        @foreach ($main_categories as $category)
            <li class="mb-2">
                <a href="{{ route('subcategory.show', $category->id) }}" class="text-light text-decoration-none">
                    > {{ $category->name }}
                </a>
            </li>
        @endforeach
    </ul>
</div>




