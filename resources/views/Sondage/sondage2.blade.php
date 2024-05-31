@extends('layouts.navbar')

@section('content')
<head>
  <script src="../assets/js/color-modes.js"></script>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/list-groups/">
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
  @vite(['resources/css/list-groups.css', 'resources/js/app.js'])
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const choix1Radios = document.getElementsByName('choix1');
      const choix2Radios = document.getElementsByName('choix2');
      const choix3Radios = document.getElementsByName('choix3');

      function updateChoices() {
        const choix1Selected = document.querySelector('input[name="choix1"]:checked')?.value;
        const choix2Selected = document.querySelector('input[name="choix2"]:checked')?.value;

        choix2Radios.forEach(radio => {
          radio.disabled = (radio.value === choix1Selected);
          if (radio.disabled && radio.checked) {
            radio.checked = false;
          }
        });

        choix3Radios.forEach(radio => {
          radio.disabled = (radio.value === choix1Selected || radio.value === choix2Selected);
          if (radio.disabled && radio.checked) {
            radio.checked = false;
          }
        });
      }

      choix1Radios.forEach(radio => radio.addEventListener('change', updateChoices));
      choix2Radios.forEach(radio => radio.addEventListener('change', updateChoices));

      updateChoices(); // Initialize state
    });
  </script>
</head>
<form action="{{ route('sondage.store') }}" method="POST">
  @csrf
  <input type="hidden" name="reponse" value="{{ $reponse }}">
  <div class="b-example-divider"></div>

  <div class="d-flex flex-wrap justify-content-center gap-4 p-4">
    <!-- Thumbnail 1 -->
    <div class="card" style="width: 22rem;">
      <div class="card-body">
        <h5 class="card-title">Choix 1</h5>
        <div class="list-group list-group-checkable d-grid gap-2 border-0 w-75">
          <input class="list-group-item-check pe-none" type="radio" name="choix1" id="choix1-1" value="Développement Web" checked>
          <label class="list-group-item rounded-3 py-3" for="choix1-1">
            Développement Web
            <span class="d-block small opacity-50">Un Stage enrichissant dans le domaine du développement Web.</span>
          </label>

          <input class="list-group-item-check pe-none" type="radio" name="choix1" id="choix1-2" value="Développement Mobile">
          <label class="list-group-item rounded-3 py-3" for="choix1-2">
            Développement Mobile
            <span class="d-block small opacity-50">Un Stage enrichissant dans le domaine du développement Mobile.</span>
          </label>

          <input class="list-group-item-check pe-none" type="radio" name="choix1" id="choix1-3" value="IOT">
          <label class="list-group-item rounded-3 py-3" for="choix1-3">
            IOT
            <span class="d-block small opacity-50">Un Stage enrichissant dans le domaine du IOT.</span>
          </label>
        </div>
      </div>
    </div>

    <!-- Thumbnail 2 -->
    <div class="card" style="width: 22rem;">
      <div class="card-body">
        <h5 class="card-title">Choix 2</h5>
        <div class="list-group list-group-radio d-grid gap-2 border-0 w-75">
          <div class="position-relative">
            <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="choix2" id="choix2-1" value="Développement Web">
            <label class="list-group-item py-3 pe-5" for="choix2-1">
              <strong class="fw-semibold">Développement Web</strong>
              <span class="d-block small opacity-75">Un Stage enrichissant dans le domaine du développement Web</span>
            </label>
          </div>

          <div class="position-relative">
            <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="choix2" id="choix2-2" value="Développement Mobile">
            <label class="list-group-item py-3 pe-5" for="choix2-2">
              <strong class="fw-semibold">Développement Mobile</strong>
              <span class="d-block small opacity-75">Un Stage enrichissant dans le domaine du développement Mobile.</span>
            </label>
          </div>

          <div class="position-relative">
            <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="choix2" id="choix2-3" value="IOT">
            <label class="list-group-item py-3 pe-5" for="choix2-3">
              <strong class="fw-semibold">IOT</strong>
              <span class="d-block small opacity-75">Un Stage enrichissant dans le domaine du IOT.</span>
            </label>
          </div>
        </div>
      </div>
    </div>

    <!-- Thumbnail 3 -->
    <div class="card" style="width: 22rem;">
      <div class="card-body">
        <h5 class="card-title">Choix 3</h5>
        <div class="list-group w-75">
          <label class="list-group-item d-flex gap-2">
            <input class="form-check-input flex-shrink-0" type="radio" name="choix3" id="choix3-1" value="Développement Web">
            <span>
              Développement Web
              <small class="d-block text-body-secondary">Un Stage enrichissant dans le domaine du développement Web</small>
            </span>
          </label>
          <br>
          <label class="list-group-item d-flex gap-2">
            <input class="form-check-input flex-shrink-0" type="radio" name="choix3" id="choix3-2" value="Développement Mobile">
            <span>
              Développement Mobile
              <small class="d-block text-body-secondary">Un Stage enrichissant dans le domaine du développement Mobile.</small>
            </span>
          </label>
          <br>
          <label class="list-group-item d-flex gap-2">
            <input class="form-check-input flex-shrink-0" type="radio" name="choix3" id="choix3-3" value="IOT">
            <span>
              IOT
              <small class="d-block text-body-secondary">Un Stage enrichissant dans le domaine du IOT.</small>
            </span>
          </label>
        </div>
      </div>
    </div>
  </div>
  <center>
  <button type="submit" class="btn btn-primary mr-10">Sauvegarder</button>
  </center>
</form>
@endsection
