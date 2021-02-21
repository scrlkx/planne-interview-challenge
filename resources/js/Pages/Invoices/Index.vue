<template>
    <layout title="Invoices">
        <div class="flex flex-col h-full space-y-4">
            <div>
                <span class="text-xl font-semibold">Invoices</span>
                <inertia-link href="/invoices/create"
                              class="bg-green-500 hover:bg-green-400 rounded-full px-10 py-1 text-white font-semibold float-right shadow font-lg">
                    Add
                </inertia-link>
            </div>
            <div class="rounded-lg shadow border border-gray-100 overflow-hidden">
                <table>
                    <tr>
                        <th class="w-20">ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th></th>
                    </tr>
                    <tr v-if="invoices.data.length" v-for="invoice in invoices.data">
                        <td class="w-20">{{ invoice.id }}</td>
                        <td>{{ invoice.title }}</td>
                        <td>{{ invoice.description }}</td>
                        <td class="text-right">
                            <inertia-link preserve-scroll as="button" method="post" :href="`/invoices/${invoice.id}/delete`"
                                          class="bg-red-500 hover:bg-red-400 rounded-full px-5 py-1 text-white shadow">
                                Delete
                            </inertia-link>
                        </td>
                    </tr>
                    <tr v-else>
                        <td colspan="4">
                            No records to show.
                        </td>
                    </tr>
                </table>
            </div>
            <div class="flex flex-col text-center">
                <div>
                    <span>Page {{ invoices.current_page }} of {{ invoices.last_page }} ({{
                            invoices.total
                        }} results)</span>
                </div>
                <div>
                    <inertia-link preserve-scroll :disabled="invoices.prev_page_url == null" :href="invoices.prev_page_url || ''"
                                  :class="`inline-block bg-gray-500 rounded-l-lg px-5 py-1 text-white shadow w-32 ${invoices.prev_page_url == null ? 'text-gray-300 cursor-not-allowed' : 'hover:bg-gray-400 '}`">
                        Previous
                    </inertia-link>
                    <inertia-link preserve-scroll :disabled="invoices.next_page_url == null" :href="invoices.next_page_url || ''"
                                  :class="`inline-block bg-gray-500 rounded-r-lg px-5 py-1 text-white shadow w-32 ${invoices.next_page_url == null ? 'text-gray-300 cursor-not-allowed' : 'hover:bg-gray-400 '}`">
                        Next
                    </inertia-link>
                </div>
            </div>
        </div>
    </layout>
</template>

<script>
import Layout from '../PageLayout'

export default {
    components: {
        Layout,
    },
    props: {
        invoices: Object,
    },
    mounted() {
        console.log(this.invoices);
    }
}
</script>

