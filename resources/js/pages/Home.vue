<template>
<div>
  <div>
    <b-carousel
      id="carousel-no-animation"
      style="text-shadow: 0px 0px 2px #000"
      no-animation
      indicators
      img-width="1024"
      img-height="300"
    >
      <b-carousel-slide
        img-src="/img/1622145501ICONOS_Mesa de trabajo 1 copia 4 copy 12.png"
      ></b-carousel-slide>
      <b-carousel-slide
        img-src="/img/1623446231GRANDE itau banner ok-02 (1).png"
      ></b-carousel-slide>
      <b-carousel-slide
        img-src="/img/1619836863Banner EUK Q2 Laika.jpg"
      ></b-carousel-slide>
      <b-carousel-slide
        img-src="/img/1613784393close up DIFERENCIALES adaptaciones DOMICILIO DIA_Mesa de trabajo 1 copia 22 (1).png"
      ></b-carousel-slide>
    </b-carousel>
  </div>
  <div>
    <b-row class="categories-home">
      <b-col cols="12">
        <h3 style="font-weight: bold">Categorias</h3>
      </b-col>
    </b-row>
    <b-row>
      <b-col cols="12" class="button-categories">
        <div class="items">
                <img src="/img/ICONS_COTEGORY_ALIMENTOS.png" alt="cat" style="width:30px"/>
                <b-btn>Alimento</b-btn>
              </div>
              <div class="items">
                <img src="/img/ICONS_COTEGORY_SNACKS.png" alt="cat" style="width:30px"/>
                <b-btn>Snacks</b-btn>
              </div>
              <div class="items">
                <img src="/img/1613668386Categoria_higiene_2.png" alt="cat" style="width:30px"/>
                <b-btn>Cuidado e Higiene</b-btn>
              </div>
              <div class="items">
                <img src="/img/1612554392Juguetes.png" alt="cat" style="width:30px"/>
                <b-btn>Juguetes</b-btn>
              </div>
              <div class="items">
                <img src="/img/1614033964Categoria_farmacia.png" alt="cat" style="width:30px"/>
                <b-btn>Farmapet</b-btn>
              </div>
      </b-col>
    </b-row>
    <b-row class="row-categories">
      <b-col cols="12" class="col-categories">
       <div class="items1">
                <img src="/img/categoria_accesorios+(1).png" alt="cat" style="width:30px"/>
                <b-btn>Accesorios</b-btn>
              </div>
              <div class="items1">
                <img src="/img/1613595491Categoria_pet_owner.png" alt="cat" style="width:30px"/>
                <b-btn>Para PetLovers</b-btn>
              </div>
      </b-col>
    </b-row>
    <b-row class="categories-home">
      <b-col cols="12">
        <h3 style="font-weight: bold">Marcas destacadas</h3>
      </b-col>
    </b-row>
    <b-row class="marcas">
      <b-col cols="12">
        <hooper :itemsToShow="6">
          <slide>
            <div>
          <img
            src="/img/eukanuba_circulo1.png"
            class="mb-2 img-width"
          />
        </div>
          </slide>
          <slide>
           <div>
         <img
            src="/img/1589395980_ROYAL_CANIN_500X500.png"
            class="mb-2 img-width"
          />
        </div>
          </slide>
          <slide>
            <div>
          <img
            src="/img/1592410196_SALVAJE_FOOD_SAS__1226X1028.png"
            class="mb-2 img-width"
          />
        </div>
          </slide>
          <slide>
            <div>
         <img
            src="/img/EQUILIBRIO_CIRCULO2.png"
            class="mb-2 img-width"
          />
        </div>
          </slide>
          <slide>
            <div>
         <img
            src="/img/hills_circulo4.png"
            class="mb-2 img-width"
          />
        </div>
          </slide>
          <slide>
             <div>
         <img
            src="/img/total_max_circulo2.png"
            class="mb-2 img-width"
          />
        </div>
          </slide>
        </hooper>
      </b-col>
    </b-row>
    <b-row>
      <b-col cols="12" class="categories-home">
        <h3 style="font-weight: bold">Aniversario</h3>
      </b-col>
    </b-row>
    <b-row class="aniversario desk">
      <span class="porcent">20%</span>
      <img src="/img/star.svg" alt="LaikaMembers" class="star-price"/>
      <b-col 
      v-for="product in products"
      :key="product.id"
      cols="3">
        <div>
          <b-card
            :img-src="product.img"
            class="mb-2"
            :title="product.name"
          >
          <b-row>
            <b-col cols="6"  style="padding-right: 0">
             <div>
                <b-icon icon="star-fill" class="star-yellow" />
                <b-icon icon="star-fill" class="star-yellow" />
                <b-icon icon="star-fill" class="star-yellow" />
                <b-icon icon="star-fill" class="star-yellow" />
                <b-icon icon="star-fill" class="star-yellow" />
              </div>
              <b-card-text class="price-final">
                {{product.price}}
              </b-card-text>
              <b-card-text class="price-red">
                {{product.price}}
              </b-card-text>
              <b-button href="#" class="btn-product">{{product.btnText}}</b-button>
            </b-col>
            <b-col cols="6" style="padding-left: 0">
              <b-card-text class="price-reduce">
                <div style="position: relative; top: 14px;">
                  Antes
                  <br>
                  <s>{{product.before}}</s>
                </div>
              </b-card-text>
              <div style="border-top: solid 1px #f2f2f2">
                <img src="/img/laikamemeber.svg" alt="LaikaMembers" style="width: 100%"/>
                <div class="yellow-square">
                    <p>ADQUIÉRELA YA</p>
                </div>
              </div>
              <b-button href="#" class="btn-product" v-if="product.btn === true">GRANDE TALLA</b-button>
            </b-col>
            <b-icon icon="cart3" font-scale="2" class="cart-icon"></b-icon>
            <b-button href="#" class="btn-comprar">Añadir al carrito</b-button>
          </b-row>
          </b-card>
        </div>
      </b-col>
    </b-row>
    <b-row class="aniversario mobile">
      <span class="porcent">20%</span>
      <img src="/img/star.svg" alt="LaikaMembers" class="star-price"/>
      <b-col 
      v-for="product in products"
      :key="product.id"
      cols="12">
        <div>
          <b-card
            :img-src="product.img"
            class="mb-2"
            :title="product.name"
          >
          <b-row>
            <b-col cols="6"  style="padding-right: 0">
             <div>
                <b-icon icon="star-fill" class="star-yellow" />
                <b-icon icon="star-fill" class="star-yellow" />
                <b-icon icon="star-fill" class="star-yellow" />
                <b-icon icon="star-fill" class="star-yellow" />
                <b-icon icon="star-fill" class="star-yellow" />
              </div>
              <b-card-text class="price-final">
                {{product.price}}
              </b-card-text>
              <b-card-text class="price-red">
                {{product.price}}
              </b-card-text>
              <b-button href="#" class="btn-product">{{product.btnText}}</b-button>
            </b-col>
            <b-col cols="6" style="padding-left: 0">
              <b-card-text class="price-reduce">
                <div style="position: relative; top: 14px;">
                  Antes
                  <br>
                  <s>{{product.before}}</s>
                </div>
              </b-card-text>
              <div style="border-top: solid 1px #f2f2f2">
                <img src="/img/laikamemeber.svg" alt="LaikaMembers" style="width: 100%"/>
                <div class="yellow-square">
                    <p>ADQUIÉRELA YA</p>
                </div>
              </div>
              <b-button href="#" class="btn-product" v-if="product.btn === true">GRANDE TALLA</b-button>
            </b-col>
            <b-icon icon="cart3" font-scale="2" class="cart-icon"></b-icon>
            <b-button href="#" class="btn-comprar">Añadir al carrito</b-button>
          </b-row>
          </b-card>
        </div>
      </b-col>
    </b-row>
    <b-row>
      <b-col cols="12">
        <div>
          <b-carousel
            id="carousel-no-animation"
            class="banner-end"
            no-animation
            indicators
            img-width="800"
            img-height="300"
          >
            <b-carousel-slide
              img-src="/img/1622145501ICONOS_Mesa de trabajo 1 copia 4 copy 12.png"
            ></b-carousel-slide>
          </b-carousel>
        </div>
      </b-col>
    </b-row>
  </div>
</div>
</template>
<style lang="scss" scoped>
.star-yellow{
  color: #ffb100;
}
.banner-end{
  padding: 80px 15%
}
.porcent{
    position: absolute;
    z-index: 3;
    left: 25%;
    margin: 21px 0px 0 0px;
    font-size: 17px;
    font-weight: 900;
    color: #fff;
}
.card-title{
  font-size: 15px;
    font-weight: 900;
}
.cart-icon{
    font-size: 200%;
    color: #fff;
    position: absolute;
    bottom: 8%;
    left: 14%;
}
.btn-comprar{
    background: #603e85 !important;
    color: #fff !important;
    width: 100%;
    margin: 9px;
    padding: 18px;
}
.price-final{
    color: #242424;
    font-size: 19px;
    font-family: poppins;
    font-weight: 800;
    margin-bottom: 0;
}
.price-reduce{
    color: #747474;
    font-size: 13px;
    line-height: 16px;
    margin-bottom: 21px;
}
.price-red{
    color: #c75035;
    font-size: 19px;
    font-family: poppins;
    border-top: solid 1px #f2f2f2;
    font-weight: 800;
    margin-bottom: 26px;
}
.yellow-square{
    font-size: 10px;
    color: #000;
    background-color: #ffbd10;
    text-align: center;
    border-radius: 4px;
    font-weight: 900;
    box-shadow: rgb(50 50 93 / 10%) 0px 6px 12px -2px, rgb(0 0 0 / 30%) 0px 3px 7px -3px;
}
.btn-product{
  background: #603e85 !important;
    color: #fff !important;
    font-size: 9px !important;
    padding: 15px 15px;
}
.categories-home{
  padding: 50px 15%;
  font-size: 22px;
  font-family: Poppins;
}
.items{
 padding: 5px 7px;
    border: 1px solid #ececf6;
    border-radius: 10px;
    box-shadow: rgb(50 50 93 / 10%) 0px 6px 12px -2px, rgb(0 0 0 / 30%) 0px 3px 7px -3px;
    margin-right: 18px;
    width: 19%;
    text-align: center;
}
.items1{
 padding: 5px 7px;
    border: 1px solid #ececf6;
    border-radius: 10px;
    box-shadow: rgb(50 50 93 / 10%) 0px 6px 12px -2px, rgb(0 0 0 / 30%) 0px 3px 7px -3px;
    margin-right: 18px;
    width: 50%;
    text-align: center;
}
.star-price{
    width: 5%;
    position: absolute;
    left: 24%;
    z-index: 2;
}
.star-price1{
  width: 4%;
    position: absolute;
    left: 45%;
    z-index: 2;
}
.star-price2{
  width: 4%;
    position: absolute;
    left: 62%;
    z-index: 2;
}
.star-price3{
  width: 4%;
    position: absolute;
    left: 78%;
    z-index: 2;
}
.btn{
  background: #f8fafc;
    color: #000;
    font-size: 13px;
    font-family: poppins;
    font-weight: 900;
    border: none;
}
.button-categories{
    display: flex;
    padding: 10px 10%;
}
.row-categories{
    display: flex;
    padding: 0px 31%;
}
.img-width{
  width: 80%;
}
.col-categories{
    display: flex;
    padding: 0px 3%;
}
.marcas{
  padding: 20px 15%;
}
.aniversario{
  padding: 20px 10%;

}
.mobile{
  display: none;
}
.desk{
  display: flex;
}
// Responsive
@media (max-width: 600px) {
  .button-categories{
    display: grid;
    padding: 10px 16%;
}
.items{
    padding: 5px 7px;
    border: 1px solid #ececf6;
    border-radius: 10px;
    box-shadow: rgb(50 50 93 / 10%) 0px 6px 12px -2px, rgb(0 0 0 / 30%) 0px 3px 7px -3px;
    width: 100%;
    text-align: center;
    margin-bottom: 15px;
}
.row-categories {
    display: grid;
    padding: 0px 15%;
    margin-top: -10px;
}
.col-categories[data-v-b3c5cf30] {
    display: grid;
    padding: 0px 3%;
}
.items1{
    padding: 5px 7px;
    border: 1px solid #ececf6;
    border-radius: 10px;
    box-shadow: rgb(50 50 93 / 10%) 0px 6px 12px -2px, rgb(0 0 0 / 30%) 0px 3px 7px -3px;
    text-align: center;
    margin-bottom: 15px;
    width: 100%;
}
.hooper-slide {
    flex-shrink: 0;
    height: 100%;
    margin: 0;
    padding: 0;
    list-style: none;
    width: 100% !important;
}
.hooper-track {
    display: grid !important;
    box-sizing: border-box;
    width: 100%;
    height: 100%;
    margin: auto;
}
.hooper {
    position: relative;
    box-sizing: border-box;
    width: 100%;
    height: 263px;
}
.img-width{
    width: 100%;
}
.aniversario{
    padding: 20px 15%;
    display: grid;
}
.mobile{
  display: block !important;
}
.desk{
  display: none !important;
}
.star-price{
    width: 20%;
    position: absolute;
    left: 66%;
    z-index: 2;
}
.porcent{
    position: absolute;
    z-index: 3;
    left: 71%;
    margin: 21px 0px 0 0px;
    font-size: 20px;
    font-weight: 900;
    color: #fff;
}
.btn{
    background: #f8fafc;
    color: #000;
    font-size: 15px;
    font-family: poppins;
    font-weight: 900;
    border: none;
}
.banner-end{
  padding: 50px 0%
}
}


</style>
<script>
import { Hooper, Slide } from 'hooper';
import 'hooper/dist/hooper.css';


export default {
  name: 'App',
  data() {
    return{
      products: null
    }
  },
  components: {
    Hooper,
    Slide
  },
  created(){
    this.getProducts()
  },
  methods:{
    getProducts(){
      axios.get('/datos').then(response => {
        this.products = response.data
      }).catch(error =>{
        console.log("error",error)
      })
    }
  }
};


</script>