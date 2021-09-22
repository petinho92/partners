class InstructorFormData {

    private _name: String = "";
    private _organisation: String = "";
    private _email: String = "";
    private _mobile: String = "";
    private _is_lecturer: Boolean = false;
    private _is_instructor: Boolean = false;
    private _programs: Array<number> = [];
    private _foodTicket: Array<number> = [];
    private _lang : String = "";


    get name(): String {
        return this._name;
    }

    set name(value: String) {
        this._name = value;
    }

    get organisation(): String {
        return this._organisation;
    }

    set organisation(value: String) {
        this._organisation = value;
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

    get is_lecturer(): Boolean {
        return this._is_lecturer;
    }

    set is_lecturer(value: Boolean) {
        this._is_lecturer = value;
    }

    get is_instructor(): Boolean {
        return this._is_instructor;
    }

    set is_instructor(value: Boolean) {
        this._is_instructor = value;
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
export default InstructorFormData;