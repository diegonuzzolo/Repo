class Persona{
    constructor(name, birthYear){
        this._nome = name
        this._annoNascita = birthYear
    }

    get nome(){
        return this._nome
    }

    set nome(name){
        this._nome = name
    }
    // una proprieta statica è una proprieta che appartiene solo alla classe
    static saluta(){
        console.log("Ciao mondo, sono la persona")
    }
}

const p1 = new Persona("Luca", 1994)

// esempio funzionamento attributo get
console.log(p1.nome)
// esempio funzionamento attributo set
console.log(p1.nome="marco")
// esempio funzionamento metodo statico
Persona.saluta()
