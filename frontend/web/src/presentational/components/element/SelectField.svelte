<script lang="ts">
    import {writable} from "svelte/store";
    import {_} from 'svelte-i18n';

    export let list;
    export let label;
    export let require = writable(false);
    export let value;
    export let needIcon = writable(false);
    export let iconTag;


</script>

<div class="field">
    <label class="label has-text-left">{label}
        {#if require}<b class="has-text-danger">*</b>{/if}
    </label>
    <div class="control has-icons-left">
        <div class="select is-fullwidth">
            <select bind:value={value}>
                <option value="" disabled selected hidden>{$_('form.common.selectFirstElement')}</option>
                {#each list as item}
                    <option value={item.id}>{item.name}</option>
                {/each}
            </select>
            {#if needIcon}
                <span class="icon is-small is-left">
                            <i class={iconTag}></i>
                </span>
            {/if}
        </div>
    </div>
</div>

