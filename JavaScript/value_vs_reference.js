
//Evaluate these:
//#1
//[2] === [2] // false perche è una struttura dati quindi reference tramite variabile o costante
//{} === {}    err 

//#2 what is the value of property a for each object.
const object1 = { a: 5 };
const object2 = object1;
const object3 = object2;
const object4 = { a: 5 };
object1.a = 4;


//#3 create two classes: an Animal class and a Mamal class. 
// create a cow that accepts a name, type and color and has a sound method that moo's her name, type and color. 

class Mammifero {

    constructor(in_vita) {
        this.in_vita = in_vita
        this.verso = ""
    }

    sound() {
        if (this.in_vita === false) {
            this.verso = "..."

        }
        console.log(this.verso)
    }

}



class Mucca extends Mammifero {
    constructor(in_vita, nome, colore, tipo, verso) {
        super(in_vita)
        this.nome = nome
        this.colore = colore
        this.tipo = tipo
        super.verso = verso
    }
    muore() {
        console.log("[Programma] dice: il mammifero di genere " + this.tipo + " di nome " + this.nome + " è morto")
        this.in_vita = false
        super.sound()
    }
    sound() {

        console.log("(" + this.colore + ") " + this.nome + ": " + this.verso + " sono un " + this.tipo)
    }
}

//                                     colore
let mucca = new Mucca(true, "Rosita", "Pezzata", "Angus", "Moooouuu")

mucca.sound()
console.log("\n")
setTimeout(() => { console.log("[Programma] Dice: " + mucca.nome + " ha mangiato un fungo velenoso\n") }, 5000)
setTimeout(() => { mucca.muore() }, 10000)



