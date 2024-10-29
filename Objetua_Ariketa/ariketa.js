function Ikaslea(izena, adina, espezialitatea, ikaskidea) {
    this._izena = izena;
    this._adina = adina;
    this._espezialitatea = espezialitatea;
    this._ikaskidea = ikaskidea;
}

Ikaslea.prototype.getIzena = function () {
    return this._izena;
};

Ikaslea.prototype.getAdina = function () {
    return this._adina;
};

Ikaslea.prototype.getEspezialitatea = function () {
    switch (this._espezialitatea) {
        case 1:
            return "Sistemak";
        case 2:
            return "Web";
        case 3:
            return "Anitzeko plataforma";
        default:
            return "Ezezaguna";
    }
};

Ikaslea.prototype.getIkaskideIzena = function () {
    return this._ikaskidea.getIzena();
};

Ikaslea.prototype.erakutsi = function () {
    return `Izena: ${this.getIzena()}, Adina: ${this.getAdina()}, Espezialitatea: ${this.getEspezialitatea()}, Ikaskidea: ${this.getIkaskideIzena()}`;
};

const ikaslea1 = new Ikaslea("Matteo", 25, 2, new Ikaslea("Leire", 26, 1));

document.getElementById("erantzuna").innerText = ikaslea1.erakutsi();
