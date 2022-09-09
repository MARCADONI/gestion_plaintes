@extends('layouts.app1')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="display-4 font-weight-bold font-size-50px text-uppercase text-center fs-title">CONTACTEZ-NOUS</h1>
                <P class="lead text-center">Vous pouvez nous envoyer un message <br><span class="">NB:Ce formulaire ne
                        peut servit en aucun cas pour le depot des plaintes si vous voulez soumettre une plainte,veillez
                        cliquez <a href="{{ route('plainte.create') }}">ICI</a></span></P>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <i class="bi bi-geo-alt-fill fs-1  text-success" aria-hidden="true"></i>
                <h3>Addresse</h3>
                <p>01 BP ABIDJAN </p>

                <i class="bi bi-telephone-x-fill fs-1 text-success" aria-hidden="true"></i>
                <h3>Appelez-le</h3>
                <p>01........</p>

                <i class="bi bi-envelope-fill fs-1 text-success" aria-hidden="true"></i>
                <h3>E-mail</h3>
                <p>@gmail.com</p>

            </div>
            <div class="col-md-8">
                <div class="contactform">
                    <form action="{{ route('contacts.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-8">
                                <span id="lblResponse" class="tab-content"></span>

                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type=" text" name="tbname" id="tbname"
                                    class="form-control @error('tbname') is-invalid @enderror my-2 border border-success "placeholder="Nom complet"
                                    value="{{ old('tbname') }}">

                                @error('tbname')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror


                            </div>
                            <br>
                            <div class="col-md-6">
                                <input type="email" name="tbemail" id="tbemail"
                                    class="form-control @error('tbemail') is-invalid @enderror my-2 border border-success"
                                    placeholder="Email"value="{{ old('tbemail') }}">

                                @error('tbemail')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                            </div>
                            <br>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" name="tbobjet" id="tbobjet"
                                    class="form-control @error('tbobjet') is-invalid @enderror my-2 border border-success"
                                    placeholder="Objet"value="{{ old('tbobject') }}">

                                @error('tbobjet')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <textarea name=" tbmessage" id="tbmessage" cols="30" rows="10" placeholder="Message"
                                    class="form-control @error('tbmessage') is-invalid @enderror my-2 border border-success"value="{{ old('tbmessage') }}"></textarea>

                                @error('tbmessage')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col text-center my-2">
                            <button class="btn btn-lg btn-outline-success " type="submit">Envoyer</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
