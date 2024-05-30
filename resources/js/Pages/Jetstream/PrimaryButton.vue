<script>
// defineProps({
//     type: {
//         type: String,
//         default: "button",
//     },
// });
export default {
    data: function () {
        return {
            isShowData:this.isShow
        };
    },
    props: {
        type: {
            type: String,
            default: "button",
        },
        isShow: {
            type: Boolean,
            default: false,
        },
    },
    watch: {
        isShow: function (nv) {
            this.isShowData = nv;
            // console.log( nv)
        },
    }
};
</script>

<template>
    <button
        :type="type"
        class="inline-flex items-center justify-center px-4 py-1 bg-primary border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-secondary focus:outline-none focus:border-primary focus:ring focus:ring-indigo-200 active:bg-primary disabled:opacity-25 transition"
    >
        <div class="flex justify-center items-center" v-if="isShowData">
            <div
                class="spinner-border animate-spin inline-block w-8 h-8 border-4 rounded-full"
                role="status"
            >
            </div>
        </div>

        <slot v-else />
    </button>
</template>
