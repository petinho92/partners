import FaIcon from "gold/lib/fa-icon";
import Page from "gold/lib/page";
import type {SvelteComponent} from "svelte";
import ScannerComponent from '../../components/Scanner.svelte';
import {writable} from "svelte/store";
import type {Writable} from "svelte/store";

export default class ScannerPage extends Page {
    public closeable: boolean = false;

    get $title(): Writable<string> {
        return writable('');
    }

    get $icon(): Writable<FaIcon> {
        return writable(FaIcon.s('dice-d6'));
    }

    get component(): typeof SvelteComponent {
        return ScannerComponent;
    }
}