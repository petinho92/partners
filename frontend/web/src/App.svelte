<script>
    import '@fortawesome/fontawesome-free/js/fontawesome.js';
    import '@fortawesome/fontawesome-free/js/brands.js';
    import '@fortawesome/fontawesome-free/js/solid.js';
    import 'bulma/css/bulma.css';
    import Router from 'svelte-spa-router';
    import routes from "src/routes.ts";
    import {_, addMessages, init} from "svelte-i18n";
    import hu from './application/lang/hu.json';
    import en from './application/lang/en.json';
    import {writable} from 'svelte/store';
    import Menu from "src/presentational/components/page_element/Menu.svelte";


    let languages = writable(localStorage.getItem("lang") !== null ? localStorage.getItem("lang") : 'hu');

    addMessages('hu', hu);
    addMessages('en', en);

    $: {
        init({
            fallbackLocale: 'hu',
            initialLocale: $languages,
        });
        localStorage.setItem("lang", $languages);
    }


</script>

<Menu languages={languages}/>


<style lang="css" global>
    html {
        height: 100%;
    }

    body {
        min-height: 100%;
        background-image: url("/~web/images/bg01.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }

    input .input {
        background-color: #00b89c;
    }


</style>

<Router {routes}/>