<template>

    <layout>
        <!-- <div #header>asma</div> -->
        <template #header>

            client
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
                           First Name
                        </th>
                        <th scope="col" class="px-6 py-3 text-lg">
                           Last Name
                        </th>
                        <th scope="col" class="px-6 py-3 text-lg">
                            Image
                        </th>
                        <th scope="col" class="px-6 py-3 text-lg">
                            Action
                        </th>


                    </tr>
                </thead>
                <tbody>

                    <tr v-for="client in clients" :key="client.id">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ client.id }}
                        </th>
                        <td class="px-6 py-4">
                            {{ client.firstname }}
                        </td>
                        <td class="px-6 py-4">
                            {{ client.lastname }}
                        </td>
                        <td class="px-6 py-4">
                            <img :src="client.image" class="w-10 h-10 rounded-full" />
                        </td>
                        <td class="px-6 py-4 flex">
                            <a @click="editForm(client.id)"
                                class="   text-teal-700 font-medium hover:underline mx-2 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(18, 121, 113, 1);transform: ;msFilter:;"><path d="M19.045 7.401c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.378-.378-.88-.586-1.414-.586s-1.036.208-1.413.585L4 13.585V18h4.413L19.045 7.401zm-3-3 1.587 1.585-1.59 1.584-1.586-1.585 1.589-1.584zM6 16v-1.585l7.04-7.018 1.586 1.586L7.587 16H6zm-2 4h16v2H4z"></path></svg>
                            </a>
                            <a @click="deleteFun(client.id)"
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
                                   First Name
                                </label>
                                <input type="text" id="name" v-model="addData.firstname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-400 focus:border-ring-cyan-400 block w-full p-2.5
                    " required />
                            </div>

                        </div>

                        <div class="w-full">
                            <div class="mb-5">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                   Last Name
                                </label>
                                <input type="text" id="name" v-model="addData.lastname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-400 focus:border-ring-cyan-400 block w-full p-2.5
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
                                First Name
                            </label>

                            <input v-model="editData.firstname" type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-400 focus:border-ring-cyan-400 block w-full p-2.5"
                                placeholder="name " />
                        </div>

                        <div class="w-full">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">
                                Last Name
                            </label>

                            <input v-model="editData.lastname" type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-400 focus:border-ring-cyan-400 block w-full p-2.5"
                                placeholder="name " />
                        </div>



                        <div class="w-full mt-6">
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
                firstname: [""],
                lastname: [""],
                image: [""],
            },
            editData: {
                id: 0,
                firstname: [""],
                lastname: [""],
                image: "",
            },
            addData: {
                firstname: [""],
                lastname: [""],
                image: "",
            },
            addDataError: {
                firstname: [""],
                lastname: [""],
                image: [""],
            },
        }
    },
    props: {
        clients: {
            type: Array,
            default: []
        }
    },
    components: {
        layout,
        MyForm
    },
    methods: {
        store() {
            this.isShow = true
            const form = new FormData();
            form.append("firstname", this.addData.firstname);
            form.append("lastname", this.addData.lastname);
            form.append("image", this.addData.image);

            axios
                .post(route("clients.store"), form)
                .then((r) => {
                    // console.log(r)
                    this.isShow = false
                    this.image = "";
                    this.addData = {
                        firstname: "",
                        lastname: "",
                        image: "",

                    };
                    this.addDataError = {
                        firstname: [""],
                        lastname: [""],
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
                            // name: er.response.data.errors.name
                            //     ? er.response.data.errors.name
                            //     : [""],
                            //     image: er.response.data.errors
                            //     .image
                            //     ? er.response.data.errors.image
                            //     : [""],
                        };
                    }
                });

        },
        pike_image() {
            this.addData.image = this.$refs["image"].files[0];
        },
        editForm(id) {
            for (const item of this.clients) {
                if (item.id === id) {
                    this.editData = {
                        id: item.id,
                        firstname: item.firstname,
                        lastname: item.lastname,
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
            form.append("firstname", this.editData.firstname);
            form.append("lastname", this.editData.lastname);
            if(typeof this.editData.image !== 'string')form.append("image", this.editData.image);
            form.append("_method", 'PUT');
            axios
                .post(
                    route("clients.update", { id: this.editData.id }),
                    form
                )
                .then((r) => {
                    this.updateForm = false;
                    window.location.reload();
                    this.image = "";
                    this.editData = {
                        firstname: "",
                        lastname: "",
                        image: "",
                    };
                    this.editDataError = {
                        firstname: [""],
                        lastname:[""],
                        image: [""],
                    };
                })
                .catch((er) => {
                    this.isShow = false
                    console.log(er.response);
                    if (er.response) {
                        this.editDataError = {
                            // name: er.response.data.errors.name
                            //     ? er.response.data.errors.name
                            //     : [""],
                            //     image: er.response.data.errors
                            //     .image
                            //     ? er.response.data.errors.image
                            //     : [""],
                        };
                    }
                });
        },
        deleteFun(ids) {
            axios
                .delete(route("clients.destroy", { id: ids }))
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

