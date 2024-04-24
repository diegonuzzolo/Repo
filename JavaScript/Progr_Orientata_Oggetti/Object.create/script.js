const PersonProto = {
    calcolaEta(){
        console.log(2024-this.annoNascita)
    },
    init(nome, annoNascita){
        this.nome = nome
        this.annoNascita = annoNascita
    }
}

// questo è un metodo per passare direttamente il prototype all'oggetto definito
const p1 = Object.create(PersonProto)
// console.log(p1)

p1.nome = "Giustino"

p1.annoNascita = 2002

// p1.calcolaEta()

const p2 = Object.create(PersonProto)

p2.init("Sarah", 2005)
p2.calcolaEta()
