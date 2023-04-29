<template>
  <div id="add-item">
    <div class="header">
      <div class="add-new hover" :class="{ selected: true }">
        <b-icon-plus></b-icon-plus>
      </div>
    </div>
    <div class="content">
      <div class="add-new-div text-white">
        <div class="mb-3">
          <label for="name" class="form-label">Ime izdelka</label>
          <input
            v-model="name"
            type="text"
            class="form-control"
            id="name"
            :class="{ missing: nameMissing }"
          />
        </div>
        <div class="mb-3">
          <label for="category" class="form-label">Kategorija</label>
          <select v-model="categoryId" class="form-control" id="category">
            <option
              v-for="category in categories"
              :value="category.id"
              :key="category.id"
            >
              {{ category.name }}
            </option>
          </select>
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Opis izdelka</label>
          <input
            v-model="description"
            type="text"
            class="form-control"
            id="description"
          />
        </div>
      </div>
    </div>
    <div class="buttons">
      <button type="button" class="btn btn-outline-light m-2" @click="emitClose">
        Zapri
      </button>
      <button type="button" class="close-modal btn btn-light m-2" @click="addItem">
        Dodaj
      </button>
    </div>
  </div>
</template>

<script>
export default {
  data: function () {
    return {
      categories: [],
    };
  },
  methods: {
    getCategories() {
      axios
        .get("/api/client/index")
        .then((response) => {
          this.categories = response.data;
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
  
  mounted() {
    this.getCategories();
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
  box-shadow: 3px 3px 5px 6px black;
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

#name.missing,
#price.missing {
  border: 3px solid #d9534f;
}

@media only screen and (max-width: 767px) {
  #add-item {
    top: 5%;
  }
}
</style>
