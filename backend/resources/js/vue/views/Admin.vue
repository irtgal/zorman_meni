<template>
    <div id="admin">
        <div id="heading">
            <img class="text-center mt-3" />
            <h2 class="h2 text-center text-white">MALICE</h2>
        </div>
        <div class="toolbar">
            <div class="clear-active-div text-center mt-3">
                <b-icon-arrow-clockwise
                    class="clear-active-icon hover"
                    @click="setInActive(activeItems.map(item => item.id))"
                ></b-icon-arrow-clockwise>
            </div>
            <div class="add-item-div text-center mt-3">
                <b-icon-plus-circle-fill
                    class="add-item-icon hover"
                    @click="showAddItem = true"
                ></b-icon-plus-circle-fill>
                <add-item v-show="showAddItem" @close="showAddItem = false" />
            </div>
        </div>
        <div id="main-content">
            <div class="active-items">
                <h2 class="h2 text-center text-white">Aktivni izdelki</h2>
                <list-view
                    v-if="activeItems.length"
                    :items="activeItems"
                    @refresh="getItems"
                />
                <div v-else class="text-white text-center">
                    Ni aktivnih izdelkov
                </div>
            </div>
            <div class="inactive-items">
                <h2 class="h2 text-center text-white">Neaktivni izdelki</h2>
                <list-view
                    v-if="inactiveItems.length"
                    :items="inactiveItems"
                    @refresh="getItems"
                />
                <div v-else class="text-white text-center">
                    Ni neaktivnih izdelkov
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import ListView from "../components/listView";
import AddItem from "../components/addItem";
export default {
    components: {
        ListView,
        AddItem
    },
    data: function() {
        return {
            items: [],
            showAddItem: false
        };
    },
    computed: {
        activeItems() {
            return this.items.filter(item => item.active == 1);
        },
        inactiveItems() {
            return this.items.filter(item => item.active == 0);
        }
    },
    methods: {
        getItems() {
            this.$axios
                .get("/api/admin/items")
                .then(response => {
                    this.items = response.data;
                })
                .catch(error => {
                    console.log(error);
                });
        },
        setInActive(ids) {
            console.log("set inactive", ids);
            this.$axios
                .post(`/api/admin/item/set_inactive/`, { ids })
                .then(response => {
                    this.getItems();
                })
                .catch(error => {
                    console.log(error);
                });
        },
        setActive(ids) {
            this.$axios
                .post(`/api/admin/item/set_active/`, { ids })
                .then(response => {
                    this.getItems();
                })
                .catch(error => {
                    console.log(error);
                });
        },
        destroy(id) {
            if (confirm("Trajno izbrišem izbran izdelek?")) {
                this.$axios
                    .delete(`/api/admin/item/${id}`)
                    .then(response => {
                        this.getItems();
                    })
                    .catch(error => {
                        console.log(error);
                    });
            }
        },
        addItem() {
            this.showAddItem = true;
        },
        itemAdded() {
            this.getItems();
            this.showAddItem = false;
        }
    },
    created() {
        this.getItems();
    },
    mounted() {
        this.$mitt.on("setActive", id => this.setActive([id]));
        this.$mitt.on("setInActive", id => this.setInActive([id]));
        this.$mitt.on("destroy", this.destroy);
        this.$mitt.on("itemAdded", this.itemAdded);
    },
    beforeDestroy() {
        this.$mitt.off("setActive", this.setActive);
        this.$mitt.off("setInActive", this.setInActive);
        this.$mitt.off("destroy", this.destroy);
        this.$mitt.off("itemAdded", this.itemAdded);
    }
};
</script>
<style>
#admin {
    background-color: #292b2c;
    min-height: 100vh;
    padding: 1em 5em;
}
#heading {
    margin-bottom: 3em;
}
.h2 {
    font-size: 200px;
}
#main-content {
    display: flex;
    flex-direction: row;
    width: 100%;
    gap: 10%;
}
.active-items,
.inactive-items {
    flex: 1;
    padding: 1em;
}

.active-items {
    background: rgba(25, 135, 84, 0.7);
}

.inactive-items {
    background-color: rgba(70, 70, 70, 1);
}

.add-item-icon,
.clear-active-icon {
    font-size: 40px;
    color: #198754;
}
.add-item-icon:hover {
    color: #146c43;
}

.toolbar {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 1em;
    padding: 1em;
}

.h3 {
    font-size: 2.5rem;
}
@media only screen and (max-width: 730px) {
    #admin {
        padding: 0.5%;
    }
    #main-content {
        flex-direction: column;
    }
    .active-items,
    .inactive-items {
        margin-bottom: 1em;
    }
}
</style>
