<template>
  <div>
    <b-navbar toggleable="lg" type="light" class="sub-header">
      <b-row style="width: 100%">
        <b-col cols="5">
         <b-row>
            <b-col cols="4">
              <div class="border-sub">
                <img src="/img/secure_mc.png" alt="seguras" />
                <span>Compras seguras online</span>
              </div>
            </b-col>
            <b-col cols="4">
              <div class="border-sub">
                <img src="/img/wallet_mc.png" alt="wallet" />
                <span>Pago contra entrega</span>
              </div>
            </b-col>
            <b-col cols="4">
              <div class="border-sub">
                <img src="/img/truck_mc.png" alt="truck" />
                <span>Entregas el mismo día</span>
              </div>
            </b-col>
          </b-row>
        </b-col>
        <b-col cols="7" class="right-subHeader">
          <b-row>
            <b-col cols="8">
              <div>Llámanos 3009108496</div>
            </b-col>
            <b-col cols="4">
              <div class="contact">
                <span>Escríbenos</span>
                  <img src="/img/youtube_mc.png" alt="Compras seguras" />
                  <img src="/img/facebook_mc.png" alt="Compras seguras" />
                  <img src="/img/instagram_mc.png" alt="Compras seguras" />
                </div>
            </b-col>
          </b-row>
        </b-col>
      </b-row>
    </b-navbar>
    <b-navbar toggleable="lg" type="dark" class="header">
      <b-navbar-brand href="#" class="anchor">
        <img alt="colombia" src="/img/LaikaMascotas.png" class="logo"/>
      </b-navbar-brand>
      <b-navbar-nav class="ml-auto search" left>
        <b-container fluid>
          <b-row class="my-1 input-search" v-for="type in types" :key="type">
            <b-col>
               <img src="/img/search_icon_mc.png" alt="cat" class="search-icon"/>
              <b-form-input :id="`type-${type}`" :type="type" placeholder="¿Que necesita tu mascota?" class="search-form"></b-form-input>
            </b-col>
          </b-row>
        </b-container>
      </b-navbar-nav>
      <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>
      <b-navbar-nav right class="flag-bog-res">
        <b-row class="bog-flag">
          <b-col cols="4" class="nav-bog">
            <img alt="colombia" src="/img/colombiaFlag.png" class="flag"/>
          </b-col> 
          <b-col cols="4" class="pad-res"> 
            <p class="bog">BOG</p>
          </b-col> 
          <b-col cols="4" class="btn-bog-res">
            <b-nav-item-dropdown class="drop-bog">
              <b-dropdown-item href="#">Bogotá</b-dropdown-item>
              <b-dropdown-item href="#">Cali</b-dropdown-item>
              <b-dropdown-item href="#">Medellin</b-dropdown-item>
              <b-dropdown-item href="#">Barranquilla</b-dropdown-item>
              <b-dropdown-item href="#">Bucaramanga</b-dropdown-item>
              <b-dropdown-item href="#">Soacha</b-dropdown-item>
            </b-nav-item-dropdown>
          </b-col>
        </b-row> 
      </b-navbar-nav>
      <b-icon icon="cart3" font-scale="2" class="cart-res"></b-icon>
      <b-collapse id="nav-collapse" is-nav class="toggle-btn">
        <!-- Right aligned nav items -->
        <b-navbar-nav class="ml-auto">
          <b-nav-item-dropdown class="btn-create" style="color: #fff" right dark>
            <!-- Using 'button-content' slot -->
            <template #button-content>
              <em>Crear cuenta</em>
            </template>
            <b-dropdown-item href="#">
              <b-btn style="color: #fff !important; background: #603e85">
                Iniciar sesion
              </b-btn>
              </b-dropdown-item>
            <b-dropdown-item href="#">
              <b-btn style="color: #603e85 !important; background: #fff; border: 1px solid #603e85 !important">
                Crear cuenta
              </b-btn>
              </b-dropdown-item>
          </b-nav-item-dropdown>
          <b-icon icon="cart3" font-scale="2" class="cart"></b-icon>
        </b-navbar-nav>
      </b-collapse>
    </b-navbar>
    <b-nav toggleable="lg" class="sub-header1 desk">
      <b-row style="width: 100%">
        <b-col cols="6">
         <b-button-group dark>
           <img src="/img/dog_mc.png" alt="dog" style="width:38px"/>
            <b-dropdown right text="Perro" class="categories btn-secondary">
              <div class="items">
                <img src="/img/ICONS_COTEGORY_ALIMENTOS.png" alt="cat" style="width:38px"/>
                <b-dropdown-item>Alimento</b-dropdown-item>
              </div>
              <div class="items">
                <img src="/img/ICONS_COTEGORY_SNACKS.png" alt="cat" style="width:38px"/>
                <b-dropdown-item>Snacks</b-dropdown-item>
              </div>
              <div class="items">
                <img src="/img/1613668386Categoria_higiene_2.png" alt="cat" style="width:38px"/>
                <b-dropdown-item>Cuidado e Higiene</b-dropdown-item>
              </div>
              <div class="items">
                <img src="/img/1612554392Juguetes.png" alt="cat" style="width:38px"/>
                <b-dropdown-item>Juguetes</b-dropdown-item>
              </div>
              <div class="items">
                <img src="/img/1614033964Categoria_farmacia.png" alt="cat" style="width:38px"/>
                <b-dropdown-item>Farmapet</b-dropdown-item>
              </div>
              <div class="items">
                <img src="/img/categoria_accesorios+(1).png" alt="cat" style="width:38px"/>
                <b-dropdown-item>Accesorios</b-dropdown-item>
              </div>
            </b-dropdown>
            <img src="/img/cat_mc.png" alt="cat" style="width:38px"/>
           <b-dropdown right text="Gato" class="categories btn-secondary">
             <div class="items">
                <img src="/img/ICONS_COTEGORY_ALIMENTOS.png" alt="cat" style="width:38px"/>
                <b-dropdown-item>Alimento</b-dropdown-item>
              </div>
              <div class="items">
                <img src="/img/categoria_arenas+(1).png" alt="cat" style="width:38px"/>
                <b-dropdown-item>Arena</b-dropdown-item>
              </div>
              <div class="items">
                <img src="/img/ICONS_COTEGORY_SNACKS.png" alt="cat" style="width:38px"/>
                <b-dropdown-item>Snacks</b-dropdown-item>
              </div>
              <div class="items">
                <img src="/img/1614033964Categoria_farmacia.png" alt="cat" style="width:38px"/>
                <b-dropdown-item>Farmapet</b-dropdown-item>
              </div>
              <div class="items">
                <img src="/img/categoria_accesorios+(1).png" alt="cat" style="width:38px"/>
                <b-dropdown-item>Accesorios</b-dropdown-item>
              </div>
            </b-dropdown>
            <b-dropdown right text="Servicios" class="categories btn-secondary">
              <b-dropdown-item>Baño express</b-dropdown-item>
              <b-dropdown-item>Veterinario en casa</b-dropdown-item>
            </b-dropdown>
            <b-button class="categories">Promociones</b-button>
            <b-button class="categories">Blog</b-button>
          </b-button-group>
        </b-col>
        <b-col cols="6" class="right-subHeader">
          <b-row>
            <b-col cols="8">
            </b-col>
            <b-col cols="4">
              <div class="contact">
                <img src="/img/LaikaMemberNew.png" alt="LaikaMembers" />
              </div>
            </b-col>
          </b-row>
        </b-col>
      </b-row>
    </b-nav>
    <b-nav toggleable="lg" class="sub-header1 mobile">
      <b-row style="width: 100%">
        <b-col cols="12">
         <b-button-group dark>
           <img src="/img/dog_mc.png" alt="dog" style="width:38px"/>
            <b-dropdown right text="Perro" class="categories btn-secondary">
              <div class="items">
                <img src="/img/ICONS_COTEGORY_ALIMENTOS.png" alt="cat" style="width:38px"/>
                <b-dropdown-item>Alimento</b-dropdown-item>
              </div>
              <div class="items">
                <img src="/img/ICONS_COTEGORY_SNACKS.png" alt="cat" style="width:38px"/>
                <b-dropdown-item>Snacks</b-dropdown-item>
              </div>
              <div class="items">
                <img src="/img/1613668386Categoria_higiene_2.png" alt="cat" style="width:38px"/>
                <b-dropdown-item>Cuidado e Higiene</b-dropdown-item>
              </div>
              <div class="items">
                <img src="/img/1612554392Juguetes.png" alt="cat" style="width:38px"/>
                <b-dropdown-item>Juguetes</b-dropdown-item>
              </div>
              <div class="items">
                <img src="/img/1614033964Categoria_farmacia.png" alt="cat" style="width:38px"/>
                <b-dropdown-item>Farmapet</b-dropdown-item>
              </div>
              <div class="items">
                <img src="/img/categoria_accesorios+(1).png" alt="cat" style="width:38px"/>
                <b-dropdown-item>Accesorios</b-dropdown-item>
              </div>
            </b-dropdown>
            <img src="/img/cat_mc.png" alt="cat" style="width:38px"/>
           <b-dropdown right text="Gato" class="categories btn-secondary">
             <div class="items">
                <img src="/img/ICONS_COTEGORY_ALIMENTOS.png" alt="cat" style="width:38px"/>
                <b-dropdown-item>Alimento</b-dropdown-item>
              </div>
              <div class="items">
                <img src="/img/categoria_arenas+(1).png" alt="cat" style="width:38px"/>
                <b-dropdown-item>Arena</b-dropdown-item>
              </div>
              <div class="items">
                <img src="/img/ICONS_COTEGORY_SNACKS.png" alt="cat" style="width:38px"/>
                <b-dropdown-item>Snacks</b-dropdown-item>
              </div>
              <div class="items">
                <img src="/img/1614033964Categoria_farmacia.png" alt="cat" style="width:38px"/>
                <b-dropdown-item>Farmapet</b-dropdown-item>
              </div>
              <div class="items">
                <img src="/img/categoria_accesorios+(1).png" alt="cat" style="width:38px"/>
                <b-dropdown-item>Accesorios</b-dropdown-item>
              </div>
            </b-dropdown>
          </b-button-group>
        </b-col>
      </b-row>
    </b-nav>
</div>
</template>

<style lang="scss" scoped>


//Responsive

@media (max-width: 600px) {
  .sub-header{
    background-color: #000;
    padding: 5px 7%;
    color: #fff;
    font-weight: 700;
    display: none;
}
.search-icon{
    width: 20px;
    position: absolute;
    top: 23%;
    left: 9%;
}
.flag-bog-res{
    position: absolute;
    top: 0%;
    right: 5%;
}
.logo{
   width: 45%;
    position: relative;
    left: 135px;
    top: -5px;
}
.form-control {
    display: block;
    width: 109%;
    height: calc(1.6em + 0.75rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 0.9rem;
    font-weight: 400;
    line-height: 1.6;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
.navbar-dark .navbar-toggler {
    color: #fff;
    position: absolute;
    border: none;
    top: 7%;
    font-size: 25px;
    z-index: 3;
}
.cart{
    color: #fff;
    display: none;
}
.btn-create {
    background: #472f62;
    font-size: 13px;
    font-weight: 600;
    border-radius: 8px;
    padding: 7px;
    width: 37%;
    margin: 2px auto;
    text-align: center;
    margin-left: auto !important;
    margin-right: auto !important;
}
.anchor{
  width: 22%;
}
.mobile{
  display: block !important;
}
.desk{
  display: none !important;
}
.cart-res{
  font-size: 200%;
    position: absolute;
    left: 86%;
    top: 15%;
    display: block !important;
}
.bog-flag{
    text-align: center;
    width: 40%;
    padding-top: 6px !important;
    margin-left: 65%;
    display: block;
}
.btn-bog-res{
  position: absolute;
    bottom: 30%;
    left: 68%;
}
.pad-res{
  padding: 0;
}
.header{
    background-color: #603e85;
    color: #fff;
    padding: 10px 0% !important;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
}
}

//Desktop

// Ocultando menu de responsive

.search-form{
  color: #495057;
  font-family: poppins;
  font-weight: 900;
  padding: 2px 45px;
}
.search-icon{
  width: 20px;
    position: absolute;
    top: 20%;
    left: 6%;
}
.mobile{
  display: none;
}
.desk{
  display: flex;
}
//
.header{
    background-color: #603e85;
    color: #fff;
    padding: 10px 15%;
}
.anchor{
  width: 10%;
}
.dropdown-menu {
    position: absolute !important;
    top: 100%;
    left: 0;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 10rem;
    padding: 0.5rem 0;
    margin: 0.125rem 0 0;
    font-size: 0.9rem;
    color: #212529;
    text-align: left;
    list-style: none;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #8080807d;
    border-radius: 0.25rem;
}
.cart-res{
  display: none;
}
.items{
  display: flex;
  align-items: center;
  padding: 12px;
  font-size: 16px;
  font-weight: 700;
  margin-left: 20px;
}
.sub-header1{
    background-color: #fff;
    padding: 5px 15%;
    color:#603e85;
    font-weight: 700;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
}
.sub-header{
    background-color: #000;
    padding: 5px 7%;
    color:#fff;
    font-weight: 700;
}
.navbar-light .navbar-nav .nav-link {
    color: #fff;
}
#__BVID__47__BV_toggle_ {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
    background: #fff !important;
    color: #603e85 !important;
    border: none !important;
    font-size: 1rem;
    font-weight: 700;
    margin-right: 20px;
}
.btn-group .btn {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
    background: #fff;
    color: #603e85;
    border: none;
    font-family: poppins;
    font-size: 15px;
    font-weight: bold;
}
.categories{
    background: #fff;
    color: #603e85;
    border: none;
    font-size: 1rem;
    font-weight: 700;
}
.border-sub{
    border-right: 1px solid;
    height: 23px;
}
.right-subHeader{
  text-align: right;
}
.contact{
    text-align: left;
    height: 23px;
    padding-left: 20px;
}
.search{
  width: 100%;
}
.input-search{
  width: 100%;
}
.drop-bog{
    color: #fff;
    margin-left: -42px;
    margin-top: -7px;
}
.nav-bog{
    padding: 0;
    margin-right: -23px;
}
.bog{
    font-size: 14px;
    color: #fff;
    font-weight: 700;
}
.bog-flag{
    text-align: center;
    width: 40%;
    padding-top: 15px;
    margin-left: 65%;
}
.cart{
  color: #fff;
}
.flag{
  width: 50%;
}
.logo{
  width: 100%;
}
#__BVID__25__BV_toggle_{
    color:#fff;
}
.btn-create{
    background: #472f62;
    font-size: 13px;
    font-weight: 600;
    border-radius: 8px;
    padding: 0px;
    margin-right: 30px;
    margin-left: -30px;
}
</style>
<script>
  export default {
    data() {
      return {
        types: [
          'search'
        ]
      }
    }
  }
</script>