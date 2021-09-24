<script>
    import {_} from 'svelte-i18n';

</script>

<section class="hero is-fullheight ">
    <div class="hero-body ">
        <div class="container has-text-centered ">
            <div class="column ">
                <div class="box mobilwidth">

                    <h1 class="title has-text-centered mb-6">{$_('main.page_title')}</h1>
                    <h2 class="subtitle has-text-centered mt-6">

                    </h2>

                    <div class="content is-medium">
                        <p class="has-text-justified is-size-7-mobile">{$_('main_page_paragraph1')}</p>
                    </div>
                    <div class="content is-medium">
                        <p class="has-text-justified is-size-7-mobile">{$_('main_page_paragraph2')}</p>
                    </div>
                    <div class="content is-medium">
                        <p class="has-text-justified is-size-7-mobile">{$_('main_page_paragraph3')}</p>
                    </div>
                    <div class="content is-medium">
                        <p class="has-text-justified is-size-7-mobile">{$_('main_page_paragraph4')}</p>
                    </div>
                    <div class="content is-medium">
                        <p class="has-text-justified is-size-7-mobile">{$_('main_page_paragraph5')}</p>
                    </div>


                    <div class="has-text-centered mt-6">
                        <img src="/~web/images/main_mik51.PNG" alt="MIK 51 logo" width="376" height="203">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<style>
    .maincontainer {
        background-color: #ffffff;
        padding: 30px;
        min-height: 90vh;
    }

    @media only screen and (max-width: 350px) {

        .mobilwidth {
            min-width: 98vw;
        }
    }

    p {
        margin: 0 20px 16px 20px;
    }


    @media screen and (min-width: 600px) {
        .maincontainer {
            border-radius: 20px;
        }
    }

    @media screen and (max-width: 599px) {
        .maincontainer {
            border-radius: 0px;
        }
    }

</style>