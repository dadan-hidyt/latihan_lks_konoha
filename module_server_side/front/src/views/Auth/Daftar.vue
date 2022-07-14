<template>
    <div class="container">
       <div class="auth-form">
            <h2>Daftar</h2>
            <form action="">

            </form>
       </div>
    </div>
</template>
<style scoped>
@import url('../../assets/style.css');
</style>

<script>
import Dadan from '../../components/Footer.vue'
export default {
    data(){
        return {
            message : 'Hello world'
        }
    },
    component : {
        Dadan
    }
    ,
    mounted() {
        document.title = 'Daftar'
    },
}
</script>