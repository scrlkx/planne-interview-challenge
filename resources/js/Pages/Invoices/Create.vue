<template>
    <layout title="Add invoice">
        <form @submit.prevent="submit">
            <div class="flex flex-col h-full space-y-4">
                <div>
                    <span class="text-xl font-semibold">Add invoice</span>
                    <button type="submit"
                                  class="bg-green-500 hover:bg-green-400 rounded-full px-10 py-1 text-white font-semibold float-right shadow font-lg">
                        Save
                    </button>
                </div>
                <div class="rounded-lg shadow border border-gray-100 overflow-hidden p-5">
                    <div class="space-y-5">
                        <div class="flex flex-col">
                            <label for="title">Title</label>
                            <input id="title" v-model="form.title" maxlength="80" type="text"
                                   class="border border-gray-200 rounded-lg max-w-sm px-2 py-1"/>
                        </div>
                        <div class="flex flex-col">
                            <label for="description">Description</label>
                            <textarea id="description" v-model="form.description" rows="4" maxlength="200"
                                      class="border border-gray-200 rounded-lg max-w-xl px-2 py-1"/>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </layout>
</template>

<script>
import Layout from '../PageLayout'

export default {
    components: {
        Layout,
    },
    data() {
        return {
            form: {
                title: null,
                description: null,
            },
        }
    },
    methods: {
        submit() {
            this.$inertia.post('/invoices/store', this.form)
        },
    },
}
</script>

