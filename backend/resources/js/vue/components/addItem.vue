<template>
    <div id="add-item">
        <div class="header">
            <div class="add-old hover" @click="select('old')" :class="{selected: oldSelected}">
                <b-icon-clock-history></b-icon-clock-history>
            </div>
            <div class="add-new hover" @click="select('new')" :class="{selected: !oldSelected}">
                <b-icon-plus></b-icon-plus>
            </div>
        </div>
            <div v-if="oldSelected" class="content">
                <list-item v-for="(item, index) in items"
                 :item="item" :edit="true" :key="index" @removeitem="removeItem"/>

                <p v-if="noItems" class="no-items text-light">Ni neaktivnih izdelkov</p>

            </div>
            <div v-else class="content">
                <div class="add-new-div text-white">
                    <div class="row">
                        <div class="mb-3 col-sm-6">
                        <label for="" class="form-label">Ime izdelka</label>
                        <input  v-model="newName" type="text" class="form-control" id="name" :class="{'missing': nameMissing}">
                        </div>
                        <div class="mb-3 col-sm-6">
                        <label for="" class="form-label">Cena izdelka</label>
                        <input v-model="newPrice" type="number" class="form-control" id="price" :class="{'missing': priceMissing}">
                        </div>      
                    </div>
                    <div class="mb-3">
                    <label for="" class="form-label">Opis izdelka</label>
                    <input v-model="newDescription" type="text" class="form-control" id="price">
                    </div>   
                </div>
                
            </div>
            <div class="buttons">
                <button type="button" class=" btn btn-outline-light m-2" @click="emitClose">Zapri</button>
                <button v-if="!oldSelected" type="button" class="close-modal btn btn-light m-2" @click="addItem">Dodaj</button>
            </div>
        
    </div>
</template>
<script>
import listItem from './listItem'
export default {
    components : {
        listItem
    },
    data: function () {
        return {
            items : [],
            newName: "",
            newDescription: "",
            newPrice: "",

            oldSelected: true,
            nameMissing: false,
            priceMissing: false,

        }
    },
    created() {
        this.getInactive();
    },
    methods: {
        getInactive() {
            axios.get('/api/admin/items/inactive')
            .then( response=> {
                this.items = response.data;
                
            })
            .catch(error => {
                console.log(error);
            })
        },
        addItem() {
            if (this.newName.length == 0) { this.nameMissing = true; return;}
            else {this.nameMissing = false;}
            if (this.newPrice.length == 0) { this.priceMissing = true; return;}
            else { this.priceMissing = false;}
            const item = {
                name: this.newName,
                price: this.newPrice,
                description: this.newDescription
                }
            axios.post('api/admin/item/store', item)
            .then( response=> {
                console.log(response);
                alert("Uspešno dodano");
                this.resetData();
            })
            .catch(error => {
                alert("Napaka");
            })
        },
        resetData() {
            this.newName = "";
            this.newDescription = null;
            this.newPrice = null;
        },
        select (which) {
            this.oldSelected = (which == 'old') ? true : false;
        },
        emitClose() {
            this.$emit('close');
            this.$emit('refresh');
        },
        removeItem(id) {
            this.items = this.items.filter((e)=>e.id !== id );
        },
    },
    computed : {
        noItems() {
            return this.items.length == 0;
        }
    }
    
}
</script>
<style scoped>
#add-item {
    position:absolute; 
    left:50%;
    transform: translate(-50%, 0);
    top: 10%;
    background-color: #198754;
    width: 55%;
    box-shadow: 3px 3px 5px 6px black;
    font-size: 15px;
}
.header {
    display: flex;
    flex: 1;
    color: white; 
}
.add-old {
    flex: 1;
    display: flex; 
    align-items: center;
    justify-content:  center;
    background-color:  #565a5d;
    font-size: 35px;
}
.add-new {
    flex: 1;
    display: flex; 
    align-items: center;
    justify-content:  center;
    text-align: center; 
    background-color:  #565a5d;
    font-size: 50px;
}
.add-new.selected, .add-old.selected {
    background-color:  #198754;
}
.content {
    position: relative;
    background-color: #198754;
    font-size: 15px;
    padding-top: 10px;
}
.no-items {
    text-align: center;
    width: 100%;
    margin: 50px 0 30px 0;
    font-size: 20px;
}
.add-new-div {
    margin: 10px;
}
.buttons {
    display: flex;
    justify-content: flex-end;
}
#name.missing, #price.missing {
    border: 3px solid #d9534f;
}
@media only screen and (max-width: 730px) {
  #add-item {
      width: 80%;
  }
}
</style>