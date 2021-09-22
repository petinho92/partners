<script lang="ts">
    import {_, locale} from 'svelte-i18n';
    import Form from '../page_element/Form.svelte';
    import InputField from "src/presentational/components/element/InputField.svelte";
    import SelectField from "src/presentational/components/element/SelectField.svelte";
    import InstructorFormData from "src/application/formData/InstructorFormData.ts";
    import {foodTicket} from "src/application/statData/GetFoodList.js";
    import CheckboxField from "src/presentational/components/element/CheckboxField.svelte";
    import HandleFetch from "src/application/services/handle-fetch";
    import ModalCard from "src/presentational/components/element/ModalCard.svelte";

    let formData = new InstructorFormData();
    let lang;
    let active = false;

    function handleMessage(event) {
        formData.programs = (event.detail.data);
        lang = $locale;
        formData.lang = lang;
        console.log(formData);

        fetch('/post/instructorPost', {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(formData)
        }).then(HandleFetch)
            .then(res =>{
                if(res.statusCode === 200)
                {
                    active=true;
                }
            })
    }

</script>

<section></section>

<Form forWhom={$_('menu.registration.instructor')} on:message={handleMessage}>

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

        <label class="label has-text-left">{$_('form.instuctor.label.lectorinst')}</label>
        <div class="control">
            <label><input type="checkbox" bind:checked={formData.is_instructor}/> {$_('form.instructor.label.isinstructor')}</label>
        </div>
        <div class="control">
            <label><input type="checkbox" bind:checked={formData.is_lecturer}/> {$_('form.instructor.label.islecturer')}</label>
        </div>
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