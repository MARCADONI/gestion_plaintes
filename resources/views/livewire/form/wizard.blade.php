<div>

    @if (!empty($successMessage))
        <div class="alert alert-success">
            {{ $successMessage }}
        </div>
    @endif

    <!-- l'entete -->
    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step">
                <a href="#step-1" type="button"
                    class="btn btn-circle {{ $currentStep != 1 ? 'btn-default' : 'btn-primary ' }} {{ $currentStep != 2 ? 'btn-default' : 'btn-primary' }} {{ $currentStep != 3 ? 'btn-default' : 'btn-primary' }} "><i
                        class="bi bi-person-fill"></i>
                </a>
                <p>Victime</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-2" type="button"
                    class="btn btn-circle {{ $currentStep != 1 ? 'btn-default' : 'btn-secondary' }} {{ $currentStep != 2 ? 'btn-default' : 'btn-primary' }} {{ $currentStep != 3 ? 'btn-default' : 'btn-primary' }}"><i
                        class="bi bi-person-x-fill"></i>
                </a>
                <p>Mise en cause</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-3" type="button"
                    class="btn btn-circle {{ $currentStep != 1 ? 'btn-default' : 'btn-secondary' }} {{ $currentStep != 1 ? 'btn-default' : 'btn-primary' }} {{ $currentStep != 2 ? 'btn-default' : 'btn-secondary' }} {{ $currentStep != 3 ? 'btn-default' : 'btn-primary' }}"
                    disabled="disabled"><i class="bi bi-key-fill"></i></a>
                <p>Prejudice</p>
            </div>

        </div>
    </div>

    <!-- le corps-->
    <fieldset>
        <div class="form-card">

            <!-- first step plaignaint-->
            <div class="row setup-content {{ $currentStep != 1 ? 'displayNone' : '' }}" id="step-1">
                <h2 class="fs-title">Renseignements au sujet du plaignant</h2>
                <div class="col-xs-12 col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <label class="control-label" for="complainant_residence"><span
                                    class="field-name">Civilité</span><strong>(obligatoire)</strong></label>
                            <select class="form-control  my-2" wire:model="civilite" required="required"
                                aria-label="Default select example">
                                <option selected>Selectionner votre civilité</option>
                                <option>M.</option>
                                <option>Mme</option>
                                <option>Mlle</option>
                            </select>
                            @error('civilite')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!--NOM ET PRENOMS PLAIGNANT-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="complainant_name_family">
                                    <span class="field-name">Nom de
                                        famille</span><strong>(obligatoire)</strong></label>
                                <input type="text" class="form-control my-2" wire:model="nom_plaignant"
                                    id="complainant_name_family" required="required">
                                @error('nom_plaignant')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="complainant_name_given"><span
                                        class="field-name">Prénom</span><strong>(obligatoire)</strong></label>
                                <input type="text" class="form-control my-2" id="complainant_name_given"
                                    wire:model="prenoms_plaignant" required="required">
                                @error('prenoms_plaignant')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <!--DATE ET LIEU DE NAISSANCE-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="complainant_date_birth"><span class="field-name">Date
                                        de naissance</span><span class="datepicker-format">(AAAA-MM-JJA)</span></label>
                                <input type="date" max="" min="" class="form-control my-2"
                                    id="complainant_date_birth" wire:model="date_plaignant">
                                @error('date_plaignant')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="complainant_date_birth">
                                    <span class="field-name">Lieu de
                                        naissance</span><strong>(obligatoire)</strong></label>
                                <input type="text" class="form-control my-2" id="complainant_place_birth"
                                    wire:model="lieu_plaignant" required="required">
                            </div>
                            @error('lieu_plaignant')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!--ADDRESSE-->
                    <div class="form-group">
                        <label class="control-label" for="complainant_phone_home"><span class="field-name">Addresse
                                géographique</span><strong>(obligatoire)</strong></label>
                        <textarea class="form-control my-2" wire:model="adresse_geo" id="tbmessage" cols="10" rows=""
                            required="required" placeholder="Décriver votre addresse géographique"></textarea>
                        @error('adresse_geo')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <!--TELEPHONE-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="complainant_phone_home"><span
                                        class="field-name">Téléphone mobile
                                        1</span><strong>(obligatoire)</strong></label>
                                <input type="tel" class="form-control my-2" id="complainant_phone_home"
                                    wire:model="tel1_plaignant" required="required" placeholder="(+225)">
                                @error('tel1_plaignant')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="complainant_phone_home"><span
                                        class="field-name">Télèphone mobile 2
                                    </span><strong>(obligatoire)</strong></label>
                                <input type="tel" class="form-control my-2" id="complainant_phone_home"
                                    wire:model="tel2_plaignant" placeholder="(+225)">
                                @error('tel2_plaignant')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <!--EMAIL-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="complainant_phone_mail"><span
                                        class="field-name">Adresse de
                                        courriel(E-mail)</span><strong>(obligatoire)</strong></label>
                                <input type="mail" class="form-control my-2" id="complainant_phone_mail"
                                    wire:model="email" placeholder="nama@example.com" required="required">
                                @error('email')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="complainant_phone_mail"><span
                                        class="field-name">Confirmez le
                                        courriel(E-mail)</span><strong>(obligatoire)</strong></label>
                                <input type="mail" class="form-control my-2" id="complainant_phone_mail"
                                    wire:model="email_confirmation" placeholder="nama@example.com"
                                    required="required">
                                @error('email_confirmation')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col text-right">
                        <button class="btn btn-lg action-button nextBtn btn-lg pull-right"
                            wire:click="firstStepSubmit" type="button">Suivant</button>
                    </div>
                </div>

            </div>

            <!-- secondary step suspect-->
            <div class="row setup-content {{ $currentStep != 2 ? 'displayNone' : '' }}" id="step-2">
                <div class="col-xs-12 col-md-12">
                    <h2 class="fs-title">Information sur le suspect</h2>

                    <!-- Nom  Prenom et Pseudo du suspect-->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="complainant_name_family"><span
                                        class="field-name">Nom de
                                        famille</span><strong>(obligatoire)</strong></label>
                                <input type="text" class="form-control my-2" id="complainant_name_family"
                                    wire:model="nom_suspect" required="required">
                                @error('nom_suspect')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="complainant_name_given"><span
                                        class="field-name">Prénom</span><strong>(obligatoire)</strong></label>
                                <input type="text" class="form-control my-2" id="complainant_name_given"
                                    wire:model="prenoms_suspect" required="required">
                                @error('prenoms_suspect')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label" for="complainant_name_given"><span
                                        class="field-name">Pseudo</span><strong>(obligatoire)</strong></label>
                                <input type="text" class="form-control my-2" id="complainant_name_given"
                                    wire:model="pseudo_suspect" required="required">
                                @error('pseudo_suspect')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!--Domicile et contact du suspect-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="complainant_phone_home"><span
                                        class="field-name">Domicile
                                        1</span><strong>(obligatoire)</strong></label>
                                <input type="tel" class="form-control my-2" id="complainant_phone_home"
                                    wire:model="domicile_suspect" required="required" placeholder="">
                                @error('domicile_suspect')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="complainant_phone_home"><span
                                        class="field-name">Contact
                                    </span><strong>(obligatoire)</strong></label>
                                <input type="tel" class="form-control my-2" id="complainant_phone_home"
                                    wire:model="contact_suspect" required="required" placeholder="(+225)">
                                @error('contact_suspect')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-12 col-xs-12 text-center">
                        <button class="btn action-button-previous nextBtn btn-lg  float-left" type="button"
                            wire:click="back(1)">Précédent</button>
                        <button class="btn action-button nextBtn btn-lg  float-right" wire:click="secondStepSubmit"
                            type="button">Suivant</button>
                    </div>

                </div>
            </div>

            <!-- finaly step prejudice-->
            <div class="row setup-content {{ $currentStep != 3 ? 'displayNone' : '' }}" id="step-3">
                <div class="col-xs-12 col-md-12">

                    <h2 class="fs-title">Information sur le préjudice</h2>
                    <!-- -->
                    <div class="row">
                        <div class="col-md-6">
                            <label class="control-label" for="complainant_residence">
                                <span class="field-name">Objet de la plainte</span>
                                <strong>(obligatoire)</strong>
                            </label>
                            <select required wire:model="objet" class="form-control my-2" id="">
                                <option selected>Choisir..</option>
                                <option>January</option>
                                <option>February</option>
                                <option>March</option>
                                <option>April</option>
                                <option>May</option>
                                <option>June</option>
                                <option>July</option>
                                <option>August</option>
                                <option>September</option>
                                <option>October</option>
                                <option>November</option>
                                <option>December</option>
                            </select>
                            @error('objet')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="complainant_date_birth"><span
                                        class="field-name">Date du préjudice</span><span
                                        class="datepicker-format">(AAAA-MM-JJA)</span></label>
                                <input type="date" max="" min="" class="form-control my-2"
                                    id="complainant_date_birth" wire:model="date_prejudice">
                                @error('date_prejudice')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!--Description detaillées-->
                    <div class="form-group">
                        <label class="control-label" for="tbmessage"><span class="field-name">Description du
                                préjudice
                            </span><strong>(obligatoire)</strong></label>
                        <textarea class="form-control my-2" wire:model="description" id="tbmessage" cols="250" rows="15"
                            required="required" placeholder="Décriver votre plainte dans les détailles"></textarea>
                        @error('description')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <button class="btn action-button nextBtn btn-lg  float-right" wire:click="submitForm"
                        type="button">Envoyer</button>
                    <button class="btn action-button-previous nextBtn btn-lg  float-left" type="button"
                        wire:click="back(2)">Précédent</button>

                </div>
            </div>
        </div>
    </fieldset>




</div>
