<script>
    import {_, locale} from 'svelte-i18n';
    import StudentFormData from "src/application/formData/StudentFormData.ts";
    import HandleFetch from "src/application/services/handle-fetch.ts"
    import Form from '../page_element/Form.svelte';
    import ModalCard from "src/presentational/components/element/ModalCard.svelte";
    import InputField from "src/presentational/components/element/InputField.svelte";
    import SelectField from "src/presentational/components/element/SelectField.svelte";
    import {majors} from 'src/application/statData/GetMajors.js';
    import {semesters} from 'src/application/statData/GetSemesters.js';

    let formData = new StudentFormData();
    let active = false;

    function handleMessage(event) {
        formData.programs = (event.detail.data);
        formData.lang = $locale;

        fetch('/post/studentPost', {
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
<Form forWhom={$_('menu.registration.student')} on:message={handleMessage}>
    <div slot="personal_info">
        <h1 class="title is-5">{$_('form.common.dividers.personal_info')}</h1>
        <InputField label={$_('form.common.name')} require="{true}" type="text" needIcon={true} iconTag="fas fa-user"
                    placeholder={$_('form.common.name')} bind:value={formData.name}/>
        <InputField label={$_('form.common.neptun')} require={true} type="text" needIcon={true} iconTag="fas fa-stream"
                    placeholder={$_('form.common.neptun')} bind:value={formData.neptun}/>
        <InputField label={$_('form.common.email')} require={true} type="email" needIcon={true}
                    iconTag="fas fa-envelope" placeholder={$_('form.common.email')} bind:value={formData.email}/>
        <InputField label={$_('form.common.mobile')} require={false} type="text" needIcon={true} iconTag="fas fa-mobile"
                    placeholder={$_('form.common.mobile')} bind:value={formData.mobile}/>
        <SelectField require={true} label={$_('form.student.major')} needIcon={true} iconTag="fas fa-book-open"
                     list={majors} bind:value={formData.major}/>
        <SelectField require={true} label={$_('form.student.semester')} needIcon={true} iconTag="fas fa-user-clock"
                     list={semesters} bind:value={formData.semester}/>
    </div>
</Form>

<ModalCard bind:active={active} title={$_('modal.title')}>
    <div class="modal-card-body">
        <p></p>
        <p>{$_('modal.body')}</p>
        <p></p>
    </div>
</ModalCard>