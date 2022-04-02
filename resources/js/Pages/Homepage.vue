<script>
import { Head } from '@inertiajs/inertia-vue3';

import Layout from "../Shared/Layout.vue"

export default {
  components: { Layout, Head }
}
</script>

<template>
    <Head title="Homepage" />

<Layout>
    <h1 class="mt-3">Bienvenue sur la page d'accueil. Voici les services proposés par l'application:</h1>
    <div class="flex flex-col mt-5 border-2 divide-x lg:flex-row">
      <div class="basis-1/3">
        <h2 class="text-center mb-2">Achat de vetements</h2>
        <p>Cet espace permet à tout UM authentifié et à lui seul d'effectuer des achats parmi 3 catégories de vêtements : décontracté, sportif, et classique.</p>
        <p>La liste des vêtements en vente, classée par catégorie avec le prix de chaque article, sera accessible à tout utilisateur, qu'il soit UM authentifié ou non ou UNM.</p>
        <p>Un achat ne peut porter qu’au maximum sur 10 articles identiques, le nombre total d'articles différents achetés est libre ainsi que les catégories d’articles.</p>
        <p>En d’autres termes un panier mis à jour sera toujours accessible à l’UM durant le processus d’achat.</p>
        <p>Tout UM authentifié aura la faculté de consulter la liste des achats qu'il a effectués depuis son inscription en tant qu’UM, ordonnée par date d'achat avec le montant total de chaque achat.</p>
        <p>Il pourra également consulter les détails de chaque achat</p>

      </div>

      <div class="basis-1/3">
        <h2 class="text-center mb-2">Espace blog</h2>
        <p>L'espace blog/news du site contient une série de « billets » (articles) comportant chacun un titre, du texte et un lien vers les commentaires éventuels liés à chaque billet. Chaque billet ne pourra être édité que par l'administrateur du site.</p>
        <p>Tout UM authentifié ou UNM pourra consulter les billets édités ainsi que les commentaires éventuels qui y sont liés.</p>
        <p>Par contre la faculté d'ajouter un commentaire ne sera possible que pour l'administrateur ou un UM authentifié.</p>
        <p>L'UNM ou l'UM « non connecté » se verront proposer de s'inscrire comme UM ou de s'authentifier en cas de tentative d'édition d'un commentaire.</p>
        <p>Un moteur de recherche simplifié permettra pour tous les utilisateurs de rechercher et d'afficher les billets dont le titre contient une chaîne de caractères entrée comme critère de recherche.</p>
      </div>

      <div class="basis-1/3">
        <h2 class="text-center mb-2">Mini-chat</h2>

        <p>Les services de l'espace mini-chat sont exclusivement réservés aux UM authentifiés.</p>
        <p>Le mini-chat propose une liste des 10 derniers messages postés par les différents UM connectés, accompagnés chacun du pseudo utilisé au choix par chaque UM tout au long de sa connexion.</p>
        <p>A vous de limiter la longueur maximale de chaque message pouvant être édité par les UM connectés.</p>
        <p>L'UNM ou l'UM « non connecté » se verront proposer de s'inscrire comme UM ou de s'authentifier en cas de tentative d'accès à l'espace mini-chat.</p>

      </div>


    </div>
</Layout>

</template>

<style scoped>
.flex p+p{
    margin-top: 2%;
}

.flex h2{
  font-weight: bold;
  font-size: 110%;
}

</style>