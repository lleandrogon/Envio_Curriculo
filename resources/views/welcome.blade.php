<link rel="stylesheet" href={{ asset('css/welcome.css') }}>

@vite(['resources/css/app.css', 'resources/js/app.js'])

<div class="container-fluid py-4">
    <h2 class="text-center">Envio de Currículo</h2>

    <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" name="name" id="name" class="form-control">
            @error('name')
                <p class="text-danger text-center mt-3">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" name="email" id="email" class="form-control">
            @error('email')
                <p class="text-danger text-center mt-3">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Telefone</label>
            <input type="text" name="phone" id="phone" class="form-control">
            @error('phone')
                <p class="text-danger text-center mt-3">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="role" class="form-label">Cargo Desejado</label>
            <input type="text" name="role" id="role" class="form-control">
            @error('role')
                <p class="text-danger text-center mt-3">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="education" class="form-label">Escolaridade</label>
            <select name="education" id="education" class="form-select">
                <option value="">Selecione</option>
                @foreach($educations as $key => $education)
                    <option value="{{ $key }}">{{ $education }}</option>
                @endforeach
            </select>
            @error('education')
                <p class="text-danger text-center mt-3">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="observations" class="form-label">Observações (Opcional)</label>
            <textarea name="observations" id="observations" class="form-control" rows="4"></textarea>
        </div>

        <div class="mb-3">
            <label for="resume" class="form-label">Currículo (PDF/DOC)</label>
            <input type="file" name="resume" id="resume" class="form-control" accept=".pdf,.doc,.docx">
            @error('resume')
                <p class="text-danger text-center mt-3">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="data_envio" class="form-label">Data e Hora do Envio</label>
            <input type="datetime-local" name="time" id="time" class="form-control" value="{{ now()->format('Y-m-d\TH:i') }}" readonly>
            @error('time')
                <p class="text-danger text-center mt-3">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary mt-3">Enviar Currículo</button>
    </form>

    @if (session('success'))
        <div class="alert alert-success text-center mt-4">
            {{ session('success') }}
        </div>
    @endif
</div>