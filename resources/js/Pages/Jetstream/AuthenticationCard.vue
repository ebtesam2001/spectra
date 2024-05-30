<template>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div>
            <slot name="logo" />
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-8 bg-gradient-to-r from-primary_darkblue to-primary_green shadow-md overflow-hidden sm:rounded-2xl">
            <slot />
        </div>
    </div>
</template>
