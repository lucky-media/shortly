<template>
    <div class="w-full h-12 rounded-lg bg-grey-100 p-4 inline-flex items-center mb-4 lg:h-16 lg:rounded-none lg:rounded-l-lg lg:w-4/5 lg:mb-0">
        <icon name="link" class="fill-current h-8 w-8 text-grey-700 mr-4"/>
        <input ref="input"
            class="appearance-none w-full bg-transparent h-16 placeholder-grey-700 text-grey-700 font-semibold outline-none"
            :placeholder="placeholder" :type="type" @input="$emit('input', $event.target.value)">
    </div>
</template>

<script>
    import Icon from "../components/Icon"
    export default {
        components: {
            Icon: Icon
        },
        props: {
            placeholder: String,
            type: {
                type: String,
                default: 'text'
            }
        },
        methods: {
            focus() {
                this.$refs.input.focus()
            },
            select() {
                this.$refs.input.select()
            },
            setSelectionRange(start, end) {
                this.$refs.input.setSelectionRange(start, end)
            },
        },
    }
</script>
