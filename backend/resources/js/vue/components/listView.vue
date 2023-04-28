<template>
    <div class="items text-white">
      <div v-for="(category, index) in categories" :key="index">
        <div class="category">
            <h4 class="m-0">{{category.name}}</h4>
            <small class="p-0">{{category.price}}€</small>
        </div>
        <list-item
          v-for="(item, index) in category.items"
          :item="item"
          :edit="false"
          :key="index"
        />
      </div>
    </div>
  </template>
  <script>
  import listItem from "./listItem";
  
  export default {
    components: {
      listItem,
    },
    props: {
      items: {
        type: Array,
        default: function () {
          return [];
        },
      },
    },
    computed: {
      categories() {
        const categories = {};
  
        this.items.forEach((item) => {
          const category = item.category;
  
          if (!categories[category.id]) {
            categories[category.id] = {
              id: category.id,
              name: category.name,
              sort: category.sort,
              price: category.price,
              items: [],
            };
          }
  
          categories[category.id].items.push(item);
        });
  
        return Object.values(categories).sort((a, b) => a.sort - b.sort);
      },
    },
  };
  </script>
  <style scoped>
  .items {
    width: 100%;
  }
  
  .category {
    display: flex;
    justify-content: space-between;
    font-size: 1.5rem;
    text-align: center;
    margin: 10px;
    margin-top: 2rem;
  }
  </style>