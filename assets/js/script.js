const languageSelect = document.getElementById('language')

languageSelect.onchange = () => {
  const selectedLanguage = languageSelect.value;
  localStorage.setItem('language', selectedLanguage);
  changeLanguage(selectedLanguage);
}

const translate = {
  "es": {
    hero: {
      subtitle: "Papel grado <br>alimenticio",
      description: "Papel blanco o impreso personalizado para envolver tortillas y alimentos.",
      contactButton: "Contáctanos"
    },
    about: {
      title: "Nosotros",
      subtitle: "¿Por qué elegirnos?",
      content: `
        <p class="fst-italic">
          Nos distinguimos por brindar una atención personalizada y un servicio de calidad excepcional. Reconocemos que cada cliente es único y valoramos tus necesidades individuales. Contamos con un profundo conocimiento en la industria de la masa y la tortilla, lo cual nos permite entender a la perfección tus desafíos y ofrecerte soluciones a medida.
        </p>
        <p class="fst-italic">
          Nuestro objetivo es ayudarte a prosperar en tu negocio, por eso estamos preparados para proporcionarte las mejores soluciones que cubrirán todos tus requerimientos operativos. Ya sea que necesites optimizar tus procesos de producción, mejorar la eficiencia energética, implementar sistemas de control de calidad o cualquier otra necesidad específica, nuestro equipo de expertos está listo para acompañarte en cada paso del camino.
        </p>
        <ul>
          <li><i class="bi bi-check2-all"></i> Somos una empresa comprometida con tu éxito. </li>
          <li><i class="bi bi-check2-all"></i> Nuestro enfoque personalizado, conocimientos profundos en la industria y atención a las normas de sanidad nos convierten en tu socio confiable para optimizar tu operación diaria.</li>
          <li><i class="bi bi-check2-all"></i> Estamos listos para ser parte de tu camino hacia el crecimiento y el cumplimiento de tus metas.</li>
        </ul>
        <p>
          ¡Contáctanos hoy mismo y descubre cómo podemos ayudarte a llevar tu negocio al siguiente nivel!
        </p>
      `,
      order: "¡Ordena aqui!",
      image: "assets/img/Papel alimenticio.png"
    },
    statsCounter:`
      <div class="flex">
        <h1 class="text-white">Solicita una cotización</h1>
        <h5 class="text-white">Uno de nuestros expertos te contestara en breve para hacer una cotización a tu medida</h5>
        <a class="btn-book-a-table" href="#contact">Contacto</a>
      </div>
    `,
    products: {
      title: "Productos",
      subtitle: `<p>Nuestos <span>más importantes</span> productos</p>`,
      items: `
      <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/papelga.webp)">
        <h3>Papel blanco</h3>
        <p class="description">
          Papel para envolver tortilla, resistente a la humedad y duradero.
        </p>
      </div><!-- End Event item -->

      <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/PGA.jpg)">
        <h3>Papel personalizado</h3>
        <p class="description">
          Complementa tu imagen envolviendo los alimentos con papel diseñado para tu marca.
        </p>
      </div><!-- End Event item -->
      `
    },
    coverage: {
      title: "Cobertura",
      subtitle: "Distribuimos a toda la república mexicana",
      description: `
        <li><i class="bi bi-check2-all"></i> Distribución nacional. </li>
        <li><i class="bi bi-check2-all"></i> Experiencia con abasto eficiente.</li>
        <li><i class="bi bi-check2-all"></i> Servicio personalizado.</li>
      `
    },
    contact: `
    <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Contactanos</h2>
      <p>Trabajemos <span>juntos</span></p>
    </div>

    <div class="row gy-4">

      <div class="col-md-6">
        <div class="info-item  d-flex align-items-center">
          <i class="icon bi bi-map flex-shrink-0"></i>
          <div>
            <h3>Dirección</h3>
            <p>
              José Silvestre Aramberri 149, Ampliación Lázaro Cárdenas, <br>
              Lázaro Cárdenas, 66058 Cd Gral Escobedo, N.L. <br>
            </p>
          </div>
        </div>
      </div><!-- End Info Item -->

      <div class="col-md-6">
        <div class="info-item d-flex align-items-center">
          <i class="icon bi bi-envelope flex-shrink-0"></i>
          <div>
            <h3>Correo</h3>
            <a href="mailto:ventas@tagac.com.mx">ventas@tagac.com.mx</a>
          </div>
        </div>
      </div><!-- End Info Item -->

      <div class="col-md-6">
        <div class="info-item  d-flex align-items-center">
          <i class="icon bi bi-telephone flex-shrink-0"></i>
          <div>
            <h3>Contactanos</h3>
            <a href="tel:+528110175446">+52 (81) 1017 - 5446</a>
          </div>
        </div>
      </div><!-- End Info Item -->

      <div class="col-md-6">
        <div class="info-item  d-flex align-items-center">
          <i class="icon bi bi-share flex-shrink-0"></i>
          <div>
            <h3>Horarios</h3>
            <div>
              <strong>Lunes - Viernes:</strong> 8AM - 6PM <br>
              <strong>Sábado:</strong> 8AM - 2PM <br>
              <strong>Domingo:</strong> Closed
            </div>
          </div>
        </div>
      </div><!-- End Info Item -->
    `,
    footer: `
      <div class="container">
        <div class="row gy-3">
          <div class="col-lg-3 col-md-6 d-flex">
            <i class="bi bi-geo-alt icon"></i>
            <div>
              <h4>Dirección</h4>
              <p>
                José Silvestre Aramberri 149, Ampliación Lázaro Cárdenas, <br>
                Lázaro Cárdenas, 66058 Cd Gral Escobedo, N.L. <br>
              </p>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-links d-flex">
            <i class="bi bi-telephone icon"></i>
            <div>
              <h4>Contactanos</h4>
              <p>
                <strong>Telefono:</strong> <a href="tel:+528110175446">+52 (81) 1017 - 5446</a><br>
                <strong>Correo:</strong> <a href="mailto:ventas@tagac.com.mx">ventas@tagac.com.mx</a><br>
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links d-flex">
            <i class="bi bi-clock icon"></i>
            <div>
              <h4>Horarios</h4>
              <p>
                <strong>Lunes - Viernes:</strong> 8AM - 6PM <br>
                <strong>Sábado:</strong> 8AM - 2PM <br>
                <strong>Domingo:</strong> Closed
              </p>
            </div>
          </div>

        </div>
      </div>

      <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>TAGAC</span></strong>. Todos los derechos reservados
      </div>

    </div>
    `,
    navbar: {
      hero: "Inicio",
      about: "Nosotros",
      products: "Productos",
      coverage: "Cobertura",
      contact: "Contacto"
    },
    client: `
    <div class="section-header">
      <p>Ellos creen <span>en nosotros</span></p>
    </div>
    <div class="row gy-4">
      <div class="col-lg-5 position-relative stats-img" data-aos="fade-up" data-aos-delay="150" style="background-image: url(assets/img/Meseca_Tagac.jpg); background-position: center; background-repeat: no-repeat; background-size: cover;"></div>
      <div class="col-lg-7 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
        <div class="content ps-0 ps-lg-5">
          <p class="fst-italic">
            ¡Orgullosos proveedores de MASECA!
          </p>
          <p class="fst-italic">
            En TAGAC, nos enorgullece ser los proveedores oficiales de MASECA, líder mundial en la producción de masa y tortillas. Nuestro papel grado alimenticio de alta calidad ha sido seleccionado por MASECA para garantizar la frescura y la seguridad en sus operaciones de tortillerías.
          </p>
          <p class="fst-italic">
            Con nuestra amplia experiencia en la industria y nuestro compromiso con los más altos estándares de calidad, ofrecemos soluciones de papel personalizado para locales y restaurantes, adaptadas a las necesidades específicas de cada negocio. Nuestro papel garantiza la integridad de los productos alimenticios, proporcionando una presentación impecable y respetando los más altos estándares de higiene. 
          </p>
          <p class="fst-italic">
            Al elegirnos como proveedores, MASECA confía en nuestra capacidad para ofrecer productos confiables, entregas puntuales y atención al cliente excepcional. Estamos comprometidos a brindarle a nuestros clientes la misma calidad y excelencia que nos ha convertido en socios de confianza para una marca tan prestigiosa como MASECA.
          </p>
          <p class="fst-italic">
            Confíe en nosotros para proporcionarle el papel grado alimenticio de primera calidad que su negocio merece. ¡Permítanos ayudarle a destacar y ofrecer una experiencia inigualable a sus clientes!
          </p>
          <a href="#contact" class="btn-book-a-table">Contactanos</a>
        </div>
      </div>
    </div>
    `
  },
  "en": {
    hero: {
      subtitle: "food grade <br> paper",
      description: "White or custom printed paper to wrap tortillas and food.",
      contactButton: "Contact us"
    },
    about: {
      title: "About us",
      subtitle: "Why choose us?",
      content:`
        <p class="fst-italic">
          We distinguish ourselves by providing personalized attention and exceptional quality service. We recognize that each client is unique and we value your individual needs. We have in-depth knowledge of the dough and tortilla industry, which allows us to fully understand your challenges and offer you tailored solutions.
        </p>
        <p class="fst-italic">
          Our objective is to help you prosper in your business, that's why we are prepared to provide you with the best solutions that will cover all your operational requirements. Whether you need to optimize your production processes, improve energy efficiency, implement quality control systems or any other other specific needs, our team of experts is ready to accompany you every step of the way..
        </p>
        <ul>
          <li><i class="bi bi-check2-all"></i> We are a company committed to your success. </li>
          <li><i class="bi bi-check2-all"></i> Our personalized approach, in-depth industry knowledge, and attention to sanitation regulations make us your trusted partner in optimizing your daily operation.</li>
          <li><i class="bi bi-check2-all"></i> We are ready to be part of your path to growth and the fulfillment of your goals.</li>
        </ul>
        <p>
          Contact us today and find out how we can help you take your business to the next level!
        </p>
      `,
      order: "Order here!",
      image: "assets/img/Paper food.png"

    },
    statsCounter:`
      <div class="flex">
        <h1 class="text-white">Request a quote</h1>
        <h5 class="text-white">One of our experts will answer you shortly to make a tailor-made quote</h5>
        <a class="btn-book-a-table" href="#contact">Contact us</a>
      </div>
    `,
    products: {
      title: "Products",
      subtitle: `<p>Our <span>most important</span> products</p>`,
      items: `
      <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/papelga.webp)">
        <h3>White paper</h3>
        <p class="description">
          Tortilla wrapping paper, moisture resistant and durable.
        </p>
      </div><!-- End Event item -->

      <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/PGA.jpg)">
        <h3>Custom paper</h3>
        <p class="description">
          Complement your image by wrapping food with paper designed for your brand.
        </p>
      </div><!-- End Event item -->
      `
    },
    coverage: {
      title: "Coverage",
      subtitle: "We distribute to the entire Mexican Republic",
      description: `
        <li><i class="bi bi-check2-all"></i> National distribution. </li>
        <li><i class="bi bi-check2-all"></i> Experience with efficient supply.</li>
        <li><i class="bi bi-check2-all"></i> Personalized service.</li>  
      `
    },
    contact: `
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Contact us</h2>
        <p>Work <span>together</span></p>
      </div>

      <div class="row gy-4">

        <div class="col-md-6">
          <div class="info-item  d-flex align-items-center">
            <i class="icon bi bi-map flex-shrink-0"></i>
            <div>
              <h3>Address</h3>
              <p>
                José Silvestre Aramberri 149, Ampliación Lázaro Cárdenas, <br>
                Lázaro Cárdenas, 66058 Cd Gral Escobedo, N.L. <br>
              </p>
            </div>
          </div>
        </div><!-- End Info Item -->

        <div class="col-md-6">
          <div class="info-item d-flex align-items-center">
            <i class="icon bi bi-envelope flex-shrink-0"></i>
            <div>
              <h3>E-mail</h3>
              <a href="mailto:ventas@tagac.com.mx">ventas@tagac.com.mx</a>
            </div>
          </div>
        </div><!-- End Info Item -->

        <div class="col-md-6">
          <div class="info-item  d-flex align-items-center">
            <i class="icon bi bi-telephone flex-shrink-0"></i>
            <div>
              <h3>Call us</h3>
              <a href="tel:+528110175446">+52 (81) 1017 - 5446</a>
            </div>
          </div>
        </div><!-- End Info Item -->

        <div class="col-md-6">
          <div class="info-item  d-flex align-items-center">
            <i class="icon bi bi-share flex-shrink-0"></i>
            <div>
              <h3>Schedules</h3>
              <div>
                <strong>Monday - Friday:</strong> 8AM - 6PM <br>
                <strong>Saturday:</strong> 8AM - 2PM <br>
                <strong>Sundat:</strong> Closed
              </div>
            </div>
          </div>
        </div><!-- End Info Item -->
    `,
    footer: `
    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Address</h4>
            <p>
              José Silvestre Aramberri 149, Ampliación Lázaro Cárdenas, <br>
              Lázaro Cárdenas, 66058 Cd Gral Escobedo, N.L. <br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Call us</h4>
            <p>
              <strong>Phone:</strong> <a href="tel:+528110175446">+52 (81) 1017 - 5446</a><br>
              <strong>E-mail:</strong> <a href="mailto:ventas@tagac.com.mx">ventas@tagac.com.mx</a><br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Schedules</h4>
            <p>
              <strong>Monday - Friday:</strong> 8AM - 6PM <br>
              <strong>Saturday:</strong> 8AM - 2PM <br>
              <strong>Sunday:</strong> Closed
            </p>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
    <div class="copyright">
      &copy; Copyright <strong><span>TAGAC</span></strong>. All rights reserved.
    </div>

  </div>
  `,
    navbar: {
      hero: "Home",
      about: "About us",
      products: "Products",
      coverage: "Coverage",
      contact: "Contact us"
    },
    client: `        
    <div class="section-header">
      <p>They belive <span>in us</span></p>
    </div>
    <div class="row gy-4">
      <div class="col-lg-5 position-relative stats-img" data-aos="fade-up" data-aos-delay="150" style="background-image: url(assets/img/Meseca_Tagac.jpg); background-position: center; background-repeat: no-repeat; background-size: cover;"></div>
      <div class="col-lg-7 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
        <div class="content ps-0 ps-lg-5">
          <p class="fst-italic">
            Proud suppliers of MASECA!
          </p>
          <p class="fst-italic">
            At Tagac, we are proud to be the official suppliers of MASECA, a world leader in the production of dough and tortillas. Our high quality food grade paper has been selected by MASECA to guarantee freshness and safety in its tortilla operations.
          </p>
          <p class="fst-italic">
            With our extensive experience in the industry and our commitment to the highest quality standards, we offer custom paper solutions for stores and restaurants, tailored to the specific needs of each business. Our paper guarantees the integrity of food products, providing an impeccable presentation and respecting the highest hygiene standards.
          </p>
          <p class="fst-italic">
            By choosing us as a supplier, MASECA is confident in our ability to offer reliable products, on-time delivery, and exceptional customer service. We are committed to providing our clients with the same quality and excellence that has made us trusted partners for a brand as prestigious as MASECA.
          </p>
          <p class="fst-italic">
            Trust us to provide you with the premium quality food grade paper your business deserves. Let us help you stand out and offer an unbeatable experience to your customers!</p>
          <a href="#contact" class="btn-book-a-table">Contact us</a>
        </div>
      </div>
    </div>`
  }
};

const heroSection = document.getElementById('hero');
const heroTitle = heroSection.querySelector('h2');
const heroDescription = heroSection.querySelector('p');
const heroButton = heroSection.querySelector('a');
const aboutSection = document.getElementById('about');
const aboutHeader = aboutSection.querySelector('.section-header h2');
const aboutOrder = aboutSection.querySelector('h4');
const aboutSubtitle = aboutSection.querySelector('.section-header p');
const aboutContent = aboutSection.querySelector('.content');
const aboutImage = aboutSection.querySelector('.about-img');
const navbarItems = Array.from(document.querySelectorAll("#navbar ul li a"));
const contactButton = document.querySelector('.btn-book-a-table');
const productsSection = document.getElementById('products');
const productsHeader = productsSection.querySelector('.section-header h2');
const productsSubtitle = productsSection.querySelector(".section-header p");
const products = productsSection.querySelector(".swiper-wrapper");
const coverageSection = document.getElementById("coverage");
const coverageHeader = coverageSection.querySelector(".section-header h2");
const coverageSubtitle = coverageSection.querySelector(".section-header p");
const coverageContent = coverageSection.querySelector(".distribution");
const contactSection = document.getElementById("contact");
const footer =  document.getElementById("footer");
const call = document.querySelector(".stats");
const maseca = document.querySelector(".stats-counter-two .container");


function changeLanguage(language) {

  if(language === "es"){
    heroTitle.innerHTML = translate.es.hero.subtitle;
    heroDescription.innerHTML = translate.es.hero.description;
    heroButton.innerHTML = translate.es.hero.contactButton;
    aboutHeader.innerHTML = translate.es.about.title;
    aboutSubtitle.innerHTML = translate.es.about.subtitle;
    aboutContent.innerHTML = translate.es.about.content;
    aboutOrder.innerHTML = translate.es.about.order;
    aboutImage.style.backgroundImage = `url("${translate.es.about.image}")`;
    navbarItems.map((item)=>{
      let itemId = item.getAttribute("href").substring(1);
      item.innerHTML = translate.es.navbar[itemId];
    })
    contactButton.innerHTML = translate.es.navbar.contact;
    productsHeader.innerHTML = translate.es.products.title;
    productsSubtitle.innerHTML = translate.es.products.subtitle;
    products.innerHTML = translate.es.products.items;
    coverageHeader.innerHTML = translate.es.coverage.title;
    coverageSubtitle.innerHTML = translate.es.coverage.subtitle;
    coverageContent.innerHTML =  translate.es.coverage.description;
    contactSection.innerHTML = translate.es.contact;
    footer.innerHTML = translate.es.footer;
    call.innerHTML = translate.es.statsCounter;
    maseca.innerHTML = translate.es.client;
  }else if(language === "en"){
    heroTitle.innerHTML = translate.en.hero.subtitle;
    heroDescription.innerHTML = translate.en.hero.description;
    heroButton.innerHTML = translate.en.hero.contactButton;
    aboutHeader.innerHTML = translate.en.about.title;
    aboutSubtitle.innerHTML = translate.en.about.subtitle;
    aboutContent.innerHTML = translate.en.about.content;
    aboutOrder.innerHTML = translate.en.about.order;
    aboutImage.style.backgroundImage = `url("${translate.en.about.image}")`;
    navbarItems.map((item)=>{
      let itemId = item.getAttribute("href").substring(1);
      item.innerHTML = translate.en.navbar[itemId];
    })
    contactButton.innerHTML = translate.en.navbar.contact;
    productsHeader.innerHTML = translate.en.products.title;
    productsSubtitle.innerHTML = translate.en.products.subtitle;
    products.innerHTML = translate.en.products.items;
    coverageHeader.innerHTML = translate.en.coverage.title;
    coverageSubtitle.innerHTML = translate.en.coverage.subtitle;
    coverageContent.innerHTML = translate.en.coverage.description;
    contactSection.innerHTML = translate.en.contact;
    footer.innerHTML = translate.en.footer;
    call.innerHTML = translate.en.statsCounter;
    maseca.innerHTML = translate.en.client;
  }
}

const storedLanguage = localStorage.getItem('language');
if(storedLanguage){
  languageSelect.value = storedLanguage
  changeLanguage(storedLanguage)
}