//execution
document.addEventListener('DOMContentLoaded',() => {
    fetchData(151)
    }
)
//constants & variables
const sectionWork= document.querySelector('section#content')

const templateInit = document.querySelector('template#menuInit').content
var cloneMenuInit = templateInit.cloneNode(true)
const templateNav = document.querySelector('template#menuNav').content
var cloneMenuNav = templateNav.cloneNode(true)
const cardExample= document.querySelector('#cardE').content
var cloneCard= cardExample.cloneNode(true)
const templateStats = document.querySelector('template#menuStats').content
var cloneMenuStats = templateStats.cloneNode(true)
const fragment = document.createDocumentFragment()

//functions
const fetchData = async (id) => {
    try {
        const res = await fetch(`https://pokeapi.co/api/v2/pokemon/${id}`)
        const data= await res.json()
        console.log(data)
    } catch (error) {
        console.log(Error)
    }
}

const printMenu = () => {
    fragment.appendChild(cloneMenuInit)
    sectionWork.appendChild(fragment)
}
const printNav = () => {
    
    fragment.appendChild(cloneMenuNav)  
    fragment.querySelector('div.navMenu').appendChild(cloneCard)
    for (let i = 0; i < 100; i++) {
        let cloneCard= cardExample.cloneNode(true)
        fragment.querySelector('div.navMenu').appendChild(cloneCard)
        
    }
    
    sectionWork.appendChild(fragment) 
    
    
} 


//try