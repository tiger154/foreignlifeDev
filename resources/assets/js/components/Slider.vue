<template>
    <!-- Full Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide " >
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div  v-bind:class="[itemClass, index == 0 ? activeClass : '']"  v-for="(item, index)  in items">
                <!-- Set the first background image using inline CSS below. -->
                <!--div class="fill"  v-bind:style="{ backgroundImage: 'url(' + item.url + ')' }"></div-->
                <div class="fill">
                    <img v-bind:src="item.img">
                </div>
                <div class="carousel-caption">
                    <h2> {{ item.caption }} </h2>
                </div>
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
</template>

<script>
    export default {
        name : 'slider',
                data() {
            return {
                itemClass : 'item',
                activeClass : 'active',
                items: [
                    {url:'http://dev.sinbie.com:8000/img/slider/slider-1-long.jpg', caption:'Hey New(新)bie!', img :'/img/slider/icon/earth.png'},
                    {url:'http://dev.sinbie.com:8000/img/slider/slider-1-long.jpg', caption:'Room', img :'/img/slider/icon/home_cool_white.png'},
                    {url:'http://dev.sinbie.com:8000/img/slider/slider-1-long.jpg', caption:'For Sale', img :'/img/slider/icon/bag_red.png'}
                ]
            }
        },
        methods: {

        },
        mounted() {
            console.log('Component slider mounted.');
            $(this.$el).carousel({
                interval : 1000 * 200,
                pause: "hover"
            });
        }
    }
</script>


<style scoped>
    .carousel,
    .item,
    .active {
        height: 100%;
    }
    .carousel-inner {
        height: 100%;
    }
    .fill {
        width: 100%;
        height: 200px;
        background-position: contain;
        -webkit-background-size: contain;
        -moz-background-size: contain;
        background-size: contain;
        -o-background-size: contain;
        background-color: #563d7c;
    }
    footer {
        margin: 50px 0;
    }
    .carousel-caption h2 {
        font-size: 3em;
        font-weight: bold;
        text-shadow: 2px 2px 8px #141313;
    }
</style>