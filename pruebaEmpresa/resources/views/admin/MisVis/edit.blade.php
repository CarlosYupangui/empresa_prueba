@extends('layouts.admin')

@section('content')
    <h2>Actualizar Mision y Vision</h2>
    <div class="container">
        <hr class="featurette-divider">
        <h2 class="text-center">Ingresar Servicio</h2>
    
        <form class="row g-3 needs-validation" novalidate>
    
    
            <div class="col-md-12 position-relative">
              <label for="contact" class="form-label">Mision</label>
              <input type="text" class="form-control" id="contact" name="contact" required>
            </div>
            <div class="col-md-12 position-relative">
                <label for="contact" class="form-label">Mision Imagen</label>
                <input type="file" class="form-control" id="contact" name="contact" required>
              </div>
            
            <div class="col-md-12 position-relative">
                <label for="contact" class="form-label">Vision</label>
                <input type="text" class="form-control" id="contact" name="contact" required>
              </div>

              <div class="col-md-12 position-relative">
                <label for="contact" class="form-label">Vision Imagen</label>
                <input type="file" class="form-control" id="contact" name="contact" required>
              </div>
              
              <br>
              <br>
              
              <div class="col-md-12 position-relative">
                <label for="contact" class="form-label">Imagen Principal</label>
                <input type="file" class="form-control" id="contact" name="contact" required>
              </div>
              
              <br>
              <br>
              
              <div class="col-md-12 position-relative">
                <label for="contact" class="form-label">Logo</label>
                <input type="file" class="form-control" id="contact" name="contact" required>
              </div>
              
            <div class="col-12">
                 <a class="btn btn-outline-success" href="/MisVis">Actualizar</a>
            </div>
          </form>
    </div>
@endsection