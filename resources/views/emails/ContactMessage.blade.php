@component('mail::message')

    <span style="color: green">Portail E-Plaintes</span><br>
    <span class="">Ceci est un email envoyé automatiquement par le portail E-Plaintes du TPI de Yopougonn.</span>

    @component('mail::panel')
        Numéro de la plainte: 00022|2022

        Bonjour Monsieur ADONI KOUADIO

        J'accuse bonne réception de votre plainte en date du 22/07/2022 en vous remerciant d’avoir fait usage de votre droit de
        porter plainte, je vous prie de recevoir nos salutations distinguées.

        Le Tribunal de Yopougon vous reviendra dans un délai de 24 heures après les analyses
        préliminaires de qualification de la plainte.

        Vos paramètres de connexion pour suivre l'ensemble de vos plaintes sont :
        login : marcadoni4425@gmail.com,
        mot de passe : marc2205
        Je vous prie de bien vouloir conserver ces paramètres.
    @endcomponent

    TRIBBUNAL DE PREMIERE INSTANCE DE YOPOUGON
    Portail E-Plaintes
    Pour nous contacter :
    Tél : +225 07 59 65 68 48
    Email : marcadoni4425@gmail.com

    Cordialement !
    Le Secrétaire Permanent

    {{ config('app.name') }}
@endcomponent
