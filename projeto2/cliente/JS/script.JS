
//manter o manu ativo
var menuItem = document.querySelectorAll('.item-menu')

function selectLink(){
    menuItem.forEach((item)=>
         item.classList.remove('ativo')
    )
    this.classList.add('ativo')
}

menuItem.forEach((item)=>
    item.addEventListener('click', selectLink)
)

//expandir o menu

var btnExp = document.querySelector('#btn-exp')
var menuSide = document.querySelector('.menu-lateral')

btnExp.addEventListener('click', function(){
    menuSide.classList.toggle('expandir')
})

//////////////////////


//expandir o menu

var btnExp2 = document.querySelector('#btn-exp2')
var menuSide2 = document.querySelector('.menu-lateral2')

btnExp2.addEventListener('click', function(){
    menuSide2.classList.toggle('expandir2')
})

var btnExp2 = document.querySelector('#btn-exp3')
var menuSide2 = document.querySelector('.menu-lateral2')

btnExp2.addEventListener('click', function(){
    menuSide2.classList.toggle('expandir2')
})
//////////////////////
var radio = document.querySelector('.manual-btn')

var cont = 1

document.getElementById('radio1').checked = true

setInterval(() => {
    proximaImg()
}, 4000)

function proximaImg(){
    cont++

    if(cont > 3){
        cont = 1
    }

    document.getElementById('radio'+cont).checked = true
}