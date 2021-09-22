<script lang="ts">
    import {_} from 'svelte-i18n';
    import {push} from 'svelte-spa-router';

    export let languages;
    let click = true;

    function handleClick() {
        click == !click;
    }

</script>
<section class="section">
<nav class="navbar is-transparent is-fixed-top menucolor" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" on:click={ () => push("/")}>
            <img src="/~web/images/mik51_logo.png" alt="home" width="70" height="40">
        </a>

        <div class="navbar-burger burger"
             onclick="document.querySelector('.navbar-menu').classList.toggle('is-active');">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <div id="navbarBasicExample" class="navbar-menu {click}">
        <div class="navbar-start">
            <a class="navbar-item" on:click={ () => push("/student") }>
                {$_('menu.registration.student')}
            </a>
            <a class="navbar-item" on:click={ () => push("/instructor") }>
                {$_('menu.registration.instructor')}
            </a>
            <a class="navbar-item" on:click={ () => push("/chamber") }>
                {$_('menu.registration.chamber')}
            </a>
            <a class="navbar-item" on:click={ () => push("/guest") }>
                {$_('menu.registration.guest')}
            </a>
        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                <select bind:value={$languages}>
                        <option value="hu">{$_('menu.lang.hu')}</option>
                        <option value="en">{$_('menu.lang.en')}</option>
                </select>
            </div>
        </div>
    </div>
</nav>
</section>

<style>
    .menucolor {
        /*background-color: #000f49;*/
    background-color: rgba(166, 164, 164, 0.4);
    }

    @media only screen and (min-width: 601px) {
        .navbar-item {
            color: white;
        }
    }
    @media only screen and (max-width: 600px) {
        .navbar-item {
            color: black;
        }
    }
    select{
        width: 150px;
        height: 50px;
        color: white;
        background-color: rgba(166, 164, 164, 0.4);
        border-radius: 15px;
    }

    /*a {*/
    /*    color: white;*/
    /*}*/
    /*a:hover{*/
    /*    color: #f3e7e7;*/
    /*}*/
</style>
