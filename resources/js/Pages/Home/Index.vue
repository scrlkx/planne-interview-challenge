<template>
    <layout title="Welcome">
        <div class="space-y-5 pb-10 flex flex-col items-center justify-center h-full w-full">
            <div class="text-blue-600 inline space-x-1">
                <span class="text-4xl">Welcome to</span>
                <span class="font-semibold text-4xl tracking-tight">Planne Invoices</span>
            </div>
            <inertia-link href="/invoices" class="bg-gray-900 hover:bg-gray-700 font-bold uppercase rounded-full px-10 py-2 text-white text-2xl">
                Start now
            </inertia-link>
        </div>
    </layout>
</template>

<script>
import Layout from '../SlotLayout'

export default {
    components: {
        Layout,
    },
}
</script>

