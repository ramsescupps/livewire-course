  <nav class="flex items-center justify-between flex-wrap bg-gray-800 p-4 fixed w-full z-10 top-0">
    <div class="flex items-center flex-shrink-0 text-white mr-6">
      <a class="text-white no-underline hover:text-white hover:no-underline" href="/">
        <span class="text-2xl pl-2">PROJECT KIT</span>
      </a>
    </div>

    <div class="block lg:hidden">
      <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-white hover:border-white">
        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <title>Menu</title>
          <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
        </svg>
      </button>
    </div>

    <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block pt-6 lg:pt-0" id="nav-content">
      <ul class="list-reset lg:flex justify-end flex-1 items-center">
        @guest
        <li class="mr-3">
          <a class="inline-block py-2 px-4 text-white no-underline" href="/login" wire:navigate>Log in</a>
        </li>
        <li class="mr-3">
          <a class="inline-block py-2 px-4 text-white no-underline" href="/register" wire:navigate>Sign up</a>
        </li>
        @endguest
        @auth
        <livewire:logout />
        @endauth
      </ul>
    </div>
  </nav>
