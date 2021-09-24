<script lang="ts">
    import {_, locale} from 'svelte-i18n';
    import Form from '../page_element/Form.svelte';
    import InputField from "src/presentational/components/element/InputField.svelte";
    import {foodTicket_hu, foodTicket_en} from "src/application/statData/GetFoodList.js";
    import GuestFormData from "src/application/formData/GuestFormData.ts";
    import HandleFetch from "src/application/services/handle-fetch";
    import ModalCard from "src/presentational/components/element/ModalCard.svelte";

    let lang;
    let active = false;
    let formData = new GuestFormData();

    function handleMessage(event) {
        formData.programs = (event.detail.data);
        lang = $locale;
        formData.lang = lang;

        fetch('/post/guestPost', {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(formData)
        }).then(HandleFetch)
            .then(res => {
                if (res.statusCode === 200) {
                    active = true;
                }
            })
    }
</script>

<section></section>
<Form forWhom={$_('menu.registration.guest')} privacyPath={$_('form.common.label.privacy_policy.guest')} on:message={handleMessage}>

    <div slot="description" class="has-text-left">
        <div class="card-content is-size-7-mobile">
            <h2 class="subtitle">{$_('student_desc_title')}</h2>
            {@html $_('inst_desc_ul_li1')}
            <h2 class="subtitle mt-6">{$_('inst_desc_title2')}</h2>
            {@html $_('inst_desc_ul_li2')}
        </div>
    </div>

    <div slot="personal_info">
        <h1 class="title is-5">{$_('form.common.dividers.personal_info')}</h1>
        <InputField label={$_('form.common.name')} require="{true}" type="text" needIcon={true} iconTag="fas fa-user"
                    placeholder={$_('form.common.name')} bind:value={formData.name}/>
        <InputField label={$_('form.common.organisation')} require="{true}" type="text" needIcon={true}
                    iconTag="fas fa-user"
                    placeholder={$_('form.common.organisation')} bind:value={formData.organisation}/>
        <InputField label={$_('form.common.email')} require={true} type="email" needIcon={true}
                    iconTag="fas fa-envelope" placeholder={$_('form.common.email')} bind:value={formData.email}/>
        <InputField label={$_('form.common.mobile')} require={false} type="text" needIcon={true} iconTag="fas fa-mobile"
                    placeholder={$_('form.common.mobile')} bind:value={formData.mobile}/>
        <label class="label has-text-left">{$_('form.common.services_offer_text')}</label>
        {#if $locale === 'en'}
            {#each foodTicket_en as ticket}
                <label class="is-pulled-left"><input type="checkbox"
                                                     bind:group={formData.foodTicket}
                                                     value={ticket.id}/> {ticket.name}</label>
                <br>
            {/each}
        {/if}
        {#if $locale === 'hu'}
            {#each foodTicket_hu as ticket}
                <label class="is-pulled-left"><input type="checkbox"
                                                     bind:group={formData.foodTicket}
                                                     value={ticket.id}/> {ticket.name}</label>
                <br>
            {/each}
        {/if}
    </div>

</Form>
<ModalCard bind:active={active} title={$_('modal.title')}>
    <div class="modal-card-body">
        <p></p>
        <p>{@html $_('modal.body')}</p>
        <p>{@html $_('modal.body1')}</p>
        <p></p>
    </div>
</ModalCard>