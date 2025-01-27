@extends('site.layout.template', ['titre' => 'Missionnaire'])

@section("content")

@include("site.parties.banniere",["t1"=>"Missionnaire","t2"=>"Devenir missionnaire","img"=>"slide1.png"])
@include("site.parties.info")



<section class="checkout-page page-section-ptb">
    <div class="container">
        <div class="row mt-50">
            <div class="col-lg-12">
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <!-- Affichage des erreurs générales -->
                @if($errors->any())
                <div class="mb-40">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
                @endif
            </div>
            <div class="title mb-30">
                <h5>Evaluation du niveau en formation missionnaire</h5>
            </div>
            <div class="accordion plus-icon shadow mb-30">
                <form action="{{ route('storeMissionnaire') }}" method="post" id="missionnaireForm"
                    data-parsley-validate>
                    @csrf
                    <div class="acd-group">
                        <a href="#" class="acd-heading">Etape 1</a>
                        <div class="acd-des">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <h2 class="mb-20">Informations Générale</h2>
                                    <div class="section-field mb-30">
                                        <label class="mb-10">Nom Complet * </label>
                                        <input required id="nom" type="text" placeholder="Nom complet"
                                            class="form-control" name="nom" value="{{ old('nom') }}">
                                        @error('nom')
                                        <div>{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="section-field mb-30">
                                        <label class="mb-10">Date de naissance * </label>
                                        <input required id="birthday" type="date" placeholder="Date de naissance "
                                            class="form-control" name="birthday" value="{{ old('birthday') }}">
                                    </div>
                                    <div class="section-field mb-30">
                                        <label class="mb-10">Téléphone * </label>
                                        <input required id="phone" type="text" placeholder="Numéro de téléphone"
                                            class="form-control" name="phone" value="{{ old('phone') }}">

                                    </div>
                                    <div class="section-field mb-30">
                                        <label class="mb-10">Email * </label>
                                        <input required id="email" type="text" placeholder="Email"
                                            value="{{ old('email') }}" class="form-control" name="email">
                                    </div>
                                    <div class="section-field mb-30">
                                        <label class="mb-10">Etat civi * </label>
                                        <input required id="etat_civl" type="text" placeholder="Etat civil"
                                            class="form-control" name="etat_civl" value="{{ old('etat_civil') }}">
                                    </div>
                                    <div class="section-field mb-30">
                                        <label class="mb-10">Profession * </label>
                                        <input required id="profession" type="text" placeholder="Profession"
                                            value="{{ old('profession') }}" class="form-control" name="profession">
                                    </div>
                                    <div class="section-field mb-30">
                                        <label class="mb-10">Adresse * </label>
                                        <textarea required class="form-control input-message" placeholder="Adresse"
                                            rows="7" name="adresse">{{ old('adresse') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <h2 class="mb-20">Informations spirituelles</h2>
                                    <div class="section-field mb-30">
                                        <label class="mb-10">Année de conversion * </label>
                                        <input required id="annee_conversion" type="text"
                                            placeholder="Année de conversion" class="form-control"
                                            name="annee_conversion" value="{{ old('annee_conversion') }}">
                                    </div>
                                    <div class="section-field mb-30">
                                        <label class="mb-10">Lieu de baptème * </label>
                                        <input required id="lieu_bapteme" type="text" placeholder="Lieu de baptème *"
                                            class="form-control" name="lieu_bapteme" value="{{ old('lieu_bapteme') }}">
                                    </div>
                                    <div class="section-field mb-30">
                                        <label class="mb-10">Date de baptème * </label>
                                        <input required id="date_bapteme" type="date" placeholder="Date de baptème"
                                            class="form-control" name="date_bapteme" value="{{ old('date_bapteme') }}">
                                    </div>
                                    <div class="section-field mb-30">
                                        <label class="mb-10">Eglise d'attache* </label>
                                        <input required id="eglise_attache" type="text" placeholder="Eglise d'attache"
                                            class="form-control" name="eglise_attache"
                                            value="{{ old('eglise_attache') }}">
                                    </div>
                                    <div class="section-field mb-30">
                                        <label class="mb-10">Si c'est CMP, indiquez depuis quand : </label>
                                        <input id="temps_au_cmp" type="text" placeholder="Depuis quand"
                                            class="form-control" name="temps_au_cmp" value="{{ old('temps_au_cmp') }}">
                                    </div>
                                    <div class="section-field mb-30">
                                        <label class="mb-10">Si c'est CMP, vous servez dans quel departement :
                                        </label>
                                        <input id="departement" type="text"
                                            placeholder="Si c'est CMP, vous servez dans quel departement"
                                            class="form-control" name="departement" value="{{ old('departement') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="acd-group">
                        <a href="#" class="acd-heading">Etape 2</a>
                        <div class="acd-des">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <h2 class="mb-20">Expérience missionnaire précédente</h2>
                                    <div class="section-field mb-30">
                                        <label class="mb-10">Avez-vous suivi une formation théologique ou biblique ?
                                        </label>
                                        <div class="clearfix">
                                            <label>
                                                <input required type="radio" value="1" name="formation_biblique" {{
                                                    old('formation_biblique')=="1" ? 'checked' : '' }}>
                                                <span>OUI</span>
                                            </label>
                                        </div>
                                        <div class="radio mb-30">
                                            <label>
                                                <input required type="radio" value="0" name="formation_biblique" {{
                                                    old('formation_biblique')=="0" ? 'checked' : '' }}>
                                                <span>NON</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="section-field mb-30">
                                        <label class="mb-10">Si oui,décrivez brièvement vos expérience missionnaire
                                            (Lieux, durée, type de mission) </label>
                                        <textarea class="form-control input-message" rows="7"
                                            name="description_mission">{{ old('description_mission') }}</textarea>
                                    </div>

                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <h2 class="mb-20">Formation spirituelle et biblique</h2>
                                    <div class="section-field mb-30">
                                        <label class="mb-10">Avez-vous déjà participé à une mission ? </label>
                                        <div class="clearfix">
                                            <label>
                                                <input type="radio" required value="1" name="participer_mission" {{
                                                    old('participer_mission')=="1" ? 'checked' : '' }}>
                                                <span>OUI</span>
                                            </label>
                                        </div>
                                        <div class="radio mb-30">
                                            <label>
                                                <input type="radio" required value="0" name="participer_mission" {{
                                                    old('participer_mission')=="1" ? 'checked' : '' }}>
                                                <span>NON</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="section-field mb-30">
                                        <label class="mb-10">Si oui, quel niveau </label>
                                        <input id="niveau" type="text" placeholder="Si oui, quel niveau"
                                            class="form-control" name="niveau">
                                    </div>
                                    <div class="section-field mb-30">
                                        <label class="mb-10">Quelle est votre fréquence de lecture de la Bible et la
                                            prière ?* </label>
                                        <div class="box">
                                            <select required class="wide fancyselect mb-30" name="lecture_bible"
                                                value="{{ old('lecture_bible') }}">
                                                <option value="Quotidienne" {{ old('lecture_bible')=='Quotidienne'
                                                    ? 'selected' : '' }}>Quotidienne</option>
                                                <option value="Hebdomadaire" {{ old('lecture_bible')=='Hebdomadaire'
                                                    ? 'selected' : '' }}>Hebdomadaire</option>
                                                <option value="Occasionnelle" {{ old('lecture_bible')=='Occasionnelle'
                                                    ? 'selected' : '' }}>Occasionnelle</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="section-field mb-30">
                                        <label class="mb-10">Indiquez le livre de les livres bibliques que vous avez
                                            déjà étudiez en profondeur * </label>
                                        <input required id="livre_bible" type="text" placeholder="" class="form-control"
                                            name="livre_bible" value="{{ old('livre_bible') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="acd-group">
                        <a href="#" class="acd-heading">Etape 3</a>
                        <div class="acd-des">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <h2 class="mb-20">Connaissance théoriques en missionnaire</h2>
                                    <div class="section-field mb-30">
                                        <label class="mb-10">Connaissez vous les bases de la mission chretienne ?*
                                        </label>
                                        <div class="box">
                                            <select required class="wide fancyselect mb-30" name="base_mission">
                                                <option value="Oui, je peux expliquer les fondement de la mission" {{
                                                    old('lecture_bible')=='Occasionnelle' ? 'selected' : '' }}>
                                                    Oui,
                                                    je peux expliquer les fondement de la mission</option>
                                                <option value="Non, mais j'ai quelques notions" {{
                                                    old('lecture_bible')=='Occasionnelle' ? 'selected' : '' }}>Non, mais
                                                    j'ai
                                                    quelques
                                                    notions</option>
                                                <option value="Non, je suis novice" {{
                                                    old('lecture_bible')=='Occasionnelle' ? 'selected' : '' }}>Non, je
                                                    suis novice</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="section-field mb-30">
                                        <label class="mb-10">Etes vous familier avec les conceptes tels que le
                                            mandat
                                            missionnaire, la stratégie missionnaire, et l'inculturation ?* </label>
                                        <div class="box">
                                            <select required class="wide fancyselect mb-30" name="concepte_familier">
                                                <option value="Très familier" {{
                                                    old('concepte_familier')=='Très familier' ? 'selected' : '' }}>Très
                                                    familier</option>
                                                <option value="Moyennement familier" {{
                                                    old('concepte_familier')=='Moyennement familier' ? 'selected' : ''
                                                    }}>Moyennement familier</option>
                                                <option value="Pas du tout familier" {{
                                                    old('concepte_familier')=='Pas du tout familier' ? 'selected' : ''
                                                    }}>Pas du tout familier</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h2 class="mb-20">Compétences pratiques</h2>
                                    <div class="form-check">
                                        <label class="mb-10">Langues parlées * </label><br>
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="langue_fr"
                                                value="Francais" {{ old('langue_fr')=='1' ? 'checked' : '' }}>Français
                                        </label><br>
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="langue_en"
                                                value="Anglais" {{ old('langue_en')=='1' ? 'checked' : '' }}>Anglais
                                        </label><br>
                                        <input id="autres" type="text" placeholder="Autres langue" class="form-control"
                                            name="autres">
                                    </div>
                                    <div class="section-field mb-30">
                                        <label class="mb-10">Etes-vous à l'aise avec l'outils numériques et les
                                            réseaux
                                            sociaux pour l'évangelisation ? </label>
                                        <div class="clearfix">
                                            <label>
                                                <input required type="radio" value="1" name="outils_rs" {{
                                                    old('outils_rs')=='1' ? 'checked' : '' }}>
                                                <span>OUI</span>
                                            </label>
                                        </div>
                                        <div class="radio mb-30">
                                            <label>
                                                <input required type="radio" value="0" name="outils_rs" {{
                                                    old('outils_rs')=='0' ? 'checked' : '' }}>
                                                <span>NON</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="section-field mb-30">
                                        <label class="mb-10">Avez-vous des compétences en communication, pédagogie,
                                            ou
                                            leadership? (Décrivez brièvement) *</label>
                                        <textarea required class="form-control input-message" rows="7"
                                            name="competence">{{ old('competence') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <h2 class="mb-20">Motivation et Objectifs</h2>
                                    <div class="section-field mb-30">
                                        <label class="mb-10">Pourquoi souhaitez-vous suivre cette formation
                                            missionnaire
                                            ? *</label>
                                        <textarea required class="form-control input-message" rows="7"
                                            name="but_formation">{{ old('but_formation') }}</textarea>
                                    </div>
                                    <div class="section-field mb-30">
                                        <label class="mb-10">Quelles sont vos objectifs dans le cadre de cette
                                            formation?
                                            (Ex : Approfondir ma foi, devenir missionnaire, former d'autres
                                            personnes,
                                            etc) *</label>
                                        <textarea required class="form-control input-message" rows="7"
                                            name="objectif">{{ old('objectif') }}</textarea>
                                    </div>
                                    <div class="section-field mb-30">
                                        <label class="mb-10">Etes-vous disponible pour des missions de terrain dans
                                            les
                                            12 prochains mois ? </label>
                                        <div class="clearfix">
                                            <label>
                                                <input required type="radio" value="1" name="disponible" {{
                                                    old('disponible')=='1' ? 'checked' : '' }}>
                                                <span>OUI</span>
                                            </label>
                                        </div>
                                        <div class="radio mb-30">
                                            <label>
                                                <input required type="radio" value="0" name="disponible" {{
                                                    old('disponible')=='0' ? 'checked' : '' }}>
                                                <span>NON</span>
                                            </label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" id="btnMissionnaire" class="button d-grid">Soumettre le formulaire
                        <span class="icon-action-redo"></span></button>
                </form>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection
@section("script")

@endsection
