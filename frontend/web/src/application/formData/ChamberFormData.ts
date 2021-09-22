class ChamberFormData {

    private _name : String = "";
    private _chamber: String = "";
    private _chambership_number: String = "";
    private _address: String = "";
    private _email : String = "";
    private _mobile : String = "";
    private _programs : Array<number> = [];
    private _foodTicket: Array<number> = [];
    private _lang : String = "";


    get name(): String {
        return this._name;
    }

    set name(value: String) {
        this._name = value;
    }

    get chamber(): String {
        return this._chamber;
    }

    set chamber(value: String) {
        this._chamber = value;
    }

    get chambership_number(): String {
        return this._chambership_number;
    }

    set chambership_number(value: String) {
        this._chambership_number = value;
    }

    get address(): String {
        return this._address;
    }

    set address(value: String) {
        this._address = value;
    }

    get email(): String {
        return this._email;
    }

    set email(value: String) {
        this._email = value;
    }

    get mobile(): String {
        return this._mobile;
    }

    set mobile(value: String) {
        this._mobile = value;
    }

    get programs(): Array<number> {
        return this._programs;
    }

    set programs(value: Array<number>) {
        this._programs = value;
    }

    get foodTicket(): Array<number> {
        return this._foodTicket;
    }

    set foodTicket(value: Array<number>) {
        this._foodTicket = value;
    }

    get lang(): String {
        return this._lang;
    }

    set lang(value: String) {
        this._lang = value;
    }
}
export default ChamberFormData;