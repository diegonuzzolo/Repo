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
    // una proprieta statica è una proprieta che appartiene solo alla facolta
    static saluta(){
        console.log("Ciao mondo, sono la persona")
    }
}

class Studente extends Persona{
    constructor(nome, birthYear, facolta){
        // il metodo super() va sempre chiamato per primo per poter accedere alla parolachiave disc
        super(nome, birthYear)
        this.facolta = facolta

    }

    introduci(){
        console.log("Ciao, sono", this.nome,"sto per comprare una penna per scrivere gli appunti di", this.facolta)
    }
     
}



const martha = new Studente("Martha", 2004, "chimica")

martha.introduci()
