<template>
    <div class="container mx-auto h-full">
        <main class="h-full">
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
