import MainPage from "src/pages/MainPage.svelte";
import Registration from "src/pages/Registration.svelte";
import GetQRCode from "src/pages/GetQRCode.svelte";
import Header from "src/presentational/components/form/Header.svelte";

const routes = {
    '/': MainPage,
    '/student': Registration,
    '/instructor': Registration,
    '/guest': Registration,
    '/chamber': Registration,
    '/qr/:code' : GetQRCode,
}
export default routes;