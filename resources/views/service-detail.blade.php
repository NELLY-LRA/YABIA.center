@extends('layouts.gues')
@section('content')

<!-- Page Title -->
<section class="page-title" style="background-image:url(images/background/7.jpg)">
    <div class="auto-container">
        <h2>Services Détail</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="{{route('welcome')}}">{{ __('app.breadcrumb_home') }}</a></li>
            <li>Services Détail</li>
        </ul>
    </div>
</section>
<!-- End Page Title -->

<!-- Sidebar Page Container -->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Sidebar Side -->
            <div class="sidebar-side left-sidebar col-lg-4 col-md-12 col-sm-12">

                <!-- Bloc Médecine Générale -->
                <div class="service-block wow fadeInUp" id="medecine-generale" data-wow-delay="0ms" data-wow-duration="1200ms">
                    <h3><i class="fa-solid fa-stethoscope"></i> Médecine Générale</h3>
                    <p>La Clinique offre des soins primaires pour les maladies du système corporel telles que :</p>

                    <h4>Diabète et Hypertension</h4>
                    <p>Notre approche est globale et comprend le dépistage et la prise en charge afin de minimiser les complications associées.</p>

                    <h4>VIH / SIDA</h4>
                    <p>Le dépistage et le traitement sont disponibles. Un accès facile aux médicaments antirétroviraux à faible coût constitue notre façon de prévenir la mortalité précoce due au SIDA.</p>

                    <p><strong>Nous respectons votre vie privée.</strong></p>

                    <h4>Services spéciaux pour les femmes :</h4>
                    <ul>
                        <li>Soins préventifs</li>
                        <li>Frottis cervical</li>
                        <li>Mammographie de dépistage</li>
                        <li>Soins prénataux et maternels</li>
                    </ul>

                    <h4>Services spéciaux pour les hommes :</h4>
                    <ul>
                        <li>Échographie de la prostate</li>
                        <li>Test PSA (antigène prostatique spécifique)</li>
                    </ul>
                </div>
                <!-- Fin Médecine Générale -->

                <!-- Bloc Pédiatrie -->
                <div class="service-block wow fadeInUp" id="pediatrie" data-wow-delay="200ms" data-wow-duration="1200ms">
                    <h3><i class="fa-solid fa-baby"></i> Pédiatrie</h3>
                    <h4>Service prénatal et maternité</h4>
                    <p>Le personnel pédiatrique assure des soins spécialisés pour les bébés et les nouveau-nés. Les vaccinations sont assurées, pour donner aux enfants un « départ sain dans la vie ».</p>

                    <h4>Obstétrique et gynécologie</h4>
                    <p>Nos médecins obstétriciens-gynécologues assurent un suivi complet de la grossesse jusqu’à l’accouchement, avec soins prénataux, échographies et accompagnement personnalisé.</p>
                </div>
                <!-- Fin Pédiatrie -->

                <!-- Bloc Consultation Prénatale -->
                <div class="service-block wow fadeInUp" id="consultation-prenatale" data-wow-delay="400ms" data-wow-duration="1200ms">
                    <h3><i class="fa-solid fa-heartbeat"></i> Consultation Prénatale</h3>
                    <p>Nos consultations prénatales assurent un suivi médical complet de la grossesse. Elles permettent de surveiller la santé de la maman et du bébé à chaque étape.</p>
                    <ul>
                        <li>Contrôle des paramètres vitaux</li>
                        <li>Suivi de la croissance du bébé</li>
                        <li>Réponse aux questions et inquiétudes</li>
                    </ul>
                    <p><b>Objectif :</b> garantir une grossesse en bonne santé et rassurer la future maman.</p>
                </div>
                <!-- Fin Consultation Prénatale -->

                <!-- Bloc Fecondation in vitro -->
                <div class="service-block wow fadeInUp" id="fecondation in vitro" data-wow-delay="600ms" data-wow-duration="1200ms">
                    <h3><i class="fa-solid fa-person-pregnant"></i> Fecondation in vitro</h3>
                  <p>
La fécondation in vitro (FIV) est une technique de procréation médicalement assistée (PMA) destinée aux couples ayant des difficultés à concevoir naturellement.
</p>
<p>Notre centre met à disposition un plateau technique moderne et une équipe spécialisée pour accompagner les patients tout au long du processus :</p>
<ul>
    <li>Bilan complet de fertilité</li>
    <li>Stimulation ovarienne et suivi échographique</li>
    <li>Prélèvement d’ovocytes et de spermatozoïdes</li>
    <li>Fécondation et culture embryonnaire en laboratoire</li>
    <li>Transfert d’embryon dans l’utérus</li>
    <li>Suivi médical après transfert</li>
</ul>
<b>Objectif :</b> donner une chance aux couples d’accomplir leur projet parental grâce à une prise en charge humaine, confidentielle et hautement spécialisée.
</div>
                <!-- Fin Accouchements -->
            </div>
            <!-- End Sidebar Side -->

            <!-- Content Side -->
            <div class="content-side right-sidebar col-lg-8 col-md-12 col-sm-12">

                <!-- Bloc Petite Chirurgie -->
                <div class="service-block wow fadeInUp" id="chirurgie" data-wow-delay="0ms" data-wow-duration="1200ms">
                    <h3><i class="fa-solid fa-scalpel"></i>Chirurgie Generale</h3>
                    <p>
Notre service de chirurgie générale prend en charge les affections nécessitant une intervention chirurgicale, dans le respect des normes de sécurité et avec des techniques modernes.
</p>
<p>Nous réalisons notamment :</p>
<ul>
    <li>Chirurgie digestive (appendicite, hernies, vésicule biliaire…)</li>
    <li>Chirurgie abdominale et viscérale</li>
    <li>Chirurgie de la thyroïde et autres glandes</li>
    <li>Chirurgie des tissus mous (kystes, lipomes, abcès…)</li>
    <li>Urgences chirurgicales</li>
</ul>
<b>Objectif :</b> apporter une solution rapide, efficace et sécurisée aux pathologies nécessitant une intervention chirurgicale.
                    <p><b>Contact :</b> (+237) 698 748 381 / 653 336 719</p>
                </div>
                <!-- Fin Petite Chirurgie -->

                <!-- Bloc Gynecologie obstetrique -->
                <div class="service-block wow fadeInUp" id="gynecologie obstetrique" data-wow-delay="200ms" data-wow-duration="1200ms">
                    <h3><i class="fa-solid fa-ear-listen"></i> Gynecologie obstetrique</h3>
                   <p>
Notre service de gynécologie-obstétrique accompagne les femmes à toutes les étapes de leur vie reproductive,
depuis le suivi gynécologique de routine jusqu’à la prise en charge de la grossesse et de l’accouchement.
</p>
<ul>
    <li>Consultations prénatales et suivi de grossesse</li>
    <li>Accouchements sécurisés et accompagnés par des professionnels qualifiés</li>
    <li>Prise en charge des urgences obstétricales</li>
    <li>Suivi post-partum et conseils en allaitement</li>
    <li>Dépistage et traitement des pathologies gynécologiques (fibromes, kystes, infections, etc.)</li>
    <li>Planification familiale et santé reproductive</li>
</ul>
<b>Objectif :</b> offrir aux femmes des soins personnalisés et sécurisés, pour une maternité sereine et une santé optimale.
            </div>
                <!-- Fin ORL -->

                <!-- Bloc Kinésithérapie -->
                <div class="service-block wow fadeInUp" id="kinesitherapie" data-wow-delay="400ms" data-wow-duration="1200ms">
                    <h3><i class="fa-solid fa-dumbbell"></i> Kinésithérapie</h3>
                    <p>
                        Notre service de kinésithérapie accompagne les patients dans la récupération de leur mobilité et de leur bien-être.
                        Que ce soit à la suite d’un accident, d’une chirurgie, ou pour des douleurs chroniques,
                        nos kinésithérapeutes mettent en place des programmes personnalisés :
                    </p>
                    <ul>
                        <li>Kiné Sport</li>
                        <li>Entorses</li>
                        <li>Incontinence urinaire</li>
                        <li>Malformations congénitales</li>
                        <li>Rhumatisme</li>
                        <li>Rééducation post AVC</li>
                        <li>Préparation à l'accouchement</li>
                        <li>Rééducation post trauma</li>
                        <li>Kiné de relaxation et d'entretien</li>
                        <li>Mal de dos (lombalgie)</li>
                        <li>Kiné respiratoire</li>
                        <li>Douleurs musculaires</li>
                    </ul>
                    <p><b>Objectif :</b> améliorer la qualité de vie et favoriser l’autonomie.</p>
                    <p><b>Contact :</b> (+237) 675 691 302 / 692 706 275</p>
                </div>
                <!-- Fin Kinésithérapie -->

                <!-- Bloc Échographie -->
                <div class="service-block wow fadeInUp" id="echographie" data-wow-delay="600ms" data-wow-duration="1200ms">
                    <h3><i class="fa-solid fa-wave-square"></i> Échographie</h3>
                    <p>
                        Nous disposons d’un service d’échographie moderne permettant un diagnostic précis et rapide.
                        Cet examen d’imagerie médicale est indolore et non invasif.
                        Utilisé notamment pour :
                    </p>
                    <ul>
                        <li>Suivi de grossesse</li>
                        <li>Exploration abdominale, pelvienne ou musculaire</li>
                        <li>Dépistage et suivi de certaines pathologies</li>
                    </ul>
                    <p><b>Objectif :</b> offrir aux patients un diagnostic fiable pour une prise en charge adaptée.</p>
                </div>
                <!-- Fin Échographie -->

                <!-- Bloc Laboratoire -->
                <div class="service-block wow fadeInUp" id="laboratoire" data-wow-delay="800ms" data-wow-duration="1200ms">
                    <h3><i class="fa-solid fa-vials"></i> Laboratoire d'Analyses</h3>
                    <p>
                        Le laboratoire de la Clinique YABIA offre des services complets d’examens, d’interprétation médicale des spécimens
                        et d’innovation en technologie de laboratoire.
                    </p>
                    <h4>Nos services comprennent :</h4>
                    <ul>
                        <li>Hématologie (Cyto-hématologie, groupe sanguin et Rh, électrophorèse)</li>
                        <li>Biochimie</li>
                        <li>Immuno-sérologie</li>
                        <li>Hémostase / coagulation</li>
                        <li>Pathologie histo-cytologique</li>
                        <li>Hormonologie</li>
                        <li>Enzymologie</li>
                        <li>Microbiologie médicale (parasitologie, mycologie, bactériologie)</li>
                    </ul>
                    <p>
                        Nous nous assurons que tous nos services reflètent notre engagement à fournir à la population
                        les meilleurs soins médicaux possibles. Chaque jour, notre équipe de laboratoire travaille
                        en collaboration avec les patients et le personnel clinique, pour un diagnostic rapide et correct.
                    </p>
                    <p>
                        Le laboratoire joue un rôle essentiel dans la qualité et la sécurité des soins,
                        en fournissant des diagnostics précis et des informations essentielles pour le traitement.
                    </p>
                </div>
                <!-- Fin Laboratoire -->

            </div>
            <!-- End Content Side -->

        </div>
    </div>
</div>
<!-- End Sidebar Page Container -->

<!-- CSS Déco -->
<style>
.service-block {
    background: #fff;
    border-left: 5px solid #0d6efd;
    padding: 25px;
    margin-bottom: 30px;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    transition: all 0.3s ease-in-out;
}
.service-block:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
}
.service-block h3 {
    color: #0d6efd;
    font-weight: 600;
    margin-bottom: 15px;
}
.service-block h3 i {
    color: #ffc107;
    margin-right: 10px;
}
</style>

@endsection
