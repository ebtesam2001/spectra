<template>
    <layout>
        <!-- <div #header>asma</div> -->

        <template #header>

            Contact
        </template>

        <!-- <div class="flex justify-end mb-5">
            <a @click="addForm = !addForm" class=" bg-teal-700 text-white p-3 rounded-lg cursor-pointer">Add</a>
        </div> -->

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-lg">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3 text-lg">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3 text-lg">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3 text-lg">
                            Massege
                        </th>
                        <th scope="col" class="px-6 py-3 text-lg">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="contact in contacts" :key="contact.id">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ contact.id }}
                        </th>
                        <td class="px-6 py-4">
                            {{ contact.name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ contact.email }}
                        </td>

                        <td class="px-6 py-4 flex">
                            <!-- <a @click="editForm(contact.id)"
                                class="   text-teal-700 font-medium hover:underline mx-2 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(18, 121, 113, 1);transform: ;msFilter:;"><path d="M19.045 7.401c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.378-.378-.88-.586-1.414-.586s-1.036.208-1.413.585L4 13.585V18h4.413L19.045 7.401zm-3-3 1.587 1.585-1.59 1.584-1.586-1.585 1.589-1.584zM6 16v-1.585l7.04-7.018 1.586 1.586L7.587 16H6zm-2 4h16v2H4z"></path></svg>
                            </a> -->
                            <a @click="deleteFun(contact.id)"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(18, 121, 113, 1);transform: ;msFilter:;"><path d="M6 7H5v13a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7H6zm10.618-3L15 2H9L7.382 4H3v2h18V4z"></path></svg></a>
                        </td>
                    </tr>
                </tbody>
            </table>




        </div>

    </layout>

</template>





<script>
import layout from '@/Layouts/DashboardLayout.vue';
import MyForm from "../my_form.vue";
export default {
    data: function () {
        return {

        }
    },
    props: {
        contacts: {
            type: Array,
            default: []
        },
    },
    components: {
        layout,
        MyForm
    },
    methods: {
        deleteFun(ids) {
            axios
                .delete(route("contacts.destroy", { id: ids }))
                .then((r) => {
                    window.location.reload();
                })
                .catch((er) => {
                    console.log(er);

                });
        },
    }
};
</script>



