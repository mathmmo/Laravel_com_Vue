<template>
<div class="small-box bg-aqua">
    <div class="inner">
        <h3>150</h3>
        <p>New Orders</p>
    </div>
    <div class="icon">
        <i class="ion ion-stats-bars"></i>
    </div>
    <a href="#" class="small-box-footer">
        More info <i class="fa fa-arrow-circle-right"></i>
    </a>
</div>
</template>

<script>
    export default {
        props:[]
    }
</script>

<style>
.bg-aqua{
    background-color: #00c0ef !important;
}

.bg-green {
    background-color: #00a65a !important;
}

.small-box {
    color: #ffffff;
    border-radius: 4px;
    position: relative;
    display: block;
    margin-bottom: 20px;
    box-shadow: 0 1px 1px rgba(0,0,0,0.1);
}

.small-box:hover {
    text-decoration: none;
}

.small-box>.inner {
    padding: 10px;
}

.small-box h3, .small-box p {
    z-index: 5;
}

.small-box h3 {
    font-size: 38px;
    font-weight: bold;
    margin: 0 0 10px 0;
    white-space: nowrap;
    padding: 0;
}

.small-box p {
    font-size: 15px;
}

.small-box .icon {
    -webkit-transition: all .3s linear;
    -o-transition: all .3s linear;
    transition: all .3s linear;
    position: absolute;
    top: -10px;
    right: 10px;
    z-index: 0;
    font-size: 90px;
    color: rgba(0,0,0,0.15);
}

.small-box:hover .icon {
    font-size: 100px;
}

.small-box>.small-box-footer {
    position: relative;
    text-align: center;
    padding: 3px 0;
    color: #fff;
    color: rgba(255,255,255,0.8);
    display: block;
    z-index: 10;
    background: rgba(0,0,0,0.1);
    text-decoration: none;
}

</style>
