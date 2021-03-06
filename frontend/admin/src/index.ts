// @ts-ignore
import "./options";
import FormPage from "gold-entity/lib/form/form-page";
import AuthApi from "gold/lib/auth-api";
import App from "gold/components/app.svelte";
import FaIcon from "gold/lib/fa-icon";
import ListManager from "gold/lib/list-manager";
import MenuItem from "gold/lib/menu-item";
import PageManager from "gold/lib/page-manager";
import UserForm from "./pages/user-form";
import UserList from "./pages/user-list";
import DashboardPage from "./pages/dashboard-page";
import ScannerPage from "./application/pages/scanner-page";


let pageManager = new PageManager();
let listManager = new ListManager();
let authApi = new AuthApi();

pageManager.add(new DashboardPage());
pageManager.add(new ScannerPage());
// listManager.add(new UserList());

let menu = [
	new MenuItem("Statisztika", FaIcon.s("dice-d6"), () => {pageManager.add(new DashboardPage())}),
	new MenuItem("Scanner", FaIcon.s("dice-d6"), ()=> {pageManager.add(new ScannerPage())}),
	new MenuItem("User list", FaIcon.s("users"), () => {listManager.add(new UserList())}, "administrator"),
	// new MenuItem("Regisztráltak", FaIcon.s("users"), ()=>{listManager.add(new )}
	new MenuItem("User", FaIcon.s("users"), [
		new MenuItem("New user", FaIcon.s("user-plus"), () => {pageManager.add(new FormPage(new UserForm()))}),
		new MenuItem("User 1", FaIcon.s("user"), () => {pageManager.add(new FormPage(new UserForm(1)))}),
		new MenuItem("User non exists", FaIcon.s("user"), () => {pageManager.add(new FormPage(new UserForm(100)))})
	],"administrator"),
]

window.addEventListener('load', () => new App({target: document.body, props: {pageManager, listManager, menu, authApi}}));
