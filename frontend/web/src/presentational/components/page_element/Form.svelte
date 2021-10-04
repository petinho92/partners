<script lang="ts">
    import {_} from 'svelte-i18n';
    import {plen, section1, section2, chambers} from 'src/application/statData/GetProgram.ts';
    import CheckboxField from "src/presentational/components/element/CheckboxField.svelte";
    import {Button} from 'svelma';
    import {createEventDispatcher} from "svelte";

    const dispatch = createEventDispatcher();

    let privacy = false;
    let covid = false;
    export let forWhom;
    export let privacyPath;
    let checkValue1 = [];
    let checkValue2 = [];
    let checkValue3 = [];
    let checkValue4 = [];
    let disPatched = [];


    function sendUPData() {
        dispatch('message', {
            data: checkValue1.concat(checkValue2).concat(checkValue3).concat(checkValue4)
        });
    }

    //<p>{checkValue1.concat(checkValue2)}</p>
    function setDispatched(event) {
        disPatched = event.detail;
    }
</script>

<section class="hero is-fullheight">
    <div class="hero-body">
        <div class="container has-text-centered">
            <div class="column">
                <div class="box has-background-info-light">
                    <p class="subtitle is-4">{forWhom}
                    </p>
                    <br/>
                    <div class="columns">
                        <div class="column">
                            <slot name="description"></slot>
                        </div>
                        <div class="column">
                            <span class="has-icons-right"><img class="icon iconsize" src="/~web/images/centenarium.png"
                                                               alt="PTE Centenárium"/> </span>
                        </div>
                    </div>


                    <slot name="personal_info"></slot>
                    <h1 class="title is-5 mt-6">{$_('form.common.dividers.programs')}</h1>
                    <p class="subtitle is-6 mt-6"><b>{$_('form.common.programs')}<b class="has-text-danger">*</b></b></p>
                    <div class="columns">



                        <div class="column is-one-third">
                            <label class="label has-text-left">{$_('form.common.programs.plenary')}</label>
                            <slot name="plen">
                                <CheckboxField list={plen} on:click={setDispatched} bind:selected={checkValue1}/>
                            </slot>
                        </div>
                        <div class="column is-one-third">
                            <label class="label has-text-left mt-3">{$_('form.common.programs.section1')}</label>
                            <slot name="plen1">
                                <CheckboxField list={section1} on:click={setDispatched} bind:selected={checkValue2}/>
                            </slot>
                        </div>
                        <div class="column is-one-third">
                            <label class="label has-text-left mt-3">{$_('form.common.programs.section2')}</label>
                            <slot name="plen2">
                                <CheckboxField list={section2} on:click={setDispatched} bind:selected={checkValue3}/>
                            </slot>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column is-one-third">
                            <label class="label has-text-left mt-3">{$_('form.common.programs.chamber')}</label>
                            <slot name="chamber">
                                <CheckboxField list={chambers} on:click={setDispatched} bind:selected={checkValue4}/>
                            </slot>
                        </div>
                    </div>
                    <br>
                    <label class="checkbox has-text-left-mobile">
                        <br><input type="checkbox" bind:checked={covid}>
                        {@html $_('form.common.label.consent')}<b
                            class="has-text-danger">*</b>
                    </label>
                    <label class="checkbox has-text-left-mobile">
                        <br><input type="checkbox" bind:checked={privacy}>
                        {@html privacyPath}<b class="has-text-danger">*</b>
                    </label>
                    <div class="columns is-centered mt-6">
                        <div class="buttons">
                            <Button type="is-info"
                                    on:click={sendUPData}
                                    disabled={!privacy | !covid}>
                                {$_('menu.registration.registration')}
                            </Button>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>

</section>

<style>
    @media only screen and (max-width: 600px) {
        .iconsize {
            width: 177px;
            height: 142px;
            opacity: 0.3;
        }
    }

    @media only screen and (min-width: 601px) {
        .iconsize {
            width: 354px;
            height: 283px;
            opacity: 0.3;
        }
    }


</style>