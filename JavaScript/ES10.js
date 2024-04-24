let jurassicParck = [["sorpione", "mosca"], "batterio", "tartaruga", [[[["dinosauro"]]]]]
// console.log(jurassicParck.flat(4))

let entries = ["marco", "simona", , , , , , "claudia"]

// console.log(entries.flat())

let jurassicParckChaos = jurassicParck.flatMap(creature => creature + " 🦕")


// console.log(jurassicParckChaos)


const userEmail = "     ciaosonoluca@gmail.com"
const userEmail1 = "johnny@gmail.com      "
// console.log(userEmail.trimStart())
// console.log(userEmail1.trimEnd())


userProfiles = [["Mario", 51], ["Kevin", 13], ["Anna", 34]]

let userProfilesObject = Object.fromEntries(userProfiles) // converte un elenco di coppie chiave-valore in un nuovo oggetto le cui proprietà sono definite da tali coppie

// console.log(Object.entries(userProfilesObject))
// Object.entries(userProfilesObject) questo metodo invece esegue l'operazione inversa

