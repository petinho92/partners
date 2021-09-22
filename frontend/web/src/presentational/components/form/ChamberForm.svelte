<script lang="ts">
    import {_, locale} from 'svelte-i18n';
    import Form from '../page_element/Form.svelte';
    import InputField from "src/presentational/components/element/InputField.svelte";
    import ChamberFormData from "src/application/formData/ChamberFormData.ts";
    import SelectField from "src/presentational/components/element/SelectField.svelte";
    import HandleFetch from "src/application/services/handle-fetch.ts";
    import {chambers} from 'src/application/statData/GetChambers.js';
    import {foodTicket} from "src/application/statData/GetFoodList.js";
    import ModalCard from "src/presentational/components/element/ModalCard.svelte";

    let formData = new ChamberFormData();
    let lang;
    let active = false;

    function handleMessage(event) {
        formData.programs = (event.detail.data);
        lang = $locale;
        formData.lang = lang;

        fetch('/post/chamberPost', {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(formData)
        }).then(HandleFetch)
    }
</script>

<section></section>

<Form forWhom={$_('menu.registration.chamber')} on:message={handleMessage}>
    <div slot="personal_info">
        <h1 class="title is-5">{$_('form.common.dividers.personal_info')}</h1>
        <InputField label={$_('form.common.name')} require="{true}" type="text" needIcon={true} iconTag="fas fa-user"
                    placeholder={$_('form.common.name')} bind:value={formData.name}/>
        <SelectField require={true} label={$_('form.chamber.chamber')} needIcon={true} iconTag="fas fa-book-open"
                     list={chambers} bind:value={formData.chamber}/>
        <InputField label={$_('form.chamber.chambership_number')} require="{true}" type="text" needIcon={true} iconTag="fas fa-user"
                    placeholder={$_('form.chamber.chambership_number')} bind:value={formData.chambership_number}/>
        <InputField label={$_('form.common.email')} require={true} type="email" needIcon={true}
                    iconTag="fas fa-envelope" placeholder={$_('form.common.email')} bind:value={formData.email}/>
        <InputField label={$_('form.chamber.address')} require="{true}" type="text" needIcon={true} iconTag="fas fa-user"
                    placeholder={$_('form.chamber.address')} bind:value={formData.address}/>
        <InputField label={$_('form.common.mobile')} require={false} type="text" needIcon={true} iconTag="fas fa-mobile"
                    placeholder={$_('form.common.mobile')} bind:value={formData.mobile}/>
        <label class="label has-text-left">{$_('form.common.services_offer_text')}</label>
        {#each foodTicket as ticket}
            <label class="is-pulled-left"><input type="checkbox"
                                                 bind:group={formData.foodTicket}
                                                 value={ticket.id}/> {ticket.name}</label>
            <br>
        {/each}
    </div>

</Form>
<ModalCard bind:active={active} title={$_('modal.title')}>
    <div class="modal-card-body">
        <p></p>
        <p>{$_('modal.body')}</p>
        <p></p>
    </div>
</ModalCard>