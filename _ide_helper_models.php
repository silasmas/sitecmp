<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Entity
 *
 * @author Xanders
 * @see https://www.linkedin.com/in/xanders-samoth-b2770737/
 * @property int $id
 * @property array|null $designation
 * @property int|null $type
 * @property array|null $titulaire
 * @property array|null $adresse
 * @property array|null $image_url
 * @property string|null $link_facebook
 * @property string|null $link_instagram
 * @property string|null $link_twitter
 * @property string|null $website
 * @property int|null $minister_id
 * @property int|null $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property array|null $contact
 * @property-read \App\Models\Minister|null $minister
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Program> $programs
 * @property-read int|null $programs_count
 * @method static \Illuminate\Database\Eloquent\Builder|Entity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Entity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Entity query()
 * @method static \Illuminate\Database\Eloquent\Builder|Entity whereAdresse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entity whereContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entity whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entity whereDesignation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entity whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entity whereImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entity whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entity whereLinkFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entity whereLinkInstagram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entity whereLinkTwitter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entity whereLocale(string $column, string $locale)
 * @method static \Illuminate\Database\Eloquent\Builder|Entity whereLocales(string $column, array $locales)
 * @method static \Illuminate\Database\Eloquent\Builder|Entity whereMinisterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entity whereTitulaire($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entity whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entity whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entity whereWebsite($value)
 */
	class Entity extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Event
 *
 * @author Xanders
 * @see https://www.linkedin.com/in/xanders-samoth-b2770737/
 * @property int $id
 * @property array|null $designation
 * @property int|null $type
 * @property array|null $lieu
 * @property string|null $orateur
 * @property string|null $date_debut
 * @property string|null $date_fin
 * @property int|null $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property array|null $theme
 * @property array|null $references
 * @property array|null $image_url
 * @property int|null $est_a_la_une
 * @property array|null $description
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Post> $posts
 * @property-read int|null $posts_count
 * @method static \Illuminate\Database\Eloquent\Builder|Event newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Event newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Event query()
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereDateDebut($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereDateFin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereDesignation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereEstALaUne($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereLieu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereLocale(string $column, string $locale)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereLocales(string $column, array $locales)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereOrateur($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereReferences($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereTheme($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereUpdatedAt($value)
 */
	class Event extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Faithful
 *
 * @author Xanders
 * @see https://www.linkedin.com/in/xanders-samoth-b2770737/
 * @property int $id
 * @property string|null $fullname
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $commune
 * @property string|null $adresse
 * @property int|null $est_membre
 * @property int|null $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $ville
 * @property string|null $pays
 * @method static \Illuminate\Database\Eloquent\Builder|Faithful newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Faithful newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Faithful query()
 * @method static \Illuminate\Database\Eloquent\Builder|Faithful whereAdresse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faithful whereCommune($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faithful whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faithful whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faithful whereEstMembre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faithful whereFullname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faithful whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faithful whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faithful whereLocale(string $column, string $locale)
 * @method static \Illuminate\Database\Eloquent\Builder|Faithful whereLocales(string $column, array $locales)
 * @method static \Illuminate\Database\Eloquent\Builder|Faithful wherePays($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faithful wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faithful whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faithful whereVille($value)
 */
	class Faithful extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Gallery
 *
 * @author Xanders
 * @see https://www.linkedin.com/in/xanders-samoth-b2770737/
 * @property int $id
 * @property string|null $image_url
 * @property string|null $description
 * @property int|null $is_active
 * @property int|null $post_id
 * @property int|null $project_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Post|null $post
 * @property-read \App\Models\Projet|null $project
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery query()
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery whereImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery whereLocale(string $column, string $locale)
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery whereLocales(string $column, array $locales)
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery whereUpdatedAt($value)
 */
	class Gallery extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Good
 *
 * @author Xanders
 * @see https://www.linkedin.com/in/xanders-samoth-b2770737/
 * @property int $id
 * @property string|null $designation
 * @property string|null $image_url
 * @property string|null $price
 * @property string|null $description
 * @property int|null $project_id
 * @property int|null $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Good newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Good newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Good query()
 * @method static \Illuminate\Database\Eloquent\Builder|Good whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Good whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Good whereDesignation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Good whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Good whereImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Good whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Good whereLocale(string $column, string $locale)
 * @method static \Illuminate\Database\Eloquent\Builder|Good whereLocales(string $column, array $locales)
 * @method static \Illuminate\Database\Eloquent\Builder|Good wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Good whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Good whereUpdatedAt($value)
 */
	class Good extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Minister
 *
 * @author Xanders
 * @see https://www.linkedin.com/in/xanders-samoth-b2770737/
 * @property int $id
 * @property string|null $fullname
 * @property string|null $image_url
 * @property string|null $bio
 * @property int|null $is_titular
 * @property int|null $is_active
 * @property string|null $contact
 * @property string|null $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $facebook_url
 * @property string|null $instagram_url
 * @property string|null $twitter_url
 * @property string|null $youtube_url
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Entity> $entities
 * @property-read int|null $entities_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Post> $posts
 * @property-read int|null $posts_count
 * @method static \Illuminate\Database\Eloquent\Builder|Minister newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Minister newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Minister query()
 * @method static \Illuminate\Database\Eloquent\Builder|Minister whereBio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Minister whereContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Minister whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Minister whereFacebookUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Minister whereFullname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Minister whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Minister whereImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Minister whereInstagramUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Minister whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Minister whereIsTitular($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Minister whereLocale(string $column, string $locale)
 * @method static \Illuminate\Database\Eloquent\Builder|Minister whereLocales(string $column, array $locales)
 * @method static \Illuminate\Database\Eloquent\Builder|Minister whereTwitterUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Minister whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Minister whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Minister whereYoutubeUrl($value)
 */
	class Minister extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Missionnaire
 *
 * @property int $id
 * @property string $nom
 * @property string $birthday
 * @property string|null $age
 * @property string|null $adresse
 * @property string|null $phone
 * @property string $email
 * @property string|null $etat_civil
 * @property string|null $profession
 * @property string|null $annee_conversion
 * @property string|null $lieu_bapteme
 * @property string|null $date_bapteme
 * @property string $eglise_attache
 * @property string|null $temps_au_cmp
 * @property string|null $departement
 * @property string $participer_mission
 * @property string|null $description_mission
 * @property string $formation_biblique
 * @property string|null $niveau
 * @property string|null $lecture_bible
 * @property string|null $livre_bible
 * @property string|null $base_mission
 * @property string|null $concepte_familier
 * @property string|null $langue_fr
 * @property string|null $langue_en
 * @property string|null $autres
 * @property string|null $competence
 * @property string $outils_rs
 * @property string|null $but_formation
 * @property string|null $objectif
 * @property string $disponible
 * @property string $validationFormulaire
 * @property string|null $note_validation
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\MissionnaireFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Missionnaire newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Missionnaire newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Missionnaire query()
 * @method static \Illuminate\Database\Eloquent\Builder|Missionnaire whereAdresse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Missionnaire whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Missionnaire whereAnneeConversion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Missionnaire whereAutres($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Missionnaire whereBaseMission($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Missionnaire whereBirthday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Missionnaire whereButFormation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Missionnaire whereCompetence($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Missionnaire whereConcepteFamilier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Missionnaire whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Missionnaire whereDateBapteme($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Missionnaire whereDepartement($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Missionnaire whereDescriptionMission($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Missionnaire whereDisponible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Missionnaire whereEgliseAttache($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Missionnaire whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Missionnaire whereEtatCivil($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Missionnaire whereFormationBiblique($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Missionnaire whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Missionnaire whereLangueEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Missionnaire whereLangueFr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Missionnaire whereLectureBible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Missionnaire whereLieuBapteme($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Missionnaire whereLivreBible($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Missionnaire whereNiveau($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Missionnaire whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Missionnaire whereNoteValidation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Missionnaire whereObjectif($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Missionnaire whereOutilsRs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Missionnaire whereParticiperMission($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Missionnaire wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Missionnaire whereProfession($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Missionnaire whereTempsAuCmp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Missionnaire whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Missionnaire whereValidationFormulaire($value)
 */
	class Missionnaire extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Offrande
 *
 * @property int $id
 * @property string|null $nom
 * @property string|null $description
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\OffrandeFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Offrande newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Offrande newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Offrande query()
 * @method static \Illuminate\Database\Eloquent\Builder|Offrande whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offrande whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offrande whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offrande whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offrande whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offrande whereUpdatedAt($value)
 */
	class Offrande extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Payment
 *
 * @author Xanders
 * @see https://www.linkedin.com/in/xanders-samoth-b2770737/
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereLocale(string $column, string $locale)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereLocales(string $column, array $locales)
 */
	class Payment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Post
 *
 * @author Xanders
 * @see https://www.linkedin.com/in/xanders-samoth-b2770737/
 * @property int $id
 * @property array|null $title
 * @property int|null $type
 * @property string|null $link_url
 * @property array|null $image_url
 * @property array|null $body
 * @property string|null $author
 * @property array|null $observation
 * @property int|null $event_id
 * @property string|null $slug
 * @property int|null $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property array|null $references
 * @property string|null $date_publication
 * @property array|null $fichier_url
 * @property int|null $minister_id
 * @property-read \App\Models\Event|null $event
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Gallery> $galleries
 * @property-read int|null $galleries_count
 * @property-read \App\Models\Minister|null $minister
 * @method static \Illuminate\Database\Eloquent\Builder|Post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post query()
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereDatePublication($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereEventId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereFichierUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereLinkUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereLocale(string $column, string $locale)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereLocales(string $column, array $locales)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereMinisterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereObservation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereReferences($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereUpdatedAt($value)
 */
	class Post extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Program
 *
 * @author Xanders
 * @see https://www.linkedin.com/in/xanders-samoth-b2770737/
 * @property int $id
 * @property string|null $designation
 * @property string|null $description
 * @property int|null $entity_id
 * @property int|null $is_active
 * @property string|null $image_url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Entity|null $entity
 * @method static \Illuminate\Database\Eloquent\Builder|Program newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Program newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Program query()
 * @method static \Illuminate\Database\Eloquent\Builder|Program whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Program whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Program whereDesignation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Program whereEntityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Program whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Program whereImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Program whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Program whereLocale(string $column, string $locale)
 * @method static \Illuminate\Database\Eloquent\Builder|Program whereLocales(string $column, array $locales)
 * @method static \Illuminate\Database\Eloquent\Builder|Program whereUpdatedAt($value)
 */
	class Program extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Projet
 *
 * @author Xanders
 * @see https://www.linkedin.com/in/xanders-samoth-b2770737/
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Gallery> $galleries
 * @property-read int|null $galleries_count
 * @method static \Illuminate\Database\Eloquent\Builder|Projet newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Projet newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Projet query()
 * @method static \Illuminate\Database\Eloquent\Builder|Projet whereLocale(string $column, string $locale)
 * @method static \Illuminate\Database\Eloquent\Builder|Projet whereLocales(string $column, array $locales)
 */
	class Projet extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Role
 *
 * @author Xanders
 * @see https://www.linkedin.com/in/xanders-samoth-b2770737/
 * @property int $id
 * @property string $name
 * @property string $guard_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereGuardName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereLocale(string $column, string $locale)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereLocales(string $column, array $locales)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereUpdatedAt($value)
 */
	class Role extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Testimonial
 *
 * @author Xanders
 * @see https://www.linkedin.com/in/xanders-samoth-b2770737/
 * @property int $id
 * @property string|null $fullname
 * @property string|null $body
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $type
 * @property string|null $image_url
 * @property int|null $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial query()
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereFullname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereLocale(string $column, string $locale)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereLocales(string $column, array $locales)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereUpdatedAt($value)
 */
	class Testimonial extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Transaction
 *
 * @property int $id
 * @property string $reference
 * @property string|null $provider_reference
 * @property string|null $order_number
 * @property string|null $amount_customer
 * @property string|null $phone
 * @property string|null $currency
 * @property string|null $chanel
 * @property string|null $description
 * @property int $offrande_id
 * @property string|null $fullname
 * @property string|null $numberPhone
 * @property string|null $pays
 * @property string|null $type
 * @property string $etat
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\TransactionFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction query()
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereAmountCustomer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereChanel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereEtat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereFullname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereNumberPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereOffrandeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereOrderNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction wherePays($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereProviderReference($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereReference($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Transaction whereUpdatedAt($value)
 */
	class Transaction extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @author Xanders
 * @see https://www.linkedin.com/in/xanders-samoth-b2770737/
 * @property int $id
 * @property int|null $role_id
 * @property string $name
 * @property string $email
 * @property string|null $avatar
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property string|null $role
 * @property string|null $settings
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $organiser_id
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Role> $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLocale(string $column, string $locale)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLocales(string $column, array $locales)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereOrganiserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSettings($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User withoutPermission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User withoutRole($roles, $guard = null)
 */
	class User extends \Eloquent implements \Filament\Models\Contracts\FilamentUser {}
}

namespace App\Models{
/**
 * App\Models\UserRole
 *
 * @author Xanders
 * @see https://www.linkedin.com/in/xanders-samoth-b2770737/
 * @property int $user_id
 * @property int $role_id
 * @property-read \App\Models\Role $role
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|UserRole newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserRole newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserRole query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserRole whereLocale(string $column, string $locale)
 * @method static \Illuminate\Database\Eloquent\Builder|UserRole whereLocales(string $column, array $locales)
 * @method static \Illuminate\Database\Eloquent\Builder|UserRole whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserRole whereUserId($value)
 */
	class UserRole extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\actualites
 *
 * @property int $id
 * @property string|null $description
 * @property string|null $titre
 * @property string|null $img_url
 * @property int|null $is_active
 * @method static \Database\Factories\actualitesFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|actualites newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|actualites newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|actualites query()
 * @method static \Illuminate\Database\Eloquent\Builder|actualites whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|actualites whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|actualites whereImgUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|actualites whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|actualites whereTitre($value)
 */
	class actualites extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\newsletters
 *
 * @property int $id
 * @property string|null $nom
 * @property string|null $prenom
 * @property string|null $phone
 * @property string|null $source
 * @property string|null $email
 * @property int|null $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|newsletters newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|newsletters newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|newsletters query()
 * @method static \Illuminate\Database\Eloquent\Builder|newsletters whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|newsletters whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|newsletters whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|newsletters whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|newsletters whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|newsletters wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|newsletters wherePrenom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|newsletters whereSource($value)
 * @method static \Illuminate\Database\Eloquent\Builder|newsletters whereUpdatedAt($value)
 */
	class newsletters extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\video
 *
 * @property int $id
 * @property string|null $video
 * @property array|null $titre
 * @property array|null $description
 * @property string|null $Type
 * @property string|null $jour
 * @property int|null $is_active
 * @property string|null $dateRealiser
 * @property string|null $imag_url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\videoFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|video newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|video newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|video query()
 * @method static \Illuminate\Database\Eloquent\Builder|video whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|video whereDateRealiser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|video whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|video whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|video whereImagUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|video whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|video whereJour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|video whereLocale(string $column, string $locale)
 * @method static \Illuminate\Database\Eloquent\Builder|video whereLocales(string $column, array $locales)
 * @method static \Illuminate\Database\Eloquent\Builder|video whereTitre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|video whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|video whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|video whereVideo($value)
 */
	class video extends \Eloquent {}
}

