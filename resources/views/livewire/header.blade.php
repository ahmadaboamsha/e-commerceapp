<header class="bg-white shadow-sm">
    <div class="mx-auto flex h-16 max-w-screen-xl items-center gap-8 px-4 sm:px-6 lg:px-8">
      <a class="block text-blue-600" href="/">
        <span class="sr-only">Home</span>
        <svg fill="#1b6ebb" height="50px" width="50px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 300.00 300.00" xml:space="preserve" stroke="#1b6ebb">
            <g id="SVGRepo_bgCarrier" stroke-width="0"/>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
            <g id="SVGRepo_iconCarrier"> <g> <path d="M278.891,244.965V105.231c0-4.143-3.357-7.5-7.5-7.5h-42.398V65.597c0-4.143-3.357-7.5-7.5-7.5H189.17V47.555 c0-21.6-17.57-39.173-39.168-39.173s-39.168,17.573-39.168,39.173v10.542H78.512c-4.143,0-7.5,3.357-7.5,7.5v32.134H28.613 c-4.142,0-7.5,3.357-7.5,7.5v139.734C9.438,245.174,0,254.721,0,266.446v3.676c0,11.855,9.645,21.5,21.5,21.5h257.004 c11.855,0,21.5-9.645,21.5-21.5v-3.676C300.004,254.721,290.566,245.174,278.891,244.965z M78.512,216.954h142.98 c4.143,0,7.5-3.357,7.5-7.5v-71.111h11.411v105.075H59.602V138.342h11.41v71.111C71.012,213.596,74.369,216.954,78.512,216.954z M263.891,112.731v130.687h-8.487V130.842c0-4.143-3.357-7.5-7.5-7.5h-18.911v-10.611H263.891z M125.834,47.555 c0-13.329,10.842-24.173,24.168-24.173s24.168,10.844,24.168,24.173v10.542h-48.336V47.555z M86.012,73.097h24.822V85.94 c0,4.143,3.357,7.5,7.5,7.5c4.143,0,7.5-3.357,7.5-7.5V73.097h48.336V85.94c0,4.143,3.357,7.5,7.5,7.5c4.143,0,7.5-3.357,7.5-7.5 V73.097h24.822v128.856H86.012V73.097z M36.113,112.731h34.899v10.611h-18.91c-4.143,0-7.5,3.357-7.5,7.5v112.575h-8.488V112.731z M285.004,270.122c0,3.584-2.916,6.5-6.5,6.5H21.5c-3.584,0-6.5-2.916-6.5-6.5v-3.676c0-3.584,2.916-6.5,6.5-6.5h257.004 c3.584,0,6.5,2.916,6.5,6.5V270.122z"/> <polygon points="171.885,153.601 123.229,134.089 142.688,182.867 147.432,168.114 167.047,187.771 176.774,178.018 157.164,158.358 "/> </g> </g>
            </svg>
      </a>

      <div class="flex flex-1 items-center justify-end md:justify-between">
        <nav aria-label="Global" class="hidden md:block">
          <ul class="flex items-center gap-6 text-sm">
            <li>
              <a class="text-gray-500 {{Request::is('/') ? 'text-gray-700 font-bold' : ''}} transition hover:text-gray-500/75" wire:navigate href="/"> Home</a>
            </li>
            <li>
              <a class="text-gray-500 {{Request::is('all/products') ? 'text-gray-700 font-bold' : ''}} transition hover:text-gray-500/75" wire:navigate href="/all/products"> Explore More</a>
            </li>

            <li>
              <a class="text-gray-500 {{Request::is('about') ? 'text-gray-700 font-bold' : ''}} transition hover:text-gray-500/75" wire:navigate href="/about">  About  </a>
            </li>

            <li>
              <a class="text-gray-500 {{Request::is('contacts') ? 'text-gray-700 font-bold' : ''}} transition hover:text-gray-500/75" wire:navigate href="/contacts"> Contacts </a>
            </li>
          </ul>
        </nav>

        <div class="flex items-center gap-4">
          <div class=" sm:flex   sm:gap-4">
            @if (auth()->check())
                <livewire:shopping-cart-icon />
                <a href="/auth/logout">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8 hover:text-red-700">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                  </svg>
                </a>

            @else
              <a
                class="block rounded-md bg-blue-600 px-5 py-2.5 text-sm font-medium text-white transition hover:bg-blue-700"
                href="/auth/login"
              >
                Get Started
              </a>
            @endif

          </div>

          <button
            class="block rounded bg-gray-100 p-2.5 text-gray-600 transition hover:text-gray-600/75 md:hidden"
          >
            <span class="sr-only">Toggle menu</span>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="2"
            >
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </header>
