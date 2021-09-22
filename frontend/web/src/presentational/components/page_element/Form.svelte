<script lang="ts">
    import {_} from 'svelte-i18n';
    import {plen, section1, section2} from 'src/application/statData/GetPrograms.js';
    import CheckboxField from "src/presentational/components/element/CheckboxField.svelte";
    import {Button} from 'svelma';
    import {createEventDispatcher} from "svelte";

    const dispatch = createEventDispatcher();

    let privacy = false;
    let covid = false;
    export let forWhom;
    let checkValue1 = [];
    let checkValue2 = [];
    let disPatched = [];


    function sendUPData() {
        dispatch('message', {
            data: checkValue1.concat(checkValue2)
        });
    }

    //<p>{checkValue1.concat(checkValue2)}</p>
    function setDispatched(event) {
        disPatched = event.detail;
    }
</script>

<section id="contact" class="section">
    <div class="container shadow">
        <div class="headColor">
            <h3 class="is-size-3 has-text-centered">
                <strong class="headTitleColor">{$_('menu.registration.registration')}</strong>
            </h3>
            <h4 class="subtitle has-text-centered headTitleColor">{forWhom}</h4>
        </div>
        <div class="box formbody">
            <div class="columns">
                <div class="column">
                    <img src="http://via.placeholder.com/640x360" alt="picture" class="is-128x128">
                    <p class="has-text-black paragraph has-text-justified">{@html $_('form.common.descrioption.student')}</p>

                    <p class="has-text-black paragraph has-text-centered">
                        One of our team members will contact you soon <i class="fa fa-heart" aria-hidden="true"
                                                                         style="color: red;"></i>

                    </p>
                </div>
                <div class="vl"></div>
                <div class="column">
                    <slot name="personal_info"></slot>
                    <div>
                        <h1 class="title is-5 mt-6">{$_('form.common.dividers.programs')}</h1>
                        <p class="subtitle is-6 mt-6"><b>{$_('form.common.programs')}</b></p>
                        <label class="label has-text-left">{$_('form.common.programs.plenary')}</label>
                        <slot name="plen1">
                            <CheckboxField list={plen} on:click={setDispatched} bind:selected={checkValue1}/>
                        </slot>
                        <label class="label has-text-left mt-3">{$_('form.common.programs.section1')}</label>
                        <slot name="plen1">
                            <CheckboxField list={section1} on:click={setDispatched} bind:selected={checkValue1}/>
                        </slot>
                        <label class="label has-text-left mt-3">{$_('form.common.programs.section2')}</label>
                        <slot name="plen2">
                            <CheckboxField list={section2} on:click={setDispatched} bind:selected={checkValue2}/>
                        </slot>

                    </div>
                    <br>
                    <label class="checkbox">
                        <br><input type="checkbox" bind:checked={covid}>
                        {@html $_('form.common.label.consent')}<b
                            class="has-text-danger">*</b>
                    </label>
                    <label class="checkbox">
                        <br><input type="checkbox" bind:checked={privacy}>
                        {@html $_('form.common.label.privacy_policy')}<b
                            class="has-text-danger">*</b>
                    </label>
                    <div class="columns is-centered mt-6">
                        <div class="buttons">
                            <Button type="is-light"
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
    .formbody {
        /*background-color: #82a6da;*/
        border-top-left-radius: 1px;
        border-top-right-radius: 1px;
        background-image: linear-gradient(#336fc4, #d2dcea);
        /*box-shadow: 10px 10px 5px grey;*/
    }
    .headColor{
        background-image: linear-gradient(#0C2D48, #145DA0);
        /*box-shadow: 10px 10px 5px grey;*/
        /*background-color: #205cdc;*/
        padding: 20px 0 20px 0;
        border-radius: 10px 10px 0 0;
    }
    .headTitleColor{
        color: white;
    }
    .shadow{
        box-shadow: 10px 10px 5px grey;
    }
    .vl{
        border-left: 6px solid;
        border-image:
                linear-gradient(
                        to bottom,
                        #d2dcea,
                        #336fc4
                ) 1 100%;
        height: calc(100%-1px);
    }
</style>