<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <input type="text" v-model="title"></input>
                <div class="panel panel-default">
                    <div class="panel-heading">{{ title }}</div>
                    <div class="panel-body">
                       HaHa I'm an example component! {{ title }}
                    </div>
                </div>
                <div>
                    <p v-if="showName">{{ user.firstName }}</p>
                    <p v-if="showName">{{ user.lastName }}</p>
                </div>
                <ul>
                    <li v-for="item in items">{{ item.title }}</li>
                </ul>
                <button v-on:click="greet('test')">Say greeting!</button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name : 'example',
        data() {
            return {
                title : 'test title',
                user: {
                    firstName: 'John',
                    lastName : 'Won'
                },
                showName : true,
                items: [
                    {title:'Item One'},
                    {title:'Item Two'},
                    {title:'Item Three'}
                ]
            }
        },
        methods: {
           greet: function(text) {
                common.trace(text);
           }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
