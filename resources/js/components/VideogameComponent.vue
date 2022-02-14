<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-5" v-for="videogame in videogames" :key="videogame.id">
                    <div class="card-header">
                        <h3> {{videogame.title}} </h3>
                        <h6> {{videogame.subtitle}} </h6>
                    </div>

                    <div class="card-body">
                        <span>Rating&colon; {{videogame.rating}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                videogames: [],
            }
        },
        mounted() {
            axios.get('/api/videogames/get')
                .then(r => {
                    this.videogames = r.data;
                })
                .catch(err => console.error(err))
        }
    }
</script>
