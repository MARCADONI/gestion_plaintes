<link rel="stylesheet" href="{{ asset('css/register') }}">
<x-guest-layout>
    <section class="vh-100 bg-image" style="background-image: url('');">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Créer un compte</h2>

                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="name">Nom</label>
                                                <input type="text" id="name"
                                                    class="form-control @error('name') is-invalid @enderror form-control-lg"
                                                    name="name" required value="{{ old('name') }}" />
                                                @error('name')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="prenoms">Prenoms</label>
                                                <input id="prenoms" type="text" name="prenoms" required
                                                    value="{{ old('prenoms') }}"
                                                    class="form-control  @error('prenoms') is-invalid @enderror form-control-lg" />
                                                @error('prenoms')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">

                                            <label class="form-label" for="fonction">Fonction</label>
                                            <select class="form-control @error('fonction') is-invalid @enderror py-2"
                                                name="fonction" id="fonction" required value="{{ old('fonction') }}">
                                                <option value="">Choisir une fonction</option>
                                                <option value="Procureur">Procureur</option>
                                                <option value="BOP">Bureau d'ordre pénal</option>
                                                <option value="OPJ">Officier de police</option>
                                            </select>
                                            @error('fonction')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror

                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="tel1">Numero de téléphone
                                                    1</label>
                                                <input id="tel1" type="text" name="tel1" type="text"
                                                    required value="{{ old('fonction') }}"
                                                    class="form-control @error('tel1') is-invalid @enderror form-control-lg" />
                                                @error('tel1')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="tel2">Numero de téléphone
                                                    2</label>
                                                <input id="tel2" type="text" name="tel2" required
                                                    value="{{ old('tel2') }}"
                                                    class="form-control @error('tel2') is-invalid @enderror form-control-lg" />
                                                @error('tel2')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="email">Email</label>
                                                <input id="email" type="email" required
                                                    value="{{ old('email') }}"
                                                    name="email"class="form-control @error('email') is-invalid @enderror  form-control-lg" />
                                                @error('email')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror

                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="password">Mot de passe</label>
                                                <input id="password" type="password" name="password" required
                                                    value="{{ old('password') }}" autocomplete="new-password"
                                                    class="form-control @error('password') is-invalid @enderror form-control-lg" />
                                                @error('password')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="password_confirmation">Confirmer
                                                    le
                                                    mot de
                                                    passe</label>
                                                <input id="password_confirmation" type="password"
                                                    name="password_confirmation" required
                                                    class="form-control form-control-lg" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-check d-flex justify-content-center mb-5">
                                        <input class="form-check-input me-2" type="checkbox" value=""
                                            id="form2Example3cg" />
                                        <label class="form-check-label" for="form2Example3g">
                                            J'accepte toutes les déclarations <a href="#!"
                                                class="text-body"><u>dans les conditions d'utilisation
                                                </u></a>
                                        </label>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="submit"
                                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">
                                            Envoyer
                                        </button>
                                    </div>
                                    <p class="text-center text-muted mt-5 mb-0"> <a
                                            class="underline text-sm text-gray-600 hover:text-gray-900"
                                            href="{{ route('login') }}">
                                            {{ __('Avez-vous deja un compte?') }}
                                        </a></p>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
