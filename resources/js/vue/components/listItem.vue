<template>
    <div class="item" @click="toggleActive()">
        <div class="item__info">
            <div class="item__content">
                <div class="item__name">{{ item.name }}</div>
                <div class="item__description">{{ item.description }}</div>
            </div>
            <div class="item__tools">
                <div class="item__add" v-if="item.active === 0" @click="setActive(item.id)">
                    <b-icon-plus></b-icon-plus>
                </div>
                <div class="item__remove" v-else @click="remove(item.id)">
                    <b-icon-x></b-icon-x>
                </div>
                <div class="item__destroy" @click="destroy(item.id)">
                    <b-icon-trash-fill></b-icon-trash-fill>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    props: {
        item: Object,
        edit: Boolean
    },
    methods: {
        remove(id) {
            this.$mitt.emit("setInActive", id);
        },
        setActive(id) {
            this.$mitt.emit("setActive", id);
        },
        destroy(id) {
            this.$mitt.emit("destroy", id);
        },
        toggleActive() {
            if (this.item.active == 0) {
                this.setActive(this.item.id);
            } else {
                this.remove(this.item.id);
            }
        }
    }
};
</script>


<style scoped>
.item {
    color: white;
    display: flex;
    align-items: center;
    margin: 10px;
    padding: 10px;
    border: 1px solid white;
    border-radius: 10px;
    overflow: hidden;
    transition: all 0.3s ease-in-out;
    cursor: pointer;
}

.item__info {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex: 1;
}

.item__content {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    padding-right: 10px;
}

.item__name {
    font-weight: bold;
    margin-bottom: 5px;
    font-size: 1.3em;
}

.item__description {
    font-size: 0.8rem;
    margin-bottom: 5px;
}

.item__tools {
    display: flex;
    align-items: center;
}

.item__add,
.item__remove,
.item__destroy {
    font-size: 1.5em;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    height: 30px;
    width: 30px;
    transition: all 0.3s ease-in-out;
    border: 1px solid white;
    background-color: white;
    color: #0c0d0d;
    margin-left: 5px;
}

.item__remove:hover,
.item__destroy:hover {
    cursor: pointer;
    color: #f44336;
}

.item__add:hover {
    cursor: pointer;
    color: #198754;
}

.item__destroy {
    border: none;
    background-color: transparent;
    color: #f44336;
}
</style>
