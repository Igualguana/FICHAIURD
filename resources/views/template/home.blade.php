@extends('../layouts.frontend')

@section('content')


<div class="container">
    <main>
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="resources/images/bootstrap-logo.svg" alt="" width="100" height="57">
        <h2>IGLESIA UNIVERSAL DEl REINO DE DIOS </h2>
        <p class="lead">"Soy siervo del Señor, que me ha llamado para anunciar el Evangelio." (Romanos 1:1)</p>
      </div>
        
            <div class="row g-5">
             
              <div class="col-md-7 col-lg-12">
                <h4 class="mb-3">Ficha de Miembro</h4>
                <div class="py-5 text-center">
                <div id="preview" class="thumbnail">
    
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNzEiIGhlaWdodD0iMTgwIj48cmVjdCB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgZmlsbD0iI2VlZSI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9Ijg1LjUiIHk9IjkwIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEycHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MTcxeDE4MDwvdGV4dD48L3N2Zz4="
                        width="200" height="200" />

                </div>
                <!--  <span class="alert alert-info" id="file-info">No hay archivo aún</span>-->

                <form id="file-submit" enctype="multipart/form-data">
                    <input id="file" name="file" type="file" />
                </form>
            </div>
                <form class="needs-validation" novalidate>
                  <div class="row g-3">
                    <div class="col-sm-6">
                      <label for="firstName" class="form-label">First name</label>
                      <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                      <div class="invalid-feedback">
                        Valid first name is required.
                      </div>
                    </div>
        
                    <div class="col-sm-6">
                      <label for="lastName" class="form-label">Last name</label>
                      <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                      <div class="invalid-feedback">
                        Valid last name is required.
                      </div>
                    </div>
        
                          
                   
                    <div class="col-12">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="phone" class="form-control" id="phone" placeholder="7654456" required>
                        <div class="invalid-feedback">
                          Please enter your shipping address.
                        </div>
                      </div>
        
                    <div class="col-12">
                      <label for="address" class="form-label">Address</label>
                      <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                      <div class="invalid-feedback">
                        Please enter your shipping address.
                      </div>
                    </div>
        
                  
        
                    <div class="col-md-5">
                      <label for="country" class="form-label">Country</label>
                      <select class="form-select" id="country" required>
                        <option value="">Choose...</option>
                        <option>United States</option>
                      </select>
                      <div class="invalid-feedback">
                        Please select a valid country.
                      </div>
                    </div>
        
                    <div class="col-md-4">
                      <label for="state" class="form-label">State</label>
                      <select class="form-select" id="state" required>
                        <option value="">Choose...</option>
                        <option>California</option>
                      </select>
                      <div class="invalid-feedback">
                        Please provide a valid state.
                      </div>
                    </div>
        
                    <div class="col-md-3">
                      <label for="zip" class="form-label">Zip</label>
                      <input type="text" class="form-control" id="zip" placeholder="" required>
                      <div class="invalid-feedback">
                        Zip code required.
                      </div>
                    </div>
                  </div>


                  <div class="col-12">
                    <label for="Oracion" class="form-label">Pedido de Oración</label>
                    <textarea type="text" class="form-control" id="Oracion" placeholder="1234 Main St" required></textarea>
                    <div class="invalid-feedback">
                      Please enter your shipping address.
                    </div>
                  </div>
                 

                  
        
                  <hr class="my-4">
                  <label for="Oracion" class="form-label">¿Como conoció la Iglesia?</label>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="same-address">
                    <label class="form-check-label" for="same-address">TV</label>
                  </div>
        
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="save-info">
                    <label class="form-check-label" for="save-info">Radio</label>
                  </div>

                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="save-info">
                    <label class="form-check-label" for="save-info">EVG</label>
                  </div>
        
                  <hr class="my-4">
        
                  
                  {{  csrf_field()}}
                  <button class="w-100 btn btn-primary btn-lg" type="submit">Enviar formulario </button>
                </form>
              </div>
            </div>
          </main>
        
          <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; 2023 Elaborado por <a href="#">Tecnosotf</a> </p>
            <ul class="list-inline">
              <li class="list-inline-item"><a href="#">Privacy</a></li>
              <li class="list-inline-item"><a href="#">Terms</a></li>
              <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
          </footer>
        </div>
@endsection