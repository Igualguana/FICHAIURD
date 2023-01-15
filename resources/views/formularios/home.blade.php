@extends('../layouts.frontend')

@section('content')


<div class="container">
    <main>
      <form action="{{route('formularios_post')}}" method="POST"  name="form" enctype="multipart/form-data">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="{{ asset("storage/logo2.png")}}" alt="" width="150" height="150">

        
        <h2>IGLESIA UNIVERSAL DEl REINO DE DIOS </h2>
        <p class="lead">"Soy siervo del Señor, que me ha llamado para anunciar el Evangelio." (Romanos 1:1)</p>
        <br>
        <h3>Ficha de Miembro </h3>
      </div>
        
            <div class="row g-5">
             
              <div class="col-md-7 col-lg-12">
                <h4 class="mb-3"></h4>
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
                      <input type="text" class="form-control"  name="firstName" id="firstName" placeholder="" value="{{ old('firstName') }}" required>
                      <div class="invalid-feedback">
                        Valid first name is required.
                      </div>
                    </div>
        
                    <div class="col-sm-6">
                      <label for="lastName" class="form-label">Last name</label>
                      <input type="text" class="form-control" id="lastName" name="lastName" placeholder="" value="{{ old('lastName') }}" required>
                      <div class="invalid-feedback">
                        Valid last name is required.
                      </div>
                    </div>
        
                          
                   
                    <div class="col-12">
                        <label for="telephone" class="form-label">Phone</label>
                        <input type="telephone" class="form-control" id="phone" name="phone" placeholder="7654456" value="{{ old('phone') }}" required>
                        <div class="invalid-feedback">
                          Valid telephone is required.
                        </div>
                      </div>
        
                    <div class="col-12">
                      <label for="address" class="form-label">Address</label>
                      <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St"  value="{{ old('address') }}"required>
                      <div class="invalid-feedback">
                        Please enter your  address.
                      </div>
                    </div>
        
                  
        
                    <div class="col-md-5">
                      <label for="country" class="form-label">Country</label>
                      <select class="form-select" id="country" name="country" value="{{ old('country') }}"required>
                        <option value="">Choose...</option>
                        <option>United States</option>
                      </select>
                      <div class="invalid-feedback">
                        Please select a valid country.
                      </div>
                    </div>
        
                    <div class="col-md-4">
                      <label for="state" class="form-label">State</label>
                      <select class="form-select" id="state"  name="state" value="{{ old('state') }}" required>
                        <option value="">Choose...</option>
                        <option>California</option>
                      </select>
                      <div class="invalid-feedback">
                        Please provide a valid state.
                      </div>
                    </div>
        
                    <div class="col-md-3">
                      <label for="zip" class="form-label">Zip</label>
                      <input type="text" class="form-control" id="zip"   name="zip" value="{{ old('zip') }}" placeholder="" required>
                      <div class="invalid-feedback">
                        Zip code required.
                      </div>
                    </div>
                  </div>


                  <div class="col-12">
                    <label for="Oracion" class="form-label">Pedido de Oración</label>
                    <textarea type="text" class="form-control" id="Oracion"  name="Oracion" placeholder="1234 Main St"  value="{{ old('Oracion') }}"required></textarea>
                    <div class="invalid-feedback">
                     Please  Information is required.
                    </div>
                  </div>
                 

                  
        
                  <hr class="my-4">
                  <label for="Oracion" class="form-label">¿Como conoció la Iglesia?</label>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="save-TV"  name="save-TV" value="{{ old('save-TV') }}">
                    <label class="form-check-label" for="save-TV">TV</label>
                  </div>
        
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="save-Radio" name="save-Radio" value="{{ old('save-Radio') }}">
                    <label class="form-check-label" for="save-Radio">Radio</label>
                  </div>

                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="save-EVG" name="save-EVG" value="{{ old('save-EVG') }}">
                    <label class="form-check-label" for="save-EVG">EVG</label>
                  </div>
        
                  <hr class="my-4">
        
                  
                  {{  csrf_field()}}
                  <button class="w-100 btn btn-primary btn-lg" type="submit">Enviar formulario </button>
                </form>
              </div>
            </div>
          </form>
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