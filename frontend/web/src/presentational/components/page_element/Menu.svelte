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
    <nav class="navbar is-black is-fixed-top" role="navigation" aria-label="main navigation" id="navbar">
        <div class="container">

            <!-- logo or branding image on left side -->
            <div class="navbar-brand">
                <a class="navbar-item"
                   on:click={ () => push("/")}>
                    <img src="/~web/images/mik51_white.png" alt="home" width="90" height="40">
                </a>
                <div class="navbar-burger" data-target="navbar-menu"
                     onclick="document.querySelector('.navbar-menu').classList.toggle('is-active');">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>

            <!-- children of navbar-menu must be navbar-start and/or navbar-end -->
            <div class="navbar-menu backcolor" id="navbar-menu">
                <!-- navbar items | left side -->
                <!-- <div class="navbar-start">
                </div> -->
                <!-- navbar items | right side -->
                <div class="navbar-end">

                    <div class="navbar-item">
                        <select bind:value={$languages} class="navbar-item">
                            <option value="hu">{$_('menu.lang.hu')}</option>
                            <option value="en">{$_('menu.lang.en')}</option>
                        </select>
                    </div>
                </div>

            </div>
        </div>
    </nav>

</section>






<style>


    @media only screen and (min-width: 601px) {
        .backcolor {
            color: black;
        }
    }

    @media only screen and (max-width: 600px) {
        .backcolor {
            color: #eeeeee;
        }
    }

    /*select {*/
    /*    width: 150px;*/
    /*    height: 50px;*/
    /*    color: white;*/
    /*    background-color: rgba(166, 164, 164, 0.4);*/
    /*    border-radius: 15px;*/
    /*}*/

</style>
