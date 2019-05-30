<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="form-group">
                    <label class= "col-md-3" for="">
                        Actividad Comercial
                    </label>
                    <div class="col-md-9">
                        <select2 :options="actividades" v-model="Actividade" @input="getActividades"></select>
                    </div>     
                </div>
                <div class="form-group">
                    <label class="col-md-3" for="">
                        Categorías
                    </label>
                    <div class="col-md-9">
                        <select2 :options="categorias" v-model="Categoria"></select2>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    import VueAxios from 'vue-axios';
    vue.use(VueAxios, axios);
    template: '#selec2-template'
    export default
    {
        mounted()
        {
            Vue.axios.get('getActividades')
            .then((response)=> {
                this.actividades = response.data;
            })
        },
        data: function()
        {
            return {
                Actividade = '0',
                Categoria = '0',
                actividades:[],
                categorias:[],
            }
        },
        methods: 
        {
            getCategorias()
            {
                Vue.axios.get('getCategorias/'+this.Actividade)
                .then((response)=>{
                    this.categorias = response.data;
                })
            }
        }
    }
</script>
