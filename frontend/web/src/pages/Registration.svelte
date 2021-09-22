<script lang="ts">
    import StudentForm from "src/presentational/components/form/StudentForm.svelte";
    import InstructorForm from "src/presentational/components/form/InstructorForm.svelte";
    import GuestForm from "src/presentational/components/form/GuestForm.svelte";
    import ChamberForm from "src/presentational/components/form/ChamberForm.svelte";
    import {location} from "svelte-spa-router";
    import {writable} from "svelte/store";

    let done = writable(false);
</script>

{#if !$done}
    {#if $location === '/student'}
        <StudentForm/>
    {/if}
    {#if $location === '/guest'}
        <GuestForm/>
    {/if}
    {#if $location === '/instructor'}
        <InstructorForm/>
    {/if}
    {#if $location === '/chamber'}
        <ChamberForm/>
    {/if}
{/if}