export default class ScannerFormData {
    private _programType: Number = 0;
    private _programName: Number = 0;
    private _qrCode: String = "";


    get programType(): Number {
        return this._programType;
    }

    set programType(value: Number) {
        this._programType = value;
    }

    get programName(): Number {
        return this._programName;
    }

    set programName(value: Number) {
        this._programName = value;
    }

    get qrCode(): String {
        return this._qrCode;
    }

    set qrCode(value: String) {
        this._qrCode = value;
    }
}