<template>
    <div>
        <div class="row item-list-row" v-for="(item, index)  in items">
            <div class="col-sm-3 item-list-left">
                <div class="col-xs-4">
                    <div class="item-list-count">{{ item.votes }}</div>
                    <div class="item-list-header">votes</div>
                </div>
                <div class="col-xs-4">
                    <div class="item-list-count">{{ item.answers }}</div>
                    <div class="item-list-header">answers</div>
                </div>
                <div class="col-xs-4">
                    <div class="item-list-count">{{ item.views }}</div>
                    <div class="item-list">views</div>
                </div>
            </div>
            <div class="col-sm-9 item-list-right">
                <div class="col-sm-12 item-list-title"><a v-bind:href="item.link" > {{ item.title }} </a></div>
                <div class="col-sm-12 item-list-title-bottom">
                    <div class="item-list-tags col-sm-6" >
                        <span class="label label-info col-sm-2" v-for="(tag, i)  in item.tags">{{ tag }}</span>
                    </div>
                    <div class="item-list-author col-sm-6">
                        created 2017-02-10, Jeonhwan
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        name : 'questionlist',
                data() {
            return {
                items: [
                    {id:0,votes:0,answers:0,views:0,link:'#',title:'I\'m looking for cheap place to stay for 2 or 3 days in seoul, please anyone feel free to touch me! Don\'t forget to email me!',tags:['tag1','tag2','long-tag'],author:{name:'Jeonhwan',createdDate:'2017-02-10'}},
                    {id:1,votes:2,answers:0,views:3,link:'#',title:'I\'m looking for cheap place to stay for 2 or 3 days in seoul, please anyone feel free to touch me! Don\'t forget to email me!',tags:['tag1','tag2','long-tag'],author:{name:'Jeonhwan',createdDate:'2017-02-10'}},
                    {id:0,votes:0,answers:0,views:0,link:'#',title:'I\'m looking for cheap place to stay for 2 or 3 days in seoul, please anyone feel free to touch me! Don\'t forget to email me!',tags:['tag1','tag2','long-tag'],author:{name:'Jeonhwan',createdDate:'2017-02-10'}},
                    {id:1,votes:2,answers:0,views:3,link:'#',title:'I\'m looking for cheap place to stay for 2 or 3 days in seoul, please anyone feel free to touch me! Don\'t forget to email me!',tags:['tag1','tag2','long-tag'],author:{name:'Jeonhwan',createdDate:'2017-02-10'}},
                    {id:0,votes:0,answers:0,views:0,link:'#',title:'I\'m looking for cheap place to stay for 2 or 3 days in seoul, please anyone feel free to touch me! Don\'t forget to email me!',tags:['tag1','tag2','long-tag'],author:{name:'Jeonhwan',createdDate:'2017-02-10'}},
                    {id:1,votes:2,answers:0,views:3,link:'#',title:'I\'m looking for cheap place to stay for 2 or 3 days in seoul, please anyone feel free to touch me! Don\'t forget to email me!',tags:['tag1','tag2','long-tag'],author:{name:'Jeonhwan',createdDate:'2017-02-10'}},
                    {id:0,votes:0,answers:0,views:0,link:'#',title:'I\'m looking for cheap place to stay for 2 or 3 days in seoul, please anyone feel free to touch me! Don\'t forget to email me!',tags:['tag1','tag2','long-tag'],author:{name:'Jeonhwan',createdDate:'2017-02-10'}},
                    {id:1,votes:2,answers:0,views:3,link:'#',title:'I\'m looking for cheap place to stay for 2 or 3 days in seoul, please anyone feel free to touch me! Don\'t forget to email me!',tags:['tag1','tag2','long-tag'],author:{name:'Jeonhwan',createdDate:'2017-02-10'}},
                    {id:0,votes:0,answers:0,views:0,link:'#',title:'I\'m looking for cheap place to stay for 2 or 3 days in seoul, please anyone feel free to touch me! Don\'t forget to email me!',tags:['tag1','tag2','long-tag'],author:{name:'Jeonhwan',createdDate:'2017-02-10'}},
                    {id:1,votes:2,answers:0,views:3,link:'#',title:'I\'m looking for cheap place to stay for 2 or 3 days in seoul, please anyone feel free to touch me! Don\'t forget to email me!',tags:['tag1','tag2','long-tag'],author:{name:'Jeonhwan',createdDate:'2017-02-10'}},
                    {id:0,votes:0,answers:0,views:0,link:'#',title:'I\'m looking for cheap place to stay for 2 or 3 days in seoul, please anyone feel free to touch me! Don\'t forget to email me!',tags:['tag1','tag2','long-tag'],author:{name:'Jeonhwan',createdDate:'2017-02-10'}},
                    {id:1,votes:2,answers:0,views:3,link:'#',title:'I\'m looking for cheap place to stay for 2 or 3 days in seoul, please anyone feel free to touch me! Don\'t forget to email me!',tags:['tag1','tag2','long-tag'],author:{name:'Jeonhwan',createdDate:'2017-02-10'}},
                    {id:0,votes:0,answers:0,views:0,link:'#',title:'I\'m looking for cheap place to stay for 2 or 3 days in seoul, please anyone feel free to touch me! Don\'t forget to email me!',tags:['tag1','tag2','long-tag'],author:{name:'Jeonhwan',createdDate:'2017-02-10'}},
                    {id:1,votes:2,answers:0,views:3,link:'#',title:'I\'m looking for cheap place to stay for 2 or 3 days in seoul, please anyone feel free to touch me! Don\'t forget to email me!',tags:['tag1','tag2','long-tag'],author:{name:'Jeonhwan',createdDate:'2017-02-10'}},
                    {id:0,votes:0,answers:0,views:0,link:'#',title:'I\'m looking for cheap place to stay for 2 or 3 days in seoul, please anyone feel free to touch me! Don\'t forget to email me!',tags:['tag1','tag2','long-tag'],author:{name:'Jeonhwan',createdDate:'2017-02-10'}},
                    {id:1,votes:2,answers:0,views:3,link:'#',title:'I\'m looking for cheap place to stay for 2 or 3 days in seoul, please anyone feel free to touch me! Don\'t forget to email me!',tags:['tag1','tag2','long-tag'],author:{name:'Jeonhwan',createdDate:'2017-02-10'}},
                    {id:0,votes:0,answers:0,views:0,link:'#',title:'I\'m looking for cheap place to stay for 2 or 3 days in seoul, please anyone feel free to touch me! Don\'t forget to email me!',tags:['tag1','tag2','long-tag'],author:{name:'Jeonhwan',createdDate:'2017-02-10'}},
                    {id:1,votes:2,answers:0,views:3,link:'#',title:'I\'m looking for cheap place to stay for 2 or 3 days in seoul, please anyone feel free to touch me! Don\'t forget to email me!',tags:['tag1','tag2','long-tag'],author:{name:'Jeonhwan',createdDate:'2017-02-10'}},
                    {id:0,votes:0,answers:0,views:0,link:'#',title:'I\'m looking for cheap place to stay for 2 or 3 days in seoul, please anyone feel free to touch me! Don\'t forget to email me!',tags:['tag1','tag2','long-tag'],author:{name:'Jeonhwan',createdDate:'2017-02-10'}},
                    {id:1,votes:2,answers:0,views:3,link:'#',title:'I\'m looking for cheap place to stay for 2 or 3 days in seoul, please anyone feel free to touch me! Don\'t forget to email me!',tags:['tag1','tag2','long-tag'],author:{name:'Jeonhwan',createdDate:'2017-02-10'}}
                ]
            }
        },
        methods: {

        },
        mounted() {
            console.log('Component QuestionList mounted.');
        }
    }
</script>
<style>
    .item-list-row {
        padding: 10px;
        margin-bottom: 0.7em;
        background-color: white;
        box-shadow: 0 0 4px 0 rgba(0,0,0,0.3);
    }
    .item-list-row:hover {
        box-shadow: 0 0 8px 0 rgba(0,0,0,0.4);
    }

    .item-list-right {
        padding: 0px;
    }
    .item-list-title {
        text-align: left;
    }
    .item-list-count {
        font-size: 2em;
    }
    .item-list-title-bottom {
        margin: 1em 0 0 0;
        text-align: left;
    }
    .item-list-author {
        text-align: right;
    }
    .item-list-tags {
        padding: 0px;
        text-align: left;
    }
    .item-list-tags span {
        margin: 0 0.2em;
    }
</style>