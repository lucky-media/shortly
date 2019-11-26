<template>
    <button @click="onClick" class="w-full bg-blue-400 cursor-pointer tracking-widest text-white text-base font-bold uppercase rounded-lg py-3 hover:bg-blue-500 lg:rounded-none lg:rounded-r-lg lg:w-1/5 lg:h-16">
        <slot>Button</slot>
    </button>
</template>

<script>
    export default {
        props: {
            onClick: {
                type: Function,
                required: true
            }
        }
    }
</script>

<style scoped>

</style>
