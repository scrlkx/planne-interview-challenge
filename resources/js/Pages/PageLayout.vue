<template>
    <header class="bg-blue-600 h-20 maxx w-full">
        <div class="container mx-auto h-full flex items-center">
            <inertia-link href="/">
                <span class="select-none font-semibold text-3xl tracking-tight text-white">Planne Invoices</span>
            </inertia-link>
        </div>
    </header>
    <div class="container mx-auto flex-1">
        <main class="h-full py-10">
            <slot/>
        </main>
    </div>
</template>

<script>
export default {
    props: {
        title: String,
    },
    watch: {
        title: {
            immediate: true,
            handler(title) {
                document.title = `Planne Invoices | ${title}`
            },
        },
    },
}
</script>
