<template>
    <div class="item">
        <div class="info">
            <a>{{item.name}}</a>
            <a class="description"><small>{{item.description}}</small></a>
            <a>{{ item.price }}</a>
        </div>

        <div v-if ="edit" class="tools">

                <div class="plus" @click="setActive(item.id)">
                    <b-icon-plus></b-icon-plus>
                </div>
                <div class="destroy" @click="destroy(item.id)">
                    <b-icon-trash-fill></b-icon-trash-fill>
                </div>
        </div>

        <div v-else class="tools">
                <div class="remove" @click="remove(item.id)">
                   <b-icon-x></b-icon-x>
                </div>
        </div>
        
    </div>
</template>
<script>
export default {
    components : {
    },
    props: ['item', 'edit'],
    methods : {
        remove(id) {
            axios.post(`/api/admin/item/remove/${id}`)
            .then( response => {
                this.$emit("removeitem", id);
            })
            .catch(error => {
                console.log(error);
            })
        },
        setActive(id) {
            axios.post(`/api/admin/item/set_active/${id}`)
            .then( response => {
                this.$emit("removeitem", id);
            })
            .catch(error => {
                console.log(error);
            })    
        },
        destroy(id) {
            if (confirm('Trajno izbrišem izbran izdelek?')) {
                axios.delete(`/api/admin/item/${id}`)
                .then( response=> {
                    console.log(response.data);
                    this.$emit('removeitem', id);
                })
                .catch(error => {
                    console.log(error);
                })
            }

        },
    }
}
</script>
<style scoped>
.item {
    color: white;
    display: flex;
    flex: 1 1;
    justify-content: space-between;
    margin: 10px;
    border: 1px solid white;
    border-radius: 10px;
    overflow: hidden;
}
.info {
    display: flex;
    align-items: center;
    padding: 5px;
}
.tools {
    display: flex;
}
.edit, .destroy {
    flex: 1;
    padding: 8px 10px;
    font-size: 12px;
    display: flex;
    align-items: center;
    border-left: 1px solid white;
}
.remove, .plus {
    flex: 1;
    padding: 5px 7px;
    font-size: 17px;
    display: flex;
    align-items: center;
    border-left: 1px solid white;
}
.remove, .destroy {
    border-radius: 0 10px 10px 0;
}
.remove:hover, .destroy:hover, .plus:hover, .edit:hover {
    cursor: pointer;
    color: rgb(41,43,44);
    background-color: white;
}
.description {
    font-style: none;
}
</style>