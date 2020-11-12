<template>
    <div class="row">
            <div class="col-md-8 col-md-offset-2">
            
                <form-evento-component @new = "addEvento"></form-evento-component>
              
                    
            </div>
    </div>
</template>

<script>
    export default {
        props:['test'],
        data() {
            return{
               Tests : [] 
            }
        },
        mounted() {
           //  axios.get('/test').then((response) => {
             //   this.tests = response.data;
            //});
        }, 
        methods : {
            addEvento(test){
                this.tests.push(test);
            }
        }
    }
</script>
