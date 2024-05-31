@extends('layouts.navbar')

@section('content')
<body>
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Confirmez-vous votre intérêt pour ce stage ?</h5>
            <form action="{{ route('sondage.sondage2') }}" method="GET">
                @csrf
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="reponse" id="oui" value="1" required>
                    <label class="form-check-label" for="oui">Oui</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="reponse" id="non" value="0" required>
                    <label class="form-check-label" for="non">Non</label>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Envoyer</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
@endsection