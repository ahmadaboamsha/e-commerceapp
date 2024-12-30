<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>
    <body>
<!-- ========== MAIN CONTENT ========== -->
<!-- Breadcrumb -->
<div class="sticky top-0 inset-x-0 z-20 bg-white border-y px-4 sm:px-6 lg:px-8 lg:hidden dark:bg-neutral-800 dark:border-neutral-700">
    <div class="flex items-center py-2">
      <!-- Navigation Toggle -->
      <button type="button" class="size-8 flex justify-center items-center gap-x-2 border border-gray-200 text-gray-800 hover:text-gray-500 rounded-lg focus:outline-none focus:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-200 dark:hover:text-neutral-500 dark:focus:text-neutral-500" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-application-sidebar" aria-label="Toggle navigation" data-hs-overlay="#hs-application-sidebar">
        <span class="sr-only">Toggle Navigation</span>
        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M15 3v18"/><path d="m8 9 3 3-3 3"/></svg>
      </button>
      <!-- End Navigation Toggle -->

      <!-- Breadcrumb -->
      <ol class="ms-3 flex items-center whitespace-nowrap">
        <li class="flex items-center text-sm text-gray-800 dark:text-neutral-400">
          Application Layout
          <svg class="shrink-0 mx-3 overflow-visible size-2.5 text-gray-400 dark:text-neutral-500" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
          </svg>
        </li>
        <li class="text-sm font-semibold text-gray-800 truncate dark:text-neutral-400" aria-current="page">
          Dashboard
        </li>
      </ol>
      <!-- End Breadcrumb -->
    </div>
  </div>
  <!-- End Breadcrumb -->

  <!-- Sidebar -->
  <div id="hs-application-sidebar" class="hs-overlay  [--auto-close:lg]
    hs-overlay-open:translate-x-0
    -translate-x-full transition-all duration-300 transform
    w-[260px] h-full
    hidden
    fixed inset-y-0 start-0 z-[60]
    bg-white border-e border-gray-200
    lg:block lg:translate-x-0 lg:end-auto lg:bottom-0
    dark:bg-neutral-800 dark:border-neutral-700" role="dialog" tabindex="-1" aria-label="Sidebar">
    <div class="relative flex flex-col h-full max-h-full">

        <div class="px-2 pt-2 bg-gray-900">
            <!-- Logo -->
            <a wire:navigate class="flex flex-col items-center rounded-xl text-s mx-14 text-blue-500  font-semibold focus:outline-none focus:opacity-80" href="#">
              <svg fill="#1b6ebb" height="70px" width="70px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 300.00 300.00" xml:space="preserve" stroke="#1b6ebb">
                <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                <g id="SVGRepo_iconCarrier">
                  <g>
                    <path d="M278.891,244.965V105.231c0-4.143-3.357-7.5-7.5-7.5h-42.398V65.597c0-4.143-3.357-7.5-7.5-7.5H189.17V47.555 c0-21.6-17.57-39.173-39.168-39.173s-39.168,17.573-39.168,39.173v10.542H78.512c-4.143,0-7.5,3.357-7.5,7.5v32.134H28.613 c-4.142,0-7.5,3.357-7.5,7.5v139.734C9.438,245.174,0,254.721,0,266.446v3.676c0,11.855,9.645,21.5,21.5,21.5h257.004 c11.855,0,21.5-9.645,21.5-21.5v-3.676C300.004,254.721,290.566,245.174,278.891,244.965z M78.512,216.954h142.98 c4.143,0,7.5-3.357,7.5-7.5v-71.111h11.411v105.075H59.602V138.342h11.41v71.111C71.012,213.596,74.369,216.954,78.512,216.954z M263.891,112.731v130.687h-8.487V130.842c0-4.143-3.357-7.5-7.5-7.5h-18.911v-10.611H263.891z M125.834,47.555 c0-13.329,10.842-24.173,24.168-24.173s24.168,10.844,24.168,24.173v10.542h-48.336V47.555z M86.012,73.097h24.822V85.94 c0,4.143,3.357,7.5,7.5,7.5c4.143,0,7.5-3.357,7.5-7.5V73.097h48.336V85.94c0,4.143,3.357,7.5,7.5,7.5c4.143,0,7.5-3.357,7.5-7.5 V73.097h24.822v128.856H86.012V73.097z M36.113,112.731h34.899v10.611h-18.91c-4.143,0-7.5,3.357-7.5,7.5v112.575h-8.488V112.731z M285.004,270.122c0,3.584-2.916,6.5-6.5,6.5H21.5c-3.584,0-6.5-2.916-6.5-6.5v-3.676c0-3.584,2.916-6.5,6.5-6.5h257.004 c3.584,0,6.5,2.916,6.5,6.5V270.122z"/>
                    <polygon points="171.885,153.601 123.229,134.089 142.688,182.867 147.432,168.114 167.047,187.771 176.774,178.018 157.164,158.358 "/>
                  </g>
                </g>
              </svg>
              <h2 class="text-center">E-commerce App</h2>
            </a>
            <!-- End Logo -->
          </div>

      {{-- <div class="px-2 pt-2 bg-gray-900">
        <!-- Logo -->
        <a class="flex-none rounded-xl text-s mx-14 text-blue-500 inline-block font-semibold focus:outline-none focus:opacity-80" href="#">
            <svg fill="#1b6ebb" height="80px" width="80px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 300.00 300.00" xml:space="preserve" stroke="#1b6ebb">
            <g id="SVGRepo_bgCarrier" stroke-width="0"/>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
            <g id="SVGRepo_iconCarrier"> <g> <path d="M278.891,244.965V105.231c0-4.143-3.357-7.5-7.5-7.5h-42.398V65.597c0-4.143-3.357-7.5-7.5-7.5H189.17V47.555 c0-21.6-17.57-39.173-39.168-39.173s-39.168,17.573-39.168,39.173v10.542H78.512c-4.143,0-7.5,3.357-7.5,7.5v32.134H28.613 c-4.142,0-7.5,3.357-7.5,7.5v139.734C9.438,245.174,0,254.721,0,266.446v3.676c0,11.855,9.645,21.5,21.5,21.5h257.004 c11.855,0,21.5-9.645,21.5-21.5v-3.676C300.004,254.721,290.566,245.174,278.891,244.965z M78.512,216.954h142.98 c4.143,0,7.5-3.357,7.5-7.5v-71.111h11.411v105.075H59.602V138.342h11.41v71.111C71.012,213.596,74.369,216.954,78.512,216.954z M263.891,112.731v130.687h-8.487V130.842c0-4.143-3.357-7.5-7.5-7.5h-18.911v-10.611H263.891z M125.834,47.555 c0-13.329,10.842-24.173,24.168-24.173s24.168,10.844,24.168,24.173v10.542h-48.336V47.555z M86.012,73.097h24.822V85.94 c0,4.143,3.357,7.5,7.5,7.5c4.143,0,7.5-3.357,7.5-7.5V73.097h48.336V85.94c0,4.143,3.357,7.5,7.5,7.5c4.143,0,7.5-3.357,7.5-7.5 V73.097h24.822v128.856H86.012V73.097z M36.113,112.731h34.899v10.611h-18.91c-4.143,0-7.5,3.357-7.5,7.5v112.575h-8.488V112.731z M285.004,270.122c0,3.584-2.916,6.5-6.5,6.5H21.5c-3.584,0-6.5-2.916-6.5-6.5v-3.676c0-3.584,2.916-6.5,6.5-6.5h257.004 c3.584,0,6.5,2.916,6.5,6.5V270.122z"/> <polygon points="171.885,153.601 123.229,134.089 142.688,182.867 147.432,168.114 167.047,187.771 176.774,178.018 157.164,158.358 "/> </g> </g>
            </svg>
            <h2 class="">E-commerce App</h2>
        </a>
        <!-- End Logo -->
      </div> --}}
      <!-- Content -->
      <div class="h-full overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
        <nav class="hs-accordion-group p-3 w-full flex flex-col flex-wrap" data-hs-accordion-always-open>
          <ul class="flex flex-col space-y-1">
            <li>
              <a wire:navigate class="flex items-center gap-x-3.5 py-2 px-2.5 {{ Request::is('admin/dashboard') ? 'bg-gray-900' : '' }} text-sm text-gray-800 rounded-lg  dark:hover:bg-neutral-900 focus:outline-none focus:bg-gray-100 dark:text-white" href="/admin/dashboard">
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                Dashboard
              </a>
            </li>

            <li><a wire:navigate class="w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm {{ Request::is('products') ? 'bg-gray-900' : '' }} text-gray-800 rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-900 dark:text-neutral-200 dark:hover:text-neutral-300" href="/products">
              <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"/><line x1="16" x2="16" y1="2" y2="6"/><line x1="8" x2="8" y1="2" y2="6"/><line x1="3" x2="21" y1="10" y2="10"/><path d="M8 14h.01"/><path d="M12 14h.01"/><path d="M16 14h.01"/><path d="M8 18h.01"/><path d="M12 18h.01"/><path d="M16 18h.01"/></svg>
                Products
            </a></li>

            <li><a wire:navigate class="w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm {{ Request::is('orders') ? 'bg-gray-900' : '' }} text-gray-800 rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-900 dark:text-neutral-200 dark:hover:text-neutral-300" href="/orders">
              <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
                Orders
            </a></li>

            <li><a wire:navigate class="w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm {{ Request::is('/manage/categories') ? 'bg-gray-900' : '' }} text-gray-800 rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-900 dark:text-neutral-200 dark:hover:text-neutral-300" href="/manage/categories">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="shrink-0 size-4" >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                  </svg>
                Categories
            </a></li>

            <li><a wire:navigate class="w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm  text-gray-800 rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-900 dark:text-neutral-200 dark:hover:text-red-700" href="/auth/logout">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="18" height="22">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                </svg>
                Logout
              </a></li>
          </ul>
        </nav>
      </div>
      <!-- End Content -->
    </div>
  </div>
  <!-- End Sidebar -->

  <!-- Content -->
  <div class="w-full pt-10 px-4 sm:px-6 md:px-8 lg:ps-72">
    <!-- your content goes here ... -->
    {{ $slot }}
  </div>
  <!-- End Content -->
  <!-- ========== END MAIN CONTENT ========== -->
</body>
</html>
