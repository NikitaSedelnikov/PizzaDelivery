<template>
    <div class="navigation-menu">
        <div class="interactive">
            <div>
                <a :href="homeRoute"><img class="icon" src="/logos/logo.png"></a>
            </div>
            <div>
                <img class="main-title" src="/logos/title.png">
            </div>
            <div>
                <a :href="basketRoute" @click="backendStorage()"><img class="basket" src="/logos/basket.png"></a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: [
        'homeRoute',
        'basketRoute'
    ],
}
</script>

<style scoped>
.navigation-menu {
    width: 100%;
    height: 10vh;
    background-color: #ff8a5b;
    border-bottom: 1px solid;
}

.interactive{
    width: 1920px;
    height: 100%;
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: space-evenly;
}

.icon {
    width: 150px;
    height: auto;
    transition: 0.2s;
}

.icon:hover {
    transform: scale(95%);
}

.main-title {
    height: 100px;
    width: auto;
}

.basket {
    width: 100px;
    height: auto;
    transition: 0.2s;
}

.basket:hover {
    transform: scale(105%);
}

</style>
