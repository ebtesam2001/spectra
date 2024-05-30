<template>
    <div class="h-[73vh] overflow-y-scroll" v-if="$page.props.user.isAdmin == 1">
        <div v-for="(item, i) in links" :key="i" class="w-full text-sm h-auto rounded-b-lg text-center px-auto ">

            <div @click="active(item)"
                :class="item.isShow ? 'bg-primary_green text-white' : ' hover:bg-secondary hover:text-white '"
                class="h-auto w-full my-1 text-center py-2 cursor-pointer rounded-md flex justify-center">
                {{ item.title }}
            </div>

            <div v-if="item.subUrl" :class="item.isShow ? ' h-auto bg-gray-100 rounded-b-lg' : ' h-0 '"
                class="transition-all block duration-300 ease-linear w-full  items-center justify-center px-4">
                <div class="mx-auto w-full ">
                    <div @click="active(subItem)" v-for="(subItem, k) in item.subUrl" :key="k"
                        :style="item.isShow ? 'font-size:10pt' : 'font-size:0pt'" :class="item.isShow ? `${subItem.isShow && item.isShow ? ' bg-secondary text-white' : ''}
                        'h-10 py-2 my-1 '` : ' h-0 '" class=" rounded-lg cursor-pointer text-center w-full px-auto items-center justify-center
                        transition-all block duration-300 ease-linear hover:text-gray-50 hover:bg-secondary focus:outline-none
                        focus:text-gray-50 ">
                        <div class="flex">
                            <img :src="subItem.icon" class="w-4 mx-2" v-if="item.isShow" />

                            <p>{{ subItem.title }}</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="h-[73vh] overflow-y-scroll" v-else-if="$page.props.user.isAdmin == 2">
        <div v-for="(item, i) in links2" :key="i" class="w-full text-sm h-auto rounded-b-lg text-center px-auto ">
            <div @click="active2(item)"
                :class="item.isShow ? 'bg-primary_green text-white' : ' hover:bg-secondary hover:text-white '"
                class="h-auto w-full my-1 text-center py-2 cursor-pointer rounded-md flex justify-center">
                {{ item.title }}
            </div>

            <div v-if="item.subUrl" :class="item.isShow ? ' h-auto bg-gray-100 rounded-b-lg' : ' h-0 '"
                class="transition-all block duration-300 ease-linear w-full  items-center justify-center px-4">
                <div class="mx-auto w-full ">
                    <div @click="active2(subItem)" v-for="(subItem, k) in item.subUrl" :key="k"
                        :style="item.isShow ? 'font-size:10pt' : 'font-size:0pt'" :class="item.isShow ? `${subItem.isShow && item.isShow ? ' bg-secondary text-white' : ''}
                        'h-10 py-2 my-1 '` : ' h-0 '" class=" rounded-lg cursor-pointer text-center w-full px-auto items-center justify-center
                        transition-all block duration-300 ease-linear hover:text-gray-50 hover:bg-secondary focus:outline-none
                        focus:text-gray-50 ">
                        <div class="flex">
                            <img :src="subItem.icon" class="w-4 mx-2" v-if="item.isShow" />

                            <p>{{ subItem.title }}</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="h-[73vh] overflow-y-scroll" v-else-if="$page.props.user.isAdmin == 3">
        <div v-for="(item, i) in links3" :key="i" class="w-full text-sm h-auto rounded-b-lg text-center px-auto ">
            <div @click="active3(item)"
                :class="item.isShow ? 'bg-primary_green text-white' : ' hover:bg-secondary hover:text-white '"
                class="h-auto w-full my-1 text-center py-2 cursor-pointer rounded-md flex justify-center">
                {{ item.title }}
            </div>

            <div v-if="item.subUrl" :class="item.isShow ? ' h-auto bg-gray-100 rounded-b-lg' : ' h-0 '"
                class="transition-all block duration-300 ease-linear w-full  items-center justify-center px-4">
                <div class="mx-auto w-full ">
                    <div @click="active3(subItem)" v-for="(subItem, k) in item.subUrl" :key="k"
                        :style="item.isShow ? 'font-size:10pt' : 'font-size:0pt'" :class="item.isShow ? `${subItem.isShow && item.isShow ? ' bg-secondary text-white' : ''}
                        'h-10 py-2 my-1 '` : ' h-0 '" class=" rounded-lg cursor-pointer text-center w-full px-auto items-center justify-center
                        transition-all block duration-300 ease-linear hover:text-gray-50 hover:bg-secondary focus:outline-none
                        focus:text-gray-50 ">
                        <div class="flex">
                            <img :src="subItem.icon" class="w-4 mx-2" v-if="item.isShow" />

                            <p>{{ subItem.title }}</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
</template>

<script>
import NavLink from '../Jetstream/NavLink.vue';
import { mdiForwardburger, mdiThemeLightDark, mdiBackburger, mdiMenu, mdiLogout, mdiAccountTie } from "@mdi/js";

export default {
    data() {
        return {
            links: [
                {
                    type: "DASHBOARD",
                    title: "Dashboard",
                    isShow: false,
                    subUrl: []
                },
                {
                    type: "CONTENT",
                    title: "ادارة المحتوى",
                    isShow: false,
                    subUrl: [
                        { title: ' عن المكتبة  ', icon: '/imgs/aboutus.png', type: 'LIBRARYINFORMATION', isShow: false },
                        { title: 'الانواع الرئيسية   ', icon: '/imgs/list.png', type: 'ALLTYPE', isShow: false },
                        { title: '   تصنيفات متنوعه     ', icon: '/imgs/sublist.png', type: 'DIFFRENTNEWSTYPE', isShow: false },
                        { title: ' المؤلفين  ', icon: '/imgs/author.png', type: 'AUTHOR', isShow: false },
                        { title: '  الكتب ', icon: '/imgs/book.png', type: 'BOOK', isShow: false },
                        { title: ' مؤلف الكتاب ', icon: '/imgs/bookauthor.png', type: 'BOOKAUTHOR', isShow: false },
                        { title: ' مختارات ', icon: '/imgs/news.png', type: 'DIFFRENTNEWS', isShow: false },
                        { title: '   الابحاث والدراسات    ', icon: '/imgs/research.png', type: 'RESEARCH', isShow: false },
                        { title: ' مؤلف البحث والدراسه ', icon: '/imgs/bookauthor.png', type: 'RESEARCHAUTHOR', isShow: false },
                        { title: ' رسائل التواصل   ', icon: '/imgs/contact.jpg', type: 'CONTACT', isShow: false },


                    ]
                },

            ],

            links2: [
                {
                    type: "DASHBOARD",
                    title: "Dashboard",
                    isShow: false,
                    subUrl: []
                },
                {
                    type: "CONTENT",
                    title: "ادارة المحتوى",
                    isShow: false,
                    subUrl: [
                        { title: 'الانواع الرئيسية   ', icon: '/imgs/list.png', type: 'ALLTYPE', isShow: false },
                        { title: ' مختارات ', icon: '/imgs/news.png', type: 'DIFFRENTNEWS', isShow: false },
                        { title: '   الابحاث والدراسات    ', icon: '/imgs/research.png', type: 'RESEARCH', isShow: false },
                        { title: ' مؤلف البحث والدراسه ', icon: '/imgs/bookauthor.png', type: 'RESEARCHAUTHOR', isShow: false },



                    ]
                },

            ],

            links3: [
                {
                    type: "DASHBOARD",
                    title: "Dashboard",
                    isShow: false,
                    subUrl: []
                },
                {
                    type: "CONTENT",
                    title: "ادارة المحتوى",
                    isShow: false,
                    subUrl: [
                        { title: 'الانواع الرئيسية   ', icon: '/imgs/list.png', type: 'ALLTYPE', isShow: false },
                        { title: ' المؤلفين  ', icon: '/imgs/author.png', type: 'AUTHOR', isShow: false },
                        { title: '  الكتب ', icon: '/imgs/book.png', type: 'BOOK', isShow: false },
                        { title: ' مؤلف الكتاب ', icon: '/imgs/bookauthor.png', type: 'BOOKAUTHOR', isShow: false },
                        { title: '   الابحاث والدراسات    ', icon: '/imgs/research.png', type: 'RESEARCH', isShow: false },
                        { title: ' مؤلف البحث والدراسه ', icon: '/imgs/bookauthor.png', type: 'RESEARCHAUTHOR', isShow: false },



                    ]
                },

            ],

            isType: {}
        }
    },
    components: { NavLink },
    created() {
        if (this.$page.props.user.isAdmin == 1) {

            this.active(this.links[0])
        }
        else if (this.$page.props.user.isAdmin == 2) {

            this.active2(this.links2[0])
        }
        else if (this.$page.props.user.isAdmin == 3) {

            this.active3(this.links3[0])
        }
    },
    methods: {
        active(item) {
            this.links = this.links.map(v => {
                let subShow = false
                v.subUrl.map(value => {
                    value.isShow = value.type === item.type
                    if (value.type === item.type) {
                        subShow = true
                    }
                    return value
                })
                if (!subShow) {
                    v.isShow = v.type === item.type
                }
                return v
            })
            this.$emit('getRecord', item);
        },
        active2(item) {
            this.links2 = this.links2.map(v => {
                let subShow = false
                v.subUrl.map(value => {
                    value.isShow = value.type === item.type
                    if (value.type === item.type) {
                        subShow = true
                    }
                    return value
                })
                if (!subShow) {
                    v.isShow = v.type === item.type
                }
                return v
            })
            this.$emit('getRecord', item);
        },
        active3(item) {
            this.links3 = this.links3.map(v => {
                let subShow = false
                v.subUrl.map(value => {
                    value.isShow = value.type === item.type
                    if (value.type === item.type) {
                        subShow = true
                    }
                    return value
                })
                if (!subShow) {
                    v.isShow = v.type === item.type
                }
                return v
            })
            this.$emit('getRecord', item);
        },
    }
}
</script>

<style></style>
