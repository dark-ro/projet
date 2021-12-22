Class carousel {

    constructor (element, Options = {}) {
        this.element = element
        this.options = Object.assign({},{
            slidesToscrool: 1,
            slidesVisible: 1
        }, options)
        let root = this.createDivWithClass('carousel')
        let container = this.createDivWithClass('carousel--container')
        root.appendChild(container)
        this.element.appendChild(root)
    }
    createDivWithClass(className){
        let div= document.createElement('div')
        div.setAttribute('class','classeName')
        return div
    }
}
document.addEventListener('DOMcontentLoaded', function() {
    new carousel(document.querySelector('#carousel1'),{
        slidesVisible : 3
    })
}) 
