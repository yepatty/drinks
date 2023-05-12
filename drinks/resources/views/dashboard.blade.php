<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div style="background-color: lightyellow" class="p-6 text-gray-900 dark:text-gray-100 text-center">
                    <span>
                        {{ __("You're logged in!") }}
                        <br>
                        恭喜登入成功。
                    </span>
                    <p>
                        請點擊Profile，填寫個人資料。
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
