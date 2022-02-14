<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-5" v-for="videogame in videogames" :key="videogame.id">
                    <div class="card-header">
                        <h3>{{videogame.id}} - {{videogame.title}} </h3>
                        <h6> {{videogame.subtitle}} </h6>
                    </div>

                    <div class="card-body">
                        <span>Rating&colon; {{videogame.rating}}</span>
                    </div>

                    <div class="card-footer">
                        <button @click="deleteVideogame(videogame.id)" class="btn btn-danger">Delete</button>
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

        methods: {
            deleteVideogame(id) {
                axios.get(`api/videogame/delete/${id}`)
                    .then(() => {
                        const gameInd = this.getIndexById(id);
                        this.videogames.splice(gameInd, 1);
                    })
                    .catch(err => console.error(err))
            },

            getIndexById(id) {
                for (let i = 0; i < this.videogames.length; i++) {
                    const game = this.videogames[i];

                    if(game.id == id) {
                        return i;
                    }
                }
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
