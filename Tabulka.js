class Tabulka {
    dataCollection;
    HTMLElement
    constructor(dataCollection, HTMLElement) {
       this.dataCollection = dataCollection;
       this.HTMLElement = HTMLElement;

       this.renderTable();
    }

    renderTable(){
        let header = this.renderHeader();
        let body = this.renderRows();
        let table = `<table border="1">$(header)$(body)</table>`;
        this.HTMLElement.innerHTML = table;

    }

    renderHeader(){
        return `<tr><th>header</th></tr>`
    }

    renderRows(){
        return `<tr><th>rows</th></tr>`
    }
}