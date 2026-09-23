class btn extends HTMLElement{
  constructor(){
      super()

      const shadow = this.attachShadow({mode: 'open'})

      const foot = this.elements()

      shadow.appendChild(this.style())
      shadow.appendChild(foot)
  }

  elements(){
      const html = document.createElement('section')
      html.setAttribute('id', 'rodape' )
      html.innerHTML=`
      <div class="btn-whatsapp-fix">
          <a href="https://api.whatsapp.com/send/?phone=5517997914198&text=Ol%C3%A1%2C+%0D%0AGostaria+de+saber+mais+sobre+as+solu%C3%A7%C3%B5es+da+QD7&type=phone_number&app_absent=0">
              <img class ="img-whatsapp-icon" src="https://inspiracapital.com.br/view/img/icones/icon-whtsp.png" alt="Icone-Whatsapp">
          </a>
      </div>
      `
      return html
  }

  style(){
      const styles = document.createElement('style')
      styles.textContent=`
      .btn-whatsapp-fix{
          width: max-content;
          position: fixed;
          z-index:999;
      
          bottom: 2.5vh;
          right: 4vw;
          height: 12.5vh;    
      }
      
      .img-whatsapp-icon{
          width: 4vh;
          height:4vh;
      }
      
      .btn-whatsapp-fix:hover .img-whatsapp-icon{
          width: 7.5vh;
          height: 7.5vh;
          transition:.5s;
      
      }

      @media (max-width: 550px){
          .btn-whatsapp-fix{
              right:5vw;
          }
      }
      `
      return styles
  }
}

customElements.define('wtsp-button', btn)