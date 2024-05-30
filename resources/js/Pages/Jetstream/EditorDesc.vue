<template>
    <div>
        <Editor
            v-model="text"
            @change="sendData(text)"
            class="text-gray-700 bg-white my-5 rounded-lg"
            api-key="nb3rntk5eauqa36estgm2ysg1kod34vjtkxslxzy0saja27i"
            :init="{
                menubar: false,
                skin: 'oxide',
                content_css: 'light',
                plugins: [
                    'advlist autolink lists link image charmap print preview anchor',
                    'searchreplace visualblocks code fullscreen',
                    'insertdatetime media table paste code help wordcount',
                ],
                toolbar:
                    'undo redo | formatselect | bold italic backcolor | \
                    alignleft aligncenter alignright alignjustify | \
                    bullist numlist outdent indent | removeformat | help',
            }"
        />
    </div>
</template>
<script>
import Editor from "@tinymce/tinymce-vue";
export default {
    components: {
        Editor,
    },
    props: {
        sendData: Function,
        vtext: {
            type: String,
            default: "",
        },
    },
    data() {
        return {
            text: "",
        };
    },
    created() {
        this.text = this.vtext;
    },
};
</script>
