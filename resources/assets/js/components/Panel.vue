<template>
<div v-bind:class="colorPicker">
    <div class="panel-heading">{{title}}</div>
    <div class="panel-body">
        <slot></slot>
    </div>
</div>
</template>

<script>
    export default {
        props:['title', 'color'],
        computed:{
            colorPicker: function(){
                return "panel "+ (this.color || "panel-warning");
            }
        }
    }
</script>

<style media="screen">
    .green-as-hell{
        border-color: #3c763d;
    }

    .green-as-hell > .panel-heading {
        color: #3c763d;
        background-color: palegreen;
        border-color: #3c763d;
    }

    .orange{
        border-color: #fca400;
    }

    .orange > .panel-heading {
        color: #805300;
        background-color: #fee3b1;
        border-color: #fca400;
    }


</style>