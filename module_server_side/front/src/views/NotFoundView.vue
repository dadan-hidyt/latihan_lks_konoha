<template>
    <div class="not-found">
        <h1>404 Not found</h1>
        <p>
            Halaman yang kamu cari tidak di temukan
        </p>
    </div>
</template>
<style>

.not-found{
    text-align: center;
    margin: 80px auto;
}

</style>

<script>

export default {
    mounted() {
        document.title = '404 not found'
    }
}

</script>