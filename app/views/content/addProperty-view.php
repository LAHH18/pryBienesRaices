<div class="container mt-5 mb-4 border-2">
    <form class="row g-3 border border-dark rounded p-2 fw-bold" action="<?php echo APP_URL; ?>controllers/propertyController?metodo=AltaPropiedad" method="POST">
        <legend class="h2 fw-bold">Informacion general</legend>
        <div class="col-md-6">
            <label class="form-label">Titulo:</label>
            <input type="text" placeholder="Ingrese el titulo de la propiedad" class="form-control" id="titulo" name="txtTitulo">
        </div>
        <div class="col-md-6">
            <label class="form-label">Precio:</label>
            <input type="number" placeholder="Ingrese un precio" class="form-control" id="precio" name="txtPrecio">
        </div>
        <div class="col-md-6">
            <label class="form-label">Seleccionar una imagen:</label>
            <input class="form-control" type="file" id="formFile">
        </div> 
        <div class="col-md-6">
            <label class="form-label">Tipo:</label>
            <select class="form-select" aria-label="Default select example">
                <option selected disabled>Seleccione tipo</option>
                <option value="venta">Venta</option>
                <option value="alquiler">Alquiler</option>
            </select>
        </div> 
        <label class="form-label">Descripcion</label>
        <div class="col-12">
            <textarea class="form-control" placeholder="Ingrese una descripcion" id="descripcion" name="txtDescripcion"></textarea>
        </div>
        <legend class="h2 fw-bold">Informacion Propiedad</legend>
        <div class="col-md-6">
            <label class="form-label">Numero de cuartos:</label>
            <input type="text" placeholder="Ingrese el numero de cuartos" class="form-control" id="titulo" name="txtTitulo">
        </div>
        <div class="col-md-6">
            <label class="form-label">Numero de baños:</label>
            <input type="text" placeholder="Ingrese el numero de baños" class="form-control" id="titulo" name="txtTitulo">
        </div>
        <div class="col-md-6">
            <label class="form-label">Estacionamiento:</label>
            <input type="text" placeholder="Ingrese la cantidad de autos maxima" class="form-control" id="titulo" name="txtTitulo">
        </div>

        <legend class="h2 fw-bold">Informacion Vendedor</legend>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">Agente:</label>
            <!--FUNCION DE PHP PARA MOSTRAR A LOS AGENTES-->
            <select class="form-select" aria-label="Default select example">
                <option selected disabled>Seleccione agente</option>
                <option value="agente1">Juan Perez</option>
                <option value="agente2">Joadan Matias</option>
            </select>
        </div>
        
        <div class="col-12">
            <button type="submit" class="btn btn-warning">Publicar</button>
        </div>
    </form>
</div>