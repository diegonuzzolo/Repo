// ereditarieta tramite funzione costruttrice

const Persona = function(nome, annoNascita){
    this.nome = nome
    this.annoNascita = annoNascita
}

Persona.prototype.calcolaEta = function(){
    console.log(2024-this.annoNascita)
}


const Studente = function(nome, annoNascita, classe) {
    // this.nome = nome
    // this.annoNascita = annoNascita
    Persona.call(this, nome, annoNascita)
    this.classe = classe
}

Studente.prototype = Object.create(Persona.prototype)

Studente.prototype.introduzione = function(){
    console.log("Ciao, mi chiamo",this.nome,"e frequento la",this.classe)
    
}

const s1 = new Studente("Giovanni", 1977, "5E")
// console.log(s1)

s1.introduzione()
