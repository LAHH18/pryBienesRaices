<div id="myCarousel" class="carousel slide mb-3" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img  src="<?php echo APP_URL; ?>/app/views/img//slider3.jpg" alt=""width="100%" height="120%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            <div class="container">
                <div class="carousel-caption text-start">
                    <h2>Las mejores Propiedades</h2>
                    <p>Conoce y explora todas nuestras propiedades</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img  src="<?php echo APP_URL; ?>/app/views/img//slider3.jpg" alt=""width="100%" height="120%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">    
            <div class="container">
                <div class="carousel-caption">
                    <h2>Compra o alquila una propiedad</h2>
                    <p>Some representative placeholder content for the second slide of the carousel.</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img  src="<?php echo APP_URL; ?>/app/views/img//slider3.jpg" alt=""width="100%" height="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">    
            <div class="container">
                <div class="carousel-caption text-end">
                    <h2>Escoge la tuya</h2>
                    <p>Some representative placeholder content for the third slide of this carousel.</p>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<section class="banner-principal">
        <div class="banner-text row justify-content-center">
            <h1 class="text-center">Encuentra tu hogar perfecto con Propiedad Conectada</h1>
            <form class="busqueda-rapida row gx-3 gy-2 align-items-center">
                <div class="col-sm-3">
                  <label class="visually-hidden" for="specificSizeSelect">Preference</label>
                  <select class="form-select" id="specificSizeSelect">
                    <option selected>Ubicacion</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div class="col-sm-3">
                    <label class="visually-hidden" for="specificSizeSelect">Preference</label>
                    <select class="form-select" id="specificSizeSelect">
                      <option selected>Tipo de Propiedad</option>
                      <option value="1">Casa</option>
                      <option value="2">Departamento</option>
                      <option value="3">Local</option>
                    </select>
                </div>
                <div class="col-sm-3">
                    <label class="visually-hidden" for="specificSizeSelect">Preference</label>
                    <select class="form-select" id="specificSizeSelect">
                      <option selected>Precio Minimo</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-sm-3">
                    <label class="visually-hidden" for="specificSizeSelect">Preference</label>
                    <select class="form-select" id="specificSizeSelect">
                      <option selected>Precio Maximo</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn mb-2">Buscar</button>
                </div>
              </form>
        </div>
    </section>

    <!-- Propiedades Destacadas -->
    <section class="container propiedades-destacadas">
        <h2 class="text-center">Propiedades Destacadas</h2>
        <div class="row justify-content-center">
            <div class="propiedad ">
                <img src="/recursos/propiedad1.jpg" alt="Propiedad 1">
                <p>Descripción breve de la propiedad</p>
                <a href="#">Ver Más</a>
            </div>
            <div class="propiedad ">
                <img src="/recursos/propiedad1.jpg" alt="Propiedad 2">
                <p>Descripción breve de la propiedad</p>
                <a href="#">Ver Más</a>
            </div>
            <div class="propiedad ">
                <img src="/recursos/propiedad1.jpg" alt="Propiedad 3">
                <p>Descripción breve de la propiedad</p>
                <a href="#">Ver Más</a>
            </div>
        </div>
    </section>

    <!-- Agentes Inmobiliarios -->
    <section class="container agentes-inmobiliarios mt-5">
        <h2 class="text-center">Conecta con Nuestros Mejores Agentes</h2>
        <div class="row justify-content-center">
            <div class="agente col-md-4 text-center">
                <img src="/recursos/agente.jpg" class="img-fluid rounded-circle" alt="Agente 1">
                <p>Nombre del Agente</p>
                <a href="#" class="btn btn-outline-secondary">Ver Perfil</a>
            </div>
            <div class="agente col-md-4 text-center">
                <img src="/recursos/agente.jpg" class="img-fluid rounded-circle" alt="Agente 2">
                <p>Nombre del Agente</p>
                <a href="#" class="btn btn-outline-secondary">Ver Perfil</a>
            </div>
        </div>
        <div class="text-center mt-4 mb-3">
            <a href="#" class="btn btn-secondary">Ver Todos los Agentes</a>
        </div>
    </section>