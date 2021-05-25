let selectedOption = document.getElementById("selectCharacter")
let selectSkill = document.getElementById('selectSkill')
let video = document.getElementById('Video')

if ( sessionStorage.getItem('selectedCharacter') === null){
    sessionStorage.setItem('selectedCharacter', selectedOption = 1)
} else {
    selectedOption.options[sessionStorage.getItem('selectedCharacter')].defaultSelected = true
}

if ( sessionStorage.getItem('selectSkill') === null){
    sessionStorage.setItem('selectSkill', 0)
} else {
    selectSkill.options[sessionStorage.getItem('selectSkill')].defaultSelected = true
}

function setUrl(){
    selectedOption = document.getElementById("selectCharacter").options.selectedIndex
    history.replaceState({},'', selectedOption + 1)
    sessionStorage.setItem('selectedCharacter', selectedOption)
    sessionStorage.setItem('selectSkill', 0)
    location.reload()
}

function setSkill()
{
    selectSkill = document.getElementById("selectSkill").options.selectedIndex
    sessionStorage.setItem('selectSkill', selectSkill)
    location.reload()
}

function selectedSkill(){

}

console.log(video)