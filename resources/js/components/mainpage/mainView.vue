<template>
    <div class="main">
        <div class="cards">
            <slot></slot>
        </div>
    </div>
</template>

<script>
export default {}
</script>

<style scoped>
.main {
    width: 100%;
    height: 100%;
    padding: 0px 0px;
    background-color: #fceade;
    background-size: 100%;
}

.cards {
    width: 40%;
    height: auto;
    margin: auto;
    padding-top: 50px;
    display: flex;
    justify-content: space-evenly;
    flex-wrap: wrap;
}

</style>
