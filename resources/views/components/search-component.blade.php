<!-- Search Bar Component -->
<div class="max-w-md mx-auto mt-5 py-5">
    <form class="relative flex items-center">
        <!-- Search Input -->
        <input
            type="text"
            wire:model.live.debounce.300ms="searchTerm"
            name="hs-search-article-1"
            id="hs-search-article-1"
            placeholder="Search products..."
            class="w-full py-3 pl-5 pr-12 text-sm border rounded-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-neutral-800 dark:text-white dark:border-gray-700"
        />
        <!-- Search Icon Button -->
        <button
            type="submit"
            class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-blue-600 hover:bg-blue-700 text-white p-2 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500"
        >
            <svg
                class="w-5 h-5"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                viewBox="0 0 24 24"
            >
                <circle cx="11" cy="11" r="8"></circle>
                <path d="m21 21-4.35-4.35"></path>
            </svg>
        </button>
    </form>
    <!-- Categories -->

</div>
<div class="flex gap-3 mt-5 justify-center py-4">
    @foreach ($categories as $category)
        @include('components.categories', [
            'categoryName' => $category->name,
            'category_id' => $category->id
        ])
    @endforeach
</div>
