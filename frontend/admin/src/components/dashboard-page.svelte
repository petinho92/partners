<script lang="ts">
    import Page from "gold/lib/page";
    import Stat from "src/components/Stat.svelte";

    export let page: Page;
    let title = page.$title;
    let data = [];
    let szendvicskave;
    let kave;
    let vacsi;
    fetch('/stat/getCount')
        .then(res => res.json())
        .then(result => {
            if (result !== false && result !== null) {
                data = result;
            }
        })

    function handleMessage(event) {
        szendvicskave = (event.detail.data1);
        kave = (event.detail.data2);
        vacsi = (event.detail.data3);
    }
</script>

<div class="box">
    <div class="container has-background-info">
        <div id="notification mt-4 ml-4">
            <table class="table">
                <tr>
                    <td>Hallgatók: <span class="count">{data.student}</span></td>
                    <td>Oktatók: <span class="count">{data.instructor}</span></td>
                    <td>Kamara: <span class="count">{data.chamber}</span></td>
                    <td>Partner: <span class="count">{data.guest}</span></td>
                </tr>
                <tr>
                    <td>Szendvicsebéd kávéval: <span class="count">{szendvicskave}</span></td>
                </tr>
                <tr>
                    <td>Szekcióblokkok közötti kávészünet: <span class="count">{kave}</span></td>
                </tr>
                <tr>
                    <td>Részt veszek a vacsorán: <span class="count">{vacsi}</span></td>
                </tr>
            </table>
        </div>
    </div>
</div>

<Stat on:message={handleMessage}/>


<style>
    .count {
        width: 1.5rem;
        height: 1.5rem;
        padding: 0.25rem;
        font-size: 0.75rem;
        text-align: center;
        background-color: #1a1ad3;
        color: white;
        margin-left: 0.5rem;
        border-radius: 50%;
    }
</style>
