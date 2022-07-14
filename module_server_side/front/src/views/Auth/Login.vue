<template>
    <div class="container">
        <div class="form-login">
            <h1>PPDB SMK IFSU</h1>
            <form action="">
                <div class="fg">
                    <label for="username">Username</label>
                    <input class="form-control" type="text">
                </div>
                  <div class="fg">
                    <label for="password">password</label>
                    <input class="form-control" type="password">
                </div>
                  <div class="fg">
                    <button class="btn">Login</button>
                </div>
            </form>
        </div>
    </div>
</template>

<style>

    @import url('../../assets/style.css');

</style>

<script>
    
    export default {
        mounted() {
            document.title = "Login"
        },
    }

</script>