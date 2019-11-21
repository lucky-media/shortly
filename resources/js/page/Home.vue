<template>
    <layout>
        <div>
            <div class="flex flex-col lg:max-w-4xl lg:mx-auto lg:p-16 justify-center bg-white rounded-lg
                border border-grey-400 p-6">
                <div class="flex flex-col lg:flex-row items-center w-full">
                    <text-input v-model="link" placeholder="Enter long url here"/>
                    <button
                        @click="submitForm"
                        class="w-full bg-blue-400 cursor-pointer tracking-widest text-white text-base font-bold uppercase rounded-lg py-3 hover:bg-blue-500 lg:rounded-none lg:rounded-r-lg lg:w-1/5 lg:h-16"
                    >
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </layout>
</template>

<script>
    import Layout from "../layout/Layout"
    import TextInput from "../components/TextInput";

    export default {
        components: {
            Layout: Layout,
            TextInput: TextInput,
        },
        data() {
            return {
                link: ''
            }
        },
        methods: {
            submitForm(){
                console.log("Yay clicked");
                axios
                    .post(route('link.store'), {
                        url: this.link
                    })
                    .then((res) => {
                        console.log(res.data);
                    });
            }
        }
    }
</script>
