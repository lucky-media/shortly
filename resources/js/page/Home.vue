<template>
    <layout>
        <div>
            <div class="flex flex-col lg:max-w-4xl lg:mx-auto lg:p-16 justify-center bg-white rounded-lg
                border border-grey-400 p-6">
                <div v-if="loading">
                    <div v-if="completed">
                        <transition name="fade" appear>
                            <div class="flex flex-col">
                                <h2 class="text-3xl text-center text-grey-700 font-bold mb-8">Success ! Your link is
                                    ready</h2>
                                <div class="flex flex-col lg:flex-row items-center w-full">
                                    <text-input ref="copy" :value=" link | generateUrl "/>
                                    <v-button :on-click="copyText">
                                        Copy
                                    </v-button>
                                </div>
                            </div>
                        </transition>
                    </div>
                    <spinner v-else/>
                </div>
                <div v-else class="flex flex-col lg:flex-row items-center w-full">
                    <text-input v-model="link" placeholder="Enter long url here"/>
                    <v-button :on-click="submitForm">
                        Submit
                    </v-button>
                </div>
                <div v-if="errors !== null">
                    <transition name="fade" appear>
                        <div class="font-bold text-sm text-red-400 mt-4">{{ errors }}</div>
                    </transition>
                </div>
            </div>
        </div>
    </layout>
</template>

<script>
    import Layout from "../layout/Layout"
    import TextInput from "../components/TextInput";
    import Spinner from "../components/Spinner";
    import Button from "../components/Button";

    export default {
        components: {
            Layout: Layout,
            TextInput: TextInput,
            Spinner: Spinner,
            'v-button': Button,
        },
        data() {
            return {
                link: '',
                errors: '',
                loading: false,
                completed: false,
            }
        },
        methods: {
            submitForm() {
                this.loading = true;
                axios
                    .post(route('link.store'), {
                        url: this.link
                    })
                    .then((res) => {
                        console.log(res.data.link);
                        this.link = res.data.link.code;
                        this.completed = true;
                    })
                    .catch((error) => {
                        this.loading = false;
                        this.errors = error.response.data.errors.url[0];
                    });
            },
            copyText() {
                this.$refs.copy.select();
                document.execCommand('copy');
            }
        },
        filters: {
            generateUrl: function (value) {
                if (!value) return '';
                value = value.toString();

                return `${window.location.hostname}/${value}`;
            }
        }
    }
</script>

<style scoped>
    .fade-enter {
        opacity: 0;
    }

    .fade-enter-active {
        transition: opacity 1s;
    }

    .fade-leave {
        /* opacity: 1; */
    }

    .fade-leave-active {
        transition: opacity 1s;
        opacity: 0;
    }
</style>
