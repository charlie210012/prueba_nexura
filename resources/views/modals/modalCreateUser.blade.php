<!-- Modal -->
<div class="modal fade" id="createuser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header headerRegister">
          <h5 class="modal-title" id="titulomodal">CREAR EMPLEADO</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        
            <div class="tile">
              <div class="tile-body">
                <form id ="usercreate" name ="usercreate"  method ="POST">
                   <div class="form-group">
                        <div class="alert alert-primary" role="alert">
                            Los campos con (*) son obligatorios
                        </div>
                        <label class="control-label">Nombre Completo *</label>
                        <input class="form-control" id="nameuser" name="nameuser" type="text" placeholder="Nombre completo del empleado">
                  </div>
                  <div class="form-group">
                    <label class="control-label">Correo Electronico *</label>
                    <input class="form-control" id="emailuser" name="emailuser" type="text" placeholder="Correo electronico">
                  </div>
                  <div class="form-group">
                    <label class="control-label">Sexo *</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="sexouser1">
                        <label class="form-check-label" for="sexouser1">
                        Masculino
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="sexouser2">
                        <label class="form-check-label" for="sexouser2">
                        Femenino
                        </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Area *</label>
                    <select class="form-control" id="areauser" name="areauser" placeholder="Escoje area">
                        <option>Administracion</option>
                        <option>Ventas</option>
                        <option>Calidad</option>
                        <option>Produccion</option>
                    
                    </select>
                  </div>
                  <div class="form-group">
                    <div class="mb-3">
                        <label for="descripcionuser" class="form-label">Descripcion *</label>
                        <textarea class="form-control" id="descripcionuser" rows="3"></textarea>
                      </div>
                  </div>
                  <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="boletinuser">
                      <label class="form-check-label" for="boletinuser">
                        Deseo recibir boletin informativo
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="descripcionuser" class="form-label">Roles *</label>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="rolesuser1">
                      <label class="form-check-label" for="rolesuser1">
                        Profesional de proyectos - Desarrollador
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="rolesuser2">
                      <label class="form-check-label" for="rolesuser2">
                        Gerente estrategico
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="rolesuser3">
                      <label class="form-check-label" for="rolesuser3">
                        Auxiliar administrativo
                      </label>
                    </div>
                  </div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-primary" id ="btnempleado"><span id ="btntext" class="bg-light" ></span>Agregar</button>
                  </div>
                </form>
              </div>
            </div>
        </div>
        
      </div>
    </div>
  </div>
  
  