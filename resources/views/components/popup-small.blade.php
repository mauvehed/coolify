@props(['title' => 'Default title', 'description' => 'Default Description', 'buttonText' => 'Default Button Text'])
<div x-data="{
    bannerVisible: true,
    bannerVisibleAfter: 100
}" x-show="bannerVisible" x-transition:enter="transition ease-out duration-100"
    x-transition:enter-start="translate-y-full" x-transition:enter-end="translate-y-0"
    x-transition:leave="transition ease-in duration-300" x-transition:leave-start="translate-y-0"
    x-transition:leave-end="translate-y-full" x-init="setTimeout(() => { bannerVisible = true }, bannerVisibleAfter);"
    class="fixed bottom-0 right-0  h-auto duration-300 ease-out px-5 pb-5 max-w-[46rem] z-[999]"
    x-cloak>
    <div
        class="flex flex-col items-center justify-between w-full h-full max-w-4xl p-6 mx-auto bg-white border shadow-lg lg:border-t dark:border-coolgray-300 dark:bg-coolgray-100 lg:p-8 lg:flex-row sm:rounded">
        <div
            class="flex flex-col items-start h-full pb-0 text-xs lg:items-center lg:flex-row lg:pr-6 lg:space-x-5 dark:text-neutral-300 ">
            @if (isset($icon))
                {{ $icon }}

            @endif

            <div class="pt-0">
                <h4 class="w-full mb-1 text-base font-bold leading-none -translate-y-1 lg:text-xl text-neutral-900 dark:text-white">
                    {{ $title }}
                </h4>
                <p class="">{{ $description }}</span></p>
            </div>
        </div>
    </div>
</div>
