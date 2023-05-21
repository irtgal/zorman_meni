<template>
    <div id="add-item">
        <div class="header">
            <div :class="{ selected: true }" class="add-new hover">
                <b-icon-plus></b-icon-plus>
            </div>
        </div>
        <div class="content">
            <h3 class="text-white">Dodaj izdelek</h3>
            <div class="add-new-div text-white">
                <div class="mb-3">
                    <label class="form-label" for="name">Ime izdelka</label>
                    <input
                        id="name"
                        v-model="name"
                        :class="{ missing: nameMissing }"
                        class="form-control"
                        type="text"
                    />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="category">Kategorija</label>
                    <select id="category" v-model="categoryId" :class="{ missing: categoryMissing }"
                            class="form-control">
                        <option
                            v-for="category in categories"
                            :key="category.id"
                            :value="category.id"
                        >
                            {{ category.name }}
                        </option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="description">Opis izdelka</label>
                    <input
                        id="description"
                        v-model="description"
                        class="form-control"
                        type="text"
                    />
                </div>
            </div>
        </div>
        <div class="buttons">
            <button class="btn btn-outline-light m-2" type="button" @click="emitClose">
                Zapri
            </button>
            <button class="close-modal btn btn-light m-2" type="button" @click="addItem">
                Dodaj
            </button>
        </div>
    </div>
</template>

<script>
export default {
    data: function () {
        return {
            name: "",
            description: "",
            categoryId: "",
            nameMissing: false,
            categoryMissing: false,
            categories: [],
        };
    },
    mounted() {
        this.getCategories();
    },
    methods: {
        getCategories() {
            this.$axios
                .get("/api/admin/categories")
                .then((response) => {
                    this.categories = response.data;
                    console.log("Categories: ", this.categories);
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        addItem() {
            if (this.name.length === 0) {
                this.nameMissing = true;
                return;
            }
            this.nameMissing = false;

            if (!this.categoryId) {
                this.categoryMissing = true;
                return;
            }
            this.categoryMissing = false;

            const item = {
                name: this.name,
                categoryId: this.categoryId,
                description: this.description,
            };
            this.$axios
                .post("api/admin/item/store", item)
                .then((response) => {
                    this.emitClose();
                })
                .catch((error) => {
                    alert(error);
                });
        },
        emitClose() {
            this.resetData()
            this.$mitt.emit("itemAdded");
        },
        resetData() {
            this.name = "";
            this.description = "";
            this.categoryId = "";
            this.nameMissing = false;
            this.categoryMissing = false;
        },
    },
};
</script>

<style scoped>
#add-item {
    position: fixed;
    left: 50%;
    transform: translate(-50%, 0);
    top: 10%;
    background-color: #198754;
    width: 90%;
    max-width: 500px;
    border: 1px solid white;
    font-size: 15px;

}

.header {
    display: none;
}

.content {
    background-color: #198754;
    font-size: 15px;
    padding-top: 10px;
}

.add-new-div {
    margin: 10px;
}

.buttons {
    display: flex;
    justify-content: flex-end;
}

.missing {
    border: 3px solid #d9534f;
}

@media only screen and (max-width: 767px) {
    #add-item {
        top: 5%;
    }
}
</style>
