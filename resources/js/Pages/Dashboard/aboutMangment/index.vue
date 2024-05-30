<template>
    <layout>
        <!-- <div #header>asma</div> -->
        <template #header>

           About Managment
        </template>

        <div class="flex justify-end mb-5">
            <a @click="addForm = !addForm" class=" bg-teal-700 text-white p-3 rounded-lg cursor-pointer">Add</a>
        </div>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-lg">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3 text-lg ">
                            Key
                        </th>
                        <th scope="col" class="px-6 py-3 text-lg ">
                            Section
                        </th>
                        <th scope="col" class="px-6 py-3 text-lg">
                            Content
                        </th>
                        <th scope="col" class="px-6 py-3 text-lg">
                            image
                        </th>
                        <th scope="col" class="px-6 py-3 text-lg">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>

                    <tr v-for="about in about" :key="about.id">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ about.id }}
                        </th>
                        <td class="px-6 py-4">
                            {{ about.key }}
                        </td>
                        <td class="px-6 py-4">
                            {{ about. section }}
                        </td>
                        <td class="px-6 py-4">
                            {{ about.content }}
                        </td>
                        <td class="px-6 py-4">
                            <img :src="about.image" class="w-10 h-10 rounded-full" />
                        </td>


                        <td class="px-6 py-4 flex">
                            <a @click="editForm(about.id)"
                                class="   text-teal-700 font-medium hover:underline mx-2 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(18, 121, 113, 1);transform: ;msFilter:;"><path d="M19.045 7.401c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.378-.378-.88-.586-1.414-.586s-1.036.208-1.413.585L4 13.585V18h4.413L19.045 7.401zm-3-3 1.587 1.585-1.59 1.584-1.586-1.585 1.589-1.584zM6 16v-1.585l7.04-7.018 1.586 1.586L7.587 16H6zm-2 4h16v2H4z"></path></svg>
                            </a>
                            <a @click="deleteFun(about.id)"
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
                                  key
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

                        <div class="w-full">
                            <label class="mb-2" value=" Image " />
                            <input type="file" ref="image" @change="pike_image" />
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

                            <input v-model="editData.key" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-400 focus:border-ring-cyan-400 block w-full p-2.5"
                                placeholder="name " />
                        </div>

                        <div class="w-full">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">
                                Section
                                </label>

                            <input v-model="editData.section" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-400 focus:border-ring-cyan-400 block w-full p-2.5"
                                placeholder="name " />


                        </div>

                        <div class="w-full">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">
                             Content
                                </label>

                            <input v-model="editData.content" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-400 focus:border-ring-cyan-400 block w-full p-2.5"
                                placeholder="name " />


                        </div>
                        <div class="w-full">
                            <label class="mb-2" value=" Image "></label>
                            <img :src="editData.image" class="w-[200px] h-[200px] my-2" />
                            <input type="file" ref="image" name="image"
                                @input="editData.image = $event.target.files[0]" />
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
                name: [""],
                content: [""],
                image: [""],
            },
            editData: {
                id: 0,
                key: "",
                content:"",
                image: "",
            },
            addData: {
                key: "",
                content: [""],
                image: "",
            },
            addDataError: {
                key: [""],
                content: [""],
                image: [""],
            },
        }
    },
    props: {
        about: {
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
            form.append("image", this.addData.image);

            axios
                .post(route ("aboutManage.store"), form)
                .then((r) => {
                    // console.log(r)
                    this.isShow = false
                    this.image = "";
                    this.addData = {
                        key: "",
                        section: "",
                        content: "",
                        image: "",

                    };
                    this.addDataError = {
                        key: [""],
                        section: [""],
                        content: [""],
                        image: [""],

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
            for (const item of this.about) {
                if (item.id === id) {
                    this.editData = {
                        id: item.id,
                        key: item.key,
                        section: item.section,
                        content: item.content,
                        image: item.image
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
            if(typeof this.editData.image !== 'string')form.append("image", this.editData.image);
            form.append("_method", 'PUT');
            axios
                .post(
                    route("aboutManage.update", { id: this.editData.id }),
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
                        image: "",
                    };
                    this.editDataError = {
                        key: [""],
                        section: [""],
                        content: [""],
                        image: [""],
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
                .delete(route("aboutManage.destroy", { id: ids }))
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
