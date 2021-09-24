<script>
    import {_, locale} from 'svelte-i18n';
    import StudentFormData from "src/application/formData/StudentFormData.ts";
    import HandleFetch from "src/application/services/handle-fetch.ts"
    import Form from '../page_element/Form.svelte';
    import ModalCard from "src/presentational/components/element/ModalCard.svelte";
    import InputField from "src/presentational/components/element/InputField.svelte";
    import SelectField from "src/presentational/components/element/SelectField.svelte";
    import {majors_hu, majors_en} from 'src/application/statData/GetMajors.js';
    import {semesters_en, semesters_hu} from 'src/application/statData/GetSemesters.js';


    let privacyPath;
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
            .then(res => {
                if (res.statusCode === 200) {
                    active = true;
                }
            })
    }
</script>
<section></section>
<Form forWhom={$_('menu.registration.student')} privacyPath={$_('form.common.label.privacy_policy.student')} on:message={handleMessage}>

    <div slot="description" class="has-text-left has-icons-right">
        <div class="card-content is-size-7-mobile">
            <h2 class="subtitle">{$_('student_desc_title')}</h2>
            {@html $_('student_desc_ul_li')}
        </div>

    </div>

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
        {#if $locale==='en'}
            <SelectField require={true} label={$_('form.student.major')} needIcon={true} iconTag="fas fa-book-open"
                         list={majors_en} bind:value={formData.major}/>
            <SelectField require={true} label={$_('form.student.semester')} needIcon={true} iconTag="fas fa-user-clock"
                         list={semesters_en} bind:value={formData.semester}/>
        {/if}
        {#if $locale==='hu'}
            <SelectField require={true} label={$_('form.student.major')} needIcon={true} iconTag="fas fa-book-open"
                         list={majors_hu} bind:value={formData.major}/>
            <SelectField require={true} label={$_('form.student.semester')} needIcon={true} iconTag="fas fa-user-clock"
                         list={semesters_hu} bind:value={formData.semester}/>
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

<style>

</style>