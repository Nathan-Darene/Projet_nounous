<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Méta-informations -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Titre de la page -->
    <title>Social Home - Inscription</title>
    <!-- Feuilles de style -->
    <link rel="icon" type="image/png" href="{{ asset('Logo/8900808870_4aa536ff-86f5-4f1e-9429-0e0ace5a8068.png') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.1-web/css/all.min.css') }}">
    <!-- Nouveau fichier CSS pour la page d'inscription -->
    <link rel="stylesheet" href="{{ asset('css/reservation1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cheickbox.css') }}">
    <link rel="stylesheet" href="{{ asset('css/poppup.css') }}">
    <!--link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/6.5.1/css/font-awesome.min.css"-->
    <!-- Icône de la page -->
    <link rel="icon" type="image/png" href="Logo/8900808870_4aa536ff-86f5-4f1e-9429-0e0ace5a8068.png">
    <style>
        .disabled {
            background-color: gray;
            pointer-events: none;
        }
    </style>
</head>

<body>
    <audio id="lecteur-audio" src="{{ asset('sound/relaxed-vlog-night-street-131746.mp3') }}" type="audio/mp3"
        loop></audio>
    <audio id="hover-poppup">
        <source src="{{ asset('poppup/multi-pop-4-188169.mp3') }}" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
    <!-- En-tête de la page -->
    <header>

    </header>
    <!-- Contenu principal de la page -->
    <main class="main">
        <div id="popup" class="popup">
            <div class="popup-content">
                <span class="close-popup" onclick="closePopup()">&times;</span>
                <p>Merci pour votre reservation !</p>
            </div>
        </div>
        <!-- Carte d'inscription -->
        <div class="main-card-login">

            <div class="login-card">
                <div class="icon-return">
                    <a href="{{ asset('acceuil') }}"><i class="fa-solid fa-close a1"></i></a>
                </div>
                <!-- Logo -->
                <div class="login-card-header-image" id="logo-section">
                    <!--i class="fa-solid fa-close"></i-->
                    <img src="{{ asset('Logo/8900808870_4aa536ff-86f5-4f1e-9429-0e0ace5a8068.png') }}" alt="Logo"
                        height="70" width="180">
                </div>
                <!-- Formulaire d'inscription -->
                <form class="login-card-form" action="{{route('reservations')}}" method="POST" id="registration-form"
                    enctype="multipart/form-data">

                    @if (Session::has('success'))
                        <script>
                            showPopup();
                        </script>
                    @endif

                    @if (Session::has('success'))
                        <div class="botton-text alert alert-success"> {{ Session::get('success') }}</div>
                    @endif

                    @if (Session::has('error'))
                        <div class="botton-text alert alert-danger"> {{ Session::get('error') }}</div>
                    @endif
                    @csrf
                    <input type="hidden" name="nounou_id" value="{{ $nounou->id }}">
                    <div class="info">
                    <!-- Informations personnelles de l'enfant -->
                    <div class="info1">
                        <input type="text" placeholder="Nom complet de l'enfant" name="child_fullname"
                            value="{{ old('child_fullname') }}">
                        <span class="text-danger">
                            @error('child_fullname')
                                {{ $message }}
                            @enderror
                        </span>

                        <input type="text" name="child_birthdate" placeholder="Age de l'enfant"
                            pvalue="{{ old('child_birthdate') }}">
                        <span class="text-danger">
                            @error('child_birthdate')
                                {{ $message }}
                            @enderror
                        </span>

                        <select name="child_gender">
                            <option value="masculin" {{ old('child_gender') == 'masculin' ? 'selected' : '' }}>Masculin
                            </option>
                            <option value="féminin" {{ old('child_gender') == 'féminin' ? 'selected' : '' }}>Féminin
                            </option>
                        </select>
                        <span class="text-danger">
                            @error('child_gender')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="info2">
                        <input type="text" placeholder="Lieu de residance de l'enfannt" name="child_address"
                            value="{{ old('child_address') }}">
                        <span class="text-danger">
                            @error('child_address')
                                {{ $message }}
                            @enderror
                        </span>

                        <!-- Informations sur les parents ou tuteurs légaux -->
                        <input type="text" placeholder="Nom complet du parent/tuteur" name="parent_fullname"
                            value="{{ old('parent_fullname') }}">
                        <span class="text-danger">
                            @error('parent_fullname')
                                {{ $message }}
                            @enderror
                        </span>

                        <input type="text" placeholder="Lieu de residance du parent/tuteur" name="parent_address"
                            value="{{ old('parent_address') }}">
                        <span class="text-danger">
                            @error('parent_address')
                                {{ $message }}
                            @enderror
                        </span>

                    </div>

                    <div class="info3">
                        <input type="email" placeholder="Adresse e-mail du parent/tuteur" name="parent_email"
                        value="{{ old('parent_email') }}">
                        <span class="text-danger">
                            @error('parent_email')
                            {{ $message }}
                            @enderror
                        </span>

                        <!-- Informations médicales -->
                        <input type="text" placeholder="Allergies de l'enfant" name="child_allergies"
                        value="{{ old('child_allergies') }}">
                        <span class="text-danger">
                            @error('child_allergies')
                            {{ $message }}
                            @enderror
                        </span>

                        <input type="text" placeholder="Conditions médicales de l'enfant"
                        name="child_medical_conditions" value="{{ old('child_medical_conditions') }}">
                        <span class="text-danger">
                            @error('child_medical_conditions')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="info4">
                        <input type="tel" placeholder="Numéro de téléphone du médecin de famille"
                        name="doctor_phone" value="{{ old('doctor_phone') }}">
                        <span class="text-danger">
                            @error('doctor_phone')
                            {{ $message }}
                            @enderror
                        </span>

                        <input type="tel" placeholder="Numéro de téléphone du parent/tuteur" name="parent_phone"
                            value="{{ old('parent_phone') }}">
                        <span class="text-danger">
                            @error('parent_phone')
                                {{ $message }}
                            @enderror
                        </span>
                        <!-- Informations d'urgence -->
                        <input type="text" placeholder="Nom de la personne à contacter en cas d'urgence"
                            name="emergency_contact_name" value="{{ old('emergency_contact_name') }}">
                        <span class="text-danger">
                            @error('emergency_contact_name')
                                {{ $message }}
                            @enderror
                        </span>

                    </div>

                    <!-- Informations scolaires -->
                    <div class="info5">
                        <input type="tel"
                            placeholder="Numéro de téléphone de la personne à contacter en cas d'urgence"
                            name="emergency_contact_phone" value="{{ old('emergency_contact_phone') }}">
                        <span class="text-danger">
                            @error('emergency_contact_phone')
                                {{ $message }}
                            @enderror
                        </span>
                        <input type="text" placeholder="Nom de l'école" name="school_name"
                            value="{{ old('school_name') }}">
                        <span class="text-danger">
                            @error('school_name')
                                {{ $message }}
                            @enderror
                        </span>

                        <input type="text" placeholder="Niveau de classe de l'enfant" name="child_grade_level"
                            value="{{ old('child_grade_level') }}">
                        <span class="text-danger">
                            @error('child_grade_level')
                                {{ $message }}
                            @enderror
                        </span>


                    </div>
                    <div class="checkbox-wrapper" >
                        <input type="checkbox" class="check" id="check1-61" name="photo_authorization"  {{ old('photo_authorization') == '1' ? 'checked' : '' }}>
                        <label for="check1-61" class="label">
                          <svg width="45" height="45" viewBox="0 0 95 95">
                            <rect x="30" y="20" width="50" height="50" stroke="black" fill="none"></rect>
                            <g transform="translate(0,-952.36222)">
                              <path d="m 56,963 c -102,122 6,9 7,9 17,-5 -66,69 -38,52 122,-77 -7,14 18,4 29,-11 45,-43 23,-4" stroke="black" stroke-width="3" fill="none" class="path1"></path>
                            </g>
                          </svg>
                        </label>
                        <p>Autorisation de photographie</p>
                      </div>

                    <div class="info6">

                        <!-- Autres informations pertinentes -->
                        <input type="text" placeholder="Besoins spéciaux de l'enfant" name="special_needs"
                            value="{{ old('special_needs') }}">
                        <span class="text-danger">
                            @error('special_needs')
                                {{ $message }}
                            @enderror
                        </span>

                        <input type="text" placeholder="Préférences alimentaires de l'enfant"
                            name="child_dietary_preferences" value="{{ old('child_dietary_preferences') }}">
                        <span class="text-danger">
                            @error('child_dietary_preferences')
                                {{ $message }}
                            @enderror
                        </span>

                        <!-- Autorisations parentales -->
                        <input type="text" placeholder="Autorisations spécifiques (excursions, sports, etc.)"
                            name="parental_authorizations" value="{{ old('parental_authorizations') }}">
                        <span class="text-danger">
                            @error('parental_authorizations')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="info7">
                        <input type="text" placeholder="Autres instructions particulières"
                            name="other_instructions" value="{{ old('other_instructions') }}">
                        <span class="text-danger">
                            @error('other_instructions')
                                {{ $message }}
                            @enderror
                        </span>

                        <!-- Date et signature -->
                        <label for="" class="time"><p class="time1">date de fin de contrat</p>  <p><i class="fa-solid fa-arrow-right-long"></i></p></label>
                        <input type="date" name="form_fill_date" value="{{ old('form_fill_date') }}">
                        <span class="text-danger">
                            @error('form_fill_date')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="info8">
                        <input type="text" placeholder="Signature des parents/tuteurs" name="parent_signature"
                            value="{{ old('parent_signature') }}">
                        <span class="text-danger">
                            @error('parent_signature')
                                {{ $message }}
                            @enderror
                        </span>

                        <input type="number" placeholder="Nombre d'enfant suplementaire">
                        <input type="text" name="" id="" placeholder="Renseigner leurs Noms separé d'une virgule">
                    </div>

                        <label class="container">
                            <input type="checkbox" name="privacy_acceptance" id="privacy_acceptance">
                            <p>J'accepte les termes de
                                confidentialité</p>
                            <div class="checkmark"></div>
                        </label>
                        <span class="text-danger texte">
                            @error('privacy_acceptance')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <!-- Bouton d'inscription -->
                    <!--input class="login-form-button" type="submit" placeholder="S'inscrire" id="register-button"-->
                    <button type="submit" class="login-card-form-button login-form-button disabled box"
                        id="register-button">Confirmer la reservation</button>

                </form>
            </div>
        </div>
    </main>
    <script src="{{ asset('/js/check.js') }}"></script>
    <script src="{{ asset('js/music.js') }}"></script>
    <script src="{{ asset('js/popup.js') }}"></script>

</body>

</html>
