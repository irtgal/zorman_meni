<template>
    <div class="categories">
        <h3 class="category">Malice</h3>
            <div class="items text-white">
                <list-item v-for="(item, index) in items"
                 :item="item" :edit="false" :key="index" @refresh="getList" @removeitem="removeItem"/>
            </div>
        <div class="add-item-div text-center mt-3">
            <b-icon-plus-circle-fill class="add-item-icon hover" @click="showAddItem=true"></b-icon-plus-circle-fill>
        </div>
        <add-item v-if="showAddItem" @close="showAddItem=false" @refresh="getList"></add-item>
    </div>
</template>
<script>
import listItem from './listItem'
import addItem from './addItem'
export default {
    components : {
        listItem,
        addItem
    },
    data: function () {
        return {
            items: [],
            showAddItem: false,
        }
    },
    methods: {
        getList() {
            axios.get('/api/admin/items')
            .then( response => {
                this.items = [];
                this.items = response.data;
                console.log(this.items);
                this.$forceUpdate();
            })
            .catch(error => {
                console.log(error);
            })
        },
        removeItem(id) {
            this.items = this.items.filter((e)=>e.id !== id );
        },
    },
    computed : {
        halfData(data, which) {
        }
    },
    created() {
        this.getList();
    },
}

</script>
<style scoped>
.category {
    color: white;
    margin-left: 10px;
}
.categories {
    margin: 0 5%;
}
.add-item-icon {
    font-size: 40px;
    color: #198754;
}
.add-item-icon:hover {
    color: #146c43;
}

</style>