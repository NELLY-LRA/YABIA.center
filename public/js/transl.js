const translations = {
    en: {
 heading1 : 'A Healthy Life',
    text1 : 'We Make Your Life Happier',
    button : 'Our Center',

    heading2 : 'New Way of Life',
    text2 : 'Your Health is Our Priority',

    heading3 : 'We promised to take care… and heal.',
    text3 : 'Consult us to establish your health plan',

    generaliste : 'General Consultation',
    pediatrique : 'Pediatric Consultation',
    domicile : 'Home Follow-up',
    gynecologique : 'Gynecological Consultation',
    couple : 'Couple Consultation',

    about_title : 'About Us',
    about_heading : 'Who We Are?',
    about_text : 'YABIA HEALTH CENTER is a private medical institution founded in 1996, aiming to provide quality care at an affordable cost for everyone in Sub-Saharan African developing countries.',
    about_button : 'More About Us',
    phone_text : 'Call/WhatsApp Message(click)',
    },

    fr: {
 heading1 : 'Une Vie Saine',
    text1 : 'Nous Vous Rendons La Vie Plus Heureuse',
    button : 'Notre Centre',

    heading2 : 'Nouveau Mode de Vie',
    text2 : 'Votre Santé est Notre Priorité',

    heading3 : 'Nous avons promis de prendre soin… et guerir.',
    text3 : 'Consultez nous pour établir votre plan de santé',

    generaliste : 'Consultation Generaliste',
    pediatrique : 'Consultation Pediatrique',
    domicile : 'Suivi a Domicile',
    gynecologique : 'Consultation Gynecologique',
    couple : 'Consultation De Couple',

    about_title : 'A propos de Nous',
    about_heading : 'Qui Sommes Nous ?',
    about_text : 'YABIA HEALTH CENTER est une institution médicale privée fondée en 1996, avec pour objectif global de fournir des soins de qualité à un coût accessible par tous, dans le contexte des pays en développement de l’Afrique subsaharienne.',
    about_button : 'Plus sur Nous',
    phone_text : 'Appel/Message Whatsapp(clique)',
    }
}

const languageSelectop = document.querySelector("select");
let head1 = document.getElementById("head1"); // remplacer par les vraies valeurs du site; h1 est id dans le html
let tex1 = document.getElementById("tex1");
let buton = document.getElementById("buton");
let head2 = document.getElementById("head2");
let tex2 = document.getElementById("tex2");
let head3 = document.getElementById("head3");
let tex3 = document.getElementById("tex3");

languageSelectop.addEventListener("change", (event) => {
    setLanguage(event.target.value)
})

const setLanguage = (language) => {
    if(language == "en"){
head1.innerText = translations.en.heading1; // selct est la cle tout comme heading(id et key)
tex1.innerText = translations.en.text1;
buton.innerText = translations.en.button;
head2.innerText = translations.en.heading2;
tex21.innerText = translations.en.text2;
head3.innerText = translations.en.heading3;
tex3.innerText = translations.en.text3;
}
     else if(language == "fr"){
head1.innerText = translations.fr.heading1; // selct est la cle tout comme heading(id et key)
tex1.innerText = translations.fr.text1;
buton.innerText = translations.fr.button;
head2.innerText = translations.fr.heading2;
tex21.innerText = translations.fr.text2;
head3.innerText = translations.fr.heading3;
tex3.innerText = translations.fr.text3;     }
}
