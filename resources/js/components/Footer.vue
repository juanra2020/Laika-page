<template>
    <b-card class="footer-div" footer-tag="footer">
      <b-card-group class="space-logo footer1 desk" style="padding-bottom:3%">
          <img src="/img/LAIKA.png" alt="laika-logo" class="img-logo"/>
          <p class="followus">Síguenos en:</p>
          <b-icon icon="facebook" font-scale="2" class="fb-icon"></b-icon>
          <b-icon icon="instagram" font-scale="2" class="ig-icon"></b-icon>
          <b-icon icon="youtube" font-scale="2" class="yt-icon"></b-icon>
          <b-row>
            <b-col cols="3">
              <div class="title-footer">ACERCA DE LAIKA</div>
              <div class="menu1">
                <a href="https://laika.com.co/about_us/bog" target="_blank" class="menu-footer1">Sobre Laika</a>
                <a href="https://laika.com.co/services/bog/dog" target="_blank" class="menu-footer1">Servicios</a>
                <a href="https://laika.com.co/work_with_us/bog" target="_blank" class="menu-footer1">Trabaja con nosotros</a>
                <a href="https://blog.laika.com.co/" target="_blank" class="menu-footer1">Blog</a>
                <a href="https://laika.com.co/terms_conditions/bog" target="_blank" class="menu-footer1">Términos y condiciones</a>
              </div>
            </b-col>
            <b-col cols="3">
              <div class="title-footer">LINKS DE INTERÉS</div>
              <div class="menu1">
                <a href="https://laika.com.co/frequent_questions/bog" target="_blank" class="menu-footer1"> Preguntas frecuentes</a>
                <a href="#" target="_blank" class="menu-footer1">¿Cómo comprar en Laika?</a>
                 <a href="https://laika.com.co/privacy_policies/bog" target="_blank" class="menu-footer1">Política de Privacidad</a>
                <a href="#" target="_blank" class="menu-footer1">Contáctanos</a>
                <a href="https://laika.com.co/delivery_policies/bog" target="_blank" class="menu-footer1">Políticas de Entrega</a>
              </div>
            </b-col>
            <b-col cols="3">
              <div class="title-footer">INFORMACIÓN</div>
              <div class="menu2">
                <p class="menu-footer1">Teléfono: 3009108496</p>
                <p class="menu-footer1">servicioclientes@laika.com.co</p>
                <p class="menu-footer1">Bogotá D.C., Colombia</p>
              </div>
            </b-col>
            <b-col cols="3">
              <div class="title-footer">SUBSCRÍBETE</div>
              <div class="menu1">
                <p class="notification">Recibe noticias y promociones al instante.</p>
                <div>
                  <b-form @submit="onSubmit" @reset="onReset" v-if="show">
                    <b-form-group
                      id="input-group-1"
                      label-for="input-1"
                    >
                      <b-form-input
                        id="input-1"
                        v-model="form.email"
                        type="email"
                        class="input-email"
                        placeholder="Correo electrónico"
                      ></b-form-input>
                    <b-button class="btn-send" type="submit">></b-button>
                  </b-form-group>

                  <b-form-group id="input-group-4" v-slot="{ ariaDescribedby }">
                    <b-form-checkbox-group
                        v-model="form.checked"
                        id="checkboxes-4"
                        :aria-describedby="ariaDescribedby"
                      >
                      <b-form-checkbox class="check-box" value="me">He leído y acepto las Políticas de privacidad.</b-form-checkbox>
                    </b-form-checkbox-group>
                  </b-form-group>
                </b-form>
              </div>
            </div>
          </b-col>
        </b-row>
        </b-card-group>
        <b-card-group class="space-logo footer1 mobile" style="padding-bottom:3%">
          <img src="/img/LAIKA.png" alt="laika-logo" class="img-logo"/>
          <p class="followus">Síguenos en:</p>
          <b-icon icon="facebook" font-scale="2" class="fb-icon"></b-icon>
          <b-icon icon="instagram" font-scale="2" class="ig-icon"></b-icon>
          <b-icon icon="youtube" font-scale="2" class="yt-icon"></b-icon>
          <b-row class="foot-res">
            <b-col cols="12">
              <b-button-group dark class="btn-footer">
                <b-dropdown right text="ACERCA DE LAIKA" class="categories btn-secondary">
                  <div class="items">
                    <b-dropdown-item>
                      <a href="https://laika.com.co/about_us/bog" target="_blank" class="menu-footer1">Sobre Laika</a>
                      </b-dropdown-item>
                  </div>
                  <div class="items">
                    <b-dropdown-item>
                      <a href="https://laika.com.co/services/bog/dog" target="_blank" class="menu-footer1">Servicios</a>
                      </b-dropdown-item>
                  </div>
                  <div class="items">
                    <b-dropdown-item>
                      <a href="https://laika.com.co/work_with_us/bog" target="_blank" class="menu-footer1">Trabaja con nosotros</a>
                      </b-dropdown-item>
                  </div>
                  <div class="items">
                    <b-dropdown-item>
                      <a href="https://blog.laika.com.co/" target="_blank" class="menu-footer1">Blog</a>
                      </b-dropdown-item>
                  </div>
                  <div class="items">
                    <b-dropdown-item>
                      <a href="https://laika.com.co/terms_conditions/bog" target="_blank" class="menu-footer1">Términos y condiciones</a>
                      </b-dropdown-item>
                  </div>
                </b-dropdown>
                </b-button-group>
                </b-col>
                <b-col cols="12">
                    <b-button-group dark class="btn-footer">
                      <b-dropdown right text="LINKS DE INTERÉS" class="categories btn-secondary">
                        <div class="items">
                          <b-dropdown-item>
                            <a href="https://laika.com.co/frequent_questions/bog" target="_blank" class="menu-footer1"> Preguntas frecuentes</a>
                            </b-dropdown-item>
                        </div>
                        <div class="items">
                          <b-dropdown-item>
                            <a href="#" target="_blank" class="menu-footer1">¿Cómo comprar en Laika?</a>
                            </b-dropdown-item>
                        </div>
                        <div class="items">
                          <b-dropdown-item>
                            <a href="https://laika.com.co/privacy_policies/bog" target="_blank" class="menu-footer1">Política de Privacidad</a>
                            </b-dropdown-item>
                        </div>
                        <div class="items">
                          <b-dropdown-item>
                            <a href="#" target="_blank" class="menu-footer1">Contáctanos</a>
                            </b-dropdown-item>
                        </div>
                        <div class="items">
                        <b-dropdown-item>
                          <a href="https://laika.com.co/delivery_policies/bog" target="_blank" class="menu-footer1">Políticas de Entrega</a>
                        </b-dropdown-item>
                      </div>
                    </b-dropdown>
              </b-button-group>
            </b-col>
            <b-col cols="12">
              <b-button-group dark class="btn-footer">
                <b-dropdown right text="INFORMACIÓN" class="categories btn-secondary">
                  <div class="items">
                    <b-dropdown-item>
                      <p class="menu-footer1">Teléfono: 3009108496</p>
                      </b-dropdown-item>
                  </div>
                  <div class="items">
                    <b-dropdown-item>
                      <p class="menu-footer1">servicioclientes@laika.com.co</p>
                      </b-dropdown-item>
                  </div>
                  <div class="items">
                    <b-dropdown-item>
                      <p class="menu-footer1">Bogotá D.C., Colombia</p>
                      </b-dropdown-item>
                  </div>
                </b-dropdown>
              </b-button-group>
            </b-col>
            <b-col cols="12">
              <div class="title-footer">SUBSCRÍBETE</div>
              <div class="menu1">
                <p class="notification">Recibe noticias y promociones al instante.</p>
                <div>
                  <b-form @submit="onSubmit" @reset="onReset" v-if="show">
                    <b-form-group
                      id="input-group-1"
                      label-for="input-1"
                    >
                      <b-form-input
                        id="input-1"
                        v-model="form.email"
                        type="email"
                        class="input-email"
                        placeholder="Correo electrónico"
                      ></b-form-input>
                    <b-button class="btn-send" type="submit">></b-button>
                  </b-form-group>

                  <b-form-group id="input-group-4" v-slot="{ ariaDescribedby }">
                    <b-form-checkbox-group
                        v-model="form.checked"
                        id="checkboxes-4"
                        :aria-describedby="ariaDescribedby"
                      >
                      <b-form-checkbox class="check-box" value="me">He leído y acepto las Políticas de privacidad.</b-form-checkbox>
                    </b-form-checkbox-group>
                  </b-form-group>
                </b-form>
              </div>
            </div>
          </b-col>
        </b-row>
    </b-card-group>
    <template #footer>
        <b-card-group class="sub-footer desk">
          <b-row>
            <b-col cols="4">
              <b-row>
                <b-col cols="12">
                  <b-row>
                    <b-col class="pays-icon" cols="4" style="text-align: right">
                      <img src="/img/Mercado_pago.png" alt="huawei-app" class="img-pay"/>
                    </b-col>
                    <b-col class="pays-icon" cols="4" style="text-align: left">
                      <img src="/img/DINERS.png" alt="apple-app" class="img-pay"/>
                    </b-col>
                    <b-col class="pays-icon align-left" cols="4">
                      <img src="/img/AMERICAN.png" alt="google-app" class="img-pay"/>
                    </b-col>
                  </b-row>
                </b-col>
              </b-row>
              <b-row>
                <b-col cols="12">
                  <b-row>
                    <b-col class="pays-icon" cols="4" style="text-align: right">
                      <img src="/img/epayco.png" alt="huawei-app" class="img-pay"/>
                    </b-col>
                    <b-col class="pays-icon" cols="4" style="text-align: left">
                      <img src="/img/PSE.png" alt="apple-app" class="img-pay"/>
                    </b-col>
                    <b-col class="pays-icon align-left" cols="4">
                      <img src="/img/VISA.png" alt="google-app" class="img-pay"/>
                    </b-col>
                  </b-row>
                </b-col>
              </b-row>
            </b-col>
            <b-col cols="4" class="protection">
              <img src="/img/proteccion.svg" alt="protect" class="img-prot"/>
              <div class="title-footer">Protección segura 24/7</div>
            </b-col>
            <b-col cols="4" style="padding-top:2%">
              <b-row>
                <b-col cols="4" class="block-apps">
                  <img src="/img/huaweiGallery.png" alt="huawei-app" class="img-apps"/>
                </b-col>
                <b-col cols="4" class="block-apps">
                  <img src="/img/APP.png" alt="apple-app" class="img-apps"/>
                </b-col>
                <b-col cols="4" class="block-apps">
                  <img src="/img/GOOGLEP.png" alt="google-app" class="img-apps"/>
                </b-col>
              </b-row>
            </b-col>
          </b-row>
        </b-card-group>
        <b-card-group class="sub-footer mobile">
          <b-row>
            <b-col cols="12">
              <b-row>
                <b-col cols="12">
                  <b-row>
                    <b-col class="pays-icon" cols="4" style="text-align: right">
                      <img src="/img/Mercado_pago.png" alt="huawei-app" class="img-pay"/>
                    </b-col>
                    <b-col class="pays-icon" cols="4" style="text-align: center">
                      <img src="/img/DINERS.png" alt="apple-app" class="img-pay"/>
                    </b-col>
                    <b-col class="pays-icon align-left" cols="4">
                      <img src="/img/AMERICAN.png" alt="google-app" class="img-pay"/>
                    </b-col>
                  </b-row>
                </b-col>
              </b-row>
              <b-row>
                <b-col cols="12">
                  <b-row>
                    <b-col class="pays-icon" cols="4" style="text-align: right">
                      <img src="/img/epayco.png" alt="huawei-app" class="img-pay"/>
                    </b-col>
                    <b-col class="pays-icon" cols="4" style="text-align: center">
                      <img src="/img/PSE.png" alt="apple-app" class="img-pay"/>
                    </b-col>
                    <b-col class="pays-icon align-left" cols="4">
                      <img src="/img/VISA.png" alt="google-app" class="img-pay"/>
                    </b-col>
                  </b-row>
                </b-col>
              </b-row>
            </b-col>
            <b-col cols="12" class="protection">
              <img src="/img/proteccion.svg" alt="protect" class="img-prot"/>
              <div class="title-footer">Protección segura 24/7</div>
            </b-col>
            <b-col cols="12" style="padding-top:2%">
              <b-row>
                <b-col cols="4" class="block-apps">
                  <img src="/img/huaweiGallery.png" alt="huawei-app" class="img-apps"/>
                </b-col>
                <b-col cols="4" class="block-apps">
                  <img src="/img/APP.png" alt="apple-app" class="img-apps"/>
                </b-col>
                <b-col cols="4" class="block-apps">
                  <img src="/img/GOOGLEP.png" alt="google-app" class="img-apps"/>
                </b-col>
              </b-row>
            </b-col>
          </b-row>
        </b-card-group>
    </template>
  </b-card>
</template>

<style lang="scss" scoped>
.footer1{
    background-color: #fdfdfd;
    padding: 0 17%;
}
.sub-footer{
    padding: 2% 10%;
    background: #f0f1f3;
    text-align: center;
}
.block-apps{
  padding: 0;
  margin-right: 0;
}
.img-apps{
  width: 75%;
  height: 45px;
}
.img-prot{
  width: 7%;
  margin-right: 3%;
}
.img-pay{
  width: 40%;
}
.pays-icon{
  padding: 0;
  margin: 0;
}
.protection{
    display: flex;
    align-items: center;
}
.align-left{
    text-align: left;
    margin-left: -73px;
}
.fb-icon{
    position: absolute;
    bottom: 43%;
    left: 17%;
    color: #603e85;
}
.ig-icon{
    position: absolute;
    bottom: 43%;
    left: 15%;
    color: #603e85;
}
.followus{
    position: absolute;
    bottom: 45%;
    left: 13%;
    color: #603e85;
    font-size: 17px;
}
.yt-icon{
    position: absolute;
    bottom: 43%;
    left: 13%;
    color: #603e85;
}
.footer-div{
    padding: 0 5px;
    background: #fdfdfd;
}
.space-logo{
  margin-left: 7%;
}
.img-logo{
    position: absolute;
    left: 12%;
}
.card-footer{
  padding: 0;
  background: #f0f1f3;
  width: 100%;
}
.menu-footer1{
    font-size: 14px;
    color: #603e85;
}
.input-email{
  border: 1px solid #603e85;
}
.btn-send{
    position: relative;
    bottom: 32px;
    left: 84%;
    padding: 0px 10px;
    font-weight: bold;
    background: #603e85;
    border: #603e85;
}
.check-box{
    position: relative;
    bottom: 42px;
    font-size: 10px;
    font-style: italic;
    width: 76%;
    line-height: 14px;
}
.menu1{
    display: grid;
    margin-top: 20px;
    line-height: 1.5rem;
}
.menu2{
    display: grid;
    line-height: 3px;
    margin-top: 30px;
}
.title-footer{
    font-size: 17px;
    text-align: left;
    color: #603e85;
    font-weight: 700;
}
.notification{
    font-size: 12px;
    color: #603e85;
    margin-bottom: 1px;
}
.card-group {
    display: block;
    flex-flow: row wrap;
}
.flag{
  width: 2%;
}
.logo{
  width: 100%;
}
.desk{
  display: block;
}
.mobile{
  display: none;
}

// Responsive
@media (max-width: 600px) {
.desk{
  display: none !important;
}
.mobile{
  display: block !important;
}
.space-logo{
    margin-left: 0;
    padding-top: 15%;
}
.img-logo{
    position: absolute;
    left: 30%;
    top: 3%;
}
.followus{
    position: absolute;
    bottom: 71%;
    left: 34%;
    color: #603e85;
    font-size: 17px;
}
.fb-icon{
    position: absolute;
    bottom: 70%;
    left: 53%;
    color: #603e85;
}
.ig-icon{
    position: absolute;
    bottom: 70%;
    left: 44%;
    color: #603e85;
}
.yt-icon{
    position: absolute;
    bottom: 70%;
    left: 35%;
    color: #603e85;
}
.foot-res{
  display: grid;
    margin-top: 100%;
}
.btn-footer{
    border: 1px solid #ececf6;
    border-radius: 5px;
    box-shadow: rgb(50 50 93 / 10%) 0px 6px 12px -2px, rgb(0 0 0 / 30%) 0px 3px 7px -3px;
    width: 100%;
    margin-bottom: 10px;
}
.img-prot{
    width: 5%;
    margin-right: 3%;
}
.protection{
    display: flex;
    align-items: center;
    margin: 8px 5px;
}
.img-apps{
    width: 90%;
    height: 30px;
}
.align-left{
    text-align: center;
    margin-left: 0;
}
.img-pay{
    width: 45%;
}
}
</style>
<script>
  export default {
    data() {
      return {
        form: {
          email: '',
          checked: []
        },
        show: true
      }
    },
    methods: {
      onSubmit(event) {
        event.preventDefault()
        alert(JSON.stringify(this.form))
      },
      onReset(event) {
        event.preventDefault()
        // Reset our form values
        this.form.email = ''
        this.form.checked = []
        // Trick to reset/clear native browser form validation state
        this.show = false
        this.$nextTick(() => {
          this.show = true
        })
      }
    }
  }
</script>