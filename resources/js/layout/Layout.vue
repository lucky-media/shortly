<template>
    <div class="bg-lines h-screen bg-grey-100">
        <div class="container mx-auto px-5 lg:px-0">
            <div class="flex flex-col h-screen justify-center">
                <h1 class="text-3xl font-bold text-white text-center mb-6 lg:-mt-24 lg:mb-24 lg:text-5xl">
                    Simple URL Shortener
                </h1>
                <slot></slot>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Layout"
    }
</script>

<style scoped>

</style>
