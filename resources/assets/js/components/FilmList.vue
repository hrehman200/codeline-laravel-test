<template>
    <div class='row'>
        <ul>
            <li v-if='list.length === 0'>There are no films yet!</li>
            <li class="list-group-item" v-for="(film, index) in list">
                <a :href="'/films/'+film.slug">{{ film.name }}</a>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                list: [],
                film: {
                    name: '',
                    slug: ''
                }
            };
        },

        created() {
            this.fetchFilms();
        },

        mounted() {
            console.log('Component mounted.')
        },


        methods: {
            fetchFilms() {
                axios.get('api/films').then((res) => {
                    this.list = res.data;
                });
            }
        }
    }
</script>