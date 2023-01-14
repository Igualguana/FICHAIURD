@extends('../layouts.frontend')

@section('content')
<main class="container">
    <div class="p-4 p-md-5 mb-2 text-white rounded bg-dark">
      <div class="col-md-15 px-0">
                <form action="" method="post" class="form" name="ficha" enctype="multipart/form-data">

            <h2 class="form_title">Ficha de Miembro </h2>
            <p class=""> </p>
    
            <div class="form_container">
                <div class="form_group">
                    <div id="preview" class="thumbnail">
    
                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNzEiIGhlaWdodD0iMTgwIj48cmVjdCB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgZmlsbD0iI2VlZSI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9Ijg1LjUiIHk9IjkwIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEycHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MTcxeDE4MDwvdGV4dD48L3N2Zz4="
                            width="200" height="200" />
    
                    </div>
                    <!--  <span class="alert alert-info" id="file-info">No hay archivo aún</span>-->
    
                    <form id="file-submit" enctype="multipart/form-data">
                        <input id="file" name="file" type="file" />
                    </form>
                </div>
                <div class="form_group">
                    <label for="Name" class="form_label">Nombre</label> <br><br>
                    <input type="text" id="Name" name="Name" class="form_input" placeholder="">
                    <span class="form_line"></span>
                </div>
    
    
    
    
    
                <div class="form_group">
                    <label for="phone" class="form_label">Telefonos</label> <br><br>
                    <input type="phone" id="phone" name="phone" class="form_input" placeholder="">
                    <span class="form_line"></span>
                </div>
    
    
                <div class="form_group">
                    <label for="Direccion" class="form_label">Direccion</label> <br><br>
                    <input type="text" id="Direccion" name="Direccion" class="form_input" placeholder="">
                    <span class="form_line"></span>
                </div>
    
    
    
                <div class="form_group">
                    <label for="Oracion" class="form_label">Pedido de Oración</label> <br><br>
                    <input type="text" id="Oracion" name="Oracion" class="form_input" placeholder="">
                    <span class="form_line"></span>
                </div>
    
    
    
                <div class="form_group">
                    <label for="Media" class="form_label" name="Media">¿Como conoció la Iglesia?</label>
                    <br><br>
                    <select id="Media" name="Media" class="form_input">
                                 <option value="TV">TV</option>
                                 <option value="Radio">Radio</option>
                                 <option value="EVG">EVG</option>
                                 <option value="otro">Otro</option>
                             </select>
                    <span class="form_line"></span>
                </div>
    
    
    
    
                {{  csrf_field()}}
                <input type="submit" class="btn btn-primary" >
            </div>
        </form>
        
    <script>
            $('#preview').hover(
                function() {
                    $(this).find('a').fadeIn();
                },
                function() {
                    $(this).find('a').fadeOut();
                }
            )
            $('#file-select').on('click', function(e) {
                e.preventDefault();
    
                $('#file').click();
            })
    
            $('input[type=file]').change(function() {
                var file = (this.files[0].name).toString();
                var reader = new FileReader();
    
                $('#file-info').text('');
                $('#file-info').text(file);
    
                reader.onload = function(e) {
                    $('#preview img').attr('src', e.target.result);
                }
    
                reader.readAsDataURL(this.files[0]);
            });
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
        </script>
      </div>
    </div>
@endsection