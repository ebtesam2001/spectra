<template>

    <layout>
        <!-- <div #header>asma</div> -->
        <template #header>
            Content Mangment
        </template>

        <div class="flex justify-end mb-5">
            <a @click="addForm = !addForm" class=" bg-teal-700 text-white p-3 rounded-lg cursor-pointer">Add</a>
        </div>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-lg">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3 text-lg">
                            KEY
                        </th>
                        <th scope="col" class="px-6 py-3 text-lg">
                            SECTION
                        </th>
                        <th scope="col" class="px-6 py-3 text-lg">
                            CONTENT
                        </th>
                        <th scope="col" class="px-6 py-3 text-lg">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>

                    <tr v-for="contentmangment in contentmangments" :key="contentmangment.id">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ contentmangment.id }}
                        </th>
                        <td class="px-6 py-4">
                            {{ contentmangment.key }}
                        </td>
                        <td class="px-6 py-4">
                            {{ contentmangment.section }}
                        </td>
                        <td class="px-6 py-4">
                            {{ contentmangment.content }}
                        </td>
                        <td class="px-6 py-4 flex">
                            <a @click="editForm(contentmangment.id)"
                                class="   text-teal-700 font-medium hover:underline mx-2 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(18, 121, 113, 1);transform: ;msFilter:;"><path d="M19.045 7.401c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.378-.378-.88-.586-1.414-.586s-1.036.208-1.413.585L4 13.585V18h4.413L19.045 7.401zm-3-3 1.587 1.585-1.59 1.584-1.586-1.585 1.589-1.584zM6 16v-1.585l7.04-7.018 1.586 1.586L7.587 16H6zm-2 4h16v2H4z"></path></svg>
                            </a>
                            <a @click="deleteFun(contentmangment.id)"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(18, 121, 113, 1);transform: ;msFilter:;"><path d="M6 7H5v13a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7H6zm10.618-3L15 2H9L7.382 4H3v2h18V4z"></path></svg></a>
                        </td>
                    </tr>
                </tbody>


            </table>

            <MyForm :show="addForm">

                <template #model-title>
                    <div class="flex items-center">
                        <h2 class="text-lg mx-au font-medium text-primary " v-text="'Add'"></h2>
                    </div>
                </template>
                <!-- model-content -->

                <template #model-content>
                    <div class="my-6">
                        <div class="w-full">
                            <div class="mb-5">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Key
                                </label>
                                <input type="text" id="name" v-model="addData.key" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-400 focus:border-ring-cyan-400 block w-full p-2.5
    " required />
                            </div>

                        </div>

                        <div class="w-full">
                            <div class="mb-5">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Section
                                </label>
                                <input type="text" id="name" v-model="addData.section" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-400 focus:border-ring-cyan-400 block w-full p-2.5
    " required />
                            </div>

                        </div>

                        <div class="w-full">
                            <div class="mb-5">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Content
                                </label>
                                <input type="text" id="name" v-model="addData.content" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-400 focus:border-ring-cyan-400 block w-full p-2.5
    " required />
                            </div>

                        </div>
                    </div>
                </template>

                <template #model-footer>
                    <div class="w-full flex items-center justify-between">
                        <button class="bg-teal-600 p-3 rounded-md" @click="store" :isShow="isShow"> save </button>
                        <button class="bg-red-600 p-3 rounded-md" @click="addForm = false">
                            cancle
                        </button>
                    </div>
                </template>
            </MyForm>

            <MyForm :show="updateForm">

                <template #model-title>
                    <div class="flex items-center">
                        <h2 class="text-lg mx-au font-medium text-primary" v-text="'Edit'"></h2>
                        <!-- {{ editData.id }} -->
                    </div>
                </template>
                <!-- model-content -->

                <template #model-content>
                    <div class="my-6 ">

                        <div class="w-full">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">
                                Key
                            </label>

                            <input v-model="editData.key" type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-400 focus:border-ring-cyan-400 block w-full p-2.5"
                                placeholder="name " />


                        </div>


                        <div class="w-full mt-6">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">
                                Section
                            </label>

                            <input v-model="editData.section" type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-400 focus:border-ring-cyan-400 block w-full p-2.5"
                                placeholder="name " />


                        </div>
                        <div class="w-full mt-6">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">
                                Content
                            </label>

                            <input v-model="editData.content" type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-400 focus:border-ring-cyan-400 block w-full p-2.5"
                                placeholder="name " />


                        </div>
                    </div>
                </template>

                <template #model-footer>
                    <div class="w-full flex items-center justify-between">
                        <button class="bg-teal-600 p-3 rounded-md" @click="update" :isShow="isShow"> save </button>
                        <button class="bg-red-600 p-3 rounded-md" @click="updateForm = false">
                            cancle
                        </button>
                    </div>
                </template>
            </MyForm>

        </div>

    </layout>

</template>





<script>
import layout from '@/Layouts/DashboardLayout.vue';
import MyForm from "../my_form.vue";
export default {
    data: function () {
        return {
            addForm: false,
            updateForm: false,
            editDataError: {
                key: [""],
                section: [""],
                content: [""],
            },
            editData: {
                id: 0,
                key: "",
                section: "",
                content: "",
            },
            addData: {
                key: "",
                section: "",
                content: "",
            },
            addDataError: {
                key: [""],
                section: [""],
                content: [""],
            },
        }
    },
    props: {
        contentmangments: {
            type: Array,
            default: []
        },
    },
    components: {
        layout,
        MyForm
    },
    methods: {
        store() {
            this.isShow = true
            const form = new FormData();
            form.append("key", this.addData.key);
            form.append("section", this.addData.section);
            form.append("content", this.addData.content);

            axios
                .post(route("contentmangment.store"), form)
                .then((r) => {
                    // console.log(r)
                    this.isShow = false
                    this.image = "";
                    this.addData = {
                        key: "",
                        section: "",
                        content: "",
                    };
                    this.addDataError = {
                        key: [""],
                        section: [""],
                        content: [""],

                    };

                    this.addForm = false;
                    window.location.reload();
                })
                .catch((er) => {
                    this.isShow = false
                    console.log(er.response);
                    if (er.response) {
                        this.addDataError = {
                        };
                    }
                });

        },
        pike_image() {
            this.addData.image = this.$refs["image"].files[0];
        },
        editForm(id) {
            for (const item of this.contentmangments) {
                if (item.id === id) {
                    this.editData = {
                        id: item.id,
                        key: item.key,
                        section: item.section,
                        content: item.content
                    };
                    // this.image = item.image;
                    break;
                }
            }
            this.updateForm = true;
        },
        update() {
            const form = new FormData();
            form.append("key", this.editData.key);
            form.append("section", this.editData.section);
            form.append("content", this.editData.content);
            form.append("_method", 'PUT');
            axios
                .post(
                    route("contentmangment.update", { id: this.editData.id }),
                    form
                )
                .then((r) => {
                    this.updateForm = false;
                    window.location.reload();
                    this.image = "";
                    this.editData = {
                        key: "",
                        section: "",
                        content: "",
                    };
                    this.editDataError = {
                        key: [""],
                        section: [""],
                        content: [""],

                    };
                })
                .catch((er) => {
                    this.isShow = false
                    console.log(er.response);
                    if (er.response) {
                        this.editDataError = {
                        };
                    }
                });
        },
        deleteFun(ids) {
            axios
                .delete(route("contentmangment.destroy", { id: ids }))
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
